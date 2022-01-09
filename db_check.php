<?php
$connect = new mysqli("localhost", "admin", "", "user_information");
if($connect->connect_error){
    die("Ошибка: " . $connect->connect_error);
}
$sql = "SELECT * FROM user";
if($result = $connect->query($sql)){
    $rowsCount = $result->num_rows; // количество полученных строк
    echo "<p>Получено объектов: $rowsCount</p>";
    echo "<table><tr><th>Id</th><th>Мейл</th><th>Пароль</th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["mail"] . "</td>";
            echo "<td>" . $row["password"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    $result->free();
} else{
    echo "Ошибка: " . $connect->error;
}
$connect->close();
?>