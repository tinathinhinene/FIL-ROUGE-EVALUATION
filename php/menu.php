
    <?php

echo'
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    </head>
<body>
<p class="p1 d-flex justify-content-center">Restaurant The District 30 Rue de Poulainville, 80000 Amiens</p>

<nav class="navbar navbar-expand justify-content-center">
    <div class="contenair-fluid">
        <a class=" navbar-brand" href="nindex.php"><img class="log"
                src="../assets/images_the_district/the_district_brand/logo.png"></a>
    </div>
</nav>

<nav class="navbar navbar-expand">
    <ul class="navbar-nav col d-flex justify-content-around">
        <li class="assieta d-flex justify-content-center align-items-center"><a href="../index.php"
                class="text-decoration-none text-dark">Accueil</a></li>
        <li class="assieta d-flex justify-content-center align-items-center"><a href="../php/categorie.php"
                class="text-decoration-none text-dark">Catégorie</a></li>
        <li class="assieta d-flex justify-content-center align-items-center"><a href="../php/plats.php"
                class="text-decoration-none text-dark">Plats</a></li>
        <li class="assieta d-flex justify-content-center align-items-center"><a href="../php/contact.php"
                class="text-decoration-none text-dark">Contact</a></li>
    </ul>
</nav>';
?>