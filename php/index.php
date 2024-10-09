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

<body>
    <!--''''''''''''''''''''''''''' l'adresse le logo et la barre de nav'''''''''''''''''''''''''''''''''''''''''-->
    <!--
    <p class="p1 d-flex justify-content-center">Restaurant The District 30 Rue de Poulainville, 80000 Amiens</p>

    <nav class="navbar navbar-expand justify-content-center">
        <div class="contenair-fluid">
            <a class=" navbar-brand" href=".. php/nindex php"><img class="log"
                    src="../images_the_district/the_district_brand/logo.png"></a>
        </div>
    </nav>

    <nav class="navbar navbar-expand">
        <ul class="navbar-nav col d-flex justify-content-around">
            <li class="assieta d-flex justify-content-center align-items-center"><a href="#"
                    class="text-decoration-none text-dark">Accueil</a></li>
            <li class="assieta d-flex justify-content-center align-items-center"><a href="catégorie php"
                    class="text-decoration-none text-dark">Catégorie</a></li>
            <li class="assieta d-flex justify-content-center align-items-center"><a href="plats php"
                    class="text-decoration-none text-dark">Plats</a></li>
            <li class="assieta d-flex justify-content-center align-items-center"><a href="contact php"
                    class="text-decoration-none text-dark">Contact</a></li>
        </ul>
    </nav> -->
    <div class="menu">
        <?php include 'menu.php'; ?>
    </div>
    <!--''''''''''''''''''''''''''' video avec barre de recherche'''''''''''''''''''''''''''''''''''''''''''''-->
    <div class="vii">
        <figure>
            <video src="../Dressage des spaghettis bolognaise dans la l'assiette..mp4" playsinline autoplay muted
                loop></video>
            <figcaption>
                <label for="recherche"></label>
                <input type="text" id="recherche" name="recherche" placeholder="Recherche">

            </figcaption>
        </figure>
    </div>
    <!-- """"""""""""""""""""""""""""" trois premiere images"""""""""""""""""""""""""""""""""-->
    <div class="grddi container-fluid p-2 ">
        <div class=" row">
            <div class="col d-flex justify-content-around"><a href="catégorie php#veggie"><img
                        src="../images_the_district/category/salade_cat.jpg" class="ra" class="rounded border border-4"
                        alt="veggie"></a> </div>
            <p class="nomdeplat1"><a href="catégorie php#veggie">VEGGIE</a></p>
            <div class=" col d-flex justify-content-around"><a href="catégorie php#asian"><img
                        src="../images_the_district/category/asian_food_cat.jpg" class="ra"
                        class="rounded border border-4" alt="asian food"></a></div>
            <p class="nomdeplat1"><a href="catégorie php#asian">ASIAN FOOD</a></p>
            <div class="col d-flex justify-content-around"><a href="catégorie php#pasta"><img
                        src="../images_the_district/category/pasta_cat.jpg" class="ra" class="rounded border border-4"
                        alt="pasta"></a></div>
            <p class="nomdeplat1"><a href="catégorie php#pasta">PASTA</a></p>
        </div>
    </div>
    <!-- ''''''''''''''''''''''''''''''les noms des trois premieres images'''''''''''''''''''''''-->
    <div class="container-fluid d-flex justify-content-around">
        <p class="nomdeplat"> <a href="catégorie php#veggie">VEGGIE</a></p>
        <p class="nomdeplat"><a href="catégorie php#asian">ASIAN FOOD</a></p>
        <p class="nomdeplat"><a href="catégorie php#pasta">PASTA</a></p>
    </div>
    <!-- """"""""""""""""""""""""""""" trois  images suivantes""""""""""""""------------------->
    
    <div class="grddi container-fluid pb-2 pt-3">
        <div class="row ">
            <div class=" col d-flex justify-content-around"><a href="catégorie php#pizza"><img
                        src="../images_the_district/category/pizza_cat.jpg" class="ra" class=" rounded border border-4"
                        alt="pizza"></a></div>  <p class="nomdeplat1"><a href="catégorie php#pizza">PIZZA</a></p>
            <div class=" col d-flex justify-content-around"><a href="catégorie php#hamburger"><img
                        src="../images_the_district/category/burger_cat.jpg" class="ra" class="rounded border border-4"
                        alt="burger"></a></div><p class="nomdeplat1"><a href="catégorie php#hamburger">BURGER</a></p>
            <div class=" col d-flex justify-content-around"><a href="catégorie php#sandwich"><img
                        src="../images_the_district/category/sandwich_cat.jpg" class="ra"
                        class="rounded border border-4" alt="sandwich"></a></div> <p class="nomdeplat1"><a href="catégorie php#sandwich">SANDWICH</a></p>
        </div>
    </div> 
    <!-- ''''''''''''''''''''''''''''''les noms des trois images suivantes''''''''''''''''-->
    <div class="cen container-fluid d-flex justify-content-around ms-0 me-0 pe-0 ps-0">
        <p class="nomdeplat"><a href="catégorie php#pizza">PIZZA</a></p>
        <p class="nomdeplat"><a href="catégorie php#hamburger">BURGER</a></p>
        <p class="nomdeplat"><a href="catégorie php#sandwich">SANDWICH</a></p>
    </div>
    <!--''''''''''''''''''''''''''''''''''''''telechargement du menu ''''''''''''''''''''''''''''''''''''''''''-->
    <div class="tele p-4">
        <p class="telechargement">Télecharger la <a href="../FastPHP.pdf"> CARTE ET MENU</a> du restaurant<a
                href="../FastPHP.pdf"> THE DISTRICT </a> </p>
    </div>
    <a href="../FastPHP.pdf" class="commande btn">TELECHARGER</a>

    <!--'''''''''''''''''''''''''trois images collés avec texte''''''''''''''''''''''''''''''''''''''''-->

    <div id="image_txt" class="d-flex justify-content-around align-items-center pt-5">
        <div class="div_img column  left m-0"><img src="../images_the_district/food/cesar_salad.jpg"
                class="iimage m-0 p-0" alt="salade cesar" style="width: 100%; height:100%"></div>
        <div class="div_img column  middle m-0"><img src="../images_the_district/food/pizza-salmon.png"
                class="iimage m-0 p-0" alt="pizza saumon" style="width: 100%; height:100%; object-fit:cover"></div>
        <div class="div_img column  right m-0"><img src="../images_the_district/food/courgettes_farcies.jpg"
                class="iimage m-0 p-0" alt="courgette farcies" style="width: 100%; height:100%"></div>
        <div class="fond2 content p-5 position-absolute   ">Venez découvrir nos plats cuisinés, préparés avec des
            ingrédients de première qualité, soigneusement sélectionnés chaque jour</div>
    </div>

    <!--"""""""""""""""""""""""""""""""""parallax""""""""""""""""""""""""""""""""""""" -->
    <section class="parallax1">
  </section>
            <!--""""""""""""""""""""""""""""contact"""""""""""""""""""""""""""""""""""""""""""""""""-->
            <!--      <p><a href="contact php">CONTACT</p>
        </div>

        <nav class="navbar navbar-expand ">
            <ul class="navbar-nav col d-flex justify-content-around ">
                <li class="d-flex justify-content-center align-items-center"><a href="https://www.facebook.com/?locale=fr_FR" class="contact "><img
                            src="../images_the_district/5279111_network_fb_social media_facebook_facebook logo_icon.png"
                            class="reseaux" alt="logo facebook" width="50px" height="50px"></a></li>
                <li class="d-flex justify-content-center align-items-center"><a href="https://www.instagram.com/accounts/login/" class="contact"><img
                            src="../images_the_district/instagram(1).png" class="reseaux" alt="logo facebook"
                            width="50px" height="50px"></a></li>
                <li class="d-flex justify-content-center align-items-center"><a href="https://x.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJteCI6IjIifQ%3D%3D%22%7D" class="contact"><img
                            src="../images_the_district/reseaux-sociaux.png" class="reseaux w-0" alt="logo facebook"
                            width="50px" height="50px"></a></li>
                <li class="d-flex justify-content-center align-items-center"><a href="https://www.tiktok.com/login?lang=fr&redirect_url=https%3A%2F%2Fwww.tiktok.com%2Fupload%3Flang%3Dfr" class="contact"><img
                            src="../images_the_district/tic-tac.png" class="reseaux w-2" alt="logo facebook"
                            width="50px" height="50px"></a></li>
            </ul>
        </nav>
    </section>
                -->

            <?php include 'footer.php'; ?>
</body>

<html>