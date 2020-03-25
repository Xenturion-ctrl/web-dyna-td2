<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Exercice n°2</title>
</head>
<body>
<form method="GET">	
	<label for="size">size : </label>
	<input type="number" value="15" name="size" id="size">
	<input type="submit" value="Valider">
	<label for="color">color : </label>
	<input type="letter" value="red" name="color" id="color">
	<label for="message">message : </label>
	<input type="letter" value="test" name="message" id="message">
</form>
	
	<hr>
<?php
echo '<div style="font-size: '.$_GET["size"].'px;color:'.$_GET["color"].'">'.$_GET["message"].'</div>';
?>


</body>
</html>