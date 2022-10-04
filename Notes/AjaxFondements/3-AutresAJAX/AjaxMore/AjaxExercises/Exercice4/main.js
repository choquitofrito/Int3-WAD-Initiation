$(document).ready(function(){
  $('#selectVillesDepart').on('change', function() { 
    $.ajax({ 
      url: './traitement.php',
      dataType: 'json',
      data: { villeDepart: $(this).val() },
      
    })
    .done(function(data) { 
            $("#selectVillesArrivee").empty();
    
            for (var i=0;i<data.length;i++){
              $("#selectVillesArrivee").append("<option value='"+i+"'>"+data[i]+"</option>");
            }
        
    });
    
  });
});


