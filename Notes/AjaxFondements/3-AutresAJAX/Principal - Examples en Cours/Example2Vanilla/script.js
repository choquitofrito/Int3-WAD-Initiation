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
							console.log (xhr.responseText);
							
							// créer un objet à partir du string JSON
							var objetJSON = JSON.parse (xhr.responseText);
							
							console.log (typeof (objetJSON));
							console.log (objetJSON);
							
							// manipuler le DOM
							
							// exemple 1: on veut un h1 mais il n'existe pas dans la
							// page html. On crée l'élément et on le rajoute dans le DOM
							var monH1 = document.createElement("h1");
							monH1.innerHTML = objetJSON.nom; 
							ville.append (monH1);
							
							
							population.append (objetJSON.population);
							pays.append (objetJSON.pays);
							
							
							
					}
				
				}
				
		}
		
		// 3. faire appel au serveur, on n'envoie pas de paramètres
		xhr.open ('GET', './traitement.php');
		xhr.send (null);
});


