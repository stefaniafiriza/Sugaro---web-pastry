<?php
    $db = mysqli_connect("localhost" , "root" , "" , "sugaro");//Connection db

    $sql = "SELECT * FROM users";
    $result = mysqli_query($db,$sql);

    if (mysqli_num_rows($result) > 0){
        $contor=0;
        echo "
            <div class='table'>
                <div class='row header green'>
                    <div class='cell'>ID</div>  
                    <div class='cell'>Name</div>
                    <div class='cell'>Username</div>
                    <div class='cell'>E-mail</div>
                    <div class='cell'>Admin</div>
                    <div class='cell dell'>Select</div>
                </div>";
                while($row = mysqli_fetch_assoc($result)) 
                {
                    echo '<div class="row">
                        <div class="cell">'.$row['ID'].'</div>
                        <div class="cell">'.$row['name'].'</div>
                        <div class="cell">'.$row['username'].'</div>
                        <div class="cell">'.$row['email'].'</div>
                        <div class="cell">'.$row['admin'].'</div>
                        <div class="cell dell">
                            <form action="deleteUser.php" method="POST">
                                <input type="hidden" name="idUserToDelete" id="idUserToDelete" value="'.$row['ID'].'"/>
                                <button id="btnDell"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </div>
                    </div>';
                }

                echo "</div>";
    }
?>