<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obsługa hotelu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="tytul">
            <h1>Obsługa hotelu "Pod schodami"</h1>
        </div>
        <div class="menu">
            <?php include("menu.php"); ?>
        </div>
        <div class="strona">
        <?php
    $servername="127.0.0.1";
    $username="root";
    $password="";
    $dbname="hotel";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM goscie";
    $result = mysqli_query($conn, $sql);
    echo('<table border="1">');
    echo('<th>id gościa</th><th>Pokój</th><th>Imie</th><th>Nazwisko</th><th>data zameldowania</th><th>data wymeldowania</th><th>telefon</th><th>email</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_goscia'].'</td><td>'.$row['id_pokoju'].'</td><td>'.$row['imie'].'</td><td>'.$row['nazwisko'].'</td><td>'.$row['data_zameldowania'].'</td><td>'.$row['data_wymeldowania'].'</td><td>'.$row['numer_telefonu'].'</td><td>'.$row['email'].'</td>');
        echo('</tr>');
    }
    echo('</table>');
    ?>
        </div>
        <div class="forma">
            <h3>Dodawanie Gościa</h3>
            <form action="insert.php" method="POST">
                <label>Pokój</label><br><input type="number" name="id_pokoju"><br>
                <label>Imię</label><br><input type="text" name="imie"><br>
                <label>Nazwisko</label><br><input type="text" name="nazwisko"><br>
                <label>Data zameldowania</label><br><input type="date" name="data_zameldowania"><br>
                <label>Data wymeldowania</label><br><input type="date" name="data_wymeldowania"><br>
                <label>Telefon</label><br><input type="text" name="numer_telefonu"><br>
                <label>Email</label><br><input type="text" name="email"><br><br>
                <input class="przycisk" type="submit" value="Dodaj gościa">
            </form>
        </div>
    </div>
</body>
</html>