<?php
//index.php è il nostro controllore
//avvio o recupero dei dati della sessione
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();


//tramite include possiamo includere altri file nella pagina corrente
include ("view/apertura.html");

//invoco la funzione che ho definito per la connessione al db
include ("model/azioni_connessione.php");
$c = connessione_al_db();

//inizio del sistema di autenticazione
//includo le funzioni per l'autenticazione
include ("model/azioni_autenticazione.php");

// Controllo se l'utente è riconosciuto
if (!isset($_SESSION["riconosciuto"])) {
    // Assicurati che sia stato inviato il form con username e password
    if (isset($_POST["user"]) && isset($_POST["pass"])) {
        $richiesta = login($c, $_POST["user"], $_POST["pass"]);
    } else {
        // Potresti voler reindirizzare l'utente al form di login o mostrare un messaggio di errore
        $richiesta = 100; // Assumiamo che 100 sia il codice per mostrare il form di login
    }
} else {
    //recupero la richiesta dell'utente
    $richiesta = $_REQUEST["r"];

    //inclusione funzionalità
    include ("model/azioni_associazione.php");
    include ("model/azioni_concessionaria.php");
    include ("model/azioni_proprietarioConcessionaria.php");
    include ("model/azioni_automobile.php");

}

//se la richiesta dell'utente è diversa dal login e logout
if ($richiesta != 100 && $richiesta != 101) {
    include ("view/navigazione.html");
}

// Controllo se c'è stato un errore di autenticazione
if(isset($_SESSION["autenticazione_errore"]) && $_SESSION["autenticazione_errore"] == true) {
    // Password errata, mostrare un messaggio di errore
    echo '<script>alert("ERRORE");</script>';
    // Resetto la variabile di sessione per evitare che il messaggio venga mostrato nuovamente
    $_SESSION["autenticazione_errore"] = false;
}

echo "<section>";
switch ($richiesta) {

    case 1: //documentazione
        include ("view/documentazione.html");
        break;

    //i case da 2 a 9 sono riservati per le operazioni sulla tabella associazione
    case 2: //visualizza associazioni
        $dati = dati_associazione($c);
        include ("view/viewAssociazioni/visualizza_tuple_associazione.php");
        break;

    case 9: //ricevo i dati per la ricerca e cerco
        $dati = ricerca_associazione($c, $_POST["nomeAsso"], $_POST["IDasso"]);
        include ("view/viewAssociazioni/visualizza_tuple_associazione.php");
        break;




    //i case da 10 a 19 sono riservati per le operazioni sulla tabella proprietarioConcessionaria
    case 10: //visualizza proprietarioConcessionaria
        $dati = dati_proprietarioConcessionaria($c);
        include ("view/viewProprietarioConcessionaria/visualizza_tuple_proprietarioConcessionaria.php");
        break;

    case 19:
        $dati = ricerca_proprietarioConcessionaria($c, $_POST["CFpro"], $_POST["nomePro"], $_POST["cognomePro"], $_POST["nascitaPro"], $_POST["emailPro"], $_POST["fkass"]);
        include ("view/viewProprietarioConcessionaria/visualizza_tuple_proprietarioConcessionaria.php");
        break;





    //i case da 20 a 29 sono riservati per le operazioni sulla tabella concessionaria
    case 20: //visualizza concessionaria
        $dati = dati_concessionaria($c);
        include ("view/viewConcessionaria/visualizza_tuple_concessionaria.php");
        break;

    case 29:
        $dati = ricerca_concessionaria($c, $_POST["PIcon"], $_POST["nomeCon"], $_POST["gruppoCon"], $_POST["fkcar"]);
        include ("view/viewConcessionaria/visualizza_tuple_concessionaria.php");
        break;

    //i case da 30 a 39 sono riservati per le operazioni sulla tabella automobile
    case 30: //visualizza automobile
        $dati = dati_automobile($c);
        include ("view/viewAutomobile/visualizza_tuple_automobile.php");
        break;

    case 39:
        $dati = ricerca_automobile($c, $_POST["numT"], $_POST["tip"], $_POST["mar"], $_POST["mod"], $_POST["mot"], $_POST["cil"], $_POST["cv"], $_POST["ali"], $_POST["tra"], $_POST["chi"], $_POST["acc"], $_POST["pr"], $_POST["cat"], $_POST["mn"], $_POST["np"], $_POST["info"], $_POST["fkcar"]);
        include ("view/viewAutomobile/visualizza_tuple_automobile.php");
        break;

    case 100:   //login
        include ("view/modulo_login.html");

        break;

    case 101:   //logout
        logout();
        header('Location: index.php?r=100');
        break;

    case 102:
        include ("view/dati.html");
        break;


}
//invoco la funzione di disconnessione dal db
disconnettimi($c);

include ("view/chiusura.html");


?>