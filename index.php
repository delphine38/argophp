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
    </form>

    <!-- Member list -->
    <h2>Membres de l'équipage</h2>
    <section class="member-list">
        <div class="member-item">Eleftheria</div>
        <div class="member-item">Gennadios</div>
        <div class="member-item">Lysimachos</div>
    </section>



    <!-- <section>
        <h1 id="listArgo">
        </h1>

    </section> -->
</main>

<footer>
    <p>Réalisé par Jason en Anthestérion de l'an 515 avant JC</p>
</footer>

<script src="js.js"></script>