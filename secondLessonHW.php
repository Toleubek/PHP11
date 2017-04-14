<!DOCTYPE html>
<html>
<head>
	<title>Second Home work</title>
</head>
<body>
<?php
$x = rand(0, 100);
echo "Число - ".$x.'<br>';
$p1 = 1;
$p2 = 1;


if($p1 > $x){
	echo 'Задуманное число не входит в числовой ряд';		
}elseif($p1 === $x){
	echo "Задуманное число входит в числовой ряд";
}else{
	$p3 = $p1; 
	$p1 = $p1 + $p2; 
	$p2 = $p3;		
}	
?>
</body>
</html>


