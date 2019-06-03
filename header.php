<head>
	<meta charset="UTF-8">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<style>
		<?php include 'style.css'; ?>
	</style>
	
	<div id="div_wrapper_header">
		<div id="div_header">
		
			<div id="div_logo">
				<a id="a_logo" href="index.php"><span id="img_helper"></span><img id="img_logo" src="./img/logo.png"></a>
			</div> 
				<div id="div_nav">
				
				<div id="div_logo_mobile">
					<a id="a_logo" href="index.php"><span id="img_helper"></span><img id="img_logo" src="./img/logo.png"></a>
				</div> 
				
					<input type="checkbox" id="input_nav">
					<label id="label_nav" for="input_nav" onclick></label>
				
					<ul id="ul_nav">
						<li id="li_nav"><a id="a_nav" href="index.php">
							<svg class="svg_nav" id="svg_home" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"/><path d="M12 5.69l5 4.5V18h-2v-6H9v6H7v-7.81l5-4.5M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z"/></svg>
							<span id="span_nav">Home</span>
						</a></li>
						<li id="li_nav"><a id="a_nav" href="index.php">
							<svg class="svg_nav" id="svg_games" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"/><path d="M21 6H3c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 10H3V8h18v8zM6 15h2v-2h2v-2H8V9H6v2H4v2h2z"/><circle cx="14.5" cy="13.5" r="1.5"/><circle cx="18.5" cy="10.5" r="1.5"/></svg>
							<span id="span_nav">Games</span>
						</a></li>
						<li id="li_nav"><a id="a_nav" href="index.php">
							<svg class="svg_nav" id="svg_creator" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"/><path d="M12 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2m0 9c2.7 0 5.8 1.29 6 2v1H6v-.99c.2-.72 3.3-2.01 6-2.01m0-11C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 9c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"/></svg>
							<span id="span_nav">Creator</span>
						</a></li>
						<li id="li_nav"><a id="a_nav" href="index.php">
							<svg class="svg_nav" id="svg_hwsq" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"/><path d="M21 9V7c0-1.65-1.35-3-3-3H6C4.35 4 3 5.35 3 7v2c-1.65 0-3 1.35-3 3v5c0 1.65 1.35 3 3 3h18c1.65 0 3-1.35 3-3v-5c0-1.65-1.35-3-3-3zM5 7c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v2.78c-.61.55-1 1.34-1 2.22v2H6v-2c0-.88-.39-1.67-1-2.22V7zm17 10c0 .55-.45 1-1 1H3c-.55 0-1-.45-1-1v-5c0-.55.45-1 1-1s1 .45 1 1v4h16v-4c0-.55.45-1 1-1s1 .45 1 1v5z"/></svg>
							<span id="span_nav">Community</span>
						</a></li>
						<li id="li_nav"><a id="a_nav" href="index.php">
							<svg class="svg_nav" id="svg_podcast" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 14c1.66 0 2.99-1.34 2.99-3L15 5c0-1.66-1.34-3-3-3S9 3.34 9 5v6c0 1.66 1.34 3 3 3zm-1.2-9.1c0-.66.54-1.2 1.2-1.2.66 0 1.2.54 1.2 1.2l-.01 6.2c0 .66-.53 1.2-1.19 1.2-.66 0-1.2-.54-1.2-1.2V4.9zm6.5 6.1c0 3-2.54 5.1-5.3 5.1S6.7 14 6.7 11H5c0 3.41 2.72 6.23 6 6.72V21h2v-3.28c3.28-.48 6-3.3 6-6.72h-1.7z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
							<span id="span_nav">Podcast</span>
						</a></li>
					</ul>
				</div>
				
		</div>

		<?php if ($_GET['page'] == 'home') {
			echo '<div id="div_banner">';
				include 'templates/banner.php';
			echo '</div>';
		}?>		

	</div>
</head>

