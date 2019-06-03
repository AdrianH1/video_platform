<!DOCTYPE html>

<html>
	
	<?php
	if (!isset($_GET['page']))	{
		$_GET['page'] = 'home';
	}
	?>

	<?php include 'header.php'; ?>
	
	<body>
		<div id="div_main">
			<div id="div_container_wrapper">
				<?php include 'content.php'; ?>
			</div>
			
		</div>
		
		<?php include 'footer.php'; ?>
	
	</body>
</html>