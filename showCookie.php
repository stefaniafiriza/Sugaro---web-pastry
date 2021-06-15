<?php
    //session_start();

    $db = mysqli_connect("localhost" , "root" , "" , "sugaro");// db connection

    $sql = "SELECT * FROM cookie";
    $result = mysqli_query($db,$sql);

    while($row = mysqli_fetch_assoc($result)){
    ?>
        <div class="table">
            <div class="row">

                <div class="container">
                    <img src="cookie/<?php echo $row['image']; ?>" class="cookie">
                </div>
                <div class="cell">
                    <?php echo $row['nume']; ?>
                    <div class="descriere"><?php echo $row['descriere']; ?></div>
                </div>
                <div class="cell">
                    <div class="pret">$<?php echo $row['pret']; ?></div>
                    <button class="cart1"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
    <?php }?>