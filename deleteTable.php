<?php
    session_start();
    $db = mysqli_connect("localhost" , "root" , "" , "sugaro");//Connection db

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $idTable = mysqli_real_escape_string($db,$_POST['idTableToDelete']);
        $sql = "DELETE FROM notable WHERE id='$idTable'";

        if (mysqli_query($db, $sql)){
            echo "Record deleted successfully";
            //header('location:controlAdmin.php?rez=succes');
            header('location:adminPage.php?rez=succes');
        } else {
            //header('location:controlAdmin.php?rez=error');
            header('location:adminPage.php?rez=error');
        }
    }
?>