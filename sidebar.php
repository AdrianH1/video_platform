<?php

	switch ($_GET['page'])
	{
		case 'home':
			include 'templates/sidebar/home_sidebar.php';
		break;
		case 'folge_detail':
			include 'templates/sidebar/folgen_detail_sidebar.php';
		break;
	}
?>
