<?php 
/*
 * A Design by W3layouts
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
 *
 */
include "app/config.php";
include "app/detect.php";

if ($page_name=='') {
	include $browser_t.'/index.html';
	}
elseif ($page_name=='index.html') {
	include $browser_t.'/index.html';
	}
elseif ($page_name=='details.html') {
	include $browser_t.'/details.html';
	}
elseif ($page_name=='photos.html') {
	include $browser_t.'/photos.html';
	}
elseif ($page_name=='videos.html') {
	include $browser_t.'/videos.html';
	}
elseif ($page_name=='music.html') {
	include $browser_t.'/music.html';
	}
elseif ($page_name=='contact.html') {
	include $browser_t.'/contact.html';
	}
else
	{
		include $browser_t.'/404.html';
	}

?>
