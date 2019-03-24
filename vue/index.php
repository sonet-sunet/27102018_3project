<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>vue.js</title>
</head>
<body>
    <div class="app">
        {{title}}
    </div>
    <div class="counter">
        {{count}}
    </div>

    <div class="countdown">
        {{countdown}}
        <mark>Кол-во кликов {{count_clicks}}</mark>
    </div>
    <button class="button">Успей нажать 5 раз</button>



    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>    
    <script src="script.js"></script>    

</body>
</html>