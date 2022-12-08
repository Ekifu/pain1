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


        $conn = new mysqli($servername, $username, $password, $dbname);

        if(isset($_POST['klasa_nazwa'])){
            $nazwa_k=$_POST["klasa_nazwa"];;
            $klasa_id = mysqli_fetch_array(mysqli_query($conn,"SELECT id FROM klasa WHERE name = '$nazwa_k'"));
            // $klasa_id=(int)$klasa_id[0];
            $sql3 = "INSERT INTO klasa (name) VALUES ('$nazwa_k')";
            if(mysqli_query($conn, $sql3)){
                echo "Wpisano";
            }
            else{
                echo "błąd ". sql3 . mysqli_error($conn);
            }

        }
        if(isset($_POST['uczen_imie'])){
            $imie_u=$_POST["uczen_imie"];
            $nazwisko_u=$_POST["uczen_nazwisko"];
            $id_klasy_u=$_POST["uczen_id_klasy"];
            $uczen_id = mysqli_fetch_array(mysqli_query($conn,"SELECT id FROM student WHERE name = '$imie_u'"));
            // $uczen_id=(int)$uczen_id[0];
            $sql3 = "INSERT INTO student (name, surname, class_id) VALUES ('$imie_u','$nazwisko_u','$id_klasy_u')";
            if(mysqli_query($conn, $sql3)){
                echo "Wpisano";
            }
            else{
                echo "błąd ". sql3 . mysqli_error($conn);
            }

        }
        if(isset($_POST['przedmiot_nazwa'])){
            $nazwa_p=$_POST["przedmiot_nazwa"];
            $id_klasy_p=$_POST["przedmiot_id_klasy"];
            $przedmiot_id = mysqli_fetch_array(mysqli_query($conn,"SELECT id FROM subject WHERE name = '$nazwa_p'"));
            // $przedmiot_id=(int)$przedmiot_id[0];
            $sql3 = "INSERT INTO subject (name, class_id) VALUES ('$nazwa_p','$id_klasy_p')";
            if(mysqli_query($conn, $sql3)){
                echo "Wpisano";
            }
            else{
                echo "błąd ". sql3 . mysqli_error($conn);
            }
        }
        if(isset($_POST['nauczyciel_imie'])){
            $imie_n=$_POST["nauczyciel_imie"];
            $nazwisko_n=$_POST["nauczyciel_nazwisko"];
            $wiek_n=$_POST["nauczyciel_wiek"];
            $nauczyciel_id = mysqli_fetch_array(mysqli_query($conn,"SELECT id FROM teacher WHERE name = '$imie_n'"));
            // $nauczyciel_id=(int)$nauczyciel_id[0];
            $sql3 = "INSERT INTO teacher (name, surname, age) VALUES ('$imie_n','$nazwisko_n','$wiek_n')";
            if(mysqli_query($conn, $sql3)){
                echo "Wpisano";
            }
            else{
                echo "błąd ". sql3 . mysqli_error($conn);
            }
        }

    ?>
    
</body>
</html>