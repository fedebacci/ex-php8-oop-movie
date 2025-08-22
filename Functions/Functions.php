<?php

function RenderMovieGenres($genres) {
    $html = "<div class='d-flex gap-1 flex-wrap'>";

    foreach($genres as $genre) {
        $html .= "<span class='badge text-bg-info'>$genre->name</span>";
    }

    $html .= "</div>";

    return $html;
}


function RenderMovieCard($movie) {

    $movieDirector = $movie->getDirector() ?? "Director Unknown";

    $movieGenres = RenderMovieGenres($movie->genres);

    $html = "
    <div class='col'>
        <div class='card h-100'>
            <div class='card-body'>
                <div class='d-flex justify-content-between'>
                    <h5 class='card-title m-0'>$movie->title</h5>

                    <span class='badge text-bg-secondary align-self-center'>$movie->year</span>
                </div>
                <p class='card-text'>$movieDirector</p>
                <p class='card-text'>" . $movie->getMovieDuration() . "</p>
                <p class='card-text'>$movieGenres</p>
                <p class='card-text m-0'>$movie->description</p>
                


            </div>
        </div>
    </div>";

    return $html;
}

?>