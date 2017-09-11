<?php

class DateTimeView {


	public function show() {

    $timeArray = getdate();
    $hoursString = localtime(time(), true);

    var_dump($hoursString);
    $timeString = $timeArray['weekday'] . ', the ' . $timeArray['mday'] . 'th of ' . $timeArray['month'] . ' ' . $timeArray['year'] . ', The time is '. $hoursString['tm_hour'] . ':' . $hoursString['tm_min'] . ':' . $hoursString['tm_sec'];

		return '<p>' . $timeString . '</p>';
	}
}