<?php

    $host="localhost";
    $user="root";
    $password="";
    $database="dbsiswa";

    $conn = new mysqli($host, $user, $password, $database);
    if ($conn){
        $buka=mysqli_select_db($conn,$database);
        if (!$buka){
            echo"Databese tidak terhubung";
        }
    }
else{ 
         echo "mysqli  tidak terhubung";

}


?>
