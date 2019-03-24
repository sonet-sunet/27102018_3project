<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vue.js</title>
</head>
<body>
    <div class="app">
        {{title}}
    </div>
    <button>Клики</button>
    <div class="counter">
        {{count}}
        <mark>Кол-во кликов {{count_clicks}}</mark>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="script.js"></script>
</body>
</html>