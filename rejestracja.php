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
    $servername="mysql-bazadanychjs.alwaysdata.net";
    $username="345528";
    $password="Nintendo123!";
    $dbname="bazadanychjs_hotel";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT id_goscia, id_pracownika, data_rejestracji, typ_rejestracji, uwagi FROM rejestracja";
    $result = mysqli_query($conn, $sql);
    echo('<table border="1">');
    echo('<th>id gościa</th><th>id pracownika</th><th>data rejestracji</th><th>typ rejestracji</th><th>uwagi</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_goscia'].'</td><td>'.$row['id_pracownika'].'</td><td>'.$row['data_rejestracji'].'</td><td>'.$row['typ_rejestracji'].'</td><td>'.$row['uwagi'].'</td>');
        echo('</tr>');
    }
    echo('</table>');
    ?>
    </div>
</div>
</body>
</html>
