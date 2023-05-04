<?php

require __DIR__ . '/Models/Movie.php';
require __DIR__ . '/Models/Genres.php';



// Nuovo film


$movies = [
// Il cavaliere oscuro

$IlCavaliereOscuro = new Movie(
    'Il cavaliere oscuro', 
    'Christopher Nolan', 
    new Genres ('Azione','Poliziesco','Drammatico'),
    "Quando una minaccia chiamata Joker emerge dal suo misterioso passato creando scompiglio e caos nella città di Gotham, il Cavaliere Oscuro deve affrontare le più grandi sfide psicologiche e fisiche per combattere l'ingiustizia.",
    "https://pad.mymovies.it/filmclub/2007/02/131/locandina.jpg"
),



// Le ali della libertà

$LeAliDellaLiberta = new Movie(
    'Le ali della libertà',
    'Frank Darabont',
    new Genres ('Azione','Poliziesco','Drammatico'),
    'Il banchiere Andy Dufresne viene arrestato per aver ucciso sua moglie e il suo amante. Dopo un duro adattamento, cerca di migliorare le condizioni del carcere e dare speranza ai suoi compagni.',
    'https://pad.mymovies.it/filmclub/2002/08/151/locandina.jpg'
),



// Il padrino

$IlPadrino = new Movie(
    'Il padrino',
    'Francis Ford Coppola',
    new Genres ('Azione','Poliziesco','Drammatico'),
    "Il patriarca invecchiando di un'organizzazione criminale trasferisce il controllo del suo impero clandestino al suo figlio riluttante.",
    'https://pad.mymovies.it/filmclub/2002/08/056/locandina.jpg'
),



// Il Signore degli Anelli - Il ritorno del re

$IlSignoreDegliAnelliIlRitornoDelRe = new Movie(
    'Il Signore degli Anelli - Il ritorno del re',
    'Peter Jackson',
    new Genres ('Azione','Poliziesco','Drammatico'),
    "Gandalf e Aragorn guidano il Mondo degli uomini contro l'esercito di Sauron per attirare il suo sguardo lontano da Frodo e Sam mentre si avvicinano al Monte Fato con l'Unico Anello.",
    'https://pad.mymovies.it/filmclub/2004/01/014/locandina.jpg'
)
];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>PHP Movie</title>
    <style>
        .ms-img {height: 400px;}
    </style>
</head>
<body class="bg-dark">

    <div class="container p-5">
        <h1 class="text-warning text-center m-3">PHP Movies</h1>
        
        <!-- Mostro a video i film -->
        <div class="container">
            <div class="row">
                <?php foreach ($movies as $movie) { ?>
                    <div class="col col-3">
                            
                        <div class="card" style="width: 18rem; height: 800px">
                                <img src="<?php echo $movie->image ?>" class="card-img-top ms-img" alt="<?php echo $movie->title ?>">
                                <div class="card-body">
                                    <h2><?php echo $movie->title ?></h2>
                                    <h4><?php echo $movie->director ?></h4>
                                    <h5><?php echo $movie->genres->genre1 . '/' . $movie->genres->genre2 . '/' . $movie->genres->genre3 ?></h5>
                                    <p class="card-text"><?php echo $movie->plot ?></p>
                                </div>
                        </div>
                    </div>
                <?php } ?>  
            </div>
        </div>

    </div>


</body>
</html>