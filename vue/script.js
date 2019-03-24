let app = new Vue({
    el: '.app',
    data:{
        title: 'Привет, мир!'
    }  
});

let counterApp = new Vue({
    el: '.counter',
    data:{
        count: 10,
        count_clicks: 0
    }
});

setInterval(()=>{
    counterApp.count--;

    if( counterApp.count == 0 && counterApp.count_clicks < 5 ){
        alert('Вы проиграли');
    }
}, 1000);

let btn = document.querySelector('button');
btn.addEventListener('click', function(){
    counterApp.count_clicks++;

    if( counterApp.count_clicks == 5 ){
        alert('Вы выиграли');
    }
});

//Задача:
// Идет обратный отчсет 10, 9, 8
// Нужно успеть кликнуть на кнопку 5 раз пока не кончился отсчет