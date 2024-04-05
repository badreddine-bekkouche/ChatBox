<?php
                include '..\Config\connexionserver.php';
                $sql3 = "DELETE  FROM message ";
                $result = $conn->query($sql3);
                header("Location: ..\Site\Admin.php");
?>