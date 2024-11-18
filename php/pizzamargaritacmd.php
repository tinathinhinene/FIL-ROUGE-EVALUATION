-------"""""""""""""""""""""""""""""""""""""""adresse logo menu"""""""""""""""""""""""""""""""""""""""""""""-->
  
<?php include 'menu.php';?>

<!--"""""""""""""""""""""""""""""""""""""""""card pizza margarita"""""""""""""""""""""""""""""""""""""""""""""""""""""""""-->

    <div class="pizzacont container  p-2">
        <div class=" pizzacc card m-0 p-0">
            <img class="pizzac card-img-top" src="../assets/images_the_district/menu-pizza.jpg" alt="card image">
        </div>
        <div class="pizzatext card-body ms-3 mt-4 p-5">
            <h4 class="hawa card-title m-2 pt-4 pb-3">PIZZA  MARGARITA</h4>
            <P CLASS="ctext card-text mt-2 pb-2"> une recette de cuisine traditionnelle de la cuisine italienne,
                originaire de Naples à base de galette de pâte à pain, garnie principalement d'huile d'olive, de sauce
                tomate, de mozzarella et d'autres ingrédients et cuite au four.La pizza margherita est une spécialité
                culinaire traditionnelle de la ville de Naples, en Italie. Très populaire, cette pizza napoletana est
                garnie de tomates, de mozzarella, de basilic frais, de sel et d'huile d'olive. La pizza margherita est
                une spécialité culinaire traditionnelle de la ville de Naples, en Italie. Très populaire, cette pizza
                napoletana est garnie de tomates
            </P>
   
            <!--------""""""""""""""""""""""""""""""""bouton quantité"""""""""""""""""""""""""""""""""""""""""""""""""""-->
            <div class="container  mt-3">
                <h5 class="qte pt-2 pb-4">QUANTITÉ  <button type="button" class="btn p-4"><span class= "ti badge  p-4">2</span></button></h5>
            </div>
        </div>
    </div>

    <!--"""""""""""""""""""""""""""""""""""""""formulaire"""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""-->
<form id="orderForm" action="form.php" method="POST">
  <div class="form-group">
    <label for="name">Nom et Prénom</label>
    <input type="text" id="name" name="name" required>
    <span class="error" id="nameError">Ce champ est obligatoire</span>
  </div>
  
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>
    <span class="error" id="emailError">Ce champ est obligatoire</span>
  </div>

<div class="form-group">
    <label for="phone">Téléphone</label>
    <input type="tel" id="phone" name="phone" required>
    <span class="error" id="phoneError">Ce champ est obligatoire</span>
</div>

<div class="form-group">
    <label for="adress">Adresse</label>
    <textarea type="text" id="adress" rows="4" name="adress" required></textarea>
    <span class=" error" id="adressError">Ce champ est obligatoire</span>
</div>
<button class="commande" type="submit">Envoyer</button>
</form>
<script src="js/formulaire1.js"></script>

    <!--"""""""""""""""""""""""""""""""""""""""""""contact"""""""""""""""""""""""""""""""""""""""""""""""""""""""""-->
 
    <?php include 'footer.php' ;?> 
