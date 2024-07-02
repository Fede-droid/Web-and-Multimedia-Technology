<?php
	//recupero i dati di sessione
	session_start();
	
	//recupero il suggerimento
	$suggerimento=$_GET["q"];
	
	//verifico se l'utente è loggato
	if ($_SESSION["riconosciuto"]!=NULL){
		
		//inizializzo la risposta
		$risposta="";
		
		//includo dati connessione
		include("../azioni_connessione.php");
		
		$conn=connessione_al_db();
		
		//preparo la query
		$sql="select * from associazione where nome like '%$suggerimento%';";

		//eseguo la query
		$risultati = mysqli_query($conn, $sql);
		
		//verifico numero risultati
		if (mysqli_num_rows($risultati) > 0) {
			$risposta='<table class="evidenzia_sug">';
			//concateno tutti i nomi
			while($tupla = mysqli_fetch_assoc($risultati)) {
				$risposta=$risposta.'<tr>';
				$risposta=$risposta.'<td onclick="cambiacf(this.innerHTML)">'.$tupla["nome"].'</td>';
				$risposta=$risposta.'<td>'.$tupla["ID"].'</td>';
				$risposta=$risposta.'</tr>';
			}
			$risposta=$risposta."</table>";
		}
		else{
			$risposta="Nessun nome trovato";
		}
		echo $risposta;
	}
	else{
		header('Location: ../../index.php');
	}
?>
