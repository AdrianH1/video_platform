<div id="div_sidebar_wrapper">
	<div id="div_socialmedia_wrapper">
		<div id="div_socialmedia_icons">
			<div class="div_socialmedia" id="div_twitter">
				<a href="" ><img class="img_social" src="./img/socialmedia/twitter.png"></a>
			</div>
			<div class="div_socialmedia" id="div_instagram">
				<a href="" ><img class="img_social" src="./img/socialmedia/instagram.png"></a>
			</div>
			<div class="div_socialmedia" id="div_youtube">
				<a href="" ><img class="img_social" src="./img/socialmedia/youtube.png"></a>
			</div>
			<div class="div_socialmedia" id="div_twitch">
				<a href="" ><img class="img_social" src="./img/socialmedia/twitch.png"></a>
			</div>
			<div class="div_socialmedia" id="div_patreon">
				<a href="" ><img class="img_social" src="./img/socialmedia/patreon.png"></a>
			</div>
		</div>
	</div>
	
	<div id="div_sprecher_sidebar_wrapper">
		<div id="div_sprecher_titel">
			<h1 id="sidebar_stimme_titel">The Creator</h1>
		</div>
		<div id="div_sprecher_wrapper">
			<div id="div_sprecher_bild">
				<?php
				include (dirname(__FILE__)."/../img_paths.php");
				include (dirname(__FILE__)."/../db_connection.php");
				$sql = "
					SELECT tbl_creator.pk_creator, tbl_creator.txt_creatorImage
					FROM tbl_folge
					JOIN tbl_game ON tbl_game.pk_game = tbl_folge.fk_game
					JOIN tbl_creator ON tbl_creator.pk_creator = tbl_game.fk_creator
					WHERE pk_folge = " . $_GET['video'] . ";
					";
					$query = mysqli_query($conn, $sql);
					if (mysqli_num_rows($query) > 0) {
						while($row = mysqli_fetch_assoc($query)) {
							echo '<a id="folge_creator" href="" title="Creator">
								<img id="img_creator_sidebar" src="' . $path_creator . $row["txt_creatorImage"] . '"></a>';
						}
					} else {
						echo "0 results content";
					}
					mysqli_close($conn);?>
			</div>
			<div id="div_sprecher_text">
				<?php
				include (dirname(__FILE__)."/../img_paths.php");
				include (dirname(__FILE__)."/../db_connection.php");
				$sql = "
					SELECT tbl_game.txt_gamename, tbl_creator.txt_name
					FROM tbl_folge
					JOIN tbl_game ON tbl_game.pk_game = tbl_folge.fk_game
					JOIN tbl_creator ON tbl_creator.pk_creator = tbl_game.fk_creator
					WHERE pk_folge = " . $_GET['video'] . ";
					";
					$query = mysqli_query($conn, $sql);
					if (mysqli_num_rows($query) > 0) {
						while($row = mysqli_fetch_assoc($query)) {
							echo "<p id='p_sprecher_sidebar_text'>Dieses Video zu <a id='a_sprecher_sidebar' href='' titel='Sprecher'>" . $row["txt_gamename"] . "</a> 
									wurde gespielt, aufgenommen und kommentiert von " . "<a id='a_sprecher_sidebar' href='' title=''>" . $row["txt_name"] . "</a></p>";
						}
					} else {
						echo "0 results content";
					}
					mysqli_close($conn);?>
			</div>
		</div>
	</div>
	
	<div id="div_game_sidebar_wrapper">
		<h1 id="sidebar_spiel_titel">The Game</h1>
		<div id="div_game_bild">
			<?php
			include (dirname(__FILE__)."/../img_paths.php");
			include (dirname(__FILE__)."/../db_connection.php");
			$sql = "
				SELECT tbl_game.pk_game, tbl_game.txt_coverImage
				FROM tbl_folge
				JOIN tbl_game ON tbl_game.pk_game = tbl_folge.fk_game
				JOIN tbl_creator ON tbl_creator.pk_creator = tbl_game.fk_creator
				WHERE pk_folge = " . $_GET['video'] . ";
				";
				$query = mysqli_query($conn, $sql);
				if (mysqli_num_rows($query) > 0) {
					while($row = mysqli_fetch_assoc($query)) {
						echo '<a id="folge_cover" href="" title="Gamecover">
								<img id="img_cover_sidebar" src="' . $path_cover . $row["txt_coverImage"] . '"></a>';
					}
				} else {
					echo "0 results content";
				}
				mysqli_close($conn);?>
		</div>
	</div>
	
	<div id="div_games_vorschau">
		<h1 id="games_vorschau_titel">Aktuelle Games</h1>
		
			<?php
			include (dirname(__FILE__)."/../img_paths.php");
			include (dirname(__FILE__)."/../db_connection.php");
			
				$sql = "
					SELECT tbl_game.pk_game, tbl_game.txt_coverImage
					FROM tbl_game
					ORDER BY tbl_game.creation_date DESC LIMIT 0,3";
				$sql2 = "
					SELECT tbl_game.pk_game, tbl_game.txt_coverImage
					FROM tbl_game
					ORDER BY tbl_game.creation_date DESC LIMIT 3,3";
				$query = mysqli_query($conn, $sql);
				$query2 = mysqli_query($conn, $sql2);
				
				echo '<div class="div_vorschau_cover_wrapper">';
				if (mysqli_num_rows($query) > 0) {
					while($row = mysqli_fetch_assoc($query)) {
						$i = $row["pk_game"];
						echo '<div id="div_vorschau_cover">';
							echo '<a id="folge_cover" href="" title="Gamecover">
									<img class="img_folge" id="img_vorschau_cover" src="' . $path_cover . $row["txt_coverImage"] . '"></a>';
						echo '</div>';
					}
				} else {
					echo "0 results content";
				}
				echo '</div>';
				
				echo '<div class="div_vorschau_cover_wrapper" id="wrapper2">';
				if (mysqli_num_rows($query2) > 0) {
					while($row = mysqli_fetch_assoc($query2)) {
						$i = $row["pk_game"];
						echo '<div id="div_vorschau_cover">';
							echo '<a id="folge_cover" href="" title="Gamecover">
									<img class="img_folge" id="img_vorschau_cover" src="' . $path_cover . $row["txt_coverImage"] . '"></a>';
						echo '</div>';
					}
				} else {
					echo "0 results content";
				}
				mysqli_close($conn);
				echo '</div>';
			?>
	</div>
</div>