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
            <img src="<?php echo' . $movie . '->image ?>" class="card-img-top ms-img" alt="<?php echo' . $movie .'->title ?>">
            <div class="card-body">
                <h2><?php echo' . $movie . '->title ?></h2>
                <h4><?php echo' . $movie . '->director ?></h4>
                <h5><?php echo' . $movie .'->genre ?></h5>
                <p class="card-text"><?php echo' . $movie . '->plot ?></p>
            </div>
        </div>';
    }

    public function getGenres() {
        $generi = '';

        foreach ($genres as $genre) {
            $generi .= $genres->genre1 . ', ' . $genres->genre2 . ', ' . $genres->genre3 . '<br>';
        }

        return $generi;
    }
}