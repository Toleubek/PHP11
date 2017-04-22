<?php

		error_reporting(E_ALL);

		$x = rand(0, 100);
		echo 'Число - '.$x.'<br>';
		
$firstIf ='';
$secondIf='';
		
		for ($p1 = 1;$p2 = 1;){
			if($p1>$x){				
				$firstIf = 'Задуманное число не входит в числовой ряд';				
				break;		
			}else if($p1 === $x){				
				$secondIf = 'Задуманное число входит в числовой ряд';
				break;
			}else{
				$p3 = $p1; 
				$p1 = $p1 + $p2; 
				$p2 = $p3;		
			}
		}	
		?>
<!DOCTYPE html>
<html>
	<head>
		<title>Second Home work</title>
		<meta charset="UTF-8">	
	</head>
	<body>
	<?php 
		echo $firstIf; 
		echo $secondIf;		
		?>
		
	</body>
</html>
