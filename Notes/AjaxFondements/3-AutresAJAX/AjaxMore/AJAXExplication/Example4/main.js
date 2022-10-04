$(document).ready(function(){
    
    $('#afficherPersonne').click (function(){
       $.ajax({
           url: './traitement.php',
           method: 'GET',
           dataType: 'json'
       }).done(function(donneesRecues){
           
           console.log (typeof(donneesRecues));
           console.log (donneesRecues);
           
            for (index in donneesRecues){
                $('#divPersonne').append(donneesRecues[index]);
            }
            
       }).error(function(){
           //alert ("ça ne va pas");
       })
       
        
    })
    
})

