<?php
    session_start();

    $db = mysqli_connect("localhost" , "root" , "" , "sugaro");// db connection

    if($_SERVER["REQUEST_METHOD"] == "POST"){

            $username = $db->real_escape_string($_POST['username']);
            $password = $db->real_escape_string($_POST['password']);

            $password = md5($password); 
            $sql = "SELECT * FROM users WHERE Username='$username' AND Password='$password'";
            $result = mysqli_query($db,$sql);
            $row = mysqli_fetch_assoc($result);

            if(mysqli_num_rows($result) == 1){

                $_SESSION['login_user'] = $username;
                $_SESSION['login_user_id'] = $row['ID'];
                $_SESSION['login_user_isAdmin'] = $row['admin'];
                header("location: frontPage.php?rez=succes");
                
            }else{
                
                echo '<script>alert("Username or password incorrect. Please try again!");window.location="frontPage.php"</script>';
            }
    }
?>