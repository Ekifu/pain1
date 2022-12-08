<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>
<br>
<div id="container">
    <div id="zarejestruj">  
        <div id="zar_main">ZAREJESTRUJ</div><br>
        <form action="form.php" method="post">
            Login: <input type="text" name="login"><br><br>
            Hasło: <input type="password" name="haslo"><br><br>
            Imię: <input type="text" name="imie"><br><br>
            Nazwisko: <input type="text" name="nazwisko"><br><br>
            Wiek: <input type="number" name="wiek"><br><br>
            Admin: TAK <input type="radio" name="admin"  value="1"><br><br>
            Admin: NIE <input type="radio" name="admin"  value="0"><br><br>
        <input type="submit" class="button">
        </form>
    </div> 
        <br><br><br><br>

    <div id="zaloguj">
        <div id="zal_main">ZALOGUJ</div><br>
        <form action="form2.php" method="post">
            Login: <input type="text" name="login2"><br><br>
            Hasło: <input type="password" name="haslo2"><br><br>
            <input type="submit" class="button" id="last">
            <br>
        </form>
    </div>    
</div>

</body>
</html>