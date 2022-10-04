<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
        $("#myDiv1").load ("generateData.php","prenom=Jean&nom=Martin","processData()");
        
        function processData(){
            alert ("hello");
        }
        </script>
        
    </body>
</html>
