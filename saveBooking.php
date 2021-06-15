<?php
    session_start();

    $db = mysqli_connect("localhost" , "root" , "" , "sugaro");// db connection

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(isset($_SESSION['login_user'])){
            $myuserID =  $_SESSION['login_user'];
        }else{
            $myuserID=0;
            $_SESSION['msgProgramare']="<h1>You must be logged in to make an appointment!</h1>";
            header('bookingPage.php?rez=NoLoged');
            exit();
        }

        $year = $db->real_escape_string($_POST['year']);
        $month = $db->real_escape_string($_POST['month']);
        $day = $db->real_escape_string($_POST['day']);
        $hour = $db->real_escape_string($_POST['hour']);
        $table = $db->real_escape_string($_POST['table']);

        /*echo $id_table."<br>";
        echo "user id:".$myuserID;*/

        $date=$year."-".$month."-".$day;
        /*echo  "<br>".$date;*/

        $sql = "INSERT INTO booking (ID_table,ID_user,data,ora) VALUES ('$table', '$myuserID', '$date', '$hour')";
        $result=mysqli_query($db,$sql);

        if($result == 1){
            $sql_upt = "UPDATE notable SET ocupat='1' WHERE id=$table";
            if (mysqli_query($db, $sql_upt)) 
            {
                mysqli_close($db);
                $_SESSION['msgProgramare']="<h1>Successful programming!</h1><br><b>We are waiting for you on $date, hour $hour.</br>";
                header('Location:bookingPage.php?rez=ok');
            } else {
                echo "Error updating record " ;
            }
        }else{
            $_SESSION['msgProgramare']="<h1>Failed programming - Try again later!</h1>";
            header('Location:bookingPage.php?rez=error');
        }
        
    }
?>