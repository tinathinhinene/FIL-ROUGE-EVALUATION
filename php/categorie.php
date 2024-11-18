<!--''''''''''''''''''''''''''' l'adresse le logo et la barre de nav'''''''''''''''''''''''''''''''''''''''''-->

<?php
include '../php/menu.php';
?>

    <!--''''''''''''''''''''''''''''''''''''''image de fond et barre de recherche'''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''-->
    <div class="fond container-fluid m-0 p-0 d-flex align-items-center">
        <div class="content p-5">
            <label for="recherche"></label>
            <input type="text" id="recherche1" name="recherche" placeholder="Recherche"
                class=" container d-flex justify-content-around">
        </div>
    </div>
    <!--'''''''''''''''''''''''''''''''''''''''''les categories image et titres'''''''''''''''''''''''''''''''''''''''''''''''''''''''-->

    <div class="container-fluid d-flex justify-content-center">
        <p class="nomdeplat  p-4 m-4">LES CATEGORIES</p>
    </div>

    <a href="../php/pizzasplat.php">
        <div class="fond11 mb-4">
            <p class="non1 pt-5 mt-5" id="pizza">PIZZA</p>
        </div>
    </a>
    <!--'''''''''''''''''''''''''''''''''''''''''les categories image et titres'''''''''''''''''''''''''''''''''''''''''''''''''''''''-->

    <a href="../php/burgerplat.php">
        <div class="fond12 mb-4" id="hamburger">
            <p class="non1 pt-5 mt-5">HAMBURGER</p>
        </div>
    </a>
    <!--'''''''''''''''''''''''''''''''''''''''''les categories image et titres'''''''''''''''''''''''''''''''''''''''''''''''''''''''-->

    <div class="fond13 mb-4" id="asian">
        <p class="non1 pt-5 mt-5">ASIAN FOOD</p>
    </div>
    <!--'''''''''''''''''''''''''''''''''''''''''les categories image et titres'''''''''''''''''''''''''''''''''''''''''''''''''''''''-->

    <div class="fond15 mb-4" id="sandwich">
        <p class="non1 pt-5 mt-5">SANDWICH</p>
    </div>
    <!--'''''''''''''''''''''''''''''''''''''''''les categories image et titres'''''''''''''''''''''''''''''''''''''''''''''''''''''''-->

    <div class="fond16 mb-4" id="veggie">
        <p class="non1 pt-5 mt-5">VEGGIE</p>
    </div>
    <!--'''''''''''''''''''''''''''''''''''''''''les categories image et titres'''''''''''''''''''''''''''''''''''''''''''''''''''''''-->

    <a href="../php/pastaplat.php">
        <div class="fond17 " id="pasta">
            <p class="non1 pt-5 mt-5">PASTA</p>
        </div>
    </a>

    <!--'''''''''''''''''''''''''''''''''''''''''les boutons gauche et droite''''''''''''''''''''''''''''''''''''''''''''''''''''''-->

    <div class="container-fluid d-flex justify-content-around p-4">
        <a href="../index.php"> <img src="../assets/images_the_district/gauche.png" alt="bouton gauche" height="70px" , width="70px"> </a>
        <a href="../php/pizzasplat.php"> <img src="../assets/images_the_district/envoyer.png" alt="bouton droite"height="70px" , width="70px"></a>
    </div>
    <!--'''''''''''''''''''''''''''''''''''''''contact'''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''-->
    <?php include 'php/footer.php' ;?> 
