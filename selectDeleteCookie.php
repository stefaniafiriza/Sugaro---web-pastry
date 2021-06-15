<?php
    $db = mysqli_connect("localhost" , "root" , "" , "sugaro");//Connection db

    $sql = "SELECT * FROM cookie";
    $result = mysqli_query($db,$sql);

    if (mysqli_num_rows($result) > 0){
        $contor=0;
        echo "
            <div class='table'>
                <div class='row header green'>
                    <div class='cell'>ID</div>  
                    <div class='cell'>Name of cookie</div>
                    <div class='cell'>Price</div>
                    <div class='cell'>Quantity</div>
                    <div class='cell'>Image</div>
                    <div class='cell dell'>Select to delete</div>
                    <div class='cell dell'>Edit Cookie</div>
                </div>";
                while($row = mysqli_fetch_assoc($result)) 
                {
                    echo '<div class="row">
                        <div class="cell">'.$row['ID'].'</div>
                        <div class="cell">'.$row['nume'].'</div>
                        <div class="cell">'.$row['pret'].'</div>
                        <div class="cell">'.$row['cantitate'].'</div>
                        <div class="cell">'.$row['image'].'</div>
                        <div class="cell dell">
                            <form action="deleteCookie.php" method="POST">
                                <input type="hidden" name="idCookieToDelete" id="idCookieToDelete" value="'.$row['ID'].'"/>
                                <button id="btnDell"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </div>
                        <div class="cell dell">
                            <form action="editCookie.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="idCookieToEditName" id="idCookieToEditName" value="'.$row['ID'].'"/>
                                <input type="text" class="edit" name="cookie" placeholder="Add another name" value="'.$row['nume'].'"/>
                                <input type="text" class="edit" name="cookie1" placeholder="Add another price" value="'.$row['pret'].'"/>
                                <input type="text" class="edit" name="cookie2" placeholder="Add another quantity" value="'.$row['cantitate'].'"/>
                                <input type="file" name="image" id="image" class="edit-img" />
                                <button id="btnEdit" class="btnEdit"><i class="fas fa-edit"></i></button>
                            </form>
                        </div>
                    </div>';
                }

                echo "</div>";
    }
?>