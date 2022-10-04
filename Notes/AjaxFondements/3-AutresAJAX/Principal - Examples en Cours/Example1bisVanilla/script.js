// code AJAX
document.getElementById ("boutonAfficher").addEventListener ("click", function (e){
		// 1. créer l'objet XMLHttpRequest pour communiquer avec le serveur
		var xhr = new XMLHttpRequest();
		
		// 2. on gére le changement d'état de l'objet XMLHttpRequest
		// en créant un gestionnaire d'événements
		xhr.onreadystatechange = function(){
			
				
				// vérifier si la requête a été completée
				if (xhr.readyState == 4){
					// vérifier l'état de la requête
					if (xhr.status == 200) {
							console.log ("tout va bien, requête ok");
							// responseText contient la réponse du serveur
							console.log (typeof (xhr.responseText));
							divAfficher.innerHTML = xhr.responseText;
					}
				
				}
				
		}
		
		// 3. faire appel au serveur, on n'envoie pas de paramètres
		xhr.open ('GET', './traitement.php');
		xhr.send (null);
});


