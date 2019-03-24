let backetManager = {
  el: document.querySelector('.bascet__text span'),
  update(){
    let xhr = new XMLHttpRequest();
    xhr.open('GET', `/api/bascet_handler.php`);
    xhr.send();

    xhr.addEventListener('load', ()=>{
      let data = JSON.parse(xhr.responseText);//получаем данные
      this.el.innerHTML = data.count;//вписываем данные
    });
  }
};

backetManager.update();