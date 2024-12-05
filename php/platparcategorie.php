<?php
session_start();
require_once 'dao.php';
if (!isset($_SESSION['id_categorie'])) {
    header('Location: categorie.php');
    exit;
}
$id_categorie = $_SESSION['id_categorie'];
$plat = get_plat_by_categorie($id_categorie);
?>



<!-------"""""""""""""""""""""""""""""""""""""""adresse logo menu"""""""""""""""""""""""""""""""""""""""""""""-->
  
<?php include 'menu.php';?>

<!--"""""""""""""""""""""""""""""""""""""""""card """""""""""""""""""""""""""""""""""""""""""""""""""""""""-->

        <?php $categorie = get_categorie();
        foreach ($categorie as $item){ 
            if($item['id_categorie'] == $id_categorie){
                echo htmlspecialchars($cat['libelle']);
                }
            }
            ?>
     <ul>
     <?php foreach ($plats as $plat): ?>
     <li>      
<div class="pizzacont container mt-5  p-2">
    <div class=" pizzacc card m-0 p-0">
            <img class="pizzac card-img-top" src="../assets/images_the_district/<?= htmlspecialchars($plat1['image']) ?>" alt="card image">
        </div>
        <div class="pizzatext card-body ms-3 mt-4 p-5">
            <h4 class="hawa mt-5 card-title ="><?= htmlspecialchars($plat1['libelle']) ?></h4>
            <P CLASS="ctext card-text "><?= htmlspecialchars($plat1['description']) ?></P>
            <p> Prix : <?= htmlspecialchars($plat1['prix']) ?></p>
        </div>
    </div>
   </li>
        <?php endforeach; ?>
  </ul>
<br><br>

<!--"""""""""""""""""""""""""""""""""""""""""""image de fond et barre de recherche"""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""-->

<div class="fond container-fluid m-0 p-0 d-flex align-items-center">
    <div class="content p-5">
        <label for="recherche"></label>
        <input type="text" id="recherche1" name="recherche" placeholder="Recherche"
            class=" container d-flex justify-content-around">
    </div>
</div>

<!--''''''''''''''''''''''''''''''''''''''''''''''''titre"""""""""""""""""""""""""""""""""""""""""-->

<div class="container-fluid d-flex justify-content-center">
    <p class="nomdeplat  p-4 m-4">PIZZA PAR CATEGORIES</p>
</div>



<!--''''''''''''''''''''''''''''''''''''''''''''''''contact """""""""""""""""""""""""""""""""""""""""-->

<?php include 'footer.php'; ?>
