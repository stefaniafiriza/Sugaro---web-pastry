<?php
    include('session.php');
?>

<html>
    <head>
        <meta charset="UTF-8"> 
        <title>Sugaro</title>
        <link rel="icon" type="image/png" href="img/icons/cake.png"/>

        <link rel="stylesheet" type="text/css" href="booking_style.css" media="screen"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            /*Style for login*/
            .lg-modal{
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0 , 0 , 0.7);
                position: absolute;
                top: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                display: none;
            }

            .modal-content{
                width: 500px;
                height: 300px;
                background-color: white;
                opacity: 1;
                border-radius: 4px;
                text-align: center;
                padding: 20px;
                position: relative;
                text-align: center;
            }

            .log-reg{
                width: 50%;
                /*display: block;*/
                margin: 5px auto;
                padding: 5px;
                text-align: center;
            }

            .log-reg:focus{
                outline: none;
            }

            .modal-content form , a{
                text-decoration: none;
                align-items: center;
                color: black;
                cursor: pointer;
            }

            .close{
                position: absolute;
                top: 0;
                color: black;
                right: 14px;
                font-size: 42px;
                font: bold;
                transform: rotate(45deg);
                cursor: pointer;
            }
            /*Style for icons*/
            .input-icons i { 
                position: absolute;
            } 
            
            .input-icons { 
                width: 100%; 
                margin-bottom: 10px;
            } 
            
            .icon { 
                padding: 10px; 
                padding-left: 5px;
                color: rgb(0, 0, 0); 
                min-width: 50px; 
                text-align: center;
            }
        </style>
    </head>

    <body>
        <img src="img/logo.png" class="title">

        <!--Part for menu bar-->
        <div class="box">
            <ul type="none">
                <li><a href="frontPage.php">Home</a></li>

                <?php 
                    if(isset($_SESSION['login_user'])){
                        echo  '<li><a href="orderPage.php"> Online Order</a></li>';
                        echo  '<li><a href="logout.php">Sign out</a></li>';

                        if(isset($_SESSION['login_user_isAdmin']) && $_SESSION['login_user_isAdmin']==1){
                            echo  '<li class="menu" id="usernameSession"><a href="controlAdmin.php">'.$login_session.'</a></li>';
                        }else{
                            echo  '<li class="menu" id="usernameSession"><a>'.$login_session.'</a></li>';
                        }

                    }
                ?>  
            </ul>
        </div>

        <!--Login-->
        <div class="lg-modal">
            <div class="modal-content">
               <form action="log.php" method="POST">

                   <div class="close">+</div>

                   <img src="login.png" alt="" style="width:100px;height:100px;">

                   <div class="input-icons">
                       <i class="fa fa-user icon" ></i>
                       <input class="log-reg" type="text" placeholder="Username" name="username" required>
                   </div>

                   <div class="input-icons">
                       <i class="fa fa-key icon"></i>
                        <input class="log-reg" type="password" placeholder="Password" name="password" required>
                   </div>
                   
                   <input class="sign-up" type="submit" value="Sign in" name="login-btn" style="border-radius: 8px; cursor: pointer; font-weight: bold; margin-top: 15px; border: 1px solid;">
               </form>
            </div>
        </div>

        

        <!--Part for booking-->
        <div id="dreptunghi">
            <div class="calendar">
                <?php include 'calendar.php'; ?>
            </div>

                <div class="info">

                    <b>Select date and table you want : </b>

                    <form action="saveBooking.php" method="post" onSubmit="return checkform()" >

                        <div>
                            <input type="text" class="form" placeholder="Please enter a year..." name="year" id="year" require/>
                        </div>
                        <div>
                            <input type="text" class="form" placeholder="Please enter a month..." name="month" id="month" require/>
                        </div>
                        <div>
                            <input type="text" class="form" placeholder="Please enter a day..." name="day" id="day" require/>
                        </div>
                        <div>
                            <input type="text" class="form" placeholder="Please enter a hour..." name="hour" require/>
                        </div>
                        <div>
                            <?php include "getNoTable.php"; ?>
                        </div>

                        <input type="submit" value="Submit" class="submit">
                    </form>
                </div>
                
        </div>
        <div class="resolved">
            <?php 
                if(isset($_SESSION['msgProgramare'])){
                    echo $_SESSION['msgProgramare'];
                    unset($_SESSION['msgProgramare']);
                }
            ?>
        </div>

        <script type="text/javascript" src="js/booking.js"></script>
    
    </body>
</html>