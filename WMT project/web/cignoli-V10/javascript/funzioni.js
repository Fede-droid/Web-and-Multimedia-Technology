// codice javascript per AJAX

// definizione funzione suggerisci nome che riceve una stringa di testo come parametro
function suggerisci_info_associazione(str) {
	//verifico la lunghezza della stringa
	if (str.length == 0 || str=="") {
		//aggiungo al mio div un testo vuoto
		document.getElementById("sug_associazione").innerHTML = "";
		selezione=0;
		return;
	}
	else {
		//preparo ed eseguo la richiesta dei nomi
		
		//creo un oggetto della classe XMLHttpRequest
		var xmlhttp = new XMLHttpRequest();
		
		//definisco la funzione da svolgere quando la risposta sarà arrivata
		xmlhttp.onreadystatechange = function() {
			
			//verifico se la risposta non presenta errori status 200 https://it.wikipedia.org/wiki/Codici_di_stato_HTTP
			//verifico se è pronta per l'elaborazione https://developer.mozilla.org/it/docs/Web/API/XMLHttpRequest/readyState
			if (this.readyState == 4 && this.status == 200) {
				//aggiungo al div ciò che mi è stato restituito
				document.getElementById("sug_associazione").innerHTML = this.responseText;
			}
			
		};
		
		//inizializzo la richiesta - https://developer.mozilla.org/it/docs/Web/API/XMLHttpRequest/open
		xmlhttp.open("GET", "model/suggerimenti/get_associazione.php?q=" + str, true);
		
		//invio la richiesta
		xmlhttp.send();
	}
}

function cambiacf(str){
	document.getElementById("scf").value=str;
	document.getElementById("sug_associazione").innerHTML = "";
}

