<!DOCTYPE html>
<html>
<head>
	<title>First Home work</title>
</head>
<body>

<?php 
error_reporting(E_ALL);
$name = 'Toleubek';
$age = 31;
$email = 'm.toleubek@mail.ru';
$town = 'Kokshetau';
$aboutMyselfInAFewWords = 'My name is ' . $name .', i am ' . $age . ' years old and i live in '. $town .'.Please, send me letters on my email ' . $email . '!';
?>

<table>
<tbody>
	<tr>
		<td><?php echo "Name"; ?></td>
		<td><?php echo $name; ?></td>
	</tr>
	<tr>
		<td><?php echo "Age"; ?></td>
		<td><?php echo $age; ?></td>
	</tr>
	<tr>
		<td><?php echo "Email"; ?></td>
		<td><a href="#"><?php echo $email; ?></a></td>
	</tr>
	<tr>
		<td><?php echo "Town"; ?></td>
		<td><?php echo $town; ?></td>
	</tr>
	<tr>
		<td><?php echo "Few words about me"; ?></td>
		<td><?php echo $aboutMyselfInAFewWords; ?></td>
	</tr>
</tbody>	
</table>

</body>
</html>
