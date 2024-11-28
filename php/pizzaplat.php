<!--''''''''''''''''''''''''''' l'adresse le logo et la barre de nav'''''''''''''''''''''''''''''''''''''''''-->

<?php
include 'menu.php';
?>

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

<!--''''''''''''''''''''''''''''''''''''''''''''''''card pizza hawaienne"""""""""""""""""""""""""""""""""""""""""-->

<div class="pizzacont container  p-2">
    <div class=" pizzacc card m-0 p-0">
        <img class="pizzac card-img-top" src="../assets/images_the_district/pizza.jpg" alt="card image">
    </div>
    <div class="pizzatext card-body ms-5 mt-0 p-5">
        <h4 class="hawa card-title m-0 pb-3">PIZZA HAWAIENNE</h4>
        <P CLASS="ctext card-text mt-2 pb-2"> La pizza hawaïenne est une variété de pizza qui se compose généralement de
            fromage et d'une base de tomate avec des morceaux de jambon et d'ananas.La tomate étant de la même famille
            que la belladone toxique, ses fruits ne sont d'abord pas considérés comme comestibles (la plante est surtout
            utilisée comme plante ornementale et le fruit est utilisé en médecine) avant le début du XVIIIe siècle en
            Italie7, si bien que seule existe initialement la pizza bianca (« pizza blanche »), pâte aplatie et
            agrémentée de « choses diverses » (huile ou saindoux, herbes) qui est devenue un mets plébéien. Il a une
        </P>
        <a href="#" class="command btn m-3">COMMANDER</a>
    </div>
</div>
<!--''''''''''''''''''''''''''''''''''''''''''''''''card pizza margarita"""""""""""""""""""""""""""""""""""""""""-->

<div class="pizzacont container mt-4 p-2">
    <div class=" pizzacc card m-0 p-0">
        <img class="pizzac card-img-top" src="../assets/images_the_district/pizza-margherita.jpg" alt="card image"
            width="380px" height="380px">
    </div>
    <div class="pizzatext card-body ms-5 mt-0 p-5">
        <h4 class="hawa card-title m-0 pb-3">PIZZA MARGARITA</h4>
        <P CLASS="ctext card-text mt-2 pb-2">La pizza margherita est une spécialité culinaire traditionnelle de la ville
            de Naples, en Italie. Très populaire, cette pizza napoletana est garnie de tomates, de mozzarella, de
            basilic frais, de sel et d'huile d'olive. La pizza margherita est une spécialité culinaire traditionnelle de
            la ville de Naples, en Italie. Très populaire, cette pizza napoletana est garnie de tomates, de mozzarella,
            de basilic frais, de sel et d'huile d'olive. Les couleurs de ces trois premiers ingrédients sont celles du
            drapeau italien</P>
        <a href="pizzamargaritacmd.php" class="command btn m-3">COMMANDER</a>
    </div>
</div>

<!--''''''''''''''''''''''''''''''''''''''''''''''''card pizza 4fromages"""""""""""""""""""""""""""""""""""""""""-->

<div class="pizzacont container  mt-4 p-2">
    <div class=" pizzacc card m-0 p-0">
        <img class="pizzac card-img-top" src="../assets/images_the_district/i190902-pizza-aux-4-fromages.jpeg"
            alt="card image">
    </div>
    <div class="pizzatext card-body ms-5 mt-0 p-5">
        <h4 class="hawa card-title m-0 pb-3">PIZZA QUATRES FROMAGES</h4>
        <P CLASS="ctext card-text mt-2 pb-2"> La pizza quatre fromages est un type de pizza dont la particularité est
            l'utilisation d'une combinaison de quatre sortes de fromages, généralement fondus ensembleOutre la
            mozzarella, les pizzas produites en série utilisent souvent du parmesan, du pecorino romano , de l'asiago et
            d'autres fromages de style italien,</P>
        <a href="#" class="command btn m-3">COMMANDER</a>
    </div>
</div>

<!--''''''''''''''''''''''''''''''''''''''''''''''''card pizza saumon"""""""""""""""""""""""""""""""""""""""""-->

<div class="pizzacont container mt-4  p-2">
    <div class=" pizzacc card m-0 p-0">
        <img class="pizzac card-img-top" src="../assets/images_the_district/pizza-salmon.png" alt="card image">
    </div>
    <div class="pizzatext card-body ms-5 mt-0 p-5">
        <h4 class="hawa card-title m-0 pb-3">PIZZA SAUMON</h4>
        <P CLASS="ctext card-text mt-2 pb-2">Fabriqué avec une croûte de pizza du commerce, du pain plat ou du naan,
            garni de fromage à la crème, de saumon fumé, d'oignon et de câpres ! Rappelant notre petit-déjeuner préféré
            composé de bagels, de fromage à la crème et de saumon fumé, cette pizza au saumon fumé facile à préparer est
            parfaite pour tous les repas ! Apéritif, petit-déjeuner, déjeuner et dîner !</P>
        <a href="#" class="command btn m-3">COMMANDER</a>
    </div>
</div>


<!--''''''''''''''''''''''''''''''''''''''''''''''''bouton gauche droit"""""""""""""""""""""""""""""""""""""""""-->
<div class="container-fluid d-flex justify-content-around p-5">
    <a href="categorie.php"> <img src="../assets/images_the_district/gauche.png" alt="bouton gauche" height="70px" ,
            width="70px"> </a>
    <a href="burgerplat.php"> <img src="../assets/images_the_district/envoyer.png" alt="bouton droite" height="70px" ,
            width="70px"></a>
</div>


<!--''''''''''''''''''''''''''''''''''''''''''''''''contact """""""""""""""""""""""""""""""""""""""""-->

<?php include 'footer.php'; ?>
