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
    $sql = "SELECT * FROM pokoje";
    $result = mysqli_query($conn, $sql);
    echo('<table border="1">');
    echo('<th>Id Pokoju</th><th>Numer pokoju</th><th>Poziom</th><th>Ilość łóżek</th><th>Cena za noc</th><th>Czy Dostępny</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_pokoju'].'</td><td>'.$row['numer_pokoju'].'</td><td>'.$row['poziom'].'</td><td>'.$row['ilosc_lozek'].'</td><td>'.$row['cena_za_noc'].'</td><td>'.$row['czy_dostepny'].'</td>');
        echo('</tr>');
    }
    echo('</table>');
    ?>
    </div>
</div>
</body>
</html>