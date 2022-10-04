$(document).ready(function(){
  $('#afficherFilms').on('click', function() { 
    $.ajax({ 
      url: './traitement.php',
      dataType: 'json'
    })
    .done(function(data) { 
                
          $("#divFilmsListe").append("<select></select>");
          for (var i=0;i<data.length;i++){
            $("#divFilmsListe select").append("<option value='"+i+"'>"+data[i]+"</option>");
          }
        
    });
    
  });
});


