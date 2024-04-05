<?php
function lecturemsg(){
								include '..\Config\connexionserver.php';
								$sql = "SELECT message,name,dateact FROM message ";
								$result = $conn->query($sql);

		if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                						
		                                     echo "<span>[ ".$row["dateact"]." ] ".$row["name"]." : ".$row["message"]."</span><br><br>";
		                                      

		                                                                    
                                                    }
                                                }
                                            }

lecturemsg();
?>