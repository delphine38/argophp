<?php

//pour lier à la connection
//préciser l'adresse en local du serveur;nom bdd,'utilisateur','pasword'
include "db.php";


//requete prépraper
$pdoStat = $objetPdo->prepare('SELECT * FROM firstname');

//execution de la requete préparée
// $pdoState->execute();    renvoie true ou false si réussi ou pas
$executetIsOk = $pdoStat->execute();

//recuperation des résultats de la requete
$names = $pdoStat->fetchAll();
// var_dump($names);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Argonautes Liste</title>
</head>

<body>
    <!-- Header section -->
    <header>
        <h1 class="text-center text-primary m-5">
            <img src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png" alt="Wild Code School logo" width="10%" />
            Les Argonautes
        </h1>
    </header>

    <!-- Main section -->
    <main>

        <!-- New member form -->
        <h2 class="text-center m-5">Ajouter un(e) Argonaute</h2>
        <article class="text-center">
            <a href="index.php"><input class="text-center" type="button" value="Ré insérer un nom ? "></a>
        </article>

        <!-- Member list -->
        <h2 class="text-center m-5">Membres de l'équipage</h2>
        <section class="member-list">
            <div class="member-item text-center">Eleftheria</div>
            <div class="member-item text-center">Gennadios</div>
            <div class="member-item text-center">Lysimachos</div>
            <article class="text-center">
                <a href="index.php"><input class="text-center" type="button" value="Ré insérer un nom ? "></a>
            </article>
            <div class="member-item text-center">
                <?php
                foreach ($names as $name)
                    echo '<p>' . $name["name"] . '</p>';
                ?>

            </div>
            <article class="text-center">
                <a href="index.php"><input class="text-center" type="button" value="Ré insérer un nom ? "></a>
            </article>
        </section>


    </main>

    <footer>
        <p class="text-center">Réalisé par Jason en Anthestérion de l'an 515 avant JC</p>
    </footer>
</body>

</html>