<div id="div_folgePfad">
	<?php
		echo "<div id='div_folgePfad_text'><a id='a_folgePfad' href='' title=''>Game</a></div>";
		echo '<svg id="svg_folgePfad" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>';
		echo "<div id='div_folgePfad_text'><a id='a_folgePfad' href='' title=''>" . $row["txt_gamename"] . "</a></div>";
		echo '<svg id="svg_folgePfad" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>';
		echo "<div id='div_folgePfad_text'><a id='a_folgePfad' href='' title=''>" . "Folge" . $row["int_folgennummer"] . ": " . $row["txt_folgentitel"] . "</a></div>" ;
	?>
	
</div>
	<?php
	
	$apikey = 'AIzaSyDi7F3beBQEExWJScIRYUwk4nHF_GtbLec';
    $googleApiUrl = 'https://www.googleapis.com/youtube/v3/videos?id=' . $video_id . '&key=' . $apikey . '&part=snippet';
    
	function get_youtube_title($googleApiUrl){
    $response = file_get_contents($googleApiUrl);
    $decoded = json_decode($response, true);
		foreach ($decoded['items'] as $items) {
			 $title= $items['snippet']['title'];
			 $description= $items['snippet']['description'];
			 return array($title, $description);
		}
	}
	
	$title = get_youtube_title($googleApiUrl)[0];
	$split_titel = explode("-",$title);
		
	$description = get_youtube_title($googleApiUrl)[1];
	
	echo '<div class="div_folgeText" id="titel">';
		echo "<div id='div_video_titel'><h4 id='folgen_detail_titel'>" . $row["txt_folgentitel"] . "</h4></div>";
	echo '</div>';
	
	echo '<div class="div_folgeText" id="description">';
		echo "<div id='div_video_description'><p id='p_video_description'>" . $description . "</p></div>";
	echo '</div>';
	?>

<div id="div_neueFolgen">
	<?php

		echo "<div id='div_folgen_detail_titel'><h4 id='folgen_detail_titel'>Neueste Folgen</h4></div>";
	
		include (dirname(__FILE__)."/../post_function.php");
	
		function show_content($limit, $title_color_count) {
		while($limit < 3) {
			post_content($limit, $title_color_count);
			$limit = $limit + 1;
			if ($title_color_count < 4) {
				$title_color_count = $title_color_count + 1;
			} else {
				$title_color_count = 0;
			}
		}
	}
	show_content(0,0);
	
	?>
</div>
