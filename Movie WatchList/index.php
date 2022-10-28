<?php

include "./header.php";

?>
<table class="container table table-hover">

    <tr>
        <th> ID
            <form class="sort" action="" method="GET">
                <input type="hidden" name="sort" value="id asc">
            <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bi bi-caret-up-fill" viewBox="0 0 16 16">
  <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
</svg></button> 
            </form>
            
            
            <form class="sort" action="" method="GET">
                <input type="hidden" name="sort" value="id desc">
            <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg></button> 
            </form> 
            
            
        </th>
        <th>Title
        <form class="sort" action="" method="GET">
                <input type="hidden" name="sort" value="title asc">
            <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16">
  <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
</svg></button> 
            </form>
            <form class="sort" action="" method="GET">
                <input type="hidden" name="sort" value="title desc">
            <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg></button> 
            </form> 
        </th>
        <th>Rating</th>
        <th>Year</th>
        <th>Category</th>
        <th>Metascore</th>
        <th>Image</th>
        <th>Edit</th>
        <th>Delete</th>

    </tr>

    <?php foreach ($movies as $movie) { ?>
        <tr>
            <?php foreach ($movie as $values) { ?>
                <td> <?= $values ?> </td>

            <?php } ?>
            
            <td>
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $movie->id ?>">
                    <button type="submit" name="edit" class="btn btn-primary">Edit</button>
                </form>

            </td>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $movie->id ?>">
                    <button type="submit" name="destroy" class="btn btn-danger">Delete</button>
                </form>

            </td>
        </tr>
        <?php } ?>
        
    </table>
    
    <!-- <?php echo $movies[7] ?> -->

<!-- <hr> -->

</body>
</html>