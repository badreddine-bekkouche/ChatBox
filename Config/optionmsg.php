<?php
function optionmsg(){
								include '..\Config\connexionserver.php';
								$sql = "SELECT message,name,dateact,ID FROM message ";
								$result = $conn->query($sql);

		if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                						
		                                     echo "<option value=".$row["ID"].">".$row["message"]."</option>";
		                                      

		                                                                    
                                                    }
                                                }
                                            }


?>