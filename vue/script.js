let app = new Vue({
    el: '.app',
    data:{
        title: 'Привет, мир!'
    }
});

let counterApp = new Vue({
    el: '.counter',
    data:{
        count: 0
    }
});

let countdownApp = new Vue({
    el: '.countdown',
    data:{
        countdown: 10,
        count_clicks : 0
    }
});

let btn = document.querySelector('button');
btn.addEventListener('click', function(){
    countdownApp.count_clicks++;

    if(countdownApp.count_clicks == 5){
        alert('Вы выиграли');
    }
});
setInterval(()=>{
    countdownApp.countdown--;

    if(countdownApp.countdown ==0 && countdownApp.count_clicks < 5){
        alert('Вы проиграли');
    }
},1000);

setInterval(()=>{
    counterApp.count++;
},1000);