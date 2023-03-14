<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livres</title>
</head> 
<style>
    * {
        font-family:poppins;
    }

    h1 {
        color:#006699;
    }

    h2 {
        font-size:1.25em;
    }

    h3 {
        font-size:1em;
    }
</style>
<body>

    <h1>LIVRES</h1>

    <?php

        spl_autoload_register(function ($class_name) {
            include $class_name . ".php"; // COMMENT
        });

        $stephenking = new Author("Stephen", "King");

        $ca = new Book("Ca", 1138, 1986, 20.00, $stephenking);
        $simetierre = new Book("Simetierre", 374, 1983, 15.00, $stephenking);
        $lefleau = new Book("Le Fléau", 823, 1978, 14.00, $stephenking);
        $shining = new Book("Shining", 447, 1977, 16.00, $stephenking);

        $jkrowling = new Author("J.K", "Rowling");

        $hp1 = new Book("Harry Potter 1", 595, 1997, 20.99, $jkrowling);
        $hp2 = new Book("Harry Potter 2", 674, 1998, 21.49, $jkrowling);
        $hp3 = new Book("Harry Potter 3", 522, 1999, 22.95, $jkrowling);
        $hp3 = new Book("Harry Potter 4", 568, 2000, 250.45, $jkrowling);

        $charlyducournau = new Author("Charly", "Ducournau");

        $charlyvre = new Book("Comment rester bloquer sur un exercice 1 semaine durant", 25, 2023, 0.50, $charlyducournau);
        $charlyvre2 = new Book("Comment commenter son code après avoir réussi car on a pas compris grand chose", 5, 2023, 0.25, $charlyducournau);
        $charlyvre3 = new Book("Merci ChatGPT", 1, 2023, 0.12, $charlyducournau);

        echo $stephenking->afficherBibliographie();
        echo $jkrowling->afficherBibliographie();
        echo $charlyducournau->afficherBibliographie();


        echo $ca->setTitle("ca2") . "<br>";
        echo $ca->setnbPages(729) . "<br>";
        echo $ca->setParutionYear(9999) . "<br>";
        echo $ca->setPrice(20000) . "<br>";
        echo $ca->setAuthor($charlyducournau) . "<br>";


        echo $ca->getTitle() . "<br>";
        echo $ca->getnbPages() . "<br>";
        echo $ca->getParutionYear() . "<br>";
        echo $ca->getPrice() . "<br>";
        echo $ca->getAuthor() . "<br>";

        // Pour créer un livre, je dois $ca = new Book("...","..." etc) ou 
        // appeler une fonction pour créer un livre à partir de la classe
        // Author ? 
    
    ?>

</body>
</html>