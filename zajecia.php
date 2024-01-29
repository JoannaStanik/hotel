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
    <?php include("menu.php");?>
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
    $sql = "SELECT * FROM pracownicy";
    $result = mysqli_query($conn, $sql);
    echo('<table border="1">');
    echo('<th>id pracownika</th><th>Imie</th><th>Nazwisko</th><th>Stanowisko</th><th>data zatrudnienia</th><th>telefon</th><th>email</th><th>adres</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_pracownika'].'</td><td>'.$row['imie'].'</td><td>'.$row['nazwisko'].'</td><td>'.$row['stanowisko'].'</td><td>'.$row['data_zatrudnienia'].'</td><td>'.$row['telefon'].'</td><td>'.$row['email'].'</td><td>'.$row['adres'].'</td>');
        echo('</tr>');
    }
    echo('</table>');
    ?>
    </div>
</div>
</body>
</html>