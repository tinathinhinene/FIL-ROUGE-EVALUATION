<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="row d-flex justify-content-around me-5 ms-5  mt-5">
    <form>
      <div class="form-input pt-4 pb-4">
        <label for="nom">Nom</label>
        <input class="form-control" id="nom" required="required" placeholder="Min. 3 caractères" type="text" />
      </div>
      <div class="form-input pt-4 pb-4">
        <label for="prenom">Prénom</label>
        <input id="prenom" class="form-control"  placeholder="Min. 3 caractères" required="required" type="text" />
      </div>      
      <div class="form-input pt-4 pb-4">
        <label for="telephone">Téléphone</label>
        <input class="form-control" id="telephone"  placeholder="XXXXXXXXXX" required="required" type="text" />
      </div>
    <div class="form-input pt-4 pb-4">
        <label for="ville">Ville</label>
        <input class="form-control" id="ville"  placeholder="Ex: Lyon" required="required" type="text" />
      </div>
           
    <div class="form-input pt-4 pb-4">
        <label for="cp">Code Postal</label>
        <input class="form-control" id="cp"  placeholder="Ex: 69100" required="required" type="text" />
      </div>
      
              
    <div>
        <label for="description pt-4 pb-4">Description</label>
      <button type="button" class="btn btn-sm btn-success" id="more"> <i class="fa fa-plus"></i> </button>
       <button  type="button" class="btn btn-sm btn-danger" id="less"> <i class="fa fa-minus"></i> </button>
      <textarea class="form-control" id="description" placeholder="Biographie en qqs lignes..."></textarea>
      <span class="help-block"><b>300</b> caractères</span>
    </div>      
      <div class="form-input pt-4 pb-4">
        <label for="email">Email</label>
        <input id="email" class="form-control" type="email" />
      </div>
      <button type="submit">
     Envoyer
    </button>

    </form>

  </div>
  <script>

$(document).ready(function(){ 

var taille = 1;
 $("form input#nom, form input#prenom").blur(function(){
   var elt = $(this);
   
   if(elt.val().length <= 3){
     
     elt.css({
       "border": "1px solid red"
     });
     
   }else{
     
      elt.css({
       "border": "1px solid green"
      })
   }
 });
 $("form #cp").blur(function(){
   var elt= $(this);
   if(elt.val().length >= 5){
     elt.css({
       "border": "2px solid red"
     });
   }
   else{
      elt.css({
       "border": "2px solid green"
     }); 
   }
        });

 $("form input#nom,form input#prenom").blur(function(){
   var elt = $(this);
   console.log(elt.val());
   
   if(elt.val().length <= 3){
     $("form input#nom,form input#prenom").css({
       "border": "1px solid red"
     });
     
   }else if($("#nom").val() == $("#prenom").val()){
      $("form input#nom,form input#prenom").css({
       "border": "1px solid orange"
     });
     
   }else{
      $("form input#nom,form input#prenom").css({
       "border": "1px solid green"
     });
   }
   
 }); 
 
 $('#telephone').blur(function(){
   var elt = $(this);
   
   if(elt.val().length < 10){
     elt.css({
       "border": "1px solid red"
     });
   }else{
     elt.css({
       "border": "1px solid red"
     });
   }
   
 });
 
 
 
 $('form textarea#description').keyup(function(){
   
   var longueurelt = $(this).val().length;
   
   if(longueurelt < 10){
     $(this).css({
       "border": "1px solid red"
     });
   }
   
 });
 
 $("input#username,input#nom,input#prenom").blur(function(){
   var username = $("#username");
   var nom = $("#nom");
   var prenom = $("#prenom");
   
   if(username.val() == nom.val() || username.val() == prenom.val()){
     
     $('#nom,#prenom,#username').css({
       "border": "1px solid red"
     });
       
   }else{
      $('#nom,#prenom,#username').css({
       "border": "1px solid green"
     });
   }
 });
 /*
 * Exercice 13:
 * Modifier le compteur de caractères pour la description (par décrémentation) quand je tape dans la zone de saisie
 * Indice: Fonction text() ou fonction html()
 */
 $('textarea#description').keyup(function(){
   var nbcaractere = $.trim($(this).val()).length;
   var total = 300 - nbcaractere;

   
   if(total == 0){
     $('textarea#description').attr("disabled", "disabled")
   }
   
   if(total < 300 && total > 200){
         $("span.help-block b").html("<span class='fa fa-exclamation-triangle'></span>"+total); 
   }else if(total < 200 && total > 100){
     $("span.help-block b").html("<span class='fa fa-bell'></span>"+total);
   }else{
     $("span.help-block b").html(total);
   }      
 });
 

 
}); 
 

  </script>
</body>
</html>