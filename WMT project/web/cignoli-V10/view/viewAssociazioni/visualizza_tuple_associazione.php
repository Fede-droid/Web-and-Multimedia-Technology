<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stile/cignoli1.css">
    <title>Tuple all'interno della tabella associazione</title>
</head>

<body>

    <section>

        <p class="titolo">Tuple all'interno della tabella associazione</p>

        <table class="custom-table">
            <tr>
                <th class="font">Nome</th>
                <th class="font">ID</th>
            </tr>

            <?php while ($riga = mysqli_fetch_assoc($dati)) { ?>
                <tr>
                    <td class="font"><?php echo $riga["nome"]; ?></td>
                    <td class="font"><?php echo $riga["ID"]; ?></td>
                </tr>
            <?php } ?>
        </table>

        <div class="space"></div>


        <p class="titolo">Ricerca all'interno della tabella associazione</p>
        <table class="custom-table">
            <p>questo modulo è utile perché ti consente di trovare rapidamente informazioni specifiche all'interno della
                tabella associazione del database del sito web, senza dover cercare manualmente attraverso una lunga
                lista di dati.
            </p>
                <tr>
                    <td>Inserisci il Nome:</td>
                    <td>
                        <!-- onkeyup evento che genera richiesta AJAX-->
                        <input id="scf" type="text" name="nomeAsso"
                            onkeyup="suggerisci_info_associazione(this.value)" />

                    </td>
                    <td>
                        <div id="sug_associazione"></div>
                    </td>
                </tr>

        </table>
        <div class="space"></div>


    </section>

</body>

</html>