<?php
    session_start();
    $db = mysqli_connect("localhost" , "root" , "" , "sugaro");//Connection db

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $idCookie = mysqli_real_escape_string($db,$_POST['idCookieToEditName']);
        $old_image = "SELECT 'image' FROM cookie WHERE ID=$idCookie";

        $msg = "";
        $image = $_FILES['image']['name'];
        $target = "cookie/".basename($image);

        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
            $image = $old_image;
        }

        $name = mysqli_real_escape_string($db,$_POST['cookie']);
        $price = mysqli_real_escape_string($db,$_POST['cookie1']);
        $quantity = mysqli_real_escape_string($db,$_POST['cookie2']);
        
        $sql_upt_name = "UPDATE cookie SET nume='$name' WHERE ID=$idCookie";
        $sql_upt_pret = "UPDATE cookie SET pret='$price' WHERE ID=$idCookie";
        $sql_upt_quantity = "UPDATE cookie SET cantitate='$quantity' WHERE ID=$idCookie";
        $sql_upt_image = "UPDATE cookie SET image='$image' WHERE ID=$idCookie";
        $sql_upt = "UPDATE cookie SET nume='$name',pret='$price',cantitate='$quantity',image='$image' WHERE ID=$idCookie";

       
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)){
            $image = $_FILES['image']['name'];
        }else{
            $image = "cupcake1.jpg";
        }
       

        if (mysqli_query($db, $sql_upt_name)){
            echo "Record edited successfully";
            //header('location:controlAdmin.php?rez=succes');
            header('location:adminPage.php?rez=succes');
        } else {
            //header('location:controlAdmin.php?rez=error');
            //header('location:adminPage.php?rez=error');
        }

        if (mysqli_query($db, $sql_upt_pret)){
            echo "Record edited successfully";
            //header('location:controlAdmin.php?rez=succes');
            header('location:adminPage.php?rez=succes');
        } else {
            //header('location:controlAdmin.php?rez=error');
            //header('location:adminPage.php?rez=error');
        }

        if (mysqli_query($db, $sql_upt_quantity)){
            echo "Record edited successfully";
            //header('location:controlAdmin.php?rez=succes');
            header('location:adminPage.php?rez=succes');
        } else {
            //header('location:controlAdmin.php?rez=error');
            header('location:adminPage.php?rez=succes');
        }

        if (mysqli_query($db, $sql_upt_image)){
            echo "Record edited successfully";
            //header('location:controlAdmin.php?rez=succes');
            header('location:adminPage.php?rez=succes');
        } else {
            //header('location:controlAdmin.php?rez=error');
            //header('location:adminPage.php?rez=error');
        }

        if (mysqli_query($db, $sql_upt)){
            echo "Record edited successfully";
            //header('location:controlAdmin.php?rez=succes');
            header('location:adminPage.php?rez=succes');
        } else {
            //header('location:controlAdmin.php?rez=error');
            //header('location:adminPage.php?rez=error');
        }
    }
?>