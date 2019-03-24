let app = new Vue ({
    el: '.app',
    data: {
        title: 'Привет, Мир!'
    }
});

let counterApp = new Vue ({
    el: '.counter',
    data: {
        count: 10
    }
})

setInterval(()=>{
    counterApp.count--; 
    if (counterApp.count<=0 && counterApp.count==0){
        alert('Вы прогирали');
    }
    // if (counterApp.count==0) {

    // }

}, 1000);

let button = new Vue ({
    el: 'button',
    data: {
        proba: 0
    }
})

let btn = document.querySelector('button');
btn.addEventListener('click', function(){
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

