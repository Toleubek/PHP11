<!DOCTYPE html>
<html>
	<head>
		<title>Second Home work</title>
		<meta charset="UTF-8">	
	</head>
	<body>
		<?php
		error_reporting(E_ALL);

		$x = rand(0, 100);
		echo 'Число - '.$x.'<br>';
		//$p1 = 1;
		//$p2 = 1;
		
		for ($p1 = 1;$p2 = 1;){
			if($p1>$x){
				echo 'Задуманное число не входит в числовой ряд';
				break;		
			}else if($p1 === $x){
				echo 'Задуманное число входит в числовой ряд';
				break;
			}else{
				$p3 = $p1; 
				$p1 = $p1 + $p2; 
				$p2 = $p3;		
			}
		}	
		?>
		
	</body>
</html>


