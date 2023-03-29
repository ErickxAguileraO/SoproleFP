<?php

function GetYoutubeID($video_id)
{
	if (FALSE !== filter_var($video_id, FILTER_VALIDATE_URL)) {
		if (FALSE !== strpos($video_id, '/v/')) {
			list(, $video_id) = explode('/v/', $video_id);
		} elseif (FALSE !== strpos($video_id, '/shorts/')) {
			list(, $video_id) = explode('/shorts/', $video_id);
		} else {
			$video_query = parse_url($video_id, PHP_URL_QUERY);
			parse_str($video_query, $video_params);
			if (isset($video_params['v'])) {
				$video_id = $video_params['v'];
			} else {
				return 'jsyySdF-fQg';
			}
		}
	}
	return $video_id;
}
