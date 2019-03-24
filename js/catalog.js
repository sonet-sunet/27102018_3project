class Product{
    constructor(name, price, imgSrc = null, id, sale){
        this.name = name;
        this.price = price;
        this.imgSrc = imgSrc;
        this.id = id;
        this.sale = sale;
    }
    renderProduct(el){
        let productEl = document.createElement('a');
        productEl.href = `/product/?id=${this.id}`;
        productEl.classList.add('product');
        if(this.sale > 0){
            productEl.classList.add('sale');
        }
        productEl.innerHTML = `
        <div class='product__img'style='background-image:url(${(this.imgSrc == null) ? '/images/nophoto.jpg' : this.imgSrc})'></div>
        <div class='product__name'>${this.name}</div>
        <div class='product__price'>${(this.price - this.price*this.sale)}</div>
        `;
        
        el.appendChild(productEl);
    }
}


class Catalog{
    constructor(section){
        this.section = section;
        this.el = document.querySelector('.catalog');
        this.products = [];
    }
    addProductArray(productArray){
        this.products = productArray;
    }
    render(){
        this.products.forEach((productItem)=>{
            productItem.renderProduct(this.el);
        });
    }
    empty(){
        this.products = [];
        this.el.innerHTML = '';
    }
    preloadOn(){
        this.el.classList.add('preload');
    }
    preloadOff(){
        this.el.classList.remove('preload');
    }
    renderPagination(configPagination){
        let paginationEl = document.querySelector('.pagination');
        
        paginationEl.innerHTML = '';
        for(let i = 1; i <= configPagination.countPage; i++){
            console.log(i);
            let div = document.createElement('div');
            div.classList.add('pagination-item');
            if(configPagination.nowPage == i){
                div.classList.add('active');
            }
            div.innerHTML = i;
            div.setAttribute('data-page', i);
            paginationEl.appendChild(div);

            let that = this;
            div.addEventListener('click', function(){
                that.load( this.getAttribute('data-page'));
            });
        }
             
    }
    load(page = 1){
        let xhr = new XMLHttpRequest();
        xhr.open('GET', `/api/catalog_handler.php?section=${this.section}&page=${page}`);
        xhr.send();
        this.preloadOn();

        xhr.addEventListener('load', ()=>{
            let data = JSON.parse(xhr.responseText);

            console.log( data );
            this.renderPagination(data.pagination);

            this.empty();
            data.products.forEach((product)=>{
                // if (product.active){
                    
                // }
                console.log(product);
                let newProduct = new Product(product.name, product.price, product.photo, product.id, product.sale);
                this.products.push(newProduct);
            });
            this.render();
            this.preloadOff();
        });

    }
}

// let boots = new Product('Кросcовки', 4500);
// let catalogEl = document.querySelector('.catalog');
// boots.renderProduct(catalogEl);
// let jeans = new Product('Джинсы', 5500, '/images/jeans.jpg');
// jeans.renderProduct(catalogEl);

let catalog = new Catalog('man');
// catalog.addProductArray([new Product('Кросcовки', 4500, null, 100), new Product('Джинсы', 5500, '/images/jeans.jpg', null, 15)]);
catalog.load();



// setTimeout(()=>{
//     //catalog.empty();
//     catalog.preloadOn();
// }, 1000);

// setTimeout(()=>{
//     catalog.preloadOff();
// }, 3000);