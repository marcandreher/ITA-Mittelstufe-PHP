<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestellung</title>
</head>
<body>
    <form action="bestellung.php" method="get">
        <p>Bitte geben Sie Ihren Namen ein: <input type="text" name="formName"/></p>
        <p>Bitte geben Sie das gewünschte Gerichte ein: <input type="text" name="formGericht"/></p>
        <p>Bitte geben Sie die gewünschte Anzahl ein: <select name="formAmount" id="formAmount"><option>1</option><option>2</option><option>3</option></select></p>
        <p>Ihre Anrede lautet: <input type="radio" name="formAnrede" value="M">Herr <input type="radio" name="formAnrede" value="W">Frau <input type="radio" name="formAnrede" value="F">Firma</p>
        <button type="submit">Abschicken</button>
    </form>
</body>
</html>

<?php
    if(!empty($_GET['formName']) && !empty($_GET['formAmount']) && !empty($_GET['formGericht']) && !empty($_GET['formAnrede'])) {
        switch($_GET['formAnrede']) {
            case 'M':
                echo "<p>Sehr geehrter Herr " . $_GET['formName'] . "</p>";
                break;

            case 'W':
                echo "<p>Sehr geehrter Frau " . $_GET['formName'] . "</p>";
                break;

            case 'F':
                echo "<p>Sehr geehrter Firma " . $_GET['formName'] . "</p>";
                break;
        }

        echo '<p>Sie haben das Gericht <b>' . $_GET['formGericht'] . ' ' . $_GET['formAmount'] . ' mal bestellt</p>'; 
    }
?>