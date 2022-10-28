<?php
include "./models/Db.php";

class Movie
{


    public $id;
    public $title;
    public $rating;
    public $year;
    public $category;
    public $metascore;
    public $img;

    function __construct($id = null, $title = null, $rating = null, $year = null, $category = null, $metascore = null, $img = null)
    {

        $this->id = $id;
        $this->title = $title;
        $this->rating = $rating;
        $this->year = $year;
        $this->category = $category;
        $this->metascore = $metascore;
        $this->img = $img;
    }

    public static function all()
    {
        $movies = [];
        $db = new Db();
        $sql = "SELECT * FROM `movies`";
        $result = $db->conn->query($sql);

        while ($row = $result->fetch_assoc()) {
            $movies[] = new Movie($row['id'], $row['title'], $row['rating'], $row['year'], $row['category'], $row['metascore'], $row['img']);
        }

        $db->conn->close();
        return $movies;
    }

    public static function sort()
    {
        $movies = [];
        $db = new Db();
        $end = "";
        switch ($_GET['sort']) {
            case 'id asc':
                $end = "`id` asc";
                break;
            case 'id desc':
                $end = "`id` desc";
                break;
            case 'title asc':
                $end = "title asc";
                break;
            case 'title desc':
                $end = "title desc";
                break;
        }

        $sql = "SELECT * FROM `movies` ORDER BY " . $end;
        $result = $db->conn->query($sql);

        while ($row = $result->fetch_assoc()) {
            $movies[] = new Movie($row['id'], $row['title'], $row['rating'], $row['year'], $row['category'], $row['metascore']);
        }

        $db->conn->close();
        return $movies;
    }


    public static function filter()
    {
        $movies = [];
        $db = new Db();
        $sql = "SELECT * FROM `movies` WHERE `title` LIKE '%".$_GET['search']."%' ";
        $result = $db->conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            $movies[] = new Movie($row['id'], $row['title'], $row['rating'], $row['year'], $row['category'], $row['metascore']);
            
        }

        $db->conn->close();
        return $movies;
    }



    public static function create()
    {
        $db = new Db();
        $stmt = $db->conn->prepare("INSERT INTO `movies`(`title`, `rating`, `year`, `category`, `metascore`) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sdisi", $_POST['title'], $_POST['rating'], $_POST['year'], $_POST['category'], $_POST['metascore']);
        $stmt->execute();
        $stmt->close();
        $db->conn->close();
        
    }

    public static function find($id)
    {
        $movie = new Movie();
        $db = new Db();
        $sql = "SELECT * FROM `movies` WHERE `id` = " . $id;
        $result = $db->conn->query($sql);

        while ($row = $result->fetch_assoc()) {
            $movie = new Movie($row['id'], $row['title'], $row['rating'], $row['year'], $row['category'], $row['metascore']);
        }

        $db->conn->close();
        return $movie;
    } 

    public static function update()
    {
        $db = new Db();
        $stmt = $db->conn->prepare("UPDATE `movies` SET `title`=?,`rating`=?,`year`=?,`category`=?,`metascore`=? WHERE `id` = ?");
        $stmt->bind_param("sdisii", $_POST['title'], $_POST['rating'], $_POST['year'], $_POST['category'], $_POST['metascore'], $_POST['id']);
        $stmt->execute();
        $stmt->close();
        $db->conn->close();
    }

    public static function destroy($id)
    {
        $db = new Db();
        $stmt = $db->conn->prepare("DELETE FROM `movies` WHERE `id` = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
        $db->conn->close();
    }

    public function __toString()
    {
        return "<br>Filmo pavadinimas - " . $this->title . ", Imdb vertinamas - " . $this->rating . " balu. Filmas isleistas - " . $this->year . " metais, filmo kategorija - " . $this->category . ", o kritiku vertinimas lygus -  " . $this->metascore . "." . "<br>";
    }
}
