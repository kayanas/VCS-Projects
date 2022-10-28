<?php

include "./header.php";

?>

<div class="container">
    <div class="container-fluid">

    <?php
    foreach ($movies as $i => $movie) {
        if ($i % 4 == 0) {
            echo '<div class="row">';
        }
    ?>
        <div class="card col-sm-3 ml-1">
            <h4><?=$movie->title ?></h4>

            <img src="./images/<?=$movie->img?>" alt="">
            
            <h5><?=$movie->year ?></h4>

            <h6><?=$movie->category ?></h4>

            <h6>IMDB SCORE <?=$movie->rating ?></h4>

            <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $movie->id ?>">
                    <button type="submit" name="edit" class="btn btn-primary">Edit</button>
                    <input type="hidden" name="id" value="<?= $movie->id ?>">
                    <button type="submit" name="destroydvd" class="btn btn-danger">Delete</button>
            </form>


        </div>

        <?php
        if ($i % 4 == 3) {
            echo '</div>';
        }
        ?>
    <?php } ?>
</div>
</div>

</body>
</html>