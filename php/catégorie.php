<!DOCTYPE html >
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
    <title>catégorie🍽️</title>
</head>

<body>
    <!-- ''''''''''''''''        '''''''''adresse du restaurant logo et menu du restaurant'''''''''''''''''''''''''''''''''''''''''''''''''''''''-->
<!--
    <p class="p1 d-flex justify-content-center">Restaurant The District 30 Rue de Poulainville, 80000 Amiens</p>

    <nav class="navbar navbar-expand-sm justify-content-center">
        <div class="contenair-fluid">
            <a class="navbar-brand" href="../php/nindex.php"><img
                    src="../images_the_district/the_district_brand/logo.png" style="width:200px" ; height="126px"></a>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg">
        <ul class="navbar-nav col d-flex justify-content-around">
            <li class="d-flex justify-content-center align-items-center"><a href="../php/index.php"
                    class="text-decoration-none text-dark">Accueil</a></li>
            <li class="d-flex justify-content-center align-items-center"><a href="../php/catégorie.php"
                    class="text-decoration-none text-dark">Catégorie</a></li>
            <li class="d-flex justify-content-center align-items-center"><a href="../php/plats.php"
                    class="text-decoration-none text-dark">Plats</a></li>
            <li class="d-flex justify-content-center align-items-center"><a href="../php/contact.php"
                    class="text-decoration-none text-dark">Contact</a></li>
        </ul>
    </nav> -->
    <div class="menu">
<?php include 'menu.php';?>
</div>
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

    <a href="pizzas plat.p">
        <div class="fond11 mb-4">
            <p class="non1 pt-5 mt-5" id="pizza">PIZZA</p>
        </div>
    </a>
    <!--'''''''''''''''''''''''''''''''''''''''''les categories image et titres'''''''''''''''''''''''''''''''''''''''''''''''''''''''-->

    <a href="burgerplat.p">
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

    <a href="pastaplat.p">
        <div class="fond17 " id="pasta">
            <p class="non1 pt-5 mt-5">PASTA</p>
        </div>
    </a>

    <!--'''''''''''''''''''''''''''''''''''''''''les boutons gauche et droite''''''''''''''''''''''''''''''''''''''''''''''''''''''-->

    <div class="container-fluid d-flex justify-content-around p-4">
        <a href="../ph/index.ph"> <img src="../images_the_district/gauche.png" alt="bouton gauche" height="70px" ,
                width="70px"> </a>
        <a href="../ph/pizzas plat.ph"> <img src="../images_the_district/envoyer.png" alt="bouton droite"
                height="70px" , width="70px">
    </div>
    <!--'''''''''''''''''''''''''''''''''''''''contact'''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''-->
    <!--
    <section class="brdr pb-4">
        <div class="co container-fluid d-flex justify-content-center pt-4">
            <p>CONTACT</p>
        </div>

        <nav class="navbar navbar-expand-lg ">
            <ul class="navbar-nav col d-flex justify-content-around ">
                <li class="d-flex justify-content-center align-items-center"><a href="#" class="contact "><img
                            src="../images_the_district/5279111_network_fb_social media_facebook_facebook logo_icon.png"
                            class="reseaux" alt="logo facebook" width="50px" height="50px"></a></li>
                <li class="d-flex justify-content-center align-items-center"><a href="#" class="contact"><img
                            src="../images_the_district/instagram(1).png" class="reseaux" alt="logo facebook"
                            width="50px" height="50px"></a></li>
                <li class="d-flex justify-content-center align-items-center"><a href="#" class="contact"><img
                            src="../images_the_district/reseaux-sociaux.png" class="reseaux w-0" alt="logo facebook"
                            width="50px" height="50px"></a></li>
                <li class="d-flex justify-content-center align-items-center"><a href="#" class="contact"><img
                            src="../images_the_district/tic-tac.png" class="reseaux w-2" alt="logo facebook"
                            width="50px" height="50px"></a></li>
            </ul>
        </nav>
    </section> -->
    <?php include 'footer.php' ;?> 
</body>

</html>