<?php
    $db = mysqli_connect("localhost" , "root" , "" , "sugaro");

    $sql = "SELECT * FROM notable WHERE ocupat = 0";
 
    $result_sql = mysqli_query($db,$sql);

    if(mysqli_num_rows($result_sql)){

        include "selectList.php";

    }else{
        echo '<script>alert("We currently have no table available!")</script>';
    }

    mysqli_close($db);
?>