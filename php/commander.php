
<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=restaurantd_db;charset=utf8', 'tina', 'airo_2024_tciv');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('erreur de connexion à la base de données : ' .$e->getMessage()); 
} 
$platt = null;
if (isset($_POST['id'])) {
    $id=intval($_POST['id']);
$stmt = $pdo->prepare("SELECT * FROM plat WHERE id = :id");
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
if ($stmt->execute()) {
$platt = $stmt->fetch(PDO::FETCH_ASSOC);
}
}
?>
<!-------"""""""""""""""""""""""""""""""""""""""adresse logo menu"""""""""""""""""""""""""""""""""""""""""""""-->
  
<?php include 'menu.php';?>

<!--"""""""""""""""""""""""""""""""""""""""""card """""""""""""""""""""""""""""""""""""""""""""""""""""""""-->
    <div class="pizzacont container mt-5  p-2">
    <div class=" pizzacc card m-0 p-0">
            <img class="pizzac card-img-top" src="../assets/images_the_district/<?= htmlspecialchars($platt['image']) ?>" alt="card image">
        </div>
        <div class="pizzatext card-body ms-3 mt-4 p-5">
            <h4 class="hawa mt-5 card-title ="><?= htmlspecialchars($platt['libelle']) ?></h4>
            <P CLASS="ctext card-text "><?= htmlspecialchars($platt['description']) ?></P>
            <p> Prix : <?= htmlspecialchars($platt['prix']) ?></p>
            <!--------""""""""""""""""""""""""""""""""bouton quantité"""""""""""""""""""""""""""""""""""""""""""""""""""-->
            <div class="container  mt-3">
                <h5 class="qte pt-2 pb-4">QUANTITÉ  <button type="button" class="btn p-2"><span class= "ti badge  p-3">2</span></button></h5>
            </div>
        </div>
    </div>
<br><br>
    <!--"""""""""""""""""""""""""""""""""""""""formulaire"""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""-->
<form id="orderForm" action="form.php" method="POST">
  <div class="form-group">
    <label for="name">Nom et Prénom</label>
    <input type="text" id="name" name="name">
    <span class="error" id="nameError">Ce champ est obligatoire</span>
  </div>
  
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" id="email" name="email">
    <span class="error" id="emailError">Ce champ est obligatoire</span>
  </div>

<div class="form-group">
    <label for="phone">Téléphone</label>
    <input type="tel" id="phone" name="phone">
    <span class="error" id="phoneError">Ce champ est obligatoire</span>
</div>

<div class="form-group">
    <label for="adress">Adresse</label>
    <textarea type="text" id="adress" rows="4" name="adress"></textarea>
    <span class=" error" id="adressError">Ce champ est obligatoire</span>
</div>
<button class="commande pb-2" type="submit">Envoyer</button>
</form>

<script src="../js/formulaire1.js"></script>

    <!--"""""""""""""""""""""""""""""""""""""""""""contact"""""""""""""""""""""""""""""""""""""""""""""""""""""""""-->
 
    <?php include 'footer.php' ;?> 
