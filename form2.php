<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <?php
    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "przemek2";
    $login =$_POST["login2"];
    $hashed_password = sha1($_POST["haslo2"]);



    $conn = new mysqli($servername, $username, $password, $dbname);

    $result = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `user_` WHERE `login` = '$login' AND `haslo` = '$hashed_password'"));  //sprawdzenie czy istnieje uzytkownik o takim nicku i hasle
    if ($result != 1) {
        echo ('Niepoprawne hasło lub login');
    } else {
        header("Location: http://localhost/pain1-main/zalogowano.php");
    }
    ?>
    
</body>
</html>
