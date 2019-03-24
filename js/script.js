let basketManager = {
<<<<<<< HEAD
    el: document.querySelector('.basket-info__text span'),
    update(){
        let xhr = new XMLHttpRequest();
        xhr.open('GET',`/api/basket_handler.php`);
        xhr.send();

        xhr.addEventListener('load',()=>{
            let data = JSON.parse(xhr.responseText);
            this.el.innerHTML = data.count;
            console.log(data);
        });
        
=======
    el: document.querySelector('.basket__text span'),
    update() {
        let xhr = new XMLHttpRequest();
        xhr.open('GET','/api/bascet_handler.php')
        xhr.send();

        xhr.addEventListener('load', () => {
            let data = JSON.parse(xhr.responseText);
            this.el.innerHTML = data.count;
            console.log(data);
        })
>>>>>>> origin/sklyarova

    }
}

basketManager.update();