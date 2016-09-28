<?php

$book = book_recommend();

	if (isset($_COOKIE['name'])) {

		$cookie_name = $_COOKIE['name'];
		$cookie_sig = $_COOKIE['sig'];
		$cookie_expire = $_COOKIE['expire_time'];
		$url_set = "http://www.monomaxxx.com/api/set_authen?name=".$cookie_name."&sig=".$cookie_sig."&expire_time=".$cookie_expire;

	} else {

		$url_set = '';

	}

include('index_tpl.php');

?>