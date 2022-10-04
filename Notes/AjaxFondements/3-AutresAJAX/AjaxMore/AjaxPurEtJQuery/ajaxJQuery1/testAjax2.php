<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <title></title>
    </head>
    
    <body>

        <div id="myDiv1" >
            Content myDiv1
        </div>

        <script>
// Using the core $.ajax() method
$.ajax({
 
    // The URL for the request
    url: "./generateData.php",
 
    // The data to send (will be converted to a query string)
    data: {
        nom: "Dupont"
    },
 
    // Whether this is a POST or GET request
    type: "GET",
 
    // The type of data we expect back
    dataType : "text",
 
    // Code to run if the request succeeds;
    // the response is passed to the function
    success: function( text) {
        
        $("#myDiv1").text(text);
        //$( "<h1>" ).text( json.title ).appendTo( "body" );
        //$( "<div class=\"content\">").html( json.html ).appendTo( "body" );
    },
 
    // Code to run if the request fails; the raw request and
    // status codes are passed to the function
    error: function( xhr, status, errorThrown ) {
        alert( "Sorry, there was a problem!" );
        console.log( "Error: " + errorThrown );
        console.log( "Status: " + status );
        console.dir( xhr );
    },
 
    // Code to run regardless of success or failure
    complete: function( xhr, status ) {
        alert( "The request is complete!" );
    }
});
</script>

    </body>
</html>
