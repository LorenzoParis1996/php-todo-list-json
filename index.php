<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.2/axios.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div id="app">
        <h3 v-for="task in tasks">{{ task.task }}
            <p>{{ task.deadline }}</p>
            <p>{{ task.priority }}</p>
        </h3>

    </div>
    




<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="./script.js"></script>
</body>
</html>
