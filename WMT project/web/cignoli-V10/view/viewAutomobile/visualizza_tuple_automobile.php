<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stile/cignoli1.css" type="text/css">
    <title>Tuple all'interno della tabella automobile</title>
</head>

<body>

    <p class="titolo">Specifiche relative alle automobili</p>

    <div class="flex-container">
        <img src="asset/car.jpg" class="center-image">
    </div>

    <table class="custom-table">
        <tr>
            <td>numero Telaio</td>
            <td>tipologia</td>
            <td>marca</td>
            <td>modello</td>
            <td>motore</td>
            <td>cilindrata</td>
            <td>CV</td>
            <td>alimentazione</td>
            <td>trazione</td>
            <td>chilometraggio</td>
            <td>accessori</td>
            <td>prezzo</td>
            <td>categoria</td>
            <td>mesi Noleggio</td>
            <td>numero Proprietari</td>
            <td>info Problemi</td>
            <td>PI</td>
        </tr>

        <?php while ($riga = mysqli_fetch_assoc($dati)) { ?>
            <tr>
                <td><?php echo $riga["numeroTelaio"]; ?></td>
                <td><?php echo $riga["tipologia"]; ?></td>
                <td><?php echo $riga["marca"]; ?></td>
                <td><?php echo $riga["modello"]; ?></td>
                <td><?php echo $riga["motore"]; ?></td>
                <td><?php echo $riga["cilindrata"]; ?></td>
                <td><?php echo $riga["CV"]; ?></td>
                <td><?php echo $riga["alimentazione"]; ?></td>
                <td><?php echo $riga["trazione"]; ?></td>
                <td><?php echo $riga["chilometraggio"]; ?></td>
                <td><?php echo $riga["accessori"]; ?></td>
                <td><?php echo $riga["prezzo"]; ?></td>
                <td><?php echo $riga["categoria"]; ?></td>
                <td><?php echo $riga["mesiNoleggio"]; ?></td>
                <td><?php echo $riga["numeroProprietari"]; ?></td>
                <td><?php echo $riga["infoProblemi"]; ?></td>
                <td><?php echo $riga["PI"]; ?></td>
            </tr>
        <?php } ?>

    </table>

    <div class="space"></div>

</body>

</html>