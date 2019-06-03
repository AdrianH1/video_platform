<?php
include "post_function.php";

function show_content($limit, $title_color_count, $while) {
	$title_date = "";
	while($limit < $while) {
		$get_date = get_upload_date($limit);
		post_content($limit, $title_color_count);
		$limit = $limit + 1;
		if ($title_color_count < 4) {
			$title_color_count = $title_color_count + 1;
		} else {
			$title_color_count = 0;
		}
	}
	
	return $title_date;
}

$c = intval($_GET['c']); //clicks&limit
$c_limit = $c * 15;
$c_while = $c_limit + 15;


show_content($c_limit,0,$c_while);



?>
