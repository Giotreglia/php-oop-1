<?php

require __DIR__ . '/Models/Movie.php';
require __DIR__ . '/Models/Genres.php';
require __DIR__ . '/Database/db.php';


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
                            
                        <?php echo $movie->getFullMovieDescription($movie); ?>

                    </div>
                <?php } ?>  
            </div>
        </div>

    </div>


</body>
</html>