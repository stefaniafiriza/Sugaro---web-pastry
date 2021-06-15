<?php
    include('session.php');
?>

<html>
    <head>
        <meta charset="UTF-8"> 
        <title>Sugaro</title>
        <link rel="icon" type="image/png" href="img/icons/cake.png"/>

        <link rel="stylesheet" type="text/css" href="order_style.css" media="screen"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    </head>
    <body>
        <img src="img/logo.png" class="title">

        <!--Part for menu bar-->
        <div class="box">
            <ul type="none">
                <li><a href="frontPage.php">Home</a></li>
                <li><a href="">Reviews</a></li>

                <?php 
                    if(isset($_SESSION['login_user'])){
                        echo  '<li><a href="">My Orders</a></li>';
                        echo  '<li id="btnLogOut"><a href="logout.php">Sign out</a></li>';
                        echo  '<li><a href="">Cart</a></li>';

                        if(isset($_SESSION['login_user_isAdmin']) && $_SESSION['login_user_isAdmin']==1){
                            echo  '<li id="usernameSession"><a href="controlAdmin.php">'.$login_session.'</a></li>';
                        }

                    }
                ?> 

            </ul>
        </div>

        <div class="div1">
            <h1>Cookies</h1>
        </div>

        
        <div>
            <?php include 'showCookie.php';?>
        </div>
        
    </body>
</html>