let app = new Vue({
  el: '.app',
  data:{
    title:'Hello world!'
  }
});

let counterApp = new Vue({
  el: '.counter',
  data:{
    count:0
  }
});

setInterval(()=>{
  counterApp.count++;
}, 1000);

let countdownApp = new Vue({
  el: '.countdown',
  data:{
    count:10,
    count_clicks:0
  }
});
let button = document.querySelector('.button');

setInterval(()=>{
  countdownApp.count--;
  if(countdownApp.count==0 && countdownApp.count_clicks!=5){
    alert('YOU LOSE!');
  }
  if(countdownApp.count==0 && countdownApp.count_clicks==5){
    clearInterval();
  }
}, 1000);

button.addEventListener('click', function(){
  countdownApp.count_clicks++;
  if(countdownApp.count_clicks==5){
    alert('YOU WIN!');
  }
});
