<?php 
session_start();
function EnvoiMsg($nom,$message){
				include '..\Config\connexionserver.php';
				$sql =  "INSERT INTO `message`( `message`, `name`, `dateact`) VALUES ('$message','$nom',NOW())";
				if ($conn->query($sql) === TRUE) {
                                                                   echo "Envoi du Message réussie";
                                } else {
                                        echo "Erreur: Echec de l'envoi du message" ;
                                        }
								}

?>