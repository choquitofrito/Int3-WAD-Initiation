$(document).ready(function(){
  $('#afficherFilms').on('click', function() { 
    $.ajax({ 
      url: './traitement.php',
      dataType: 'json'
    })
    .done(function(data) { 
        // parcourir l'array 
//        for (var index in data){
//            //console.log(index);
//            console.log(data[index]);
//        }
//        
        
        for (var i=0;i<data.length;i++){
           $("#divFilms").append(data[i]+" ");
        }
        
//        $("#divFilmsListe").append("<ul>");
//        for (var i=0;i<data.length;i++){
//            $("#divFilmsListe ul").append("<li>"+data[i]+"</li>");
//        }
//        $("#divFilmsListe").append("</ul>");
          $("#divFilmsListe").append("<ul></ul>");
          for (var i=0;i<data.length;i++){
            $("#divFilmsListe ul").append("<li>"+data[i]+"</li>");
          }
        
    });
    
  });
});


