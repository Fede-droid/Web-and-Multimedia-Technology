<?php
//definisco la funzione che si occupa di prelevare tutte le tuple della tabella bambino, 
//riceve come parametro la connessione al db
function dati_proprietarioConcessionaria($con)
{
    $sql = "select * from proprietarioConcessionaria;";
    //eseguo la query
    $risultati = mysqli_query($con, $sql);
    //restituisco i risultati
    return $risultati;

}


function PR_pk($con)
{
    //preparo la query selezionando solo la chiave primaria
    $sql = "select CF from proprietarioConcessionaria;";
    //eseguo la query
    $risultati = mysqli_query($con, $sql);
    //restituisco i risultati
    return $risultati;

}

function ricerca_proprietarioConcessionaria($con, $cf, $nomep, $cognomep, $nascitap, $emailp, $nomea)
{
    //contatore dei filtri usati per la ricerca
    $conta = 0;
    $sql = "select * from proprietarioConcessionaria where ";

    if ($cf != "") {
        $sql = $sql . "CF='$cf'";
        $conta++;
    }

    if ($nomep != "") {
        if ($conta != 0) {
            $sql = $sql . " and ";
        }
        $sql = $sql . "nomep='$nomep'";
        $conta++;

    }

    if ($cognomep != "") {
        if ($conta != 0) {
            $sql = $sql . " and ";
        }
        $sql = $sql . "cognome='$cognomep'";
        $conta++;

    }

    if ($nascitap != "") {
        if ($conta != 0) {
            $sql = $sql . " and ";
        }
        $sql = $sql . "dataNascita='$nascitap'";
        $conta++;

    }

    if ($emailp != "") {
        if ($conta != 0) {
            $sql = $sql . " and ";
        }
        $sql = $sql . "email='$emailp'";
        $conta++;

    }

    if ($nomea != "") {
        if ($conta != 0) {
            $sql = $sql . " and ";
        }
        $sql = $sql . "nome='$nomea'";
        $conta++;

    }
    $sql = $sql . ";";

    echo $sql;

    $risultati = mysqli_query($con, $sql);
    //restituisco i risultati creando il vettore associativo
    return $risultati;

}
?>