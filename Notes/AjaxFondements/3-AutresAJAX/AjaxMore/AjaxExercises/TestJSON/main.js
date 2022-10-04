$(document).ready(function(){
  $('#afficherFilms').on('click', function() { 
    $.ajax({ 
      url: './traitement.php',
      dataType: 'json'
    })
    .done(function(data) { 
                
//        console.log (data);
//        console.log (data['age']);
         
//        console.log (data['nom']);
//        console.log(data.nom);
        for (var index in data){
            console.log (index);
            console.log(data[index]);
        }
        
        
        
    });
    
  });
});


