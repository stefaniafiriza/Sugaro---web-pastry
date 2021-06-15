<?php

    $db = mysqli_connect("localhost" , "root" , "" , "sugaro");//Connection db

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $cookie = mysqli_real_escape_string($db,$_POST['cookie']);
        $pret = intval(mysqli_real_escape_string($db,$_POST['pret']));
        $quantity = mysqli_real_escape_string($db,$_POST['quantity']);
        $description = mysqli_real_escape_string($db,$_POST['description']);

        $msg = "";
        $image = $_FILES['image']['name'];
        $target = "cookie/".basename($image);
        
        
        if($pret=='0'){
        //header("location:controlAdmin.php?result=InvalidPrice!");
        header("location:adminPage.php?result=InvalidPrice!");
        }

        $sql = "SELECT  nume FROM cookie WHERE nume='$cookie'";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count > 0){
            //header("location:controlAdmin.php?result=ServiciuAlreadyExisted!");
            header("location:adminPage.php?result=CookieAlreadyExisted!");
        }else{

            $sql = "INSERT INTO cookie (nume,pret,cantitate,image,descriere) VALUES ('$cookie','$pret','$quantity','$image','$description')";
            $result=mysqli_query($db,$sql);

            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)){
                $msg = "Image uploaded successfully";
            }else{
                $msg = "Failed to upload image";
            }

            if($result==1){
                mysqli_close($db);
                //header('location:controlAdmin.php?rez=succes');
                header('location:adminPage.php?rez=succes');
            }else{
                //header('location:controlAdmin.php?rez=error');
                header('location:adminPage.php?rez=error');
            }
        }
    }
?>