<html>
<body>
        
    
<form id="formulaireUpload" action="handler.php" method="POST">
  <input type="file" id="idFichier" name="photo" />
  <button type="submit" id="buttonUpload">Upload</button>
</form>
    
    
 <script language="javascript">
     
        var form = document.getElementById('formulaireUpload');
        var fileSelect = document.getElementById('idFichier');
        var uploadButton = document.getElementById('buttonUpload');
        
        
        form.onsubmit = function(event) {
                event.preventDefault();
                // Update button text.
                uploadButton.innerHTML = 'Uploading...';
                // The rest of the code will go here...
                // 
                // Get the selected files from the input.
                var files = fileSelect.files;
                // Create a new FormData object.
                var formData = new FormData();
                
                
                
                // Loop through each of the selected files.
                for (var i = 0; i < files.length; i++) {
                  var file = files[0];

                  // Check the file type.
//                  if (!file.type.match('image.*')) {
//                    continue;
//                  }

                  // Add the file to the request.
                  formData.append('photo', file, file.name);
                }
                
                // AJAX
                
                // Set up the request.
                var xhr = new XMLHttpRequest();
                // Open the connection.
                xhr.open('POST', 'upload.php', true);
                
                
                // Set up a handler for when the request finishes.
                xhr.onload = function () {
                  if (xhr.status === 200) {
                    // File(s) uploaded.
                    uploadButton.innerHTML = 'Upload';
                  } else {
                    alert('An error occurred!');
                  }
                };
                
                
                // Send the Data.
                xhr.send(formData);
                
                
        }
</script>
        
</body>
</html>
