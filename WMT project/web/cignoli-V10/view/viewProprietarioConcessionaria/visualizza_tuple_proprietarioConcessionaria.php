<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stile/cignoli1.css" type="text/css">
    <title>Tuple all'interno della tabella proprietarioConcessionaria</title>
    <style>
        .empty-space {
            height: 120px; 
            width: 100%; 
        }
    </style>
</head>
<body>

<p class="titolo">Informazioni relative ai proprietari delle filiali</p>

<div class="flex-container">
    <img src="asset/boss.jpg">
</div>

<table class="custom-table">
    <tr>
        <td class="font1">CF</td>
        <td class="font1">nomep</td>
        <td class="font1">cognome</td>
        <td class="font1">dataNascita</td>
        <td class="font1">email</td>
        <td class="font1">nome</td>   
    </tr>

    <?php while($riga=mysqli_fetch_assoc($dati)){ ?>
        <tr>
            <td class="font1"><?php echo $riga["CF"]; ?></td>
            <td class="font1"><?php echo $riga["nomep"]; ?></td>
            <td class="font1"><?php echo $riga["cognome"]; ?></td>
            <td class="font1"><?php echo $riga["dataNascita"]; ?></td>
            <td class="font1"><?php echo $riga["email"]; ?></td>
            <td class="font1"><?php echo $riga["nome"]; ?></td>
        </tr>
    <?php } ?> 
</table>

<div class="empty-space"></div>

</body>
</html>
