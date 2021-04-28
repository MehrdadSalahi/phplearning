<?php
	$arr = array('akbar', 'mehrdad', 'mehran');
	
	$a = 1;
	$a = "slid";
	$output = '';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Session 2: Variables</title>
		
		<meta charset="utf-8"/>
	</head>
	<body>
		<div>
			<?php
				echo $output;
				echo '<pre>' . print_r($arr, 1) . '</pre>';
			?>
		</div>
	</body>
</html>