<?php

class DateTimeView {


	public function show() {

    $timeString = getdate();

		return '<p>' . $timeString["weekday"] . ',the ' . $timeString["mday"] . 'th of ' . $timeString["month"] . ' ' . $timeString["year"] . ', The time is'.  '</p>';
	}
}