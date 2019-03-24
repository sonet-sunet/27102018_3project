let app = new Vue ({
    el: '.app',
<<<<<<< HEAD
    data:{
        title: 'Привет, мир!'
=======
    data: {
        title: 'Привет, Мир!'
>>>>>>> origin/sklyarova
    }
});

let counterApp = new Vue ({
    el: '.counter',
<<<<<<< HEAD
    data:{
        count: 0
=======
    data: {
        count: 10
>>>>>>> origin/sklyarova
    }
})

<<<<<<< HEAD
let countdownApp = new Vue({
    el: '.countdown',
    data:{
        countdown: 10,
        count_clicks : 0
    }
});
=======
setInterval(()=>{
    counterApp.count--; 
    if (counterApp.count<=0 && counterApp.count==0){
        alert('Вы прогирали');
    }
    // if (counterApp.count==0) {

    // }

}, 1000);
>>>>>>> origin/sklyarova

let button = new Vue ({
    el: 'button',
    data: {
        proba: 0
    }
})

let btn = document.querySelector('button');
btn.addEventListener('click', function(){
<<<<<<< HEAD
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
=======
    button.proba++;
    if(button.proba>=5) {
        alert('Вы выиграли');
    }
})

// setInterval(()=>{
//     button.proba--; 
//     if (proba<=0){
//         alert('Вы прогирали')
//     }

// }, 1000);

>>>>>>> origin/sklyarova
