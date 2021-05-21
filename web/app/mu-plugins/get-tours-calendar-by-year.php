<?php

function mot_get_tour_calendars_by_year($year=null) {
	if (empty($year)) {
		$year = date('Y');
	}
	if (date('m') == 12) $year += 1;
	return get_data_from_cache(
        '_tr_cld_by_year_'.$year,
        'opta_api',
        3600,
        function() use ($year){
			$list_tours_calender= [];
			$url  = 'http://api.performfeeds.com/tennisdata/tourcalendar/1pkcg3s9hd4xv1ijixbkazkk0k/?_rt=b&_fmt=json';
			$data = json_decode(file_get_contents($url))->tourCalendars;
			foreach ($data as $tour_calendar) {
				foreach ($tour_calendar->tourCalendar as $tour_year) {
					if($tour_year->tourYear == $year){
						$list_tours_calender[] = [
							'id'=>$tour_calendar->id,
							'tourName'=>$tour_calendar->tourName,
							'year'=>$tour_year
						];
					break;
					}
				}
			}
			if (count($list_tours_calender)) {
				return $list_tours_calender;
			}
			return;
        },
        false
    );
}