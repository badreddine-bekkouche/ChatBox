<?php
          include '..\Config\connexionserver.php';
          $username = stripslashes($_POST['user']);
          $result = $conn->query("SELECT * FROM utilisateur1 where nomdutilisateur = '$username' ");
          $resultat_tableau = $result->fetch_assoc() ;
          $new_mdp = stripslashes($_POST['change_mdp']);
          $id = $resultat_tableau["id"] ;
          $suprr = $conn->query("UPDATE utilisateur1 SET motdepasse=MD5('$new_mdp') where id =$id ");
          header("Location: ..\Site\admin.php");
?>