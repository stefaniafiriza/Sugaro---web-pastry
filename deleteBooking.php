<?php
    session_start();
    $db = mysqli_connect("localhost" , "root" , "" , "sugaro");//Connection db

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $idBooking = mysqli_real_escape_string($db,$_POST['idBookingToDelete']);
        $sql_upt = "UPDATE notable SET ocupat='0' WHERE ID=$idBooking";

        $sql = "DELETE FROM booking WHERE ID_table='$idBooking'";

        if(mysqli_query($db, $sql_upt)){
            if (mysqli_query($db, $sql)){
                echo "Record deleted successfully";
                //header('location:controlAdmin.php?rez=succes');
                header('location:adminPage.php?rez=succes');
            } else {
                //header('location:controlAdmin.php?rez=error');
                header('location:adminPage.php?rez=error');
            }
        }else {
            echo "Error updating record: " ;
        }
        
    }
?>