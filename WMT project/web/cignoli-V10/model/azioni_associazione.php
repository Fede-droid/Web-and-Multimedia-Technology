<?php
    //definisco la funzione che si occupa di prelevare tutte le tuple della tabella bambino, 
    //riceve come parametro la connessione al db
    function dati_associazione($con){
        $sql="select * from associazione;";
        //eseguo la query
        $risultati=mysqli_query($con,$sql);
        //restituisco i risultati
        return $risultati;
    }

    //la funzione inserisci inserisce una tupla all'interno della tabella associazione
    //riceve 3 parametri (la connessione e i dati associazione)
    function inserisci_associazione($con,$codnome,$codID){
        $esito=false;
        $sql="insert into associazione values('$codnome',$codID);";
        echo $sql;
    
       if(mysqli_query($con,$sql)){
            $esito=true;
       }
       return $esito;
    }
    function associazione_pk($con){
        //preparo la query selezionando solo la chiave primaria
        $sql="select nome from associazione;";
        //eseguo la query
        $risultati=mysqli_query($con,$sql);
        //restituisco i risultati
        return $risultati;

    }


    function ricerca_associazione($con,$codnome,$codID){
        //contatore dei filtri usati per la ricerca
        $conta=0;
        $sql="select * from associazione where ";

        if($codnome!=""){
            $sql=$sql."nome='$codnome'";
            $conta++;
        }

        if($codID!=""){
            if($conta!=0){
                $sql=$sql." and ";
            }
            $sql=$sql."ID='$codID'";
            $conta++;
            
        }
        $sql=$sql.";";

        echo $sql;

        $risultati=mysqli_query($con,$sql);
        //restituisco i risultati creando il vettore associativo
        return $risultati;

    }
?>