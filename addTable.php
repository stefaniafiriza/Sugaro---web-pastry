<?php
    session_start();

    $db = mysqli_connect("localhost" , "root" , "" , "sugaro");// db connection

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $table = mysqli_real_escape_string($db,$_POST['table']);

        $sql = "SELECT mese FROM notable WHERE mese='$table'";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count > 0){
            //header("location:controlAdmin.php?result=ServiciuAlreadyExisted!");
            header("location:adminPage.php?result=TableAlreadyExisted!");
        }else{
            $sql = "INSERT INTO notable (mese) VALUES ('$table')";
            $result=mysqli_query($db,$sql);
            if($result==1){
                mysqli_close($db);
                //header('location:controlAdmin.php?rez=succes');
                header('location:adminPage.php?rez=succes');
            }
            else{
                //header('location:controlAdmin.php?rez=error');
                header('location:adminPage.php?rez=error');
            }
        }
    }
?>