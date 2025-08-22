<?php

require_once './Traits/HasDirector.php';

require_once './Models/Movie.php';
require_once './Models/Genre.php';

require_once './db/db.php';

require_once './Functions/functions.php';



// ! Debug
// echo RenderMovieCard($movies[0]);
// var_dump($movies);

// // var_dump($movies[0]);
// // var_dump($movies[1]);
// echo "Duration of Movie 1: " . $movies[0]->getMovieDuration() . "<br>";
// echo "Duration of Movie 2: " . $movies[1]->getMovieDuration() . "<br>";

$movies[0]->setNewGenre("Thriller", "A genre that creates suspense and excitement.");
$movies[0]->setDirector("Christopher Nolan");
$movies[1]->setDirector("Francis Ford Coppola");

// ! Debug
// // var_dump($movies[0]);
// // var_dump($movies[1]);

// echo "<hr/>";

$newGenre = new Genre("Adventure", "A genre that involves exciting journeys and exploration.");

$movies[2]->setDirector("Christopher Nolan");

// ! Debug
// // var_dump($movies[2]);

$movies[2]->setNewGenre($newGenre->name, $newGenre->description);

// ! Debug
// // var_dump($movies[2]);
// var_dump($movies[2]->getDirector());

// echo "<hr/>";
// // var_dump($movies[3]);
// var_dump($movies[0]->genres);
// var_dump($movies[1]->genres);
// var_dump($movies[2]->genres);
// var_dump($movies[3]->genres);

// // var_dump($movies);

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

<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-3">
            <?php
                foreach($movies as $movie) {
                    echo RenderMovieCard($movie);
                }
            ?>
        </div>
    </div>
</section>

    

    <!-- # Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>