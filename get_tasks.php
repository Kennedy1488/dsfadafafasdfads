<?php
// Параметры подключения к базе данных
$host = "localhost"; // Хост базы данных
$username = "root"; // Имя пользователя базы данных
$password = "mysql"; // Пароль пользователя базы данных
$database = "root"; // Имя базы данных
$connection = mysqli_connect($host, $username, $password, $database);
// Создание подключения к базе данных
if (!$connection) {
    die("Ошибка подключения: " . $mysqli_connect_error());
}
$query = "SELECT*FROM task ORDER BY task_date ASC, task_time ASC";
$result = mysqli_query($connection, $query);

$tasks = array();
while ($row = mysqli_fetch_assoc($result)) {
    $tasks[] = $row;
}

echo json_encode($tasks);
mysqli_close($connection);
?>