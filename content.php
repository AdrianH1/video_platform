<div id="div_container">
	<?php

	switch ($_GET['page'])
	{
		case 'home':
			?>
				<div id="div_content_wrapper">
					<?php include 'templates/content_home.php'; ?>
				</div>
				<?php include 'sidebar.php'; ?>
			<?php
		break;
		case 'folge_detail':
			?>
				<?php include 'templates/folge_detail/folge_video.php'; ?>
				<?php include 'sidebar.php'; ?>
				<div id="div_folgen_detail_wrapper">
					<?php include 'templates/folge_detail/folge_detail.php'; ?>
				</div>
			<?php
		break;
		
		//NOT IN USE RIGHT NOW
		// case 'game_uebersicht':
			?>
			<!--	<div id="div_game_uebersicht">
					<?php //include 'game_uebersicht.php'; ?>
				</div>
			<?php
		// break;
		// case 'creator_uebersicht':
			?>
				<div id="div_creator_uebersicht">
					<?php //include 'creator_uebersicht.php'; ?>
				</div>
			<?php
		//break;
		//case 'game_folgen':
			?>
				<div id="div_game_folgen">
					<?php //include 'game_folgen.php'; ?>
				</div>
			<?php
		//break;
		//case 'creator_folgen':
			?>
				<div id="div_creator_folgen">
					<?php //include 'creator_folgen.php'; ?>
				</div>
			<?php
		//break;
		//case 'upload_games':
			?>
				<div id="div_upload">
					<?php //include 'upload_games.php'; ?>
				</div>
			<?php
		//break;
		//case 'upload_games_neu':
			?>
				<div id="div_upload">
					<?php //include 'upload_games_neu.php'; ?>
				</div>
			<?php
		//break;
		//case 'upload_folgen':
			?>
				<div id="div_upload">
					<?php //include 'upload_folgen.php'; ?>
				</div>
			<?php
		//break;
		//case 'upload_folgen_neu':
			?>
				<div id="div_upload">
					<?php //include 'upload_folgen_neu.php'; ?>
				</div>-->
			<?php
		//break;
	}
	?>
</div>





