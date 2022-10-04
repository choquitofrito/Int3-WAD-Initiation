boutonAfficher.addEventListener ('click', function (evenement){
	
	var xhr = new XMLHttpRequest();
	
	xhr.onreadystatechange = function (){
		
		if (xhr.readyState == 4)
		{
			if (xhr.status == 200){

				//console.log (xhr.responseText);
				//console.log (typeof (xhr.responseText));
				var arrayPersonnes = JSON.parse (xhr.responseText);
				console.log (arrayPersonnes);
				console.log (typeof(arrayPersonnes));
				
				// modifier le dom
				for (var i=0; i<arrayPersonnes.length; i++){
					divPersonnes.append (arrayPersonnes[i].nom + " " + arrayPersonnes[i].nationalite);
					divPersonnes.appendChild (document.createElement("br"));
				}
				
			}
			else {
				console.log ("Il y a un problème: " + xhr.readyState + "," + xhr.status);
			}
		}
		
		
	}
	
	xhr.open ("GET", "./traitement.php");
	xhr.send (null);
	
});