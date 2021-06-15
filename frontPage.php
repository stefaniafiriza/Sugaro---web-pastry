<?php
    include('session.php');
?>

<html>
    <head>
        <meta charset="UTF-8"> 
        <title>Sugaro</title>
        <link rel="icon" type="image/png" href="img/icons/cake.png"/>
        <link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="language.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>

        <!--Part for language-->
        <div class="language">
            <div class="lan">
                <i class="fa fa-language" aria-hidden="true">:</i>

                <ul>
                    <li>
                        <b>England</b>
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                        <div class="triangle"></div>
                        <ul>
                            <li>
                                <i class="sl-flag flag-de">
                                    <div id="germany"></div>
                                </i>
                                <span class="active">Germany</span>
                            </li>

                            <li>
                                <i class="sl-flag flag-usa">
                                    <div id="usa"></div>
                                </i>
                                <span>USA</span>
                            </li>

                            <li>
                                <i class="sl-flag flag-ro">
                                    <div id="romanian"></div>
                                </i>
                                <span>Romanian</span>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>

        <!--Part for menu bar-->
        <div class="box">
            <ul type="none">
                <li><a href="#menu-div"> Menu</a></li>
                <li><a href="#contact-div"> Contact</a></li>
                

                <?php 
                    if(isset($_SESSION['login_user'])){
                        echo  '<li><a href="orderPage.php"> Online Order</a></li>';
                        echo  '<li><a href="bookingPage.php">Booking</a></li>';
                        echo  '<li>
                                    <div class="dropdown">
                                        <a onclick="myFunction()" class="dropbtn">Offers</a>
                                        <div id="myDropdown" class="dropdown-content">
                                            <a class="offer1" id="offer1">Offer 1</a>
                                            <a class="offer2" id="offer2">Offer 2</a>
                                        </div>
                                    </div>
                                </li>

                                <script type="text/javascript" src="js/drop-down.js"></script>';
                        echo  '<li id="btnLogOut"><a href="logout.php">Sign out</a></li>';

                        if(isset($_SESSION['login_user_isAdmin']) && $_SESSION['login_user_isAdmin']==1){
                            echo  '<li id="usernameSession"><a href="controlAdmin.php">'.$login_session.'</a></li>';
                        }

                    }else{
                        echo  '<li><a href="#team-div"> Team</a></li>';
                        echo '<li><a class="bnt1" id="btn1">Sign in</a></li>';
                        echo '<li><a class="btn2" id="btn2">Sign up</a></li>';
                    }
                ?>  
            </ul>
        </div>

        <img src="img/logo.png" class="title">

        <div class="div1">
            <img src="img/cake1.png" class="cake">

            <div class="text1">
                <h1>Hey sugar!</h1>
            </div>

            <div class="text2">
                <pre>Our cake bakery is small but with big love for <br>wonderful desserts.</pre>
            </div>
        </div>
        
        <div class="div2">

            <table>
                <tr>
                    <td>
                        <div class="text3" id="team-div">
                            <h1>Our love, for your <br>love</h1>
                            <pre>Our bakery is set up to cater specifically to the cake lover,<br>our bakery is open to everyone but only the most special<br>order. It would be great if our bakery can make you get your<br>own cake because that's where our family comes from!</pre>
                        </div>
                    </td>
                    <td>
                        <div class="div_img">
                            <img src="img/cake2.png">
                        </div>
                    </td>
                </tr>
            </table>
            
        </div>

        <div class="div3" id="menu-div">

            <h1>Menu</h1>
            <pre>Cake is a form of sweet food that is usually baked. Cover a<br>wide range of preparations that can be simple or elaborate.</pre>

            <table >
                <tr>
                    <td><pre>- Cassata -</pre></td>
                    <td><pre>- Fruitcake -</pre></td>
                    <td><pre>- Panforte -</pre></td>
                </tr>

                <tr>
                    <td style="vertical-align: top;">Cassata consists of round sponge cake moistened.</td>
                    <td style="vertical-align: top;">Made with candied or dried fruit, nuts, and spices.</td>
                    <td style="vertical-align: top;">Chewy Italian dessert containing fruits and nuts.</td>
                </tr>

                <tr>
                    <td><pre>$7</pre></td>
                    <td><pre>$7</pre></td>
                    <td><pre>$7</pre></td>
                </tr>

                <tr>
                    <td><pre>- Castell -</pre></td>
                    <td><pre>- Garash cake -</pre></td>
                    <td><pre>- Petit four -</pre></td>
                </tr>

                <tr>
                    <td style="vertical-align: top;">Cake made of sugar, flour, eggs, and starch syrup.</td>
                    <td style="vertical-align: top;">Garash is a type of chocolate cake in Bulgarian cuisine.</td>
                    <td style="vertical-align: top;">A petit four is a small bite-sized confectionery.</td>
                </tr>

                <tr>
                    <td><pre>$8</pre></td>
                    <td><pre>$8</pre></td>
                    <td><pre>$8</pre></td>
                </tr>
            </table>

        </div>

        <div class="div4">

            <div class="text4">
                <h1>The taste that you<br>will remember</h1>
                <pre>Our cake bakery is small but with big love for wonderful<br>desserts. Our cakes have all the ingredients for an amazing<br>bakery.</pre>
            </div>

            <table>
                <tr>
                    <td>
                        <div class="cake4">
                            <img src="img/cake4.jpg">
                        </div>        
                    </td>
                    <td>
                        <div class="cake3">
                            <img src="img/cake3.jpg">
                        </div>
                    </td>
                </tr>
            </table>
           
        </div>

        <div class="div5" id="contact-div">

            <div class="text5">

                <h1>Contact us for more details</h1>
                <pre>If you want to know more about our bakery or the team we have working at<br>our bakery, let us know by leaving a messages.</pre>
            
            </div>

            <div class="btn">

                <form action="" method="POST">
                    <input type="button" value="Contact us" class="button" onclick="location.href='contact.php';">
                </form>

            </div>
            
        </div>

        <div class="div6">

            <div><img src="img/logo.png" class="title_end"></div>

            <div class="utils">

                <ul type="none">
                    <li><pre>Phone: 0781-931-698
