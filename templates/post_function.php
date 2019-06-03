<?php
function post_content($limit, $title_color_count) {
	include "img_paths.php";
	include "db_connection.php";

	$sql = "
		SELECT tbl_folge.pk_folge, DATE_FORMAT(tbl_folge.upload_date, '%d.%m.%Y %H:%i') as upload_date, tbl_folge.txt_thumbnailImage, tbl_folge.int_folgennummer, tbl_folge.txt_folgentitel,
		tbl_game.pk_game, tbl_game.txt_gamename, tbl_game.txt_coverImage, tbl_creator.pk_creator, tbl_creator.txt_name, tbl_creator.txt_creatorImage
		FROM tbl_folge
		JOIN tbl_game ON tbl_game.pk_game = tbl_folge.fk_game
		JOIN tbl_creator ON tbl_creator.pk_creator = tbl_game.fk_creator
		ORDER BY tbl_folge.upload_date DESC LIMIT " . $limit . ",1";
	$query = mysqli_query($conn, $sql);

	if (mysqli_num_rows($query) > 0) {
		while($row = mysqli_fetch_assoc($query)) {
			$i = $row["pk_folge"];
			echo '<div class="div_folge_wrapper" id="' . $i	. '">
					<div class="div_folge" id="div_thumb">';
						echo '<a id="folge_thumbnail" href="index.php?page=folge_detail&video=' . $row["pk_folge"] . '" title="Thumbnail">
								<img class="img_folge" id="img_thumbnail" src="' . $path_thumbnail . $row["txt_gamename"] . "/" . $row["txt_thumbnailImage"] . '"></a>';
			echo '</div>
					<div class="div_folge" id="div_text">';
						echo '<a class="a_folge_titel" id="color_'. $title_color_count .'" href="index.php?page=folge_detail&video=' . $row["pk_folge"] . '" title="Folgentitel">' . 'Folge ' . $row["int_folgennummer"] . ': ' . $row["txt_folgentitel"] . '</a>';
						echo "<h1 class='h1_folge_game' id='color_". $title_color_count . "'>Let's Play ";
						echo '<a id="a_folge_game" href="" title="Gametitel">' . $row["txt_gamename"] . '</a></h1>';
						echo "<h1 class='h1_folge_creator' id='color_". $title_color_count . "'>Aufgenommen von  ";
						echo '<a id="a_folge_creator" href="" title="Creator">' . $row["txt_name"] . '</a></h1>';
						echo "<h1 class='h1_folge_date'>Upload am: " . $row["upload_date"] . "</h1>";
			echo '</div><div class="div_folge" id="div_cover">';
						echo '<a id="folge_cover" href="" title="Gamecover">
								<img class="img_folge" id="img_cover" src="' . $path_cover . $row["txt_coverImage"] . '"></a>';
						echo '<a id="folge_creator" href="" title="Creator">
								<img class="img_folge" id="img_creator" src="' . $path_creator . $row["txt_creatorImage"] . '"></a>';
			echo '</div>
			</div> ';
		}
	} else {
		echo "0 results content";
	}
	mysqli_close($conn);
}

function get_upload_date($limit) {
	include "db_connection.php";
	$sql = "
		SELECT DATE_FORMAT(tbl_folge.upload_date, '%d.%m.%Y') AS upload_date
		FROM tbl_folge
		ORDER BY tbl_folge.upload_date DESC LIMIT " . $limit . ",1";
	$query = mysqli_query($conn, $sql);

	if (mysqli_num_rows($query) > 0) {
		while($row = mysqli_fetch_assoc($query)) {
			return $row["upload_date"];
		}
	} else {
		return;
	}
	mysqli_close($conn);
}

function get_creator($limit1, $limit2) {
	include "img_paths.php";
	include "db_connection.php";

	$sql = "
		SELECT  pk_creator, txt_name, txt_creatorImage
		FROM tbl_creator LIMIT " . $limit1 . "," . $limit2;
	$query = mysqli_query($conn, $sql);	
	if (mysqli_num_rows($query) > 0) {
		while($row = mysqli_fetch_assoc($query)) {
				echo '<td id="td_creator">';
				echo '<a href="index.php?page=creator_folgen&creator=' . $row["pk_creator"] . '" title="' . $row["txt_name"] . '">';
				echo '<img id="img_creator_uebersicht" src="' . $path_creator . $row["txt_creatorImage"] . '">';
				echo '</a>';
				echo '</td>';
		}
	} else {
		//do nothing
	}
	mysqli_close($conn);
}

function count_creator() {
	include "db_connection.php";

	$sql_folge = "
		SELECT count(*) as count
		FROM tbl_creator";
	$query_folge = mysqli_query($conn, $sql_folge);
	if (mysqli_num_rows($query_folge) > 0) {
		while($row = mysqli_fetch_assoc($query_folge)) {
			return $row["count"];
		}
	} else {
		echo "0 results";
	}
	mysqli_close($conn);
}

function get_games($limit1, $limit2) {
	include "img_paths.php";
	include "db_connection.php";

	$sql = "
		SELECT  pk_game, txt_gamename, txt_coverImage, creation_date, fk_creator
		FROM tbl_game LIMIT " . $limit1 . "," . $limit2;
	$query = mysqli_query($conn, $sql);	
	if (mysqli_num_rows($query) > 0) {
		while($row = mysqli_fetch_assoc($query)) {
				echo '<td id="td_games">';
				echo '<a href="index.php?page=game_folgen&folgen_von=' . $row["pk_game"] . '" title="' . $row["txt_gamename"] . '">';
				echo '<img id="img_games_uebersicht" src="' . $path_cover . $row["txt_coverImage"] . '">';
				echo '</a>';
				echo '</td>';
		}
	} else {
		//do nothing
	}
	mysqli_close($conn);
}

function count_games() {
	include "db_connection.php";

	$sql_folge = "
		SELECT count(*) as count
		FROM tbl_game";
	$query_folge = mysqli_query($conn, $sql_folge);
	if (mysqli_num_rows($query_folge) > 0) {
		while($row = mysqli_fetch_assoc($query_folge)) {
			return $row["count"];
		}
	} else {
		echo "0 results";
	}
	mysqli_close($conn);
}

// function post_content_count($upload_date) {
	// include "db_connection.php";

	// $sql_folge = "
		// SELECT count(*) as count
		// FROM tbl_folge 
		// WHERE upload_date = '" . $upload_date . "'";
	// $query_folge = mysqli_query($conn, $sql_folge);
	// if (mysqli_num_rows($query_folge) > 0) {
		// while($row = mysqli_fetch_assoc($query_folge)) {
			// return $row["count"];
		// }
	// } else {
		// echo "0 results";
	// }
	// mysqli_close($conn);
// }

// function get_distinct_count() {
	// include "db_connection.php";

	// $sql_folge = "
		// SELECT count(distinct upload_date) as distinct_count 
		// FROM (SELECT upload_date FROM tbl_folge limit 13) AS needed_alias";
	// $query_folge = mysqli_query($conn, $sql_folge);
	// if (mysqli_num_rows($query_folge) > 0) {
		// while($row = mysqli_fetch_assoc($query_folge)) {
			// return $row["distinct_count"];
		// }
	// } else {
		// echo "0 results";
	// }
	// mysqli_close($conn);
// }
?>