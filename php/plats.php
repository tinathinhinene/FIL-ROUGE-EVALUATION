<!--(((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((afficher les plats dynamiquement)))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))-->
<?php 
require_once 'dao.php';
$plat = get_plat();
?>


<?php
include '../php/menu.php';
?>

<!--"""""""""""""""""""""""""""""""""""""""""image de fond barre de recherche"""""""""""""""""""""""""""""""""""""""""""""""""""""""""-->

    <div class="fond container-fluid m-0 p-0 d-flex align-items-center">
        <div class="content p-5">
            <label for="recherche"></label>
            <input type="text" id="recherche1" name="recherche" placeholder="Recherche"
                class=" container d-flex justify-content-around">
        </div>
    </div>
  <!--""""""""""""""""""""""""""""""""""""""""""titre"""""""""""""""""""""""""""""""""""""""""""""""""""""""""-->

    <div class="container-fluid d-flex justify-content-center">
        <p class="plattitre  p-4 m-4">TOUT NOS PLATS</p></div>

<!--""""""""""""""""""""""""""""""""""""""""""card plat"""""""""""""""""""""""""""""""""""""""""""""""""""""""""-->
<?php foreach ($plat as $platt): ?>
        <div class="pizzacont container mb-4  p-2">
                       <div class=" pizzacc card m-0 p-0">
            <img class="pizzac card-img-top" src="../assets/images_the_district/<?php echo htmlspecialchars($platt['image']); ?>"    alt="card image"></div>
        <div class="pizzatext card-body ms-5 mt-0 p-5">
            <h4 class="hawa card-title mt-4 pb-3"><?php echo htmlspecialchars($platt['libelle']); ?></h4>
            <P class="ctext card-text mt-2 pb-2"><?php echo htmlspecialchars($platt['description']); ?></P>
            <p class="card-text"><strong>prix :</strong> <?php echo htmlspecialchars($platt['prix']); ?>€</p>
         <!--  <a class="command btn m-3" href="../php/<?= $platt['slug']; ?>.php">COMMANDER</a>  -->     
        

         <form method="POST" action="commander.php">
            <input type="hidden" name="id" value="<?php echo $platt['id']; ?>">
            <button type="submit">Commander</button>        
        </form>
        </div>
             </div>
        <?php endforeach; ?>

<!--'''''''''''''''''''''''''''''''''''''''''les boutons gauche et droite''''''''''''''''''''''''''''''''''''''''''''''''''''''-->

<div class="container-fluid d-flex justify-content-around p-4">
    <a href="../index.php"> <img src="../assets/images_the_district/gauche.png" alt="bouton gauche" height="70px" ,
            width="70px"> </a>
    <a href="../php/pizzaplat.php"> <img src="../assets/images_the_district/envoyer.png" alt="bouton droite"
            height="70px" , width="70px"></a>
</div>
<script src="../js/cursor.js"></script>
  <!--""""""""""""""""""""""""""""""""""""""""""contact""""""""""""""""""""""""""""""""""""""""""""""""""""""""-->
  <?php include 'footer.php' ;?> 