<?php

class Movie{
    public $title;
    public $language;
    public $director;
    public $overview;
    public $vote;
    public $protagonists;

    function __construct(String $_title, String $_language, String $_director, String $_overview, Int $_vote, Protagonists $_protagonists){
        $this->title = $_title;
        $this->language = $_language;
        $this->director = $_director;
        $this->overview = $_overview;
        $this->vote = $_vote;
        $this->protagonists = $_protagonists;
    }
}

class Protagonists{
    public $prot1;
    public $prot2;

    function __construct(String $_prot1, String $_prot2){
        $this->prot1 = $_prot1;
        $this->prot2 = $_prot2;
    }
}


$movie1 = new Movie ('El Secreto de sus Ojos', 'ES', 'Juan José Campanella', 'El secreto de sus ojos es una película argentina de drama y suspenso de 2009 dirigida por Juan José Campanella, basada en la novela La pregunta de sus ojos de Eduardo Sacheri, quien coescribió el guion junto a Campanella. Es protagonizada por Ricardo Darín y Soledad Villamil. Coprotagonizada por Pablo Rago, Javier Godino, Mario Alarcón y Mariano Argento. También, contó con las actuaciones especiales de Guillermo Francella y José Luis Gioia. La película, una coproducción realizada con capital local y de España, logró ser la película argentina de mayor éxito de 2009 y una de las más taquilleras de la historia del cine argentino, con más de dos millones y medio de espectadores. En 2010 se convirtió en la segunda película argentina en ganar el Óscar a la mejor película extranjera, después de La historia oficial (1985).', 5, new Protagonists('Ricardo Darin', 'Soledad Villamil'));
$movie2 = new Movie ('Nueve Reinas', 'ES', 'Fabián Bielinsky', 'Nueve reinas es una película argentina escrita y dirigida por Fabián Bielinsky, protagonizada por Ricardo Darín y Gastón Pauls y coprotagonizada por Ignasi Abadal, Tomás Fonzi, Graciela Tenembaum, Oscar Núñez, Alejandro Awada y Jorge Noya. También, contó con las actuaciones especiales de Leticia Brédice y la primera actriz Elsa Berenguer. Y la participación de Roly Serrano. Cuenta la historia de dos estafadores que se conocen por casualidad y deciden unirse para trabajar juntos. Tras su estreno, fue nominada a veintinueve premios internacionales, de los cuales ganó veintiuno. Es considerada la obra maestra de su director y un clásico insoslayable de la cinematografía de su país. En una encuesta de 2022 de las 100 mejores películas del cine argentino, la película alcanzó el puesto 10.', '4', new Protagonists('Ricardo Darin', 'Gaston Pauls') );
var_dump($movie1, $movie2);
?>