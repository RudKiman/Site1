<?php
if (isset($_POST["name"]) && isset($_POST["surname"]) && isset($_POST["patronymic"]) && isset($_POST["iin"]) && isset($_POST["passportNumber"]) && isset($_POST["dateofissue"]) && isset($_POST["issuedby"]))
{
    $conn = new mysqli("localhost", "root", "", "testdb2");
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $name = $conn->real_escape_string($_POST["name"]);
    $surname = $conn->real_escape_string($_POST["surname"]);
    $patronymic = $conn->real_escape_string($_POST["patronymic"]);
    $iin = $conn->real_escape_string($_POST["iin"]);
    $passportNumber = $conn->real_escape_string($_POST["passportNumber"]);
    $dateofissue = $conn->real_escape_string($_POST["dateofissue"]);
    $issuedby = $conn->real_escape_string($_POST["issuedby"]);
    $sql = "INSERT INTO Counterparty (name, surname, patronymic, iin, passportNumber, dateofissue, issuedby) VALUES ('$name', '$surname', '$patronymic','$iin','$passportNumber','$dateofissue','$issuedby')";
    if($conn->query($sql)){
      header('Location: контрагенты.php');
    } else{
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();
}
?>
