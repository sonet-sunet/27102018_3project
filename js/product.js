let buttonAdd = document.querySelector('.add-to-bascet');

buttonAdd.addEventListener('click', function(e){
  e.preventDefault();
  let productId = this.getAttribute('data-product-id');

  let xhr = new XMLHttpRequest();
  xhr.open('GET', `/api/bascet_handler.php?productId=${productId}`);//запрос параметра id
  xhr.send();

  //запрос на загрузку данных
  xhr.addEventListener('load', function(){
    let data = JSON.parse(xhr.responseText);
    backetManager.update();
  });
});