E-mail: info@mysite.com
                    </pre></li>
                    <li><pre>Address:</pre></li>
                    <li><pre>Mon - Fri: 9am - 8pm
Saturday: 10am - 5pm
Sunday: 10am - 5pm
                    </pre></li>
                </ul>
                
            </div>
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

        <script type="text/javascript" src="js/login.js"></script>

        <!--Registration-->
        <div class="reg-modal">
            <div class="modal-content">
                <form action="reg.php" method="POST">
                    <div class="close-reg">+</div>

                    <img src="login.png" alt="" style="width:90px;height:90px;">

                    <div class="input-icons">
                        <i class="fa fa-user icon" ></i>
                        <input class="log-reg" type="text" placeholder="Name" name="name" required>
                    </div>

                    <div class="input-icons">
                        <i class="fa fa-envelope icon" ></i>
                        <input class="log-reg" type="email" placeholder="E-mail" name="email" required>
                    </div>

                    <div class="input-icons">
                        <i class="fa fa-user icon" ></i>
                        <input class="log-reg" type="text" placeholder="Username" name="username" required>
                    </div>

                    <div class="input-icons">
                        <i class="fa fa-key icon"></i>
                        <input class="log-reg" type="password" placeholder="Password" name="password" autocomplete="new-password" required>
                    </div>

                    <input type="submit" value="Sign up" name="register-btn" style="border-radius: 8px; cursor: pointer; font-weight: bold; border: 1px solid;">
                </form>
            </div>
        </div>
        
        <script type="text/javascript" src="js/registration.js"></script>

        <div class="offer-modal">
            <div class="modal-content">
                
                    <div class="close-offer">+</div>
                    <img src="img/logo.png" class="title-offer"/>
                    <img src="img/discount1.png" class="discount"/>
                    <h2 class="reducere">DISCOUNT COUPON FOR BIRTHDAY CAKES!</h2>
                    <h4 class="reducere-conditie">If you spend $25 on other types of cakes.</h4>
            </div>
        </div>

        <script type="text/javascript" src="js/offer1.js"></script>

        <div class="offer1-modal">
            <div class="modal-content">
                
                    <div class="close1-offer">+</div>
                    <img src="img/logo.png" class="title-offer"/>
                    <img src="img/discount2.png" class="discount"/>
                    <h2 class="reducere">DISCOUNT COUPON FOR CAKES!</h2>
                    <h4 class="reducere-conditie">If you make an online reservation.</h4>
            </div>
        </div>

        <script type="text/javascript" src="js/offer2.js"></script>

    </body>
</html>