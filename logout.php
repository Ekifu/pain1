<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style5.css">
</head>
<body>
<div>WYLOGOWANO</div>
<form action="index.php">
    <input type="submit" id="lgout2" value="Powrót"/>
</form>
<?php
session_start();
session_destroy();
?>
    
</body>
</html>