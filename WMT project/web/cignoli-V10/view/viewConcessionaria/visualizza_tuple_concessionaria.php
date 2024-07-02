<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stile/cignoli1.css" type="text/css">
    <title>Tuple all'interno della tabella concessionaria</title>
</head>
<body>

<p class="titolo">Informazioni relative alle concessionarie</p>

<div class="flex-container">
    <img src="asset/outside.jpg" class="center-image">
</div>

<table class="custom-table">
    <tr>
        <td class="font">PI</td>
        <td class="font">nomeConcessionaria</td>
        <td class="font">gruppoAppartenenza</td>
        <td class="font">CF</td>
    </tr>

    <?php while($riga=mysqli_fetch_assoc($dati)){ ?>
        <tr>
            <td class="font"><?php echo $riga["PI"]; ?></td>
            <td class="font"><?php echo $riga["nomeConcessionaria"]; ?></td>
            <td class="font"><?php echo $riga["gruppoAppartenenza"]; ?></td>
            <td class="font"><?php echo $riga["CF"]; ?></td>
        </tr>
    <?php } ?> 

</table>

<div class="space"></div>

</body>
</html>
