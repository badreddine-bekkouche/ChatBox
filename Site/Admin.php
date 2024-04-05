<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
<?php
include '..\Config\optionmsg.php';
include '..\Config\status.php';
?>
  
  <div class="diru1">
  	<div class="option">
      <br>
      <br>
      <br>
      <br>
     <form action="" method="POST">
     <label for="idmsg2">Choisir le message a supprimer :</label>
     <select name="idmsg" id="idmsg1">
     <option value=""></option>
     <?php
     optionmsg();
     error_reporting(0);
     ?>
    </select>
    <input type="submit"   value="Supprimer">
    </form>
    <?php
    $idmsg = $_POST['idmsg'];
    include '..\Config\connexionserver.php';
    $sql1 =  "DELETE FROM `message` WHERE ID = '$idmsg' ";
    if ($conn->query($sql1) === TRUE) {
    echo "";
    } else {
    echo "Error deleting record: " . $conn->error;
    }
?>
  	</div>
  	<div class="option">
      <br>
      <br>
      <br>
      <br>
    <a href="..\Config\renit.php" class="truc-a-centrer" >Rénitialiser la chatbox</a>
  	</div>
  	<div class="option">
        <br>
        <br>
        <br>
        <br>
        <a >Changer le mot de pase d'un utilisateur</a>
        <form action="..\Config\supr1.php" method="POST">             
        <input type="textarea" name="user" id="" placeholder="Nom d'utilisateur " onfocus="placeHolder()">             
        <input type="textarea" name="change_mdp" id="" placeholder="Nouveau mot de passe  " onfocus="placeHolder()">
        <input class="sub"type="submit" id='submit' value='Modifier' >             
        </form>
  	</div>
  	<div class="option">
        <br>
        <br>
        <br>
        <br>
      <a>Ajoutez un utilisateur</a>
      <form action="..\Config\ajouteuser.php" method="POST">             
        <input type="textarea" name="new_user" id="" placeholder="Utilisateur " onfocus="placeHolder()">             
        <input type="textarea" name="new_mdp" id="" placeholder="Mot de passe" onfocus="placeHolder()">             
        <input type="textarea" name="new_role" id="" placeholder="Rôle" onfocus="placeHolder()">             
        <input class="sub"type="submit" id='submit' value='entrer' >             
      </form>
  	</div>
  	<div class="option">
	<br>
        <br>
        <br>
        <br>
      <a>Déclarer un problème</a>
      <form action="..\Config\decprob.php" method="POST">                         
        <input type="textarea" name="new_mdp" id="" placeholder="Décrire le problème" onfocus="placeHolder()">                  
        <input class="sub"type="submit" id='submit' value='entrer' >             
      </form>
  	</div>
  	<div class="option">
        <br>
        <br>
        <br>
        <br>
<a href="../Site/formulaire.html">Déconnexion</a>
  	</div>
  	<div class="option">
  	</div>
  	<div class="option">
  	</div>
  </div>
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



