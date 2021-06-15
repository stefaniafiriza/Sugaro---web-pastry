<?php

    $db = mysqli_connect("localhost" , "root" , "" , "sugaro");//Connection db

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = mysqli_real_escape_string($db,$_POST['name']);
        $user = mysqli_real_escape_string($db,$_POST['user']);
        $email = mysqli_real_escape_string($db,$_POST['email']);
        $password = mysqli_real_escape_string($db,$_POST['password']);
        $password = md5($password); //md5 hash password

        $sql = "SELECT  username FROM users WHERE username='$user'";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count > 0){
            //header("location:controlAdmin.php?result=ServiciuAlreadyExisted!");
            header("location:adminPage.php?result=UserAlreadyExisted!");
        }else{
            $sql = "INSERT INTO users (name,username,email,password,admin) VALUES ('$name','$user','$email','$password','1')";
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