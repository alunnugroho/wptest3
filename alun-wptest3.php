<?php

function change_timezone_array()
{
	$timezone_list = DateTimeZone::listIdentifiers();

	return $timezone_list;
}

add_filter('assesment_3_timezones', 'change_timezone_array');

function add_wording_before_dropdown()
{
	echo '<h4>Silahkan pilih timezone Anda:</h4>';
}

add_action('assesment_3_after_render', 'add_wording_before_dropdown');