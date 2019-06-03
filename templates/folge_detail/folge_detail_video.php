<?php

function video_id($pk_folge) {
	include (dirname(__FILE__)."/../db_connection.php");
	$sql = "SELECT txt_filepath FROM tbl_folge WHERE pk_folge = " . $pk_folge;
	$query = mysqli_query($conn, $sql);

	if (mysqli_num_rows($query) > 0) {
		while($row = mysqli_fetch_assoc($query)) {
			return $row["txt_filepath"];
		}
	} else {
		return;
	}
	mysqli_close($conn);
}

//echo $row["int_source"];

$video_id = video_id($row['pk_folge']);

if ($row["int_source"] == 0){
	echo "<video width='100%' height='100%' controls>";
		echo "<source src='" . $path_video . $video_id . "' type='video/mp4'>";
		echo "Your browser does not support HTML5 video.";
	echo "</video>";
} else if ($row["int_source"] == 1){
	echo "<iframe width='100%' height='100%' style='border:0;' src='https://www.youtube.com/embed/" . $video_id . "'  
			frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope;' picture-in-picture allowfullscreen>";
	echo "</iframe>";
}

?>