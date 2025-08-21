<?php

class Movie {
    public $title;
    public $director;
    public $year;
    public $duration;
    public Genre $genre;

    public function __construct($_title, $_director, $_year, $_duration, Genre $_genre = null) {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->duration = $_duration;
        $this->genre = $_genre;
    }

    public function getMovieDuration() {
        return "The duration of the movie is: " . round($this->duration / 60, 0) . " hours, " . $this->duration % 60 . " minutes (" . $this->duration . " minutes).";
    }
}

class Genre extends Movie {
    public $name;
    public $description;

    public function __construct($_name, $_description) {
        $this->name = $_name;
        $this->description = $_description;
    }
}

$movie1 = new Movie("Inception", "Christopher Nolan", 2010, 148, new Genre ("Sci-Fi", "A genre that explores futuristic concepts and advanced technology."));
$movie2 = new Movie("The Godfather", "Francis Ford Coppola", 1972, 175, new Genre ("Crime", "A genre that focuses on criminal activities and the lives of criminals."));

var_dump($movie1);
var_dump($movie2);
echo "Duration of Movie 1: " . $movie1->getMovieDuration() . "<br>";
echo "Duration of Movie 2: " . $movie2->getMovieDuration() . "<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Esercizio 4: "EX - PHP Classe Movie" (L05 - PHP OOP)
    </title>
    
    <!-- # Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>

    

    <!-- # Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>