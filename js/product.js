let buttonAdd = document.querySelector('.add-to-basket');

buttonAdd.addEventListener('click' , function(){
    let productId = this.getAttribute('data-product-id');

    let xhr = new XMLHttpRequest();
    xhr.open('GET',`/api/bascet_handler.php?productId=${productId}`)
    xhr.send();

    xhr.addEventListener('load', function(){
        let data = JSON.parse(xhr.responseText);
        basketManager.update();
        console.log(data);
    })
    // console.log( productId );
})