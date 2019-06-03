<?php
include (dirname(__FILE__)."/../img_paths.php");
include (dirname(__FILE__)."/../db_connection.php");

$sql_folge = "
	SELECT tbl_folge.pk_folge, tbl_folge.txt_thumbnailImage, tbl_folge.int_folgennummer, tbl_folge.txt_folgentitel, tbl_folge.upload_date,
		tbl_folge.txt_folgenbeschreibung, tbl_game.pk_game, tbl_game.txt_gamename, tbl_game.txt_coverImage, tbl_game.int_source,
		tbl_creator.txt_name, tbl_creator.txt_creatorImage
	FROM tbl_folge
	JOIN tbl_game ON tbl_game.pk_game = tbl_folge.fk_game
	JOIN tbl_creator ON tbl_creator.pk_creator = tbl_game.fk_creator
	WHERE pk_folge='" . $_GET['video'] . "'";
$query_folge = mysqli_query($conn, $sql_folge);
$row = mysqli_fetch_assoc($query_folge)
?>

<div id="div_video">
	<?php include 'folge_detail_video.php'; ?>
</div>

<div id="div_episodenNavi_container">
	<div id="div_episodenNavi_wrapper">
		<div id="div_episodenNavi">
			<?php include 'folge_detail_episoden_navi.php'; ?>
		</div>
	</div>
</div>