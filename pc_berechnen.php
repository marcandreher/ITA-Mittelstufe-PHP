<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC Berechnen</title>
</head>
<body>
    <h1><b>Berchnen Sie die Energiekosten ihres PC's!!</b></h1>
    <form action="pc_berechnen.php">
       <p>Bitte geben Sie die Leistungsaufnahme Ihres PC's</p>
       <input type="number" name="formLeistung" id="">
       <p>Bitte geben Sie die durchschnittliche Lautzeit Ihres PC's in Stunden pro Tag ein:</p>
       <input type="number" name="formStunden" id="">
       <p>Bitte wählen Sie einen Preis für eine KWh in Euro aus:</p>
       <select size="4" name="formPreis">
            <option value="0,20">0.20 €/KWh</option>
            <option value="0,25">0.25 €/KWh</option>
            <option value="0,30">0.30 €/KWh</option>
            <option value="0,35">0.35 €/KWh</option>
       </select>
       <p><button type="submit">Abschicken</button><button type="reset">Zurücksetzen</button></p>
    </form>
</body>
</html>

<?php
    if(!empty($_GET['formLeistung']) && !empty($_GET['formStunden']) && !empty($_GET['formPreis'])) {
        echo '<p>Bei einer Täglichen Laufzeit von ' . $_GET['formStunden'] . ' Std,</p>';
        echo '<p>einer Leistungsaufnahme von ' . $_GET['formLeistung'] . ' W</p>';
        echo '<p>und einem Preis von ' . $_GET['formPreis'] . ' / KWh</p>';

        

    }
?>