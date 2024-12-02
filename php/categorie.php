<!--(((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((afficher les catégories dynamiquement)))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))-->

<?php
require_once 'dao.php';
$categorie = get_active_categorie();
?>

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
    <h1 class="titcat p-4 m-4">LES CATEGORIES</h1>
</div>
<!-- ((((((((((((((((((((((((((((((((((((((((((((((((((((les categories))))))))))))))))))))))))))))))))))))))))))))))))))))))-->

<?php foreach ($categorie as $item): ?>
    <a href="../php/<?= strtolower($item['libelle']) ?>plat.php">
        <div class="fond11" style="background-image:url(../assets/images_the_district/<?= $item['image'] ?>)">
            <p class="non1 pt-5 mt-5" id="<?= strtolower($item['libelle']) ?>"><?= strtoupper($item['libelle']) ?></p>
            <!--
            <pre style="background-color:white;color:black;"><?php var_dump($item); ?></pre>
            -->
        </div>
    </a>
<?php endforeach; ?>

<!--'''''''''''''''''''''''''''''''''''''''''les boutons gauche et droite''''''''''''''''''''''''''''''''''''''''''''''''''''''-->

<div class="container-fluid d-flex justify-content-around p-4">
    <a href="../index.php"> <img src="../assets/images_the_district/gauche.png" alt="bouton gauche" height="70px" ,
            width="70px"> </a>
    <a href="../php/pizzaplat.php"> <img src="../assets/images_the_district/envoyer.png" alt="bouton droite"
            height="70px" , width="70px"></a>
</div>
<!--'''''''''''''''''''''''''''''''''''''''contact'''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''-->
<?php include 'footer.php'; ?>