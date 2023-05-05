<?php


// Definisco classe Movie
class Movie {
    public $title;
    public $director;
    public $genres;
    public $plot;
    public $image;

    // Costruttore
    public function __construct($title, $director, Genres $genres, $plot, $image)
    {
        $this->title = $title;
        $this->director = $director;
        $this->genres = $genres;
        $this->plot = $plot;
        $this->image = $image;

         foreach ($genres as $genre) {
            if (!$genres instanceof Genres) {
                echo 'Ogni genere deve essere una instanza della classe Genres!';
                die();
            }
        }
    } 

    // Metodo
    public function getFullMovieDescription($movie) {
        return 
        '<div class="card" style="width: 18rem; height: 800px">
            <img src="' . $movie->image . '" class="card-img-top ms-img" alt="' . $movie->title . '">
            <div class="card-body">
                <h2>' . $movie->title . '</h2>
                <h4>' . $movie->director . '</h4>
                <h5>' . $movie->genres->genre1 . '/' . $movie->genres->genre2 . '/' . $movie->genres->genre3 . '</h5>
                <p class="card-text">' . $movie->plot . '</p>
            </div>
        </div>';
    }
}