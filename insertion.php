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
</head>

<body>
    <!-- Header section -->
    <header>
        <h1>
            <img src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png" alt="Wild Code School logo" width="10%" />
            Les Argonautes
        </h1>
    </header>

    <!-- Main section -->
    <main>

        <!-- New member form -->
        <h2>Ajouter un(e) Argonaute</h2>
        <form action="liste.php" id="list" method="post" class="new-member-form">
            <label for="name">Nom de l&apos;Argonaute</label>
            <input id="name" name="name" type="text" placeholder="Entre ton nom" />
            <button type="submit">Envoyer</button>
            <img src="images/bravo.png" alt="image bravo" width="10%">
            <span class="bravo" id="bravo">bravo votre nom à bien été enregistrer en bdd <a href="liste.php">Clique ici pour voir la liste</a></span>
        </form>

        <!-- Member list -->
        <h2>Membres de l'équipage</h2>
        <section class="member-list">
            <div class="member-item">Eleftheria</div>
            <div class="member-item">Gennadios</div>
            <div class="member-item">Lysimachos</div>
            <p> </p>

            <?php
            echo $name;
            ?>



        </section>


    </main>

    <footer>
        <p>Réalisé par Jason en Anthestérion de l'an 515 avant JC</p>
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