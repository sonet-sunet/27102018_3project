let buttonAdd = document.querySelector('.add-to-basket');

buttonAdd.addEventListener('click', function(){
    let productId = this.getAttribute('data-product-id');

    // console.log(productId);

    let xhr = new XMLHttpRequest();
        xhr.open('GET', `/api/basket_handler.php?productId=${productId}`);
        xhr.send();

        xhr.addEventListener('load', ()=>{
            let data = JSON.parse(xhr.responseText);
            basketManager.update();
        });
});