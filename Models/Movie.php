<?php

class Movie {
    public $title;
    public $description;
    public $year;
    public $duration;
    public $genres = [];

    use HasDirector;

    public function __construct($_title, $_description, $_year, $_duration, Genre $_genre = null) {
        $this->title = $_title;
        $this->description = $_description;
        $this->year = $_year;
        $this->duration = $_duration;
        $this->genres[] = $_genre ? $_genre : new Genre("Unknown", "No description available");
    }

    public function getMovieDuration() {
        return round($this->duration / 60, 0) . "h:" . $this->duration % 60 . "m (" . $this->duration . " minutes).";
    }

    public function setNewGenre($name, $description) {
        return $this->genres[] = new Genre($name, $description);
    }
}

?>