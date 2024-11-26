<!--''''''''''''''''''''''''''' l'adresse le logo et la barre de nav'''''''''''''''''''''''''''''''''''''''''-->

<?php
include 'php/menu.php';
?>

<!--''''''''''''''''''''''''''' video avec barre de recherche'''''''''''''''''''''''''''''''''''''''''''''-->
<div class="vii">
    <figure>
        <video src="../assets/video/vid.mp4"
            playsinline autoplay muted loop></video>
        <figcaption>
            <label for="recherche"></label>
            <input type="text" id="recherche" name="recherche" placeholder="Recherche">
        </figcaption>
    </figure>
</div>
<!-- """"""""""""""""""""""""""""" trois premiere images"""""""""""""""""""""""""""""""""-->
<div class="grddi container-fluid p-2 ">
    <div class=" row">
        <div class="col d-flex justify-content-around"><a href="php/categorie.php#veggie"><img
                    src="../assets/images_the_district/salade_cat.jpg" class="ra" class="rounded border border-4"
                    alt="veggie"></a> </div>
        <p class="nomdeplat1"><a href="php/categorie.php#veggie">VEGGIE</a></p>
        <div class=" col d-flex justify-content-around"><a href="php/categorie.php#asian"><img
                    src="../assets/images_the_district/asian_food_cat.jpg" class="ra" class="rounded border border-4"
                    alt="asian food"></a></div>
        <p class="nomdeplat1"><a href="php/categorie.php#asian">ASIAN FOOD</a></p>
        <div class="col d-flex justify-content-around"><a href="php/categorie.php#pasta"><img
                    src="../assets/images_the_district/pasta_cat.jpg" class="ra" class="rounded border border-4"
                    alt="pasta"></a></div>
        <p class="nomdeplat1"><a href="php/categorie.php#pasta">PASTA</a></p>
    </div>
</div>
<!-- ''''''''''''''''''''''''''''''les noms des trois premieres images'''''''''''''''''''''''-->
<div class="container-fluid d-flex justify-content-around">
    <p class="nomdeplat"> <a href="php/categorie.php#veggie">VEGGIE</a></p>
    <p class="nomdeplat"><a href="php/categorie.php#asian">ASIAN FOOD</a></p>
    <p class="nomdeplat"><a href="php/categorie.php#pasta">PASTA</a></p>
</div>
<!-- """"""""""""""""""""""""""""" trois  images suivantes""""""""""""""------------------->

<div class="grddi container-fluid pb-2 pt-3">
    <div class="row ">
        <div class=" col d-flex justify-content-around"><a href="php/categorie.php#pizza"><img
                    src="../assets/images_the_district/pizza.jpg" class="ra" class=" rounded border border-4"
                    alt="pizza"></a></div>
        <p class="nomdeplat1"><a href="php/categorie.php#pizza">PIZZA</a></p>
        <div class=" col d-flex justify-content-around"><a href="php/categorie.php#hamburger"><img
                    src="../assets/images_the_district/burger.jpg" class="ra" class="rounded border border-4"
                    alt="burger"></a></div>
        <p class="nomdeplat1"><a href="php/categorie.php#hamburger">BURGER</a></p>
        <div class=" col d-flex justify-content-around"><a href="php/categorie.php#sandwich"><img
                    src="../assets/images_the_district/sandwich_cat.jpg" class="ra" class="rounded border border-4"
                    alt="sandwich"></a></div>
        <p class="nomdeplat1"><a href="php/categorie.php#sandwich">SANDWICH</a></p>
    </div>
</div>
<!-- ''''''''''''''''''''''''''''''les noms des trois images suivantes''''''''''''''''-->
<div class="cen container-fluid d-flex justify-content-around ms-0 me-0 pe-0 ps-0">
    <p class="nomdeplat"><a href="php/categorie.php#pizza">PIZZA</a></p>
    <p class="nomdeplat"><a href="php/categorie.php#hamburger">BURGER</a></p>
    <p class="nomdeplat"><a href="php/categorie.php#sandwich">SANDWICH</a></p>
</div>
<!--''''''''''''''''''''''''''''''''''''''telechargement du menu ''''''''''''''''''''''''''''''''''''''''''-->
<div class="tele p-4">
    <p class="telechargement">Télecharger la <a href="../FastPHP.pdf"> CARTE ET MENU</a> du restaurant<a
            href="../FastPHP.pdf"> THE DISTRICT </a> </p>
</div>
<a href="../FastPHP.pdf" class="commande btn">TELECHARGER</a>

<!--'''''''''''''''''''''''''trois images collés avec texte''''''''''''''''''''''''''''''''''''''''-->

<div id="image_txt" class="d-flex justify-content-around align-items-center pt-5">
    <div class="div_img column  left m-0"><img src="../assets/images_the_district/cesar_salad.jpg" class="iimage m-0 p-0"
            alt="salade cesar" style="width: 100%; height:100%"></div>
    <div class="div_img column  middle m-0"><img src="../assets/images_the_district/pizza-salmon.png"
            class="iimage m-0 p-0" alt="pizza saumon" style="width: 100%; height:100%; object-fit:cover"></div>
    <div class="div_img column  right m-0"><img src="../assets/images_the_district/courgettes_farcies.jpg"
            class="iimage m-0 p-0" alt="courgette farcies" style="width: 100%; height:100%"></div>
    <div class="fond2 content p-5 position-absolute   ">Venez découvrir nos plats cuisinés, préparés avec des
        ingrédients de première qualité, soigneusement sélectionnés chaque jour</div>
</div>

<!--"""""""""""""""""""""""""""""""""parallax""""""""""""""""""""""""""""""""""""" -->
<section class="parallax1">
</section>
<!--""""""""""""""""""""""""""""contact"""""""""""""""""""""""""""""""""""""""""""""""""-->

<?php include 'php/footer.php'; ?>