<?php

require __DIR__ . '/Models/Movie.php';
require __DIR__ . '/Models/Genres.php';



// Nuovo film

// Il cavaliere oscuro
$generiIlCavaliereOscuro = new Genres ('Azione','Poliziesco','Drammatico');
$IlCavaliereOscuro = new Movie(
    'Il cavaliere oscuro', 
    'Christopher Nolan', 
    $generiIlCavaliereOscuro,
    "Quando una minaccia chiamata Joker emerge dal suo misterioso passato creando scompiglio e caos nella città di Gotham, il Cavaliere Oscuro deve affrontare le più grandi sfide psicologiche e fisiche per combattere l'ingiustizia.",
    "https://pad.mymovies.it/filmclub/2007/02/131/locandina.jpg"
);



// Le ali della libertà
$generiLeAliDellaLiberta = new Genres ('Azione','Poliziesco','Drammatico');
$LeAliDellaLiberta = new Movie(
    'Le ali della libertà',
    'Frank Darabont',
    $generiLeAliDellaLiberta,
    'Il banchiere Andy Dufresne viene arrestato per aver ucciso sua moglie e il suo amante. Dopo un duro adattamento, cerca di migliorare le condizioni del carcere e dare speranza ai suoi compagni.',
    'https://pad.mymovies.it/filmclub/2002/08/151/locandina.jpg'
);



// Il padrino
$generiIlPadrino = new Genres ('Azione','Poliziesco','Drammatico');
$IlPadrino = new Movie(
    'Il padrino',
    'Francis Ford Coppola',
    $generiIlPadrino,
    "Il patriarca invecchiando di un'organizzazione criminale trasferisce il controllo del suo impero clandestino al suo figlio riluttante.",
    'https://pad.mymovies.it/filmclub/2002/08/056/locandina.jpg'
);



// Il Signore degli Anelli - Il ritorno del re
$generiIlSignoreDegliAnelliIlRitornoDelRe = new Genres ('Azione','Poliziesco','Drammatico');
$IlSignoreDegliAnelliIlRitornoDelRe = new Movie(
    'Il Signore degli Anelli - Il ritorno del re',
    'Peter Jackson',
    $generiIlSignoreDegliAnelliIlRitornoDelRe,
    "Gandalf e Aragorn guidano il Mondo degli uomini contro l'esercito di Sauron per attirare il suo sguardo lontano da Frodo e Sam mentre si avvicinano al Monte Fato con l'Unico Anello.",
    'https://pad.mymovies.it/filmclub/2004/01/014/locandina.jpg'
);
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
                <div class="col col-3">
                <div class="card" style="width: 18rem; height: 800px">
                        <img src="<?php echo $IlCavaliereOscuro->image ?>" class="card-img-top ms-img" alt="<?php echo $IlCavaliereOscuro->title ?>">
                        <div class="card-body">
                            <h2><?php echo $IlCavaliereOscuro->title ?></h2>
                            <h4><?php echo $IlCavaliereOscuro->director ?></h4>
                            <h5><?php echo $IlCavaliereOscuro->genres->genre1 . '/' . $IlCavaliereOscuro->genres->genre2 . '/' . $IlCavaliereOscuro->genres->genre3 ?></h5>
                            <p class="card-text"><?php echo $IlCavaliereOscuro->plot ?></p>
                        </div>
                    </div>
                </div>
                <div class="col col-3">
                    <div class="card" style="width: 18rem; height: 800px">
                        <img src="<?php echo $LeAliDellaLiberta->image ?>" class="card-img-top ms-img" alt="<?php echo $LeAliDellaLiberta->title ?>">
                        <div class="card-body">
                            <h2><?php echo $LeAliDellaLiberta->title ?></h2>
                            <h4><?php echo $LeAliDellaLiberta->director ?></h4>
                            <h5><?php echo $LeAliDellaLiberta->genres->genre1 . '/' . $LeAliDellaLiberta->genres->genre2 . '/' . $LeAliDellaLiberta->genres->genre3 ?></h5>
                            <p class="card-text"><?php echo $LeAliDellaLiberta->plot ?></p>
                        </div>
                    </div>
                </div>
                <div class="col col-3">
                    <div class="card" style="width: 18rem; height: 800px">
                        <img src="<?php echo $IlPadrino->image ?>" class="card-img-top ms-img" alt="<?php echo $IlPadrino->title ?>">
                        <div class="card-body">
                            <h2><?php echo $IlPadrino->title ?></h2>
                            <h4><?php echo $IlPadrino->director ?></h4>
                            <h5><?php echo $IlPadrino->genres->genre1 . '/' . $IlPadrino->genres->genre2 . '/' . $IlPadrino->genres->genre3 ?></h5>
                            <p class="card-text"><?php echo $IlPadrino->plot ?></p>
                        </div>
                    </div>
                </div>
                <div class="col col-3">
                    <div class="card" style="width: 18rem; height: 800px">
                        <img src="<?php echo $IlSignoreDegliAnelliIlRitornoDelRe->image ?>" class="card-img-top ms-img" alt="<?php echo $IlSignoreDegliAnelliIlRitornoDelRe->title ?>">
                        <div class="card-body">
                            <h2><?php echo $IlSignoreDegliAnelliIlRitornoDelRe->title ?></h2>
                            <h4><?php echo $IlSignoreDegliAnelliIlRitornoDelRe->director ?></h4>
                            <h5><?php echo $IlSignoreDegliAnelliIlRitornoDelRe->genres->genre1 . '/' . $IlSignoreDegliAnelliIlRitornoDelRe->genres->genre2 . '/' . $IlSignoreDegliAnelliIlRitornoDelRe->genres->genre3 ?></h5>
                            <p class="card-text"><?php echo $IlSignoreDegliAnelliIlRitornoDelRe->plot ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


</body>
</html>