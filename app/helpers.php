<?php

function GetYoutubeID($url)
{
	if (strstr($url, 'youtu.be')) {
		return str_ireplace(array('https://youtu.be/', 'http://youtu.be/'), '', $url);
	} else {
		parse_str(parse_url($url, PHP_URL_QUERY), $temp);
		return $temp['v'];
	}
}