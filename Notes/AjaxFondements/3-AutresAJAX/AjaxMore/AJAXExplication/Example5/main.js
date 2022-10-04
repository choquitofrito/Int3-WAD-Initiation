$(document).ready(function(){
    
    $('#afficherListePersonnes').click (function(){
       $.ajax({
           url: './traitement.php',
           method: 'GET',
           dataType: 'json'
       }).done(function(donneesRecues){
           
           console.log (typeof(donneesRecues));
           console.log (donneesRecues);
           
           for (var i=0;i<donneesRecues.length;i++){
               $("#divListePersonnes").append("Nom: "+donneesRecues[i].nom);
               $("#divListePersonnes").append("Prenom: "+donneesRecues[i].prenom);
               $("#divListePersonnes").append("Age: "+donneesRecues[i].age);
           }
       }).error(function(){
           //alert ("ça ne va pas");
       })
       
        
    })
    
})

