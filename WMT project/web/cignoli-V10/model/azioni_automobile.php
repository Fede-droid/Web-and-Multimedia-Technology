<?php
    //definisco la funzione che si occupa di prelevare tutte le tuple della tabella bambino, 
    //riceve come parametro la connessione al db
    function dati_automobile($con){
        $sql="select * from automobile;";
        //eseguo la query
        $risultati=mysqli_query($con,$sql);
        //restituisco i risultati
        return $risultati;
    }

    /*function inserisci_automobile($con,$nt,$tip,$mar,$mod,$mot,$cil,$cv,$ali,$tr,$chi,$acc,$pre,$cat,$mes,$numP,$info,$pi){

        $esito=false;

        $sql="insert into automobile values('$nt','$tip','$mar','$mod','$mot','$cil','$cv','$ali','$tr','$chi','$acc','$pre','$cat','$mes','$numP','$info','$pi');";
     echo $sql;

        if(mysqli_query($con,$sql)){
            $esito=true;
        }
    return $esito;  
}*/

function automobile_pk($con){
    //preparo la query selezionando solo la chiave primaria
    $sql="select numeroTelaio from automobile;";
    //eseguo la query
    $risultati=mysqli_query($con,$sql);
    //restituisco i risultati
    return $risultati;

}


function ricerca_automobile($con,$nt,$tip,$mar,$mod,$mot,$cil,$cv,$ali,$tr,$chi,$acc,$pre,$cat,$mes,$numP,$info,$pi){
    //contatore dei filtri usati per la ricerca
    $conta=0;
    $sql="select * from automobile where ";

    if($nt!=""){
        $sql=$sql."numeroTelaio='$nt'";
        $conta++;
    }

    if($tip!=""){
        if($conta!=0){
            $sql=$sql." and ";
        }
        $sql=$sql."tipologia='$tip'";
        $conta++;
        
    }

    if($mar!=""){
        if($conta!=0){
            $sql=$sql." and ";
        }
        $sql=$sql."marca='$mar'";
        $conta++;
        
    }

    if($mod!=""){
        if($conta!=0){
            $sql=$sql." and ";
        }
        $sql=$sql."modello='$mod'";
        $conta++;
        
    }

    if($mot!=""){
        if($conta!=0){
            $sql=$sql." and ";
        }
        $sql=$sql."motore='$mot'";
        $conta++;
        
    }

    if($cil!=""){
        if($conta!=0){
            $sql=$sql." and ";
        }
        $sql=$sql."cilindrata='$cil'";
        $conta++;
        
    }

    if($cv!=""){
        if($conta!=0){
            $sql=$sql." and ";
        }
        $sql=$sql."CV='$cv'";
        $conta++;
        
    }

    if($ali!=""){
        if($conta!=0){
            $sql=$sql." and ";
        }
        $sql=$sql."alimentazione='$ali'";
        $conta++;
        
    }

    if($tr!=""){
        if($conta!=0){
            $sql=$sql." and ";
        }
        $sql=$sql."trazione='$tr'";
        $conta++;
        
    }

    if($chi!=""){
        if($conta!=0){
            $sql=$sql." and ";
        }
        $sql=$sql."chilometraggio='$chi'";
        $conta++;
        
    }

    if($acc!=""){
        if($conta!=0){
            $sql=$sql." and ";
        }
        $sql=$sql."accessori='$acc'";
        $conta++;
        
    }

    if($pre!=""){
        if($conta!=0){
            $sql=$sql." and ";
        }
        $sql=$sql."prezzo='$pre'";
        $conta++;
        
    }

    if($cat!=""){
        if($conta!=0){
            $sql=$sql." and ";
        }
        $sql=$sql."categoria='$cat'";
        $conta++;
        
    }

    if($mes!=""){
        if($conta!=0){
            $sql=$sql." and ";
        }
        $sql=$sql."mesiNoleggio='$mes'";
        $conta++;
        
    }

    if($numP!=""){
        if($conta!=0){
            $sql=$sql." and ";
        }
        $sql=$sql."numeroProprietari='$numP'";
        $conta++;
        
    }

    if($info!=""){
        if($conta!=0){
            $sql=$sql." and ";
        }
        $sql=$sql."infoProblemi='$info'";
        $conta++;
        
    }

    if($pi!=""){
        if($conta!=0){
            $sql=$sql." and ";
        }
        $sql=$sql."PI='$pi'";
        $conta++;
        
    }
    $sql=$sql.";";

    echo $sql;

    $risultati=mysqli_query($con,$sql);
    //restituisco i risultati creando il vettore associativo
    return $risultati;

}

?>