// code AJAX
document.getElementById ("boutonAfficher").addEventListener ("click", function (e){
		// 1. créer l'objet XMLHttpRequest pour communiquer avec le serveur
		var xhr = new XMLHttpRequest();
		console.log ("readyState vaut: " + xhr.readyState);
		
		
		// 2. on gére le changement d'état de l'objet XMLHttpRequest
		// en créant un gestionnaire d'événements
		xhr.onreadystatechange = function(){
			
				// afficher à chaque changement d'état quel est l'état
				console.log ("readyState vaut: " + xhr.readyState);
				console.log ("status vaut: " + xhr.status);
			
				// vérifier si la requête a été completée
				if (xhr.readyState == 4){
					// vérifier l'état de la requête
					if (xhr.status == 200) {
							console.log ("tout va bien, requête ok");
							// responseText contient la réponse du serveur
							divAfficher.innerHTML = xhr.responseText;
					}
				
				}
				
		}
		
		// 3. faire appel au serveur, on n'envoie pas de paramètres
		xhr.open ('GET', './traitement.php');
		xhr.send (null);
});


