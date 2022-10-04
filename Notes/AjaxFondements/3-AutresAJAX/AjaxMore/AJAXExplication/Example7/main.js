$(document).ready(function(){
    
    $('#afficher').click (function(){
       $.ajax({
           url: './traitement.php',
           method: 'GET',
           data: {nom: $('#nom').val(), message: "Hello"},               
           dataType: 'json'
       }).done(function(donneesRecues){
           $('#divSalutation').html(donneesRecues[0]);
           
       }).error(function(){
           //alert ("erreur");
       })
       
        
    })
    
})

