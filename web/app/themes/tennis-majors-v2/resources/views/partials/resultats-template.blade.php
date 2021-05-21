@php
    $calendars_data = mot_get_tour_calendars_by_year(date('Y'));
    $calendars = [
        'bihlpcatrk45hxoye65ejz27d'=>__("ATP World Tour",'mot'),
        'bihmimk46tnexl279lgqjku7d'=>__("WTA Tour",'mot'),
        'bihn6edss6dh6xzxecausfsa1'=>__("ATP Challenger Tour",'mot'),
        'bihnstcgrf07yx7ueu8v2swdl'=>__("Davis Cup",'mot'),
        'bihofu2mgp59irjjyitnuqdih'=>__("Fed Cup",'mot'),
        'bihp4kw1forkmt2wo8bpwjh0p'=>__("Olympics",'mot')
    ];
    $calendars_list = [];
@endphp

    @foreach ($calendars_data as $obj)
        @php
            $index = array_search($obj['id'],array_keys($calendars));
        @endphp
        @if (isset($calendars[$obj['id']]))
            @php
            $calendars_list[$index] = $obj;
            @endphp
        @endif
    @endforeach

    @php
        ksort($calendars_list);
        $tours_calendar =[
            [
            'id'=>'bihlpcatrk45hxoye65ejz27d',
            'tourName'=>'ATP World Tour'
            ],
            [
                'id'=>'bihmimk46tnexl279lgqjku7d',
                'tourName'=>'WTA Tour'
            ],
        ];// mot_get_tour_calendar();
    
        $default_data_load = ['id_tour_calendar'=>'bihlpcatrk45hxoye65ejz27d'];
        $req_data = $_GET;
    @endphp
    @if(!isset($req_data['tour_calendar_id']) || empty($req_data['tour_calendar_id']))
	    @foreach ($calendars_list as $tour_cal) 
		
		@if($default_data_load['id_tour_calendar'] == $tour_cal['id'])
			@php
				$req_data['tour_calendar_id'] = $tour_cal['year']->id;
				$req_data['start_date'] = $tour_cal['year']->startDate;
				$req_data['end_date'] = $tour_cal['year']->endDate;
				break;
			@endphp
		@endif
	@endif

	@php
		$date_range = !empty($req_data['start_date']) && !empty($req_data['end_date']) ? mot_get_date_range_api($req_data['start_date'], $req_data['end_date']) : null;
		$tournois = mot_get_tours($req_data['tour_calendar_id'],$date_range);
	@endphp


	<div class="list-resultats">
		<div class="table-container">
		<h3 class="list-resultats-title">{{ (ICL_LANGUAGE_CODE == 'fr') ? 'Calendrier/Résultat' : 'Calendar & results' }}</h3>
		<form action="" class="c-form" id="form_resultat" method="get">
			<select name="tour_calendar_id" id="resultat_btn_tourcalendar">
				<option value="">--- {{ (ICL_LANGUAGE_CODE == 'fr') ? 'Calendrier/Résultat' : 'Calendar & results' }} ---</option>
				@foreach ($calendars_list as $tour_calendar)
					<option {{ $tour_calendar['year']->id == $req_data['tour_calendar_id'] ? 'selected':'' }}  value="{{ $tour_calendar['year']->id }}">{{ !empty($calendars[$tour_calendar['id']]) ? $calendars[$tour_calendar['id']] : $tour_calendar['tourName'] }}</option>
				@endforeach
			</select>
		</form>
		<table class="current-tornament">
			<tbody>
				<tr class="header-bg-dark">
					<th>{{ __('Current tournaments','mot') }}</th>
				</tr>
				@foreach($tournois as $index => $trn):
					@if((strtotime($trn->endDate) >= (time() - 86400)) && (strtotime($trn->startDate) <= (time() + 86400)))
						<tr class="odd even">
							<td>
								<a href="{{ get_permalink(get_page_by_path('tournoi'))."?tour_id=".$trn->id }}"
									title="{{ $trn->name }}">
									{{ $trn->name }}&nbsp;({{__($trn->type,'mot').'/'.__($trn->matchType,'mot')}})
								</a>&nbsp;
								<span>{{ __('from','mot') }}&nbsp;{{ date('d/m/Y', strtotime($trn->startDate)) }}&nbsp;{{  __('to','mot') }} {{ date('d/m/Y', strtotime($trn->endDate)) }}</span>
							</td>
						</tr>
					@endif
				@endforeach
			</tbody>
		</table>
		<table class="table"> 
			<thead>
				<tr>
					<td class="tournois">{{ _e('Tournaments','mot') }}</td>           
					<td class="date">DATE</td>            
					<td class="surf">SURF.</td>      
					<td class="classe">{{ _e('Type','mot') }}</td>        
					<td class="prix">{{ _e('Price money','mot') }}</td>
					<td class="vainqueur">{{ _e('Winners','mot') }}</td>
					<td class="status">{{ _e('Status','mot') }}</td>
				</tr>
			</thead>
			<tbody>
				<?php
					$tournois = array_reverse($tournois); foreach ($tournois as $tournoi) { 
						if ($tournoi->matchType == 'mix') continue;
						$winners =  mot_get_winner($tournoi);
						$tournoi_statut = '';
						if (time()>strtotime($tournoi->endDate) && !empty($winners) ) {
							$tournoi_statut = 'Played';
						} elseif (time()>strtotime($tournoi->endDate)&& empty($winners) ) {
							$tournoi_statut = 'Cancelled';
						} elseif (time()>strtotime($tournoi->startDate) &&  time()<strtotime($tournoi->endDate)) {
							$tournoi_statut = 'Playing';
						} elseif (time()<strtotime($tournoi->startDate)) {
							$tournoi_statut = 'Upcoming';
						}
					
				?>
					<tr>
						<td class="tournois" data-id="{{ $tournoi->id }}">
							<a href="{{ get_permalink( get_posts([ 'name' => 'tournoi','post_type'=>'page' ])[0] )."?tour_id=".$tournoi->id }}">{{ $tournoi->name }}</a>
						</td>
						<td class="date">{{ date('d/m/Y', strtotime($tournoi->startDate)) }}</td>
						<td class="surf">{{ __($tournoi->competition->court,'mot') }}</td>
						<td class="classe">{{ __($tournoi->type,'mot') }}</td>
						<td class="prix">{{ mot_get_price($tournoi) }}</td>
						<td class="vainqueur">
							@php
								$winners =  mot_get_winner($tournoi);
							@endphp
							@foreach ($winners as $index => $player_winner)
								@if( $index == 1 )
									{{ ' / ' }}
								@endif
								{{ $player_winner->name }}
							@endforeach
						</td>
						<td>{{ __($tournoi_statut,'mot') }}</td>
					</tr>
				<?php } //fin IF TOURNOIS ?>
			</tbody>
		</table>
	</div>