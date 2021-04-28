<?php
	$students = array(
		array('FirstName' => 'Mehrdad', 'LastName' => 'Salahi', 'Gender' => 'مرد', 'age' => 25, 'weight' => 80),
		array('FirstName' => 'Morad', 'LastName' => 'Vakili', 'Gender' => 'مرد', 'age' => 35, 'weight' => 90),
		array('FirstName' => 'Mohsen', 'LastName' => 'Mohseni', 'Gender' => 'مرد', 'age' => 33, 'weight' => 75),
		array('FirstName' => 'Sara', 'LastName' => 'Salehi', 'Gender' => 'زن', 'age' => 45, 'weight' => 78),
		array('FirstName' => 'Ali', 'LastName' => 'Mohamadi', 'Gender' => 'مرد', 'age' => 25, 'weight' => 80),
		array('FirstName' => 'Maryam', 'LastName' => 'PourNejad', 'Gender' => 'زن', 'age' => 37, 'weight' => 89),
	);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Session 3</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<script type="text/javascript" src="js/bootstrap.js" language="javascript"></script>
	</head>
	<body>
		<div class="panel panel-danger">
			<?php
				$i = 1;
				foreach($students as $student){
					if($student['Gender'] == 'مرد'){
						echo '<div class="panel-heading">
								Stduent ' . $i . '
							</div>';
						echo '<div class="panel-body">'; 
						foreach($student as $key => $value){
							echo $key . ': ' . $value;
							echo '<br>';
						}
						echo '</div>';
						$i = $i + 1;
					}
				}
			?>
		</div>
	</body>
</html>