	@include('partials.before-classement');
	<table class="table c-table {{ $classes }}">
		@if(!$show_slide)
			<select id="c-option" data-data='{{ json_encode($ajax_object) }}'>
				@foreach($data as $elm)
					<option value="{{ $elm['tour_calendar']['year']->id }}">{{ $elm['tour_calendar']['tourName'] }}</option>
				@endforeach
			</select>
		@else
		<h2 class="title"><b>{{ __('rankings','mot') }}</b> ATP/WTA </h2>
		@endif
		<thead>
			<tr>
				<th class="c-position">
					<span class="c-lg">{{ __('ranking','mot') }}</span>
					<span class="c-sm">pos.</span>
				</th>
				<th class="c-joueur">{{ __('players','mot') }}</th>
				<th class="c-points">
					<span class="c-lg">{{ __('points','mot') }}</span>
					<span class="c-sm">pts</span>
				</th>
				<th class="c-tournois">
					<span class="c-lg">{{ __('tournaments','mot') }}</span>
					<span class="c-sm">{{ __('tournaments','mot') }}</span>
				</th>
			</tr>
		</thead>
		@foreach ($data as $classement)
			<tbody>
				@foreach ($classement['rankings'] as $index => $rank)
					<tr class="c-player">
						<td class="c-position">{{$rank['position']}}</td>
						<td class="c-joueur">{{$rank['matchName']}}</td>
						<td class="c-points">{{$rank['points']}}</td>
						<td class="c-tournois">{{ $rank['tournamentsPlayed']}}</td>
					</tr>
				
					@if(($limit - 1) == $index)
						@php break @endphp
					@endif
				@endforeach
			</tbody>
			@if(!$show_slide)
				@php break @endphp
			@endif
		@endforeach
	</table>
	@if(!$show_slide)
		<div class="c-pagination">
			<button id="c-btn-rankings" class="c-btn-pagination">{{ __("see more", "mot") }}</button>
		</div>
	@else
		<div class="c-pagination">
			<a href="{{ get_the_permalink(get_page_by_path('rankings')) }}" class="c-btn-pagination">{{ __("all rankings", "mot") }}</a>
		</div>
	@endif