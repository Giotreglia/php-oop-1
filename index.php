<?php

// Definisco classe Movie
class Movie {
    public $title;
    public $director;
    public $genre;
    public $plot;

    // Costruttore
    public function __construct($title, $director, $genre, $plot)
    {
        $this->title = $title;
        $this->director = $director;
        $this->genre = $genre;
        $this->plot = $plot;
    } 

    // Metodo
    public function getFullMovieDescription() {
        return 'Titolo: ' . $this->title . '<br/>' . 'Regista: ' . $this->director . '<br/>' . 'Genere: ' . $this->genre . '<br/>' . 'Trama: ' . $this->plot; 
    }
}

// Nuovo film
$IlCavaliereOscuro = new Movie(
    'Il cavaliere oscuro', 
    'Christopher Nolan', 
    'Azione', 
    "Quando una minaccia chiamata Joker emerge dal suo misterioso passato creando scompiglio e caos nella città di Gotham, il Cavaliere Oscuro deve affrontare le più grandi sfide psicologiche e fisiche per combattere l'ingiustizia."
);

$LeAliDellaLiberta = new Movie(
    'Le ali della libertà',
    'Frank Darabont',
    'Drammatico',
    'Il banchiere Andy Dufresne viene arrestato per aver ucciso sua moglie e il suo amante. Dopo un duro adattamento, cerca di migliorare le condizioni del carcere e dare speranza ai suoi compagni.'
);

// Mostro a video il film
echo $IlCavaliereOscuro->getFullMovieDescription();
echo '<br/>';
echo '<br/>';
echo $LeAliDellaLiberta->getFullMovieDescription();