<html>
    <head>
        <meta charset="UTF-8"> 
        <title>Sugaro</title>
        <link rel="icon" type="image/png" href="img/icons/cake.png"/>

        <link rel="stylesheet" type="text/css" href="admin_style.css" media="screen"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

        <style>
            #optionAdmin6,#optionAdmin7{
                display: none;
            }
        </style>
    </head>
    <body>

    <img src="img/logo.png" class="title">

    <!--Part for menu bar-->
    <div class="box">
        <ul type="none">
            <li ><a href="frontPage.php">Home</a></li>
            <li onclick="selectOptionAdmin(1)"><a href="#">Add Table</a></li>
            <li onclick="selectOptionAdmin(2)"><a href="#">Delete Table</a></li>
            <li onclick="selectOptionAdmin(3)"><a href="#">Add Cookie</a></li>
            <li onclick="selectOptionAdmin(4)"><a href="#">Delete & Edit Cookie</a></li>
            <li onclick="selectOptionAdmin(5)"><a href="#">Go Appointments</a></li>
            <li onclick="selectOptionAdmin(6)"><a href="#">Delete users</a></li>
            <li onclick="selectOptionAdmin(7)"><a href="#">Make Admin</a></li>
        </ul>
    </div>

    <div class="options">

        <div id="optionAdmin1" class="add">
            <h3>Add Table</h3>
            <form action="addTable.php" method="POST">
                <input type="text" class="form" name="table" placeholder="Add name of table" required/>
                <input type="submit" id="submitServici" value="Send" class="submit"/>
            </form>
        </div>

        <div id="optionAdmin2" class="delete">
            <h3>Select the table you want to delete</h3>
            <?php include "selectDeleteTable.php"; ?>
        </div>

        <div id="optionAdmin3" class="add">
            <h3>Add Cookie</h3>
            <form action="addCookie.php" method="POST" enctype="multipart/form-data">
                <input type="text" class="form" name="cookie" placeholder="Add name of cookie" required/>
                <input type="text" class="form" id="pret" name="pret" placeholder="Add price" required/>
                <input type="text" class="form" id="cantitate" name="quantity" placeholder="Add quantity" required/>
                <textarea class="form" id="description" cols="40" rows="4" name="description" placeholder="Cookie description" required></textarea>
                <input type="file" name="image" id="image" class="upload"/>
                <input type="submit" id="submitServici" value="Send" class="submit"/>
            </form>
        </div>

        <div id="optionAdmin4" class="delete" style='margin: 0 300px;'>
            <h3>Select the cookie you want to delete or edit</h3>
            <?php include "selectDeleteCookie.php"; ?>
        </div>

        <div id="optionAdmin5" class="rez">
            <h3>Appointments List : </h3>
            <?php include "showBooking.php";?>
        </div>

        <div id="optionAdmin6" class="delete">
            <h3>Select the user you want to delete</h3>
            <?php include "selectDeleteUser.php"; ?>
        </div>

        <div id="optionAdmin7" class="add">
            <h3>Add another admin</h3>
            <form action="addAdmin.php" method="POST">
                <input type="text" class="form" name="name" placeholder="Name" required/>
                <input type="text" class="form" name="user" placeholder="Username" required/>
                <input type="text" class="form" name="email" placeholder="E-mail" required/>
                <input type="text" class="form" name="password" placeholder="Password" required/>
                <input type="submit" id="submitServici" value="Send" class="submit"/>
            </form>
        </div>
    </div>

    <script type="text/javascript" src="js/admin.js"></script>
    </body>
</html>