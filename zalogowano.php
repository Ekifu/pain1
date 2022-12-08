<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
<form action="login_next.php" method="post" id="klasa">
<br><div id="main">KLASY</div>
        Nazwa: <br><input type="text" name="klasa_nazwa"><br><br>
        <input type="submit" class="button"><br>
</form>
<form action="login_next.php" method="post" id="uczniowie">
<br><div id="main">UCZNIOWIE</div>
        Imię: <br><input type="text" name="uczen_imie"><br>
        Nazwisko: <br><input type="text" name="uczen_nazwisko"><br>
        Id klasy: <br><input type="number" name="uczen_id_klasy"><br><br>
        <input type="submit" class="button">
</form>
<form action="login_next.php" method="post" id="przedmioty">
<br><div id="main">PRZEDMIOTY</div>
        Nazwa przedmiotu: <br><input type="text" name="przedmiot_nazwa"><br>
        Id klasy: <br><input type="number" name="przedmiot_id_klasy"><br><br>
        <input type="submit" class="button">
</form>
<form action="login_next.php" method="post" id="nauczyciele">
<br><div id="main">NAUCZYCIELE</div>
        Imię: <br><input type="text" name="nauczyciel_imie"><br>
        Nazwisko: <br><input type="text" name="nauczyciel_nazwisko"><br>
        Wiek: <br><input type="number" name="nauczyciel_wiek"><br><br>
        <input type="submit" class="button"><br><br>
</form>
<form action="logout.php">
    <input type="submit" id="lgout" value="LOGOUT"/>
</form>
<div id="last_w">
        <h1>Wyświetlanie tablic</h1>
        <form method="post">
                <input class="button" type="submit" name="button1"
                        value="Klasy"/>
                
                <input class="button" type="submit" name="button2"
                        value="Uczniowie"/>

                <input class="button" type="submit" name="button3"
                        value="Przedmioty"/>
                
                <input class="button" type="submit" name="button4"
                        value="Nauczyciele"/>

                <input class="button" type="submit" name="button5"
                value="Użytkownicy"/>
        </form>
</div>
<?php 
        session_start();
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "przemek2";


        $conn = new mysqli($servername, $username, $password, $dbname);

        if(isset($_POST['button1'])) {
                $result = mysqli_query($conn,"SELECT * FROM klasa");

                echo "<table border='1'>
                <tr>
                <th>Id</th>
                <th>Name</th>
                </tr>";

                while($row = mysqli_fetch_array($result))
                {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "</tr>";
                }
                echo "</table>";
        }
        if(isset($_POST['button2'])) {
                $result = mysqli_query($conn,"SELECT * FROM student");

                echo "<table border='1'>
                <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Class_Id</th>
                </tr>";

                while($row = mysqli_fetch_array($result))
                {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['surname'] . "</td>";
                echo "<td>" . $row['class_id'] . "</td>";
                echo "</tr>";
                }
                echo "</table>";
        }
        if(isset($_POST['button3'])) {
                $result = mysqli_query($conn,"SELECT * FROM subject");

                echo "<table border='1'>
                <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Class_Id</th>
                </tr>";

                while($row = mysqli_fetch_array($result))
                {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['class_id'] . "</td>";
                echo "</tr>";
                }
                echo "</table>";
        }
        if(isset($_POST['button4'])) {
                $result = mysqli_query($conn,"SELECT * FROM teacher");

                echo "<table border='1'>
                <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Age</th>
                </tr>";

                while($row = mysqli_fetch_array($result))
                {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['surname'] . "</td>";
                echo "<td>" . $row['age'] . "</td>";
                echo "</tr>";
                }
                echo "</table>";
        }
        if(isset($_POST['button5'])) {
                $result = mysqli_query($conn,"SELECT * FROM user_");

                echo "<table border='1'>
                <tr>
                <th>Login</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Age</th>
                <th>Admin</th>
                </tr>";

                while($row = mysqli_fetch_array($result))
                {
                echo "<tr>";
                echo "<td>" . $row['login'] . "</td>";
                // echo "<td>" . $row['haslo'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['surname'] . "</td>";
                echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['admin'] . "</td>";
                echo "</tr>";
                }
                echo "</table>";
        }

        
?>

    
</body>
</html>