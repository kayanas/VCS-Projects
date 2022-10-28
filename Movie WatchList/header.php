<?php

include "./controllers/MovieController.php";

$edit = false;

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (isset($_POST['save'])) {
        MovieController::store();
        header("Location: ./index.php");
        die;
    }

    if (isset($_POST['edit'])) {
        $movie = MovieController::show();
        $edit = true;
    }

    if (isset($_POST['update'])) {
        $movie = MovieController::update();
        header("Location: ./index.php");
        die;
    }

    if (isset($_POST['destroy'])) {
        $movie = MovieController::destroy();
        header("Location: ./index.php");
        die;
    }

    if (isset($_POST['destroydvd'])) {
        $movie = MovieController::destroy();
        header("Location: ./index.cards.php");
        die;
    }
}

if (isset($_GET['search'])){
    $movies = MovieController::filter();
} else if (isset($_GET['sort'])) {
    $movies = MovieController::sort();
} else {
    $movies = MovieController::index();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WATCHLIST</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">
    
</head>

<body>

    <nav class="navbar navbar-light sticky-top">

        <div class="container-fluid">

            <a class="navbar-brand" href="./index.php">WATCHLIST</a>
            <a href="./index.cards.php">DVD STORE</a>

            <form class="" action="" method="post" enctype="multipart/form-data">

                <input type="text" name="title" value="<?= $edit ? $movie->title : "" ?>" placeholder="Title">
                <input type="text" name="rating" value="<?= $edit ? $movie->rating : "" ?>" placeholder="Rating">
                <input type="text" name="year" value="<?= $edit ? $movie->year : "" ?>" placeholder="Year">
                <input type="text" name="category" value="<?= $edit ? $movie->category : "" ?>" placeholder="Category">
                <input type="text" name="metascore" value="<?= $edit ? $movie->metascore : "" ?>" placeholder="Metascore">
                <input type="hidden" name="id" value="<?= $edit ? $movie->id : "" ?>">
                <?php
                if ($edit) { ?>
                    <button type="submit" name="update" class="btn btn-success">Update</button>
                <?php } else { ?>
                    <button type="submit" name="save" class="btn btn-primary">Save</button>
                <?php } ?>

            </form>

            <form class="d-flex" method="get">
                <input class="form-control me-2" type="text" name="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit" >Search</button>
            </form>

        </div>
    </nav>