<?php


// Lista film


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