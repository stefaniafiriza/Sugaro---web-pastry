<?php
    //session_start();

    $db = mysqli_connect("localhost" , "root" , "" , "sugaro");// db connection
    
    $contorZileOcupate = 0;
    $vectorZileOcupate = array();
    
    $sql= "SELECT * FROM booking";
    $result = mysqli_query($db,$sql);

    if (mysqli_num_rows($result) > 0) {
      
        while($row = mysqli_fetch_assoc($result)) 
        {
          $vectorZileOcupate[$contorZileOcupate] = $row['data'];
          $contorZileOcupate++;
        }
    }

    function verifData($dataCurenta,$vectorZileOcupate,$lenVector) {
   
        for($i=0;$i<$lenVector;$i++)
        {
            if($dataCurenta == $vectorZileOcupate[$i])
             return true;
        }
        return false;
    }
    
?>