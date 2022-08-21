<?php
$conn = new mysqli("localhost", "root", "", "testdb2");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
?>
<?php
// если запрос GET
if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"]))
{
    $id = $conn->real_escape_string($_GET["id"]);
    $sql = "SELECT * FROM Counterparty WHERE id = '$id'";
    if($result = $conn->query($sql)){
        if($result->num_rows > 0){
            foreach($result as $row){
                $name = $row["name"];
                $surname = $row["surname"];
                $patronymic = $row["patronymic"];
                $iin = $row["iin"];
                $passportNumber = $row["passportNumber"];
                $dateofissue = $row["dateofissue"];
                $issuedby = $row["issuedby"];
            }
            echo "<h3>Обновление пользователя</h3>
                <form method='post'>
                    <input type='hidden' name='id' value='$id' />
                    <p>Имя:
                    <input type='text' name='name' value='$name' /></p>
                    <p>Фамилия:
                    <input type='text' name='surname' value='$surname' /></p>
                    <p>Отчество:
                    <input type='text' name='patronymic' value='$patronymic' /></p>
                    <p>ИИН:
                    <input type='text' name='iin' value='$iin' /></p>
                    <p>Номер паспорта:
                    <input type='text' name='passportNumber' value='$passportNumber' /></p>
                    <p>Дата выдачи:
                    <input type='date' name='dateofissue' value='$dateofissue' /></p>
                    <p>Выдана:
                    <input type='text' name='issuedby' value='$issuedby' /></p>
                    <input type='submit' value='Сохранить'>
            </form>";
        }
        else{
            echo "<div>Пользователь не найден</div>";
        }
        $result->free();
    } else{
        echo "Ошибка: " . $conn->error;
    }
}
elseif (isset($_POST["id"]) && isset($_POST["name"]) && isset($_POST["surname"]) && isset($_POST["patronymic"]) && isset($_POST["iin"]) && isset($_POST["passportNumber"]) && isset($_POST["dateofissue"]) && isset($_POST["issuedby"]))
 {
    $id = $conn->real_escape_string($_POST["id"]);
    $name = $conn->real_escape_string($_POST["name"]);
    $surname = $conn->real_escape_string($_POST["surname"]);
    $patronymic = $conn->real_escape_string($_POST["patronymic"]);
    $iin = $conn->real_escape_string($_POST["iin"]);
    $passportNumber = $conn->real_escape_string($_POST["passportNumber"]);
    $dateofissue = $conn->real_escape_string($_POST["dateofissue"]);
    $issuedby = $conn->real_escape_string($_POST["issuedby"]);
    $sql = "UPDATE Counterparty SET name = '$name', surname = '$surname', patronymic = '$patronymic', iin = '$iin', passportNumber = '$passportNumber', dateofissue = '$dateofissue', issuedby = '$issuedby' WHERE id = '$id'";
    if($result = $conn->query($sql)){
        header("Location: Контрагенты.php");
    } else{
        echo "Ошибка: " . $conn->error;
    }
}
else{
    echo "Некорректные данные";
}
$conn->close();
?>
</body>
</html>
