$(document).ready(function(){
  $('#choixGenre').on('change', function() { // This event fires when a button is clicked
      
    var choix = $(this).val();
    
    $.ajax({ // ajax call starts
      url: 'traitement.php', 
      data: 'choix=' + $(this).val(), 
      dataType: 'json', 
    })
    .done(function(data) { // Variable data contains the data we get from serverside
      $('#listeFilms').html(''); // Clear #wines div
        console.log(data);
        console.log (typeof(data));
        console.log (data['Comédie']);
        
      
    });
    return false; // keeps the page from not refreshing 
  });
});


