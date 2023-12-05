<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method = "get" action = "erste_form.php" > 
    <p> <b>Bitte geben Sie Ihren Namen ein: </b></p> 
    <p> <input type = "text" name = "meinname"/> </p> 
    <p> <input type = "submit" value = "Senden"/> </p> 
    </form>
</body>
</html>

<?php
if(isset($_GET['meinname'])) {
    $meinname = $_GET['meinname']; 
    echo "Sehr geehrte Frau / Sehr geehrter Herr <b> $meinname </b>";
}
?>