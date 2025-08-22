<?php

class Movie {
    public $title;
    public $year;
    public $duration;
    public $genres = [];

    use HasDirector;

    public function __construct($_title, $_year, $_duration, Genre $_genre = null) {
        $this->title = $_title;
        $this->year = $_year;
        $this->duration = $_duration;
        $this->genres[] = $_genre ? $_genre : new Genre("Unknown", "No description available");
    }

    public function getMovieDuration() {
        return "The duration of the movie is: " . round($this->duration / 60, 0) . " hours, " . $this->duration % 60 . " minutes (" . $this->duration . " minutes).";
    }

    public function setNewGenre($name, $description) {
        return $this->genres[] = new Genre($name, $description);
    }
}

?>