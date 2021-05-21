@php
global $mot_tournaments_types,$mot_filtter_tour;

wp_register_script('lives_script', get_stylesheet_directory_uri() . '/assets/javascripts/lives.js', array('jquery'), CACHE_VERSION_CDN); // Custom scripts
wp_enqueue_script('lives_script'); // Enqueue it!

$date_formt = 'Y-m-d';
$selected_date = !empty($_GET['date']) ? $_GET['date'] : date($date_formt);

$today = date('Y-m-d');
$yesterday = date('Y-m-d', strtotime( '-1 days' ) );
$tomorrow = date('Y-m-d', strtotime( '+1 days' ) );

$authorized_days = [$today, $yesterday, $tomorrow];

if( !in_array($selected_date, $authorized_days) ){
	//Code here
	wp_redirect( get_the_permalink() );
	exit;
}
$today_url = get_the_permalink().'?date='.$today;
$yesterday_url = get_the_permalink().'?date='.$yesterday;
$tomorrow_url = get_the_permalink().'?date='.$tomorrow;


$tours_calendar = mot_get_tour_calendars_by_year(date('Y'));
$tours_calendar_id = [
	//'ATP Tour',
	'bihlpcatrk45hxoye65ejz27d',
	//'WTA Tour',
	'bihmimk46tnexl279lgqjku7d',
	// 'ATP Challenger Tour'
	'bihn6edss6dh6xzxecausfsa1',
];
@endphp

<div class="list-lives">
    <select name="" id="lives_flitter">
	    <option value="">{{ __('All matches','mot') }}</option>
        @foreach($mot_filtter_tour as $key => $elm)
		    <option {{ $tour_type == $key ? 'selected':'' }} data-type="single" value="{{ esc_js(json_encode($elm)) }}">{{ $key.' - '. __('singles','mot') }}</option>
		    <option data-type="double" value="{{ esc_js(json_encode($elm)) }}">{{ $key.' - '. __('doubles','mot') }}</option>
	    @endforeach
    </select>
<div class="table-container live-table">
<h3 class="list-lives-title">
	<span>{{ __('Lives and results', 'mot') }}</span>
</h3>

@if (class_exists( 'Live_Model' ))
	@php
		$lives_type_1 = array();
		$lives_type_2 = array();
	@endphp
		@foreach ($posts as $post)
			@php
				$data['live_id'] = get_post_meta($post->ID, 'has_live_id',true);
				$post_language_information = wpml_get_language_information($post->ID);
				$data['lang'] = $post_language_information['language_code'];
				$live = Live_Model::find($data);
				$lives[] = $live;
			@endphp
			@if($live['live_type'] == 1)
				@php
					$lives_type_1[]= $live;
					$link_article_1 = get_permalink($post);
				@endphp
			@elseif ($live['live_type'] == 2)
				@php
					$lives_type_2[]= $live;
					$link_article_2 = get_permalink($post);
				@endphp
			@endif
		@endforeach
	@endphp
