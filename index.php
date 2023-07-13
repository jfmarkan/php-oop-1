<?php

class Movie{
    public $title;
    public $language;
    public $director;
    public $overview;
    public $vote;


    function __construct(String $_title, String $_language, String $_director, String $_overview, Int $_vote, ){
        $this->title = $_title;
        $this->language = $_language;
        $this->director = $_director;
        $this->overview = $_overview;
        $this->vote = $_vote;
    }
}




$elSecreto = new Movie ('El Secreto de sus Ojos', 'ES', 'Juan José Campanella', 'Lorem ipsum dolor sit amet', 5);
var_dump($elSecreto);
?>