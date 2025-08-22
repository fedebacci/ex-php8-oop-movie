<?php

trait HasDirector {
    protected $director;

    public function setDirector($_director) {
        $this->director = $_director;
    }

    public function getDirector() {
        return $this->director;
    }
}

?>