<?php
function supprimerlemsg($id){
								include '..\Config\connexionserver.php';
								$sql1 =  "DELETE FROM `message` WHERE ID = 313";
								if ($conn->query($sql1) === TRUE) {
                                                                   echo "Envoi du Message réussie";
                                } else {
                                        echo "Erreur: Echec de l'envoi du message" ;
                                        }
								}


supprimerlemsg($id)
?>