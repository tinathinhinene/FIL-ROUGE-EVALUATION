<!DOCTYPE html>
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
    <title>accueil🍽️</title>
</head>
<body class=" bg-dark text-white"><!--
    <p class="p1 d-flex justify-content-center">Restaurant The District 30 Rue de Poulainville, 80000 Amiens</p>

    <nav class="navbar navbar-expand-sm justify-content-center">
        <div class="contenair-fluid">
            <a class="navbar-brand" href=".. php/index php"><img src="../images_the_district/the_district_brand/logo.png"
                    style="width:200px" ; height="126px"></a>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg">
        <ul class="navbar-nav col d-flex justify-content-around">
            <li class="d-flex justify-content-center align-items-center"><a href=".. php/index php"
                    class="text-decoration-none text-dark">Accueil</a></li>
            <li class="d-flex justify-content-center align-items-center"><a href=".. php/catégorie php"
                    class="text-decoration-none text-dark">Catégorie</a></li>
            <li class="d-flex justify-content-center align-items-center"><a href=".. php/plats php"
                    class="text-decoration-none text-dark">Plats</a></li>
            <li class="d-flex justify-content-center align-items-center"><a href=".. php/contact php"
                    class="text-decoration-none text-dark">Contact</a></li>
        </ul>
    </nav>

-->
<div class="menu">
<?php include 'menu.php';?>
</div>

    <div class="fond container-fluid m-0 p-0 d-flex align-items-center">
        <div class="content p-5">
            <label for="recherche"></label>
            <input type="text" id="recherche" name="recherche" placeholder="Recherche"
                class=" container d-flex justify-content-around">
        </div>
    </div>

    <div class="container-fluid">
        <div class="row p-5 ">
            <div class="col d-flex justify-content-around"><img src="../images_the_district/category/salade_cat.jpg"
                    class="ra" class="rounded border border-4" alt="salade"> </div>
            <div class=" col d-flex justify-content-around"><img
                    src="../images_the_district/category/asian_food_cat.jpg" class="ra" class="rounded border border-4"
                    alt="asian food"></div>
            <div class="col d-flex justify-content-around"><img src="../images_the_district/category/pasta_cat.jpg"
                    class="ra" class="rounded border border-4" alt="pasta"></div>
        </div>
    </div>

    <div class="container-fluid d-flex justify-content-around">
        <p class="nomdeplat">SALADE</p>
        <p class="nomdeplat">ASIAN FOOD</p>
        <p class="nomdeplat">PASTA</p>
    </div>

    <div class="container-fluid">
        <div class="row p-5 ">
            <div class=" col d-flex justify-content-around"><img src="../images_the_district/category/pizza_cat.jpg"
                    class="ra" class=" rounded border border-4" alt="pizza"></div>
            <div class=" col d-flex justify-content-around"><img src="../images_the_district/category/burger_cat.jpg"
                    class="ra" class="rounded border border-4" alt="burger"></div>
            <div class=" col d-flex justify-content-around"><img src="../images_the_district/category/sandwich_cat.jpg"
                    class="ra" class="rounded border border-4" alt="sandwich"></div>
        </div>
    </div>

    <div class="container-fluid d-flex justify-content-around">
        <p class="nomdeplat">PIZZA</p>
        <p class="nomdeplat">BURGER</p>
        <p class="nomdeplat">SANDWICH</p>
    </div>


    <div id="image_txt" class="d-flex justify-content-around align-items-center">
        <div class="div_img column  left m-0"><img src="../images_the_district/food/cesar_salad.jpg" class="iimage m-0 p-0" alt="salade cesar" style="width: 100%; height:100%" ></div>
        <div class="div_img column  middle m-0"><img src="../images_the_district/food/pizza-salmon.png" class="iimage m-0 p-0"  alt="pizza saumon"style="width: 100%; height:100%; object-fit:cover"></div>
        <div class="div_img column  right m-0"><img src="../images_the_district/food/courgettes_farcies.jpg" class="iimage m-0 p-0"  alt="courgette farcies"style="width: 100%; height:100%"></div> 
       <div class="fond2 content p-5 position-absolute   ">Venez découvrir nos plats cuisinés, préparés avec des ingrédients de première qualité, soigneusement sélectionnés chaque jour</div>
    </div>
<br>
<div class="co container-fluid d-flex justify-content-center">
    <p>CONTACT</p>
</div>

        <nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav col d-flex justify-content-around">
                <li class="d-flex justify-content-center align-items-center"><a href="#"
                        class="contact"><img src="../images_the_district/5279111_network_fb_social media_facebook_facebook logo_icon.png" class="reseaux" alt="logo facebook" width="50px" height="50px"></a></li>
                <li class="d-flex justify-content-center align-items-center"><a href="#"
                        class="contact"><img src="../images_the_district/instagram(1).png" class="reseaux" alt="logo facebook" width="50px" height="50px"></a></li>
                <li class="d-flex justify-content-center align-items-center"><a href="#"
                        class="contact"><img src="../images_the_district/reseaux-sociaux.png" class="reseaux w-0" alt="logo facebook" width="50px" height="50px"></a></li>
                <li class="d-flex justify-content-center align-items-center"><a href="#"
                        class="contact"><img src="../images_the_district/tic-tac.png" class="reseaux w-2" alt="logo facebook" width="50px" height="50px"></a></li>
            </ul>
        </nav>
<footer>
    
</footer>
</body>

<html>