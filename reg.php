<?php
    session_start();

    $db = mysqli_connect("localhost" , "root" , "" , "sugaro");//db conncetion

    if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $name = $db->real_escape_string($_POST['name']);
            $username = $db->real_escape_string($_POST['username']);
            $email = $db->real_escape_string($_POST['email']);
            $password = $db->real_escape_string($_POST['password']);

            $password = md5($password); //md5 hash password

            $sql = "SELECT * FROM users WHERE Username='$username'";
            $result = mysqli_query($db,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);

            if($count > 0){

                header("location: frontPage.php?rez=EmailAlreadyExisted!");

            }else{

                $sql = "INSERT INTO users(name,  username, email, password,admin) VALUES('$name'  , '$username', '$email', '$password','0')";
                $result = mysqli_query($db,$sql);

                if($result == 1){
                    mysqli_close($db);
                    header("location: frontPage.php?rez=succes");
                }else{
                    header("location: frontPage.php?rez=error&?msg='.mysqli_error($db)");
                }
            }
    }
?>