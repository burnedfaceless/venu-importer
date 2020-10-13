<?php

class MenuPage {
	private $events_calendar_active;

	public function __construct($events_calendar_active) {
		$this->events_calendar_active = $events_calendar_active;
	}

	public function render() {
		if ($this->events_calendar_active) {
			echo 'This is the basic submenu page';
		} else {
			echo '<h1>You must install The Events Calendar to use this plugin.</h1>';
		}
	}
}