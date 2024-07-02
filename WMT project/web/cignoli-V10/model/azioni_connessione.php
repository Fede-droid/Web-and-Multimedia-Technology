<?php
    //definisco una funzione per la connessione al DataBase
    //"Kuint@ITI"
    function connessione_al_db(){
        $servername="localhost";
        $username="root";
        $password="Fedemysql99";
        $dbname="cignoli";
        $con=mysqli_connect($servername,$username,$password,$dbname);
        if(!$con){
            die("connessione fallita");

        }
        //LA FUNZIONE RESTITUISCE LA CONNESSIONE AL SERVER MYSQLI
        return $con;

    }

    //definisco la funzione disconnettimi, che riceve come parametro la connessione al db e la chiude
    function disconnettimi($con){
        mysqli_close($con);


    }


?>