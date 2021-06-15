<?php
    //session_start();

    //$db = mysqli_connect("localhost" , "root" , "" , "sugaro");// db connection

    $sql = "SELECT * FROM booking";
    $result = mysqli_query($db,$sql);

    if(mysqli_num_rows($result) > 0){
        $contor=0;
        echo "
            <div class='table'>
                <div class='row header green'>
                    <div class='cell'>ID</div>  
                    <div class='cell'>Masa</div>
                    <div class='cell'>Username</div>
                    <div class='cell dell'>Data</div>
                    <div class='cell dell'>Ora</div>
                    <div class='cell dell'>Select</div>
                </div>";

            while($row = mysqli_fetch_assoc($result)){
                echo 
                    '<div class="row">
                                <div class="cell">'.$row['ID'].'</div>
                                <div class="cell">'.$row['ID_table'].'</div>
                                <div class="cell">'.$row['ID_user'].'</div>
                                <div class="cell">'.$row['data'].'</div>
                                <div class="cell">'.$row['ora'].'</div>
                                <div class="cell dell">
                                <form action="deleteBooking.php" method="POST">
                                    <input type="hidden" name="idBookingToDelete" id="idBookingToDelete" value="'.$row['ID_table'].'"/>
                                    <button id="btnDell"><i class="far fa-trash-alt"></i></button>
                                </form>
                        </div>
                    </div>';
            }
        echo "</div>";
    }else{
        echo "0 programari";
    }

    mysqli_close($db);
?>