<?php
function optionuser(){
								include '..\Config\connexionserver.php';
								$sql = "SELECT nomdutilisateur,ID FROM utilisateur1 ";
								$result = $conn->query($sql);

		if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                						
		                                     echo "<option value=".$row["ID"].">".$row["nomdutilisateur"]."</option>";
		                                      

		                                                                    
                                                    }
                                                }
                                            

}
?>