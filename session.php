<?php
    session_start();
    $db = mysqli_connect("localhost" , "root" , "" , "sugaro");//db connection

    if(isset($_SESSION['login_user'])){
        $user_check = $_SESSION['login_user'];
        $ses_sql = mysqli_query($db,"SELECT username FROM users WHERE username='$user_check'");
        $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
    
    $login_session = $row['username'];  
    }else{
        $user_check ="empty";
      
    }

   
    
   
?>