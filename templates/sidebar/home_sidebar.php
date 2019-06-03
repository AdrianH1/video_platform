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
	
	<div class="div_news" id="news_1">
		<h1 class="news_titel">Mega wichtige News</h1>
		<p class="news_text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
	</div>
	<div class="div_news" id="news_2">
		<h1 class="news_titel">Fast ganz wichtige News</h1>
		<p class="news_text">Hier findet ihr in Kürze aktuelle News aus der Gaming Branche. Nur mal so testweise, um zu schauen, wie's ankommt. :)</p>
	</div>
	<div class="div_news" id="news_3">
		<h1 class="news_titel">Weniger wichtige News</h1>
		<p class="news_text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
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