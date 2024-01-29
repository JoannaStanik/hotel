<?php
echo("jestes w insert.php");
echo "<li>".$_POST['id_pokoju'];
echo "<li>".$_POST['imie'];
echo "<li>".$_POST['nazwisko'];
echo "<li>".$_POST['data_zameldowania'];
echo "<li>".$_POST['data_wymeldowania'];
echo "<li>".$_POST['numer_telefonu'];
echo "<li>".$_POST['email'];

$servername="127.0.0.1";
    $username="root";
    $password="";
    $dbname="hotel";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

$sql = "INSERT INTO goscie (id_goscia, id_pokoju, imie, nazwisko, data_zameldowania, data_wymeldowania, numer_telefonu, email) 
       VALUES (null, '".$_POST['id_pokoju']."', '".$_POST['imie']."','".$_POST['nazwisko']."','".$_POST['data_zameldowania']."','".$_POST['data_wymeldowania']."','".$_POST['numer_telefonu']."','".$_POST['email']."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('Location: goscie.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
