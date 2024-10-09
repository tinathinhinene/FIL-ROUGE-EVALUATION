<!--
<!DOCTYPE html>
<html lang="en">

<body>
  <form method="post" action="traitement.php">
    <label for="prenom">prenom</label>
    <input type="text" name="prenom" id="prenom" required><br>
    <span id="prenom_manquant"></span>
    <label for="email">email</label>
    <input type="email" name="email" id="email" required><br>
    <label for="tel">telephone</label>
    <input type="tel" name="tel" id="tel" required><br>
    <input type="submit" value="valider" id="bouton_envoi" required> <br>
  </form>



  <script>
    var validation = document.getElementById('bouton_envoi');
    var prenom = document.getElementById('prenom');
    var prenom_m = document.getElementById('prenom_manquant');
    var prenom_v = /^[a-zA-ZÀ-ÿ][a-zÀ-ÿ]+([-'\s][a-zA-ZÀ-ÿ][a-zÀ-ÿ]+)?/;
    validation.addEventListener('click', f_valid);

    function f_valid(e) {
      if (prenom.validity.valueMissing) {
        e.preventDefault();
        prenom_m.textContent = 'prenom manquant';
        prenom_m.style.color = 'red';
      }else if (prenom_v.test(prenom.value) == false){
        event.preventDefault();
        prenom_m.textContent = 'Format incorrect';
        prenom_m.style.color = 'orange';
      }
    }

  </script>
  <script src="../contact.js"></script>
</body>

</html> -->
<!--
-------------------------------------------------------------------------------------------------
-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 </head>
<body>
  <form>
    <input type = "text" name = "pseudo" placeholder = "pseudo"><br>
    <input type = "email" name = "email" placeholder = "email"><br>
    <input type="email" name = "email-confirmation" placeholder = "confirmation del'email"><br> 
    <input type = "password" name ="mdp" placeholder = "mdp"><br>    
    <input type="submit" value = "inscription" ><br>        
  </form>



  <script src="../contact.js"></script>
</body>
</html>