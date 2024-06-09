// script.js
const products = [
    {  name: "Мандарины", src: "/img/main/rmain17.svg" },
    {  name: "Шейка свиная", src: "/img/main/rmain18.svg" },
    {  name: "Хурма королек", src: "/img/main/rmain19.svg" },
    {  name: "Milka с цельным фундуком", src: "/img/main/rmain20.svg" },
    {  name: "Milka", src: "/img/main/rmain21.svg" },
    {  name: "Бананы", src: "/img/main/rmain31.svg" },
    {  name: "Лук", src: "/img/main/rmain32.svg" },
    {  name: "Лук зеленый", src: "/img/main/rmain33.svg" },
    {  name: "Клубника", src: "/img/main/rmain34.svg" },
    {  name: "Картофель", src: "/img/main/rmain35.svg" },
    {  name: "Салат Сельдь", src: "/img/main/rmain22.svg" },
    {  name: "Винегрет овощной", src: "/img/main/rmain23.svg" },
    {  name: "Салат Оливье", src: "/img/main/rmain24.svg" },
    {  name: "Салат Цезарь", src: "/img/main/rmain25.svg" },
    {  name: "Паста Карбонара", src: "/img/main/rmain26.svg" },
    {  name: "Молоко", src: "/img/main/rmain27.svg" },
    {  name: "Сыр Российкий", src: "/img/main/rmain10.svg" },
    {  name: "Молоко грин агро ", src: "/img/main/rmain28.svg" },
    {  name: "Яйцо Роксар Экстра", src: "/img/main/rmain29.svg" },
    {  name: "Сливочное масло", src: "/img/main/rmain30.svg" },
    {  name: "Дорадо Турция", src: "/img/main/rmain36.svg" },
    {  name: "Треска филе Мурманск", src: "/img/main/rmain37.svg" },
    {  name: "Форель Вкус Арт стейк замороженный", src: "/img/main/rmain38.svg" },
    {  name: "Форель 1.5-2 кг потрошенная", src: "/img/main/rmain39.svg" },
    {  name: "Сибас Турция", src: "/img/main/rmain40.svg" },
    {  name: "Колбаски из свинины Мираторг для жарки", src: "/img/main/rmain41.svg" },
    {  name: "Бургер из говядины Мираторг", src: "/img/main/rmain42.svg" },
    {  name: "Тушка цыплёнка на зелёном откорме", src: "/img/main/rmain43.svg" },
    {  name: "Колбаски из говядины Мираторг Чевапчичи", src: "/img/main/rmain44.svg" },
    {  name: "Ребра свиные Мираторг Деликатесные", src: "/img/main/rmain45.svg" },
];

function searchProducts() {
    const searchInput = document.getElementById("searchInput");
    const searchTerm = searchInput.value.toLowerCase();
    const filteredProducts = products.filter(product => {
      return product.src.toLowerCase().includes(searchTerm) || product.name.toLowerCase().includes(searchTerm);
    });
    displayProducts(filteredProducts);
}
function displayProducts(products) {
    const productsList = document.getElementById("productsList");
    productsList.innerHTML = "";

    products.forEach(product => {
        if(product.src && product.src.endsWith(".svg")) {
            const productItem = document.createElement("a");
            productItem.classList.add("product");
            const imageName = product.src.split("/").pop().split(".")[0];
            productItem.setAttribute("href", `/product/${imageName}.php`); // Пример ссылки на файлы типа product1.php, product2.php
            productItem.setAttribute("target", "_blank"); // Открывать ссылку в новой вкладке
            const image = document.createElement("img");
            image.setAttribute("src", product.src);
            image.setAttribute("width", "240");
            image.setAttribute("height", "350");
            productItem.appendChild(image);
            productsList.appendChild(productItem);
        } else {
            const productItem = document.createElement("div");
            productItem.classList.add("product");
            productItem.innerHTML = `<h3>${product.name}</h3> <p>${product.price}</p>`;
            productsList.appendChild(productItem);
        }
    });
}

function addToCart() {
    let product = document.querySelector('.product');
    let productName = product.querySelector('h2').textContent;
    let productPrice = product.querySelector('p').textContent;
  
    let cart = localStorage.getItem('cart') ? JSON.parse(localStorage.getItem('cart')) : [];
    cart.push({name: productName, price: productPrice});
    localStorage.setItem('cart', JSON.stringify(cart));
    alert('Товар добавлен в корзину');
  }
  let cartItems = localStorage.getItem('cart') ? JSON.parse(localStorage.getItem('cart')) : [];

let cartDiv = document.getElementById('cart');
cartItems.forEach(item => {
  let itemDiv = document.createElement('div');
  itemDiv.textContent = item.name + ' - ' + item.price;
  cartDiv.appendChild(itemDiv);
});
