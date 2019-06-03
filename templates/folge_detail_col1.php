<div id="div_dasSpiel">
	<?php 
		echo '<div id="div_titel" style="margin: 10px 10px 15px 0px;"><h4>Das Spiel</h4></div>'; 
		echo '<a id="folge_cover" href="" title="Gamecover">
		<img id="img_cover_detail" src="' . $path_cover . $row["txt_coverImage"] . '"></a>';
	?>
</div>
<div id="div_dieStimme">
	<?php
		echo '<div id="div_titel" style="margin: 10px 10px 15px 0px;"><h4>Die Stimme</h4></div>';
		echo '<div id="div_stimmeBild"><a id="" href="" title="">
		<img id="img_creator_detail" src="' . $path_creator . $row["txt_creatorImage"] . '"></a></div>';
		echo "<div id='div_stimmeText'>Dieses " . "<a id='' href='' title=''>Let's Play</a>" . " zu " .
		"<a id='' href='' title=''>" . $row["txt_gamename"] . "</a>" . " wurde gespielt, " .
		"aufgenommen und kommentiert von " . "<a id='' href='' title=''>" . $row["txt_name"] . "</a></div>";
	?>
</div>
