<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 2</title>
</head>

<body>
    <form action="deep_form.php">
        <h3>Bitte geben Sie ihren Namen ein:</h3>
        <p><input type="text" name="formName"></p>
        <p>Ihre Anrede lautet:</p>
        <p><input type="radio" name="formAnrede" id="formAnrede" value="M"> Frau <input type="radio" name="formAnrede"
                id="formAnrede" value="W">Herr</p>
        <p><button type="submit">Abschicken</button></p>
    </form>
</body>

</html>

<?php
if (isset($_GET['formName'])) {
    if (!isset($_GET['formAnrede']))
        return;
    $result = 'Sehr geehrte';
    switch ($_GET['formAnrede']) {
        case 'M':
            $result = $result . " Frau " . $_GET['formName'];
        case 'W':
            $result = $result . "r Herr " . $_GET['formName'];
    }
    echo $result;
}
?>