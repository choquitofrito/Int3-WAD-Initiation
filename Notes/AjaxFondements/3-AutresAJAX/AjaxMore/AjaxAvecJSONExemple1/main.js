$(document).ready(function(){
  $('.choixVin').on('click', function() { // This event fires when a button is clicked
      
    var button = $(this).val();
    $.ajax({ // ajax call starts
      url: 'traitement.php', // JQuery loads serverside.php
      data: 'button=' + $(this).val(), // Send value of the clicked button
      dataType: 'json', // Choosing a JSON datatype
    })
    .done(function(data) { // Variable data contains the data we get from serverside
      $('#wines').html(''); // Clear #wines div
				
      if (button == 'all') { // If clicked buttons value is all, we post every wine
        for (var i in data.red) {
          $('#wines').append('Red wine: ' + data.red[i] + '<br/>');
        }
        for (var i in data.white) {
          $('#wines').append('White wine: ' + data.white[i] + '<br/>');
        }
      }
      else if (button == 'red') { // If clicked buttons value is red, we post only red wines
        for (var i in data) {
          $('#wines').append('Red wine: ' + data[i] + '<br/>');
        }
      }
      else if (button == 'white') { // If clicked buttons value is white, we post only white wines
        for (var i in data) {
          $('#wines').append('White wine: ' + data[i] + '<br/>');
        }
      }
    });
    return false; // keeps the page from not refreshing 
  });
});


