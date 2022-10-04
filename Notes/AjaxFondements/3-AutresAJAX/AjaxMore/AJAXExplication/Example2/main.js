$(document).ready(function(){
    
    $('#afficherSeries').click (function(){
       $.ajax({
           url: './traitement.php',
           method: 'GET',
           dataType: 'json',
		   cache: false
       }).done(function(donneesRecues){
           
           console.log (typeof(donneesRecues));
           console.log (donneesRecues);
			// on re?oit un array au lieu d'un code HTML
            for (index in donneesRecues){
                $('#divSeries').append(donneesRecues[index]);
            }
            
       }).error(function(){
           //alert ("Ça ne va pas");
       })
       
        
    })
    
})

