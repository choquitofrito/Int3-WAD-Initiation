$(document).ready(function(){
  $('#listeGenres').on('change', function() { 
    $.ajax({ 
      url: './traitement.php',
      dataType: 'json',
      method: 'GET',
      data: { choix: $('#listeGenres').val()}
      
    })
    .done(function(data) { 
           console.log (data);
    });
    
  });
});


