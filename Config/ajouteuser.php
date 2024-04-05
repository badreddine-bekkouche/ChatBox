<?php
          include '..\Config\connexionserver.php';
           $user = stripslashes($_POST['new_user']); 
            $role = stripslashes($_POST['new_role']);
            $mdp = stripslashes($_POST['new_mdp']);
            $envoyer = $conn->query ("INSERT INTO utilisateur1(nomdutilisateur, motdepasse, statue, ID) VALUES('$user',MD5('$mdp'),'$role','')");
     header("Location: ..\Site\Admin.php");
?>
