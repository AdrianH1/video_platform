<?php
function erste_folge($pk_game) {
	include (dirname(__FILE__)."/../db_connection.php");
	$sql = "SELECT pk_folge, txt_thumbnailImage FROM tbl_folge WHERE (fk_game = " . $pk_game . ") ORDER BY upload_date ASC LIMIT 1";
	$query = mysqli_query($conn, $sql);

	if (mysqli_num_rows($query) > 0) {
		while($row = mysqli_fetch_assoc($query)) {
			return array($row["pk_folge"], $row["txt_thumbnailImage"]);
		}
	} else {
		return;
	}
	mysqli_close($conn);
}

function vorherige_folge($pk_game, $upload_date, $txt_thumbnailImage) {
	include (dirname(__FILE__)."/../db_connection.php");
	$sql = "SELECT pk_folge, txt_thumbnailImage FROM tbl_folge WHERE (fk_game = " . $pk_game . " AND upload_date < '" . $upload_date . "') ORDER BY upload_date DESC LIMIT 1";
	$query = mysqli_query($conn, $sql);

	if (mysqli_num_rows($query) > 0) {
		while($row = mysqli_fetch_assoc($query)) {
			return array($row["pk_folge"], $row["txt_thumbnailImage"]);
		}
	} else {
		return array ($upload_date, $txt_thumbnailImage);
	}
	mysqli_close($conn);
}

function naechste_folge($pk_game, $upload_date, $txt_thumbnailImage) {
	include (dirname(__FILE__)."/../db_connection.php");
	$sql = "SELECT pk_folge, txt_thumbnailImage FROM tbl_folge WHERE (fk_game = " . $pk_game . " AND upload_date > '" . $upload_date . "') ORDER BY upload_date ASC LIMIT 1";
	$query = mysqli_query($conn, $sql);

	if (mysqli_num_rows($query) > 0) {
		while($row = mysqli_fetch_assoc($query)) {
			return array($row["pk_folge"], $row["txt_thumbnailImage"]);
		}
	} else {
		return array ($upload_date, $txt_thumbnailImage);
	}
	mysqli_close($conn);
}

function neueste_folge($pk_game) {
	include (dirname(__FILE__)."/../db_connection.php");
	$sql = "SELECT pk_folge, txt_thumbnailImage FROM tbl_folge WHERE (fk_game = " . $pk_game . ") ORDER BY upload_date DESC LIMIT 1";
	$query = mysqli_query($conn, $sql);

	if (mysqli_num_rows($query) > 0) {
		while($row = mysqli_fetch_assoc($query)) {
			return array($row["pk_folge"], $row["txt_thumbnailImage"]);
		}
	} else {
		return;
	}
	mysqli_close($conn);
}

$erste_folge = erste_folge($row['pk_game'])[0];
$erste_folge_thumbnail = erste_folge($row['pk_game'])[1];

$vorherige_folge = vorherige_folge($row['pk_game'], $row['upload_date'], $row["txt_thumbnailImage"])[0];
$vorherige_folge_thumbnail = vorherige_folge($row['pk_game'], $row['upload_date'], $row["txt_thumbnailImage"])[1];

$naechste_folge = naechste_folge($row['pk_game'], $row['upload_date'], $row["txt_thumbnailImage"])[0];
$naechste_folge_thumbnail = naechste_folge($row['pk_game'], $row['upload_date'], $row["txt_thumbnailImage"])[1];

$neueste_folge = neueste_folge($row['pk_game'])[0];
$neueste_folge_thumbnail = neueste_folge($row['pk_game'])[1];

echo '<div class="div_episodenNavi_bild"><a id="a_episodenNavi" href="" title="Thumbnail">
	<img class="episodenNavi_image" id="episodenNavi_vorschau" src="' . $path_thumbnail . $row['txt_gamename'] . "/" . $erste_folge_thumbnail . '">';
echo '<div class="episodenNavi_text">erste folge</div></a></div>';

echo '<div class="div_episodenNavi_bild"><a id="a_episodenNavi" href="" title="Thumbnail" title="Thumbnail">
	<img class="episodenNavi_image" id="episodenNavi_vorschau" src="' . $path_thumbnail . $row['txt_gamename'] . "/" . $vorherige_folge_thumbnail . '">';
echo '<div class="episodenNavi_text">vorherige folge</div></a></div>';

echo '<div class="div_episodenNavi_bild" id="aktuell">
	<img class="episodenNavi_image" id="episodenNavi_aktuell" src="' . $path_thumbnail . $row['txt_gamename'] . "/" . $row["txt_thumbnailImage"] . '">';
echo '<div class="episodenNavi_text" id="episodenNavi_text_aktuell">aktuelle Folge</div></div>';

echo '<div class="div_episodenNavi_bild"><a id="a_episodenNavi" href="" title="Thumbnail" title="Thumbnail" title="Thumbnail">
	<img class="episodenNavi_image" id="episodenNavi_vorschau" src="' . $path_thumbnail . $row['txt_gamename'] . "/" . $naechste_folge_thumbnail . '">';
echo '<div class="episodenNavi_text">nächste folge</div></a></div>';

echo '<div class="div_episodenNavi_bild"><a id="a_episodenNavi" href="" title="Thumbnail" title="Thumbnail" title="Thumbnail">
	<img class="episodenNavi_image" id="episodenNavi_vorschau" src="' . $path_thumbnail . $row['txt_gamename'] . "/" . $neueste_folge_thumbnail . '">';
echo '<div class="episodenNavi_text">neueste folge</div></a></div>';

?>