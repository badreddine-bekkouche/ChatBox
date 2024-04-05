<?php
session_start();



include '..\Config\connexionserver.php';




$sql = "SELECT ID,nomdutilisateur,motdepasse,statue FROM utilisateur1";
$result = $conn->query($sql);

		if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
		         if ( $row["nomdutilisateur"] == $_POST['username'] && $row["motdepasse"] == MD5($_POST['password'])) {

		                                             	$_SESSION["azzrine"] = $row["nomdutilisateur"];

		      										 if ( $row["statue"] == 'Modérateur'){
		      										 	
		      										 	header("Location: ..\Site\Modérateur.php");

		      										 }		
		      										 if ( $row["statue"] == 'Admin'){
		      										 	
		      										 	header("Location: ..\Site\Admin.php");

		      										 }	
		      										 if ( $row["statue"] == 'Utilisateur'){
		      										 	
		      										 	header("Location: ..\Site\Utilisateur.php");

		      										 }			

		                                                                    
		                                                                    
                                                    }
        
                
        }}


?>
