<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div id="div_content">
	<?php
	include "post_function.php";

	function show_content($limit, $title_color_count) {
		$title_date = "";
		while($limit < 15) {
			$get_date = get_upload_date($limit);
			post_content($limit, $title_color_count);
			$limit = $limit + 1;
			if ($title_color_count < 4) {
				$title_color_count = $title_color_count + 1;
			} else {
				$title_color_count = 0;
			}
		}
		
		return $title_date;
	}


	$last_title_date = show_content(0,0);

	?>

	<script>
	var clicks = 0;
	var last_title_date = "<?php echo $last_title_date ?>";
	var test = $('#div_titel').html();
	function load_more() {
			clicks += 1;
			if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			} else {
				// code for IE6, IE5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					//document.getElementById("load_more").innerHTML = this.responseText;
					var div = document.createElement('div');
					div.setAttribute("id", "div_load_more"+clicks);
					document.getElementById("load_more").appendChild(div);
					document.getElementById("div_load_more"+clicks).innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET","/video_platform/templates/load_more.php?c="+clicks+"&d="+last_title_date,true);
			xmlhttp.send();
	}
	</script>

	<div id="load_more"></b></div>
</div>

<div id="div_loadmore">
	<button id="btn_loadmore" onclick="load_more()">Mehr Laden</button>
</div>

