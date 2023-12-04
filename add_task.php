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
// Обработка добавления заметки
if (
    isset($_POST['task']) && !empty($_POST['task']) &&
    isset($_POST['task_date']) && !empty($_POST['task_date']) &&
    isset($_POST['task_time']) && !empty($_POST['task_time']) &&
    isset($_POST['priority']) && !empty($_POST['priority'])
) {
    $task = mysqli_real_escape_string($connection, $_POST['task']);
    $task_date = mysqli_real_escape_string($connection, $_POST['task_date']);
    $task_time = mysqli_real_escape_string($connection, $_POST['task_time']);
    $priority = mysqli_real_escape_string($connection, $_POST['priority']);
} {
    $query = "INSERT INTO tasks (task, task_date, task_time, priority) VALUES ('$task', '$task_date','$task_time','$priority')";
    $result = mysqli_query($connection, $query);
    if ($result) {
        header("location: index.php");
    } else {
        echo "Ошибка при добавлении задачи";
    }
}
mysqli_close($connection);