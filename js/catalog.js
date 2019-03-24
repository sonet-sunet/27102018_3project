class Product{
    constructor(name,price,imgSrc = null, id, sale){
        this.name = name;
        this.price = price;
        this.photo = imgSrc;
        this.id = id;
        this.sale = sale;
    }
    renderProduct(el){
        let productEl = document.createElement('a');
        productEl.href = `/product/?id=${this.id}`;
        productEl.classList.add('product');
        if( this.sale > 0 ){
            productEl.classList.add('sale');
        }
        productEl.innerHTML = `
            <div class='product__img' style='background-image:url(${(this.photo == null) ? '/images/no-image-available.png' : this.photo})'></div>
            <div class='product__name'>${this.name}</div>
            <div class='product__price'>${this.price - this.price*this.sale} руб.</div>
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
    // метод который потом удалим
    addProductArray(productArray){
        this.products = productArray;
    }
    render(){
        this.products.forEach((productItem)=>{
            productItem.renderProduct(this.el);
        })
    }
    empty(){
        this.products = [];
        this.el.innerHTML = '';
    }
    preLoadOn(){
        this.el.classList.add('preload');
    }
    preLoadOff(){
        this.el.classList.remove('preload');
    }
    renderPagination(configPagination){
        let paginationEl = document.querySelector('.page-buttons');

        for(let i=1;i<=configPagination.countPage; i++){
            let div = document.createElement('div');
            div.classList.add('page-buttons__item');
            
            if( configPagination.nowPage == i ){
                div.classList.add('page-buttons__item_color_white');
            }
            console.log(i);
            div.innerHTML = i;
            div.setAttribute('data-page', i);
            paginationEl.appendChild(div);
            let that = this;
            div.addEventListener('click', function(){
                paginationEl.innerHTML = '';
                that.load( this.getAttribute('data-page') );
            });
        }
    }
    load(page = 1){
        this.preLoadOn();
        let xhr = new XMLHttpRequest();
        xhr.open('GET',`/api/catalog_handler.php?section=${this.section}&page=${page}`);
        xhr.send();

        xhr.addEventListener('load',()=>{
            let data = JSON.parse(xhr.responseText);

            console.log(data);
            this.renderPagination(data.pagination);
            this.empty();
            data.products.forEach((product)=>{
                console.log(product);

                let newProduct = new Product(product.name,product.price,product.imgSrc,product.id,product.sale);
                this.products.push(newProduct);
            });
            
            this.render();
            this.preLoadOff();
            
        });
    }
}

// let boots = new Product('Кроссовки',4500);

// let catalogEl = document.querySelector('.catalog');
// boots.renderProduct(catalogEl);

// let jacket = new Product('Куртка', 6000, '/images/jacket.jpg');
// jacket.renderProduct(catalogEl);

// console.dir(boots);

let catalog = new Catalog('man');
// catalog.addProductArray([new Product('Кроссовки',4500,null,100),new Product('Куртка', 6000, '/images/jacket.jpg',15)]);
catalog.load();

// setTimeout(()=>{
//     catalog.empty();
// },2000);

// setTimeout(()=>{
//     catalog.preLoadOn();
// },2000);
// setTimeout(()=>{
//     catalog.preLoadOff();
// },4000);

