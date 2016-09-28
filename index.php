<?php

require_once('config.php');
require_once('function.php');
header('content-type: text/html; charset=utf-8');

	/*if ($_SERVER['HTTP_HOST'] != 'www.mbookstore.com') {

	   header("HTTP/1.1 301 Moved Permanently", true, 301);
	   header("Location: http://www.mbookstore.com".$_SERVER['REQUEST_URI']);

	}*/

	/**
	 * Chose Device Webform or Mobileform
	 *
	 * @param $uri
	 * @return include file
	 */

	/*$url = preg_replace('!'.$conf['app_url'].'!', '', $_SERVER['REQUEST_URI']);

	if ($url == '') {

		include 'index/index.php';
		die();

	} else if (preg_match('!^m!', $url)) {

		include 'mobile/index.php';
		die();

	}*/

	include 'index/index.php';