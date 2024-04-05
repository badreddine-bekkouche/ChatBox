<?php
include '..\Config\connexionserver.php';

$sql = "SELECT nomutilisateur,status FROM utilisateur";
$result = $conn->query($sql);

		if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
		                                             if ( $row["nomutilisateur"] == $_POST['username'] && $row["status"] == 'Modérateur') {
		                                                                   	 header("Location: ..\Site\Modérateur.php");
		                                             }elseif ($row["nomutilisateur"] == $_POST['username'] && $row["status"] == 'Admin') {
	         																 header("Location: ..\Site\Admin.php");
													 }else{
		 																	header("Location: ..\Site\Utilisateur.php");
													}
		                                                                    
                                                    }
        
                
        }


?>
