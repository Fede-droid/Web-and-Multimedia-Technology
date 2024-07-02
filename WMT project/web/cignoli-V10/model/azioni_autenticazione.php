<?php
    //funzione che effettua il login
    //arrivano tre parametri cioè connessione al db, username e password
    function login($con, $u, $p){
        //trasformo la password passata nel corrispondente token md5
        $pmd5 = md5($p);
    
        $sql = "SELECT * FROM utente WHERE username='$u' AND pwd='$pmd5';";
    
        //eseguo la query
        $ris = mysqli_query($con, $sql);
    
        //verifico il numero di tuple ottenute
        if(mysqli_num_rows($ris) == 1){
            //autenticazione ok
            //inizializzo una variabile di sessione per ricordarmi che l'autenticazione è avvenuta con successo
            $_SESSION["riconosciuto"] = $u;
    
        }else{
            //autenticazione non ok
            // Setto una variabile di sessione per indicare che c'è stato un errore nell'autenticazione
            $_SESSION["autenticazione_errore"] = true;
            $_SESSION["riconosciuto"] = null;
        }
    
        //gestione della richiesta da restituire al controllore per lo switch
        //verifico se ho passato il controllo
        if($_SESSION["riconosciuto"] != null){
            //verifico se è arrivata una richiesta
            if(isset($_REQUEST["r"])){
                $richiesta = $_REQUEST["r"];
            }else{
                $richiesta = 1;
            }
        }else{
            $richiesta = 100; //caso del modulo login
        }
        return $richiesta;
    }
    
    function logout(){

        //eliminazione di tutti i dati della sessione
        session_destroy();
    }
?>