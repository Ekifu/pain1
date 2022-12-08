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
        $login =$_POST["login"];
        $haslo =$_POST["haslo"];
        $imie =$_POST['imie'];
        $nazwisko =$_POST['nazwisko'];
        $wiek =$_POST['wiek'];
        $admin =$_POST['admin'];
        if($_POST['admin']==TRUE){
          $admin=1;
        }
        else{
          $admin=0;
        }
        $hashed_password = sha1($haslo);


        $conn = new mysqli($servername, $username, $password, $dbname);

        // if($conn->connect_error){
        //     die("Connection failed: " . $conn->connection_error);
        // }
        // else{
        //     echo("Działa");
        //     echo("<br>");
        // }


        $sql="INSERT INTO user_ (login, haslo, name, surname, age, admin) VALUES ('$login','$hashed_password','$imie','$nazwisko','$wiek','$admin')";
        if ($conn->query($sql) === TRUE) {
            echo "Zarejestrowano pomyślnie";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          

    ?>
    
</body>
</html>