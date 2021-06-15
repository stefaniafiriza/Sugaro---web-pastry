<?php
    $db = mysqli_connect("localhost" , "root" , "" , "sugaro");//Connection db

    $sql = "SELECT * FROM notable";
    $result = mysqli_query($db,$sql);

    if (mysqli_num_rows($result) > 0){
        $contor=0;
        echo "
            <div class='table'>
                <div class='row header green'>
                    <div class='cell'>ID</div>  
                    <div class='cell'>Name of table</div>
                    <div class='cell'>Busy tables</div>
                    <div class='cell dell'>Select</div>
                </div>";

                while($row = mysqli_fetch_assoc($result)) 
                {
                    echo '<div class="row">
                        <div class="cell">'.$row['ID'].'</div>
                        <div class="cell">'.$row['mese'].'</div>
                        <div class="cell">'.$row['ocupat'].'</div>
                        <div class="cell dell">
                            <form action="deleteTable.php" method="POST">
                                <input type="hidden" name="idTableToDelete" id="idTableToDelete" value="'.$row['ID'].'"/>
                                <button id="btnDell"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </div>
                    </div>';
                }

                echo "</div>";
    }else{
        echo "0 table";
    }
?>