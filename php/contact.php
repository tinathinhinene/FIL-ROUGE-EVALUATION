
   
        <?php include 'menu.php'; ?>
   

    <!--""""""""""""""""""""""""""""""""""""""""""image de fond barre de recherche""""""""""""""""""""""""""""""""""""""""""""""""""""""""-->

    <div class="fond container-fluid m-0 p-0 d-flex align-items-center">
        <div class="content p-5">
            <label for="recherche"></label>
            <input type="text" id="recherche1" name="recherche" placeholder="Recherche"
                class=" container d-flex justify-content-around">
        </div>
    </div>
    <!--""""""""""""""""""""""""""""""""""""""""""titre""""""""""""""""""""""""""""""""""""""""""""""""""""""""-->

    <div class="container-fluid d-flex justify-content-center">
        <p class="titrecontact  p-4 m-4">CONTACTEZ-NOUS</p>
    </div>


    <!--*********************************************************formulaire/////////////////////////////////////////////////////////-->

    <form id="orderForm2" action="form2.php" method="POST">
  <div class="form-group">
    <label for="name">Nom</label>
    <input type="text" id="name" name="name">
    <span class="error" id="nameError">Ce champ est obligatoire</span>
  </div>
  
  <div class="form-group">
    <label for="firstname">Prénom</label>
    <input type="text" id="firstname" name="firstname">
    <span class="error" id="firstnameError">Ce champ est obligatoire</span>
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
    <label for="demande">Demande</label>
    <textarea type="text" id="demande" rows="4" name="demande"></textarea>
    <span class=" error" id="demandeError">Ce champ est obligatoire</span>
</div>
<button class="commande" type="submit">Envoyer</button>
</form>

    <!--""""""""""""""""""""""""""""""""""""""""""footer""""""""""""""""""""""""""""""""""""""""""""""""""""""""-->

    <script src="../js/formulaire2.js"></script>
  
    <?php include 'footer.php'; ?>

