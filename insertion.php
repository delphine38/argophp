<?php
//pour lier à la connection
//préciser l'adresse en local du serveur;nom bdd,'utilisateur','pasword'
$objetPdo = new PDO('mysql:host=localhost;dbname=argonautesapi', 'argonautesapi', 'argonautesapi');

//préparer la requete d'insertion
$pdoState = $objetPdo->prepare('INSERT INTO firstname VALUES (NULL, :nom)');

//lier les marqueurs à une valeur
//mon type de valeur est de valeur chaine : PDO::PARAM_STR
$pdoState->bindValue(':nom', $_POST['name'], PDO::PARAM_STR);

//execution de la requete préparée
// $pdoState->execute();
$insertIsOk = $pdoState->execute();
if ($insertIsOk) {
    $name = 'name inserer bdd';
} else {
    $name = 'echec';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Argonautes Php</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <!-- Header section -->
    <header>
        <h1 class="text-center text-primary m-5">
            <img src=" https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png" alt="Wild Code School logo" width="10%" />
            Les Argonautes
        </h1>
    </header>

    <!-- Main section -->
    <main>

        <!-- New member form -->
        <h2 class="text-center m-5">Ajouter un(e) Argonaute</h2>
        <!-- <form action="liste.php" id="list" method="post" class="new-member-form text-center">
            <label for="name">Nom de l&apos;Argonaute</label>
            <input id="name" name="name" type="text" placeholder="Entre ton nom" />
            <button type="submit">Envoyer</button>
            <img src="images/bravo.png" alt="image bravo" width="10%">
            <span class="bravo" id="bravo">bravo votre nom à bien été enregistrer en bdd <a href="liste.php">Clique ici pour voir la liste</a></span>
        </form> -->
        <article class="text-center">
            <img src="images/bravo.png" alt="image bravo" width="10%">
        </article>
        <article class="text-center">
            <a href="liste.php"><input type="button" value="Voir la liste"></a>
            <a href="index.php"><input type="button" value="Ré insérer un nom ? "></a>

        </article>
        <!-- Member list -->
        <h2 class="text-center">Membres de l'équipage</h2>
        <section class="member-list text-center">
            <div class="member-item text-center">Eleftheria</div>
            <div class="member-item text-center">Gennadios</div>
            <div class="member-item text-center">Lysimachos</div>
            <p> </p>

            <?php
            echo $name;
            ?>



        </section>


    </main>

    <footer>
        <p class="text-center m-5">Réalisé par Jason en Anthestérion de l'an 515 avant JC</p>
    </footer>
</body>

</html>

<script>
    const bravo = document.getElementsByClassName('bravo');

    const formulaire = {}
    btn.addEventListener('click', myFontion);

    function myFontion(event) {
        event.preventDefault();
        if (formulaire.name = name.value) {
            bravo[0].getElementsByClassName.visibilty = 'visible';
        }
    }
</script>