<?php

include "./models/Movie.php";

class MovieController{
    
    public static function index()
    {
        $movies = Movie::all();
        return $movies;
    }

    public static function show()
    {
        $movie = Movie::find($_POST['id']);
        return $movie;
    }

    public static function store()
    {
        Movie::create();
    }

    public static function sort()
    {
        return Movie::sort();
    }

    public static function filter()
    {
        return Movie::filter();
    }
 
    public static function update()
    {
        $movie = new Movie(); 
        $movie->id = $_POST['id'];
        $movie->title = $_POST['title'];
        $movie->rating = $_POST['rating'];
        $movie->year = $_POST['year'];
        $movie->category = $_POST['category'];
        $movie->metascore = $_POST['metascore'];
        $movie->update();
    }

    public static function destroy()
    {
        Movie::destroy($_POST['id']);
    }

}
?>