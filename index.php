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

        spl_autoload_register(function ($class_name) {           // !! PERMET DE CHARGER TOUTE LES CLASSES DU FICHIER RACINE !!
            include $class_name . ".php";
        });

        $stephenking = new Author("Stephen", "King");                     // J'instancie un nouvel auteur dans la classe Author ayant comme firstname "Stephen" et comme lastname "King"

        $ca = new Book("Ca", 1138, 1986, 20.00, $stephenking);                  // J'instancie mes livres, avec l'auteur respectif (nous obtiendrons le __toString l'objet en question de la classe Author)
        $simetierre = new Book("Simetierre", 374, 1983, 15.00, $stephenking);   // (ces livres sont instanciés dans la classe Book qui est fille de la classe Author, grâce au 'enfant' extends 'parent' )
        $lefleau = new Book("Le Fléau", 823, 1978, 14.00, $stephenking);
        $shining = new Book("Shining", 447, 1977, 16.00, $stephenking);

        $jkrowling = new Author("J.K", "Rowling");                                          // J'instancie un nouvel auteur ayant comme firstname "J.K" et comme lastname "Rowling"

        $hp1 = new Book("Harry Potter à l'école des sorciers", 305, 1997, 9.30, $jkrowling);        // J'instancie mes livres, avec comme auteur le __toString de l'auteur respectif
        $hp2 = new Book("Harry Potter et la chambre des secrets", 364, 1998, 9.30, $jkrowling);     // (ces livres sont instanciés dans la classe Book qui est fille de la classe
        $hp3 = new Book("Harry Potter et le Prisonnier d'Azkaban", 474, 1999, 10.80, $jkrowling);   // Author, grâce au 'enfant' extends 'parent' )
        $hp3 = new Book("Harry Potter et la Coupe de feu", 656, 2000, 14.90, $jkrowling);

        echo $stephenking->afficherBibliographie(); // J'appelle la méthode afficherBibliographie de l'objet $stephenking de la classe Author
        echo $jkrowling->afficherBibliographie();       
        
        echo "Méthodes '__toString' : <br><br>" . $stephenking . " " . $jkrowling . " " . $ca. " ";

    ?>

</body>
</html>