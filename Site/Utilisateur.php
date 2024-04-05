<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../CSS/styl.css">
</head>
<body>
<div id="chatbox">
<a class="down"><br><a/>
<?php
session_start();
error_reporting(0);
include '..\Config\connexionserver.php';
include '..\Config\lecturemsg.php';
include '..\Config\envoimsg.php';
include '..\Config\verification.php';

?>
</div>
<div id="input-msg">
	<form action="" method="POST">
	<input type="text"name=" name_entered" id="usermsg" value=''/>
	<input type="submit" name="submitbutton" value="Envoyez"/>
	</form>
        <?php
        error_reporting(0);
		$nom = $_SESSION["azzrine"];
		$message= $_POST['name_entered'];
		$submitbutton= $_POST['submitbutton'];
		if ($submitbutton){
		if (!empty($message)) {
		envoimsg($nom,$message);
		header("Refresh:0");
		}
		else {
		echo '<a>Vous avez rien envoyez.</a>';
		}
		}
		?>
</div>
</body>
</html>



