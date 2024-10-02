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
    <title>catégorie🍽️</title>
</head>

<body>
     <!--""""""""""""""""""""""""""""""""""""""""""adresse logo menu"""""""""""""""""""""""""""""""""""""""""""""""""""""""-->
<!--
    <p class="p1 d-flex justify-content-center">Restaurant The District 30 Rue de Poulainville, 80000 Amiens</p>

    <nav class="navbar navbar-expand-sm justify-content-center">
        <div class="contenair-fluid">
            <a class="navbar-brand" href="../php/nindex.php"><img src="../images_the_district/the_district_brand/logo.png"
                    style="width:200px" ; height="126px"></a>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg">
        <ul class="navbar-nav col d-flex justify-content-around">
            <li class="d-flex justify-content-center align-items-center"><a href="../php/index.php"
                    class="text-decoration-none text-dark">Accueil</a></li>
            <li class="d-flex justify-content-center align-items-center"><a href="../php/catégorie.php"
                    class="text-decoration-none text-dark">Catégorie</a></li>
            <li class="d-flex justify-content-center align-items-center"><a href="../php/plats.php"
                    class="text-decoration-none text-dark">Plats</a></li>
            <li class="d-flex justify-content-center align-items-center"><a href="../php/contact.php"
                    class="text-decoration-none text-dark">Contact</a></li>
        </ul>
    </nav> --> 
     <div class="menu">
<?php include 'menu.php';?>
</div>

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
        <p class="nomdeplat  p-4 m-4">CONTACTEZ-NOUS</p></div>

 <!--""""""""""""""""""""""""""""""""""""""""""formulaire""""""""""""""""""""""""""""""""""""""""""""""""""""""""-->

        <div class="container">
            <form action="/action_page.php">
        <div class="row">
            <div class="row">
            <div class="col"><label for="nom">NOM</label> 
              <input type="text" class="form-control" id= "nom" placeholder="" name="  nom">
            </div>
          
            <div class="col"> <label for="prenom">PRENOM</label>
              <input type="nom" class="form-control" id="nom" placeholder="" name="nom">
            </div>
            </div>
            <div class="row">
   
                <div class="col"><label for="email">EMAIL</label> 
                  <input type="text" class="form-control" id= "email" placeholder="" name="email">
                </div>
              
                <div class="col"> <label for="name">TELEPHONE</label>
                  <input type="telephone" class="form-control" id="telephone" placeholder="" name="telephone">
                </div>
            </div>

                    <label for="name">VILLE</label> 
                      <input type="text" class="form-control" id= "ville" placeholder="" name="ville">
                   
                  
                   <label for="name">CODE POSTAL</label>
                      <input type="number" class="form-control" id="codepostal" placeholder="" name="code postal">
                  
                    <label for="comment">VOTRE DEMANDE</label>
                    <textarea class="form-control" rows="5" id="comment" name="text"></textarea> 
    </div>
            </form>
        </div>

 <!--""""""""""""""""""""""""""""""""""""""""""bouton droit gauche""""""""""""""""""""""""""""""""""""""""""""""""""""""""-->

        <div class="container-fluid d-flex justify-content-around p-5"> 
            <a href="plats.php"> <img src="../images_the_district/gauche.png" alt="bouton gauche" height="70px", width="70px"> </a>       
              <a href="../php/contact.php"> <img src="../images_the_district/envoyer.png" alt="bouton droite" height="70px", width="70px">
          </div>

    <!--""""""""""""""""""""""""""""""""""""""""""contact""""""""""""""""""""""""""""""""""""""""""""""""""""""""-->
       <!--
          <section class="brdr pb-4">
         <div class="co container-fluid d-flex justify-content-center pt-4">
           
            <p>CONTACT</p>
        </div>
                <nav class="navbar navbar-expand-lg ">
                    <ul class="navbar-nav col d-flex justify-content-around ">
                        <li class="d-flex justify-content-center align-items-center"><a href="#"
                                class="contact "><img src="../images_the_district/5279111_network_fb_social media_facebook_facebook logo_icon.png" class="reseaux" alt="logo facebook" width="50px" height="50px"></a></li>
                        <li class="d-flex justify-content-center align-items-center"><a href="#"
                                class="contact"><img src="../images_the_district/instagram(1).png" class="reseaux" alt="logo facebook" width="50px" height="50px"></a></li>
                        <li class="d-flex justify-content-center align-items-center"><a href="#"
                                class="contact"><img src="../images_the_district/reseaux-sociaux.png" class="reseaux w-0" alt="logo facebook" width="50px" height="50px"></a></li>
                        <li class="d-flex justify-content-center align-items-center"><a href="#"
                                class="contact"><img src="../images_the_district/tic-tac.png" class="reseaux w-2" alt="logo facebook" width="50px" height="50px"></a></li>
                    </ul>
                </nav>
          </section> -->
            <?php include 'footer.php' ;?> 
        </body>
</html>