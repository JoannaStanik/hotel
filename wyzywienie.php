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
    $sql = "SELECT * FROM wyzywienie";
    $result = mysqli_query($conn, $sql);
    echo('<table border="1">');
    echo('<th>id posiłku</th><th>id gościa</th><th>typ posiłku</th><th>Opis</th><th>Cena</th><th>Data i czas</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_posilku'].'</td><td>'.$row['id_goscia'].'</td><td>'.$row['typ_posilku'].'</td><td>'.$row['opis'].'</td><td>'.$row['cena'].'</td><td>'.$row['data_i_czas'].'</td>');
        echo('</tr>');
    }
    echo('</table>');
    ?>
    </div>
</div>
</body>
</html>
