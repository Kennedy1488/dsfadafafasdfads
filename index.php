<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="wrapper">
        <h1>Добавить Заметку</h1>
        <div id="app">
            <form action="add_task.php" method="post">
                <input type="text" name="task" placeholder="add" required>
                <input type="date" name="task_date" required>
                <input type="time" name="task_time" required>
                <select name="priority" required>
                    <option value="low">low</option>
                    <option value="medium">medium</option>
                    <option value="high">high</option>
                </select>
                <button type="submit">add</button>
            </form>
            <ul id="task-list">

            </ul>
        </div>
        <script src="js/scripts.js"></script>
</body>

</html>