@endif
	<div class="tour-container">
		@php
	        $tour_calendar_list = mot_get_tour_calendar();
	        $ordered_calenders = mot_order_array_by_array($tour_calendar_list,$tours_calendar_id);
	        $match_paleyd = 0;
        @endphp
            @foreach ($ordered_calenders as $tour_calendar)
				@php
					$tournaments = mot_get_tours();
					$tour_calendar->tourCalendar[0]->id;
				@endphp
			@endforeach

	        @if(in_array($tour_calendar->id,array_keys($mot_tournaments_types)))
				@php
			// order tournaments by type
					$order = [
						'field' => 'type',
						'order' => $mot_tournaments_types[$tour_calendar->id]['type']
					];
			// then by matchType
					$order_2 = [
						'field' => 'matchType',
						'order' => ['single','double','mix']
					];
			
					$tournaments = MS_Utils::order_array_by_arrays($tournaments, $order, $order_2);
				@endphp
	        @endif

	        @foreach($tournaments as $tour)
		        @if($tour->gender == 'mixed')
					@php
						continue;
					@endphp
		        @endif

		        @if(!empty(mot_get_matchs($tour->id)))
					@php
			        	$mot_get_matchs = mot_get_matchs($tour->id);
					@endphp
		        @else
					@php
			        	$mot_get_matchs = array();
					@endphp
		        @endif

				@php
					$matches = array_filter($mot_get_matchs,function($match_item) use ($selected_date){
						$officialStartDate = str_replace(['T','Z'], [' ',''], $match_item->matchInfo->officialStartDate);
						$date_time = mot_get_date_format($officialStartDate);
						$match_date['date'] = gmdate("Y-m-d", strtotime($date_time['date'].' '.$date_time['time']) + 3600*(2+date("I")));
						if($match_date['date'] == $selected_date){
							return $match_item;
						}
					});

			    @endphp
                @if($match_date['date'] == $selected_date)
					@php
						return $match_item;
					@endphp
			    @endif
		    @endforeach

	 	    @if(!empty($matches) && isset($matches))
					@php
						$order_matches = [
							'field' => 'liveData->matchDetails->matchStatus',
							'order' => ['Playing','Played','Fixture']
						];
						
						$matches = MS_Utils::order_array_by_arrays($matches, $order_matches);
						$round = get_round_today($tour->id);
						$round = $round->title;
					@endphp
			    
                @if(!empty($tour_type))
					@php
						$style = in_array($tour_calendar->id,$mot_filtter_tour[$tour_type]) && $tour->matchType == 'single' ?'':'display:none';
					@endphp
				@endif
	        
				@php
					$competition_id = $tour->id;
					$posts_competition = get_posts(
						array(
							'post_type'=>'any',
							'meta_key'=>'competition',
							'meta_value'=>$competition_id ,
							'status'=>'publish'
						)
					);
				@endphp
            @endif
		@endphp
        <div
			style="{{ $style }}"
			class="tournament-container {{ sanitize_title( $tour->type).' '.$tour->gender.'-'.$tour->matchType }}"
			data-calendar="{{ $tour_calendar->tourCalendar[0]->id }}"
			data-tour="{{ $tour_calendar->id }}"
			data-tournament-type="{{ $tour->matchType }}">
		    <h4 class="tour-title"
				data-calendar="{{ $tour_calendar->tourCalendar[0]->id }}"
				data-tour="{{ $tour->id }}">
				{{ $tour_calendar->tourName." - ".$tour->name }}
			</h4>
		    <div>
                @if(!empty($posts_competition)) {
				    @foreach ($posts_competition as $post)
                        @foreach ($lives_type_1 as $live)
                        <a href="{{ $link_article_1 }}">
                            <span>{{ $live['live_title'].' - '.$live['live_event_time'] }}</span>
                        </a><br>
				    	@endforeach
					@endforeach
				@endif
			</div>
    		<div class="tour-subtitle">{{ $round." - ".get_tournament_type($tour) }}</div>
				<table class="table tournament-lives">
					<tbody>
						@php
							$cpt_matches = 0;
							$filtter_qualif = [
								'Qualifying 1st Round',
								'Qualifying 2nd Round',
								'Qualifying Final'
							];
						@endphp
							@foreach ($matches as $match)
								@if(in_array($match->round->title, $filtter_qualif))
									continue;
								@endif
							@endforeach
							@php
								$match_id = $match->matchInfo->id;
								$posts_matches = get_posts(
									array('post_type'=>'live',
									'meta_key'=>'matches',
									'meta_value'=>$match_id ,
									'status'=>'publish')
								);
								$date_time = mot_get_date_format($match->matchInfo->officialStartDate);
								$date_time['date'] = gmdate("Y-m-d", strtotime($date_time['date'].' '.$date_time['time']) + 3600*(2+date("I")));
								$date_time['time'] = gmdate("H:i", strtotime($date_time['time']) + 3600*(2+date("I")));
								$cpt_matches++;
								$match_paleyd += $cpt_matches;
							@endphp
						@endphp
						<tr class="live {{ $match->liveData->matchDetails->matchStatus == 'Played' ? "live-end" : ($match->liveData->matchDetails->matchStatus == 'Playing' ? "live-in-progress" : null) }} {{ ' '.$match->liveData->matchDetails->matchStatus }}" >
							<td class="time" data-time="{{ rtrim($match->matchInfo->officialStartDate,'Z') }}"></td>
							<td class="players ">
								<div class="player">
									<div class="name {{ strtolower($match->matchInfo->tournament->matchType) == 'double' ? 'double' : 'single' }} {{ ($match->liveData->matchDetails->winner == 'a') ? 'winner' : '' }}">
										@php
											$cpt = 0;
										@endphp
										@foreach($match->matchInfo->contestants->contestant as $index => $player)
											@if($player->position == 'a')
												<p>{{ get_player_short_name($player->name).' ('.get_country_iso_code_from_name($player->country->name).')' }}</p>
											@endif
										@endforeach
									</div>
								
									<div class="notes">
										<div class="note">
											@if(!empty($match->liveData->matchDetails->scores))
												@foreach($match->liveData->matchDetails->scores as $type=>$sets)
													@if($type != "total")
														<span>{{ $sets->a }}</span>
														@if($sets->tiebreakA)
															<span>{{ '('. $sets->tiebreakA . ')' }}</span>
														@endif
													@endif
												@endforeach
											@endif
										</div>
									</div>
								</div>
								<div class="player">
									<div class="name {{ strtolower($match->matchInfo->tournament->matchType) == 'double' ? 'double' : 'single' }} {{ ($match->liveData->matchDetails->winner == 'b') ? 'winner' : '' }}">
										@php
										$cpt = 0;
										@endphp
										@foreach($match->matchInfo->contestants->contestant as $index => $player)
											@if($player->position == 'b')
												<p>{{ get_player_short_name($player->name).' ('.get_country_iso_code_from_name($player->country->name).')' }}</p>
											@endif
										@endforeach
									</div>
									
									<div class="notes">
										<div class="note">
											@if(!empty($match->liveData->matchDetails->scores))
												@foreach ($match->liveData->matchDetails->scores as $type => $sets)
													@if($type != "total")
														<span>{{ $sets->b }}</span>
														@if($sets->tiebreakB)
															<span>{{ '('. $sets->tiebreakB . ')' }}</span>
														@endif
													@endif
												@endforeach
											@endif
										</div>
									</div>
								</div>
							</td>
							<td class="status" style="color : {{ ($match->liveData->matchDetails->matchStatus == 'Playing') ? '#FF0000' :'' }}">
								@php
									$status = [
										'Played'=>'Terminé',
										'Cancelled'=>'Annulé',
										'Fixture'=> $date_time['time'] ? $date_time['time'] : 'à venir',
										'Playing'=>'En cours',
										'Postponed'=>'Reporté',
										'Retired'=>'Abandon' ,
										'Suspended'=>'Suspendu',
										'Walkover'=>'Forfait',
									];
								@endphp
								@if(get_bloginfo("language") == 'en-US')
									{{ ($match->liveData->matchDetails->matchStatus == 'Playing') ? 'Live' : $match->liveData->matchDetails->matchStatus == 'Fixture' ? $date_time['time'] : $match->liveData->matchDetails->matchStatus}}
								@else
									{{ $status[$match->liveData->matchDetails->matchStatus] }}
									
								@endif
							</td>
							<td class="follow-live">
								@if(!empty($posts_matches))
								
									@if(!empty($posts_matches))
										<a href="{{ get_permalink($posts_matches[0])}}"><span><{{ __('Follow the live', 'mot')}}</span></a>
									@endif
								@endif
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			@if ($match_paleyd==0)
				<div class="message">
					<p>{{ __('There are no matches currently','mot') }}</p> 
				</div>
			@endif
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<nav>
				<a class="{{ date($date_formt,time()-(3600*24)) == $selected_date ? 'selected' : '' }}" href="{{ $yesterday_url}}">{{ __('previous day', 'mot') }}</a>
				<a class="{{ date($date_formt) == $selected_date || !isset($selected_date) ? 'selected' : '' }}" href="{{ $today_url }}">{{ __('today', 'mot') }}</a>
				<a class="{{ date($date_formt,time()+(3600*24)) == $selected_date ? 'selected' : '' }}" href="{{ $tomorrow_url }}">{{ __('next day', 'mot') }}</a>
			</nav>
		</div>
	</div>
</div>