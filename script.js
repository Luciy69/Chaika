// script.js
const products = [
    {  name: "Мандарины", src: "/img/main/main17.svg" },
    {  name: "Шейка свиная", src: "/img/main/main18.svg" },
    {  name: "Хурма королек", src: "/img/main/main19.svg" },
    {  name: "Milka с цельным фундуком", src: "/img/main/main20.svg" },
    {  name: "Milka", src: "/img/main/main21.svg" },
    {  name: "Бананы", src: "/img/main/main31.svg" },
    {  name: "Лук", src: "/img/main/main32.svg" },
    {  name: "Лук зеленый", src: "/img/main/main33.svg" },
    {  name: "Клубника", src: "/img/main/main34.svg" },
    {  name: "Картофель", src: "/img/main/main35.svg" },
    {  name: "Салат Сельдь", src: "/img/main/main22.svg" },
    {  name: "Винегрет овощной", src: "/img/main/main23.svg" },
    {  name: "Салат Оливье", src: "/img/main/main24.svg" },
    {  name: "Салат Цезарь", src: "/img/main/main25.svg" },
    {  name: "Паста Карбонара", src: "/img/main/main26.svg" },
    {  name: "Молоко", src: "/img/main/main27.svg" },
    {  name: "Сыр Российкий", src: "/img/main/main10.svg" },
    {  name: "Молоко грин агро ", src: "/img/main/main28.svg" },
    {  name: "Яйцо Роксар Экстра", src: "/img/main/main29.svg" },
    {  name: "Сливочное масло", src: "/img/main/main30.svg" },
    {  name: "Дорадо Турция", src: "/img/main/main36.svg" },
    {  name: "Треска филе Мурманск", src: "/img/main/main37.svg" },
    {  name: "Форель Вкус Арт стейк замороженный", src: "/img/main/main38.svg" },
    {  name: "Форель 1.5-2 кг потрошенная", src: "/img/main/main39.svg" },
    {  name: "Сибас Турция", src: "/img/main/main40.svg" },
    {  name: "Колбаски из свинины Мираторг для жарки", src: "/img/main/main41.svg" },
    {  name: "Бургер из говядины Мираторг", src: "/img/main/main42.svg" },
    {  name: "Тушка цыплёнка на зелёном откорме", src: "/img/main/main43.svg" },
    {  name: "Колбаски из говядины Мираторг Чевапчичи", src: "/img/main/main44.svg" },
    {  name: "Ребра свиные Мираторг Деликатесные", src: "/img/main/main45.svg" },
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
    let productId = Math.floor(Math.random() * 1000); // Генерируем уникальный id для товара
    cart.push({ id: productId, name: productName, price: productPrice });
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
function removeFromCart(itemId) {
    let cartItems = JSON.parse(localStorage.getItem('cart'));
    let updatedCart = cartItems.filter(item => item.id !== itemId);
    localStorage.setItem('cart', JSON.stringify(updatedCart));
}
function removeFromCart(productId) {
    // Retrieve the current cart from local storage
    var cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Filter out the product with the given id
    cart = cart.filter(function(product) {
        return product.id !== productId;
    });

    // Save the updated cart to local storage
    localStorage.setItem('cart', JSON.stringify(cart));

    // Alert the user that the product has been removed
    alert('Товар удален из корзины');
}


function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
