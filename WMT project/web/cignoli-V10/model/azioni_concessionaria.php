<?php
//definisco la funzione che si occupa di prelevare tutte le tuple della tabella concessionaria, 
//riceve come parametro la connessione al db
function dati_concessionaria($con)
{
    $sql = "select * from concessionaria;";
    //eseguo la query
    $risultati = mysqli_query($con, $sql);
    //restituisco i risultati
    return $risultati;
}

function concessionaria_pk($con)
{
    //preparo la query selezionando solo la chiave primaria
    $sql = "select PI from concessionaria;";
    //eseguo la query
    $risultati = mysqli_query($con, $sql);
    //restituisco i risultati
    return $risultati;

}

function ricerca_concessionaria($con, $PI, $nomeC, $gruppo, $cf)
{
    //contatore dei filtri usati per la ricerca
    $conta = 0;
    $sql = "select * from concessionaria where ";

    if ($PI != "") {
        $sql = $sql . "PI='$PI'";
        $conta++;
    }

    if ($nomeC != "") {
        if ($conta != 0) {
            $sql = $sql . " and ";
        }
        $sql = $sql . "nomeConcessionaria='$nomeC'";
        $conta++;

    }

    if ($gruppo != "") {
        if ($conta != 0) {
            $sql = $sql . " and ";
        }
        $sql = $sql . "gruppoAppartenenza='$gruppo'";
        $conta++;

    }

    if ($cf != "") {
        if ($conta != 0) {
            $sql = $sql . " and ";
        }
        $sql = $sql . "CF='$cf'";
        $conta++;

    }
    $sql = $sql . ";";

    echo $sql;

    $risultati = mysqli_query($con, $sql);
    //restituisco i risultati creando il vettore associativo
    return $risultati;

}
?>