<?php

include '..\Config\connexionserver.php';

$sql = "SELECT nomdutilisateur,statue FROM utilisateur1";
$result = $conn->query($sql);





		if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
		                                             if ( $row["nomdutilisateur"] == $_POST['username'] && $row["statue"] == 'Modérateur') {
		                                             							
		                                                                   	 header("Location: ..\Site\Modérateur.php");
		                                                                   	  
		                                             }elseif ($row["nomdutilisateur"] == $_POST['username'] && $row["statue"] == 'Admin') {
		                                             	
	         																 header("Location: ..\Site\Admin.php");
	         																  
													 }else{
													 	
		 																	header("Location: ..\Site\Utilisateur.php");
		 																	 

													}
		                                                                    
                                                    }
        
                
        }


?>
