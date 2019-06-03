<div id="div_folgePfad">
	<?php
		echo "<a id='a_folgePfad' href='' title=''>Let's Play</a>" . " >> ";	
		echo "<a id='a_folgePfad' href='' title=''>" . $row["txt_gamename"] . "</a>" . " >> ";	
		echo "<a id='a_folgePfad' href='' title=''>" . "Folge" . $row["int_folgennummer"] . ": " . $row["txt_folgentitel"] . "</a>" ;	
	?>
	
</div>
<div id="div_folgeText">
	<?php
	echo "<h2>Folge " . $row["int_folgennummer"] . ": " . $row["txt_folgentitel"] . "</h2>";
	echo $row["txt_folgenbeschreibung"];
	?>
</div>
<div id="div_neueFolgen">
	<?php
	$sql_folge = "SELECT tbl_folge.pk_folge, tbl_folge.upload_date, tbl_folge.txt_thumbnailImage, tbl_folge.int_folgennummer, tbl_folge.txt_folgentitel,
	tbl_game.pk_game, tbl_game.txt_gamename, tbl_game.txt_coverImage, tbl_creator.pk_creator, tbl_creator.txt_creatorImage
	FROM tbl_folge
	JOIN tbl_game ON tbl_game.pk_game = tbl_folge.fk_game
	JOIN tbl_creator ON tbl_creator.pk_creator = tbl_game.fk_creator
	ORDER BY tbl_folge.upload_date DESC LIMIT 3";
	$query_folge = mysqli_query($conn, $sql_folge);

	echo "<div id='div_titel'><h4>Neue Let's Play Folgen</h4></div>";
	
	if (mysqli_num_rows($query_folge) > 0) {
		while($row = mysqli_fetch_assoc($query_folge)) {
		$i = $row["pk_folge"];
			echo '<div class="div_folge" id="' . $i	. '">
					<div class="div_folge" id="div_images">';
						echo '<a id="folge_thumbnail" href="index.php?page=folge_detail&video=' . $row["pk_folge"] . '" title="Thumbnail">
								<img id="img_thumbnail" src="' . $path_thumbnail . $row["txt_gamename"] . "/" . $row["txt_thumbnailImage"] . '"></a>';
						echo '<a id="folge_cover" href="" title="Gamecover">
								<img id="img_cover" src="' . $path_cover . $row["txt_coverImage"] . '"></a>';
						echo '<a id="folge_creator" href="" title="Creator">
								<img id="img_creator" src="' . $path_creator . $row["txt_creatorImage"] . '"></a>';
			echo '</div>
					<div class="div_folge" id="div_text">';
						echo "<h1 id='folge_text'>Let's Play ";
						echo '<a id="folge_game" href="" title="Gametitel">' . $row["txt_gamename"] . '</a></br>';
						echo '<a id="folge_titel" href="index.php?page=folge_detail&video=' . $row["pk_folge"] . '" title="Folgentitel">' . 'Folge ' . $row["int_folgennummer"] . ': ' . $row["txt_folgentitel"] . '</a></br></br>';
						echo "</h1>";
			echo '</div>
		</div> ';
		}
	} else {
		echo "0 results";
	} ?>
</div>
