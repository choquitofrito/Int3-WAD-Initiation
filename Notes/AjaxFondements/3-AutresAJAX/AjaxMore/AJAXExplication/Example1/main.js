$(document).ready(function(){
    console.log("bonjour");
    $('#afficherSeries').click (function(){
       $.ajax({
           url: './traitement.php',
           method: 'GET'
		   // on ne reçoit pas du JSON
       }).done(function(donneesRecues){
           console.log (typeof(donneesRecues));
           console.log (donneesRecues);
		   // on reçoit du code HTML, pas une structure de données
           $('#divSeries').html(donneesRecues);           
       }).error(function(){
           //alert ("ça ne va pas");
       })
    })
    
})

