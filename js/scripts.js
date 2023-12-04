function loadTasks() {
    fetch('get_tasks.php')
        .then(response => response.json())
        .then(data => {
            const taskList = document.getElementById('task-list');

            taskList.innerHTML = '';

            data.forEach(task => {
                const listItem = document.createElement('li');
                const taskDate = new Date(task.task_date + 'T' + task.task_time);
                const currentDate = new Date();

                listItem.innerHTML = `Дата: ${task.task_date} <br>Время: ${task.task_time}<br>Задача: ${task.task}<br>Важность: ${task.priority}`;

                if (taskDate < currentDate) {
                    listItem.style.backgroundColor = '#ffe7e7';
                } else if (taskDate.toDateString() === currentDate.toDateString()) {
                    listItem.style.backgroundColor = '#e7ffe7';
                }

                listItem.innerHTML += `<button onclick='deleteTask(${task.id})'>Удалить</button>`;
                taskList.appendChild(listItem);
            });
        })
        .catch(error => {
            alert("Произошла ошибка при загрузке задач");
        });
}

loadTasks();