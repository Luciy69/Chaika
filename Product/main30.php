<!DOCTYPE html>
<html lang="en">
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EBM197QXL9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-EBM197QXL9');
</script>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Товар</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
<style>
        .dropbtn {
    background-color: #rgba (0,0,0,0);
    color: black;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #rgba (0,0,0,0);
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #BBBBBBF2;
    min-width: 900px;
    min-height: 400px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
        </style>
<body>
    <header>
        <div class="header_nav1">
            <div class="header_nav1-logo">
                <a href="../../index.php"><img src="./img/logo.jpg" alt="logo"></a>
                <a href="../../index.php"><h1>Чайка</h1></a>
            </div>
            <div class="header_nav1-catalog">
                    <p></p>
                    <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn" style="background-color: transparent; border: none;"><img src="./img/catalog.png" alt="catalog">Каталог</button>
                <div id="myDropdown" class="dropdown-content">
                    <br>
                <a href="../../main5.php">Акции</a>
                <a href="../../main1.php">
                        <p>Скидки</p>
                    </a>
                    <a href="../../main6.php">
                        <p>Готовая еда</p>
                    </a>
                    
                    <a href="../../main8.php">
                        <p>Молоко, сыр, яйца</p>
                    </a>
                 <a href="../../main9.php">
                        <p>Овощи, фрукты, грибы</p>
                    </a>
               
                    <a href="../../fish.php">
                        <p>Рыба</p>
                    </a>
            
                    <a href="../../bird.php">
                        <p>Мясо и птица</p>
                    </a>

                </div>
                </div>

                
                </div>
            <div class="header_nav1-finder">
                <input type="search" placeholder="Поиск по каталогу">
                <a href="../../result.php"><img src="./img/finder.png" alt="fidner"></a>
            </div>
            <div class="header_nav1-links">
                <a href="../../izbran.php"><img src="./img/link1.png" alt="link"></a>
                <a href="../../login.php"><img src="./img/link2.png" alt="link"></a>
                <a href="../../main3.php"><img src="./img/link3.png" alt="link"></a>
            </div>
        </div>
        <div class="header_nav2">
            <div class="header_nav2-block1">
                <div class="header_nav2-block1--box">
                    <a href="../../main5.php">
                        <p>Акции</p>
                    </a>
                </div>
                <div class="header_nav2-block1--box">
                    <a href="../../main1.php">
                        <p>Скидки</p>
                    </a>
                </div>
                <div class="header_nav2-block1--box">
                    <a href="../../main6.php">
                        <p>Готовая еда</p>
                    </a>
                </div>
                <div class="header_nav2-block1--box">
                    <a href="../../main8.php">
                        <p>Молоко, сыр, яйца</p>
                    </a>
                </div>
                <div class="header_nav2-block1--box">
                    <a href="../../main9.php">
                        <p>Овощи, фрукты, грибы</p>
                    </a>
                </div>
                <div class="header_nav2-block1--box">
                    <a href="../../fish.php">
                        <p>Рыба</p>
                    </a>
                </div>
                <div class="header_nav2-block1--box">
                    <a href="../../bird.php">
                        <p>Мясо и птица</p>
                    </a>
                </div>
            </div>
            </div>
        </div>
    </header>


<!-- main -->
    <main>
        

        <br>
        <div class="main_categoryproduct">
            <h3 style="padding-left: 15px; color: grey;">Товар</h3>
            <img src="./img/5b8070fc006563715dcbc2f74a77780b.jpg" width="460" height="350" style="border: 1px solid black; margin-left: 15px;">
            <h3 class="tovarn">Главная*каталог*Cливочное масло экомилк</h3>
            <h1 class="tovarnaz">Cливочное масло экомилк</h1>
            <div class="rating-area">
                <input type="radio" id="star-5" name="rating" value="5">
                <label for="star-5" title="Оценка «5»"></label>	
                <input type="radio" id="star-4" name="rating" value="4">
                <label for="star-4" title="Оценка «4»"></label>    
                <input type="radio" id="star-3" name="rating" value="3">
                <label for="star-3" title="Оценка «3»"></label>  
                <input type="radio" id="star-2" name="rating" value="2">
                <label for="star-2" title="Оценка «2»"></label>    
                <input type="radio" id="star-1" name="rating" value="1">
                <label for="star-1" title="Оценка «1»"></label>
            </div>
            <p class="ocenka">19 оценок</p>
            <img src="./img/main/c8.png" width="35" height="25" style=" padding-left: 235px; margin: 125px; position: absolute;">            
            <button class="knopka12">В корзину</button>
            <p class="otziv">19 отзыва</p>
            <p class="cub"></p>
            <img src="./img/main/izbr.jpg" width="55" height="45" style=" padding-left: 395px; margin: 135px; position: absolute;">
            <p class="nalich">В наличии много</p>
            <p class="samovi">Самовывоз: бесплатно</p>
            <img src="./img/main/unnamed.jpg" width="55" height="45" style=" margin: 185px 305px; position: absolute;border: 1px solid black;">
            <p class="cena">399,00₽</p>
            <h1 style="text-align: center;">Пищевая ценность на 100г:</h1>
            <p class="ugliv">0.0 г Углеводы</p>
            <p class="jir">36.5 г Жиры</p>
            <p class="belki">13.7 г Белки</p>
            <p class="kkal">383.0 Ккал</p>
            <h1 class="sostav" style="text-align: center;">Состав:</h1>
            <p class="opisan" style="font-size: 155%;">Молоко коровье нормализованное пастеризованное, 
                закваска на основе молочнокислых мезофильных и термофильных бактерий, соль 
                (содержит агент антислеживающий ферроцианид калия), концентрат нитрат натрия, краситель аннато, уплотнитель хлорид кальция, 
                ферментный препарат животного происхождения: пепсин, химозин.</p>
                <br><br><br><br><br><br>

        </div>
        

<div class="main_markets">
    <h1 style="text-align: center;">Рекомендации</h1>
    <div class="main_saleproducts-products">
        <a href="main22.php"><img src="./img/main/product6.svg" alt="product"></a>
        <a href="main23.php"><img src="./img/main/product7.svg" alt="product"></a>
        <a href="main24.php"><img src="./img/main/product8.svg" alt="product"></a>
        <a href="main25.php"><img src="./img/main/product9.svg" alt="product"></a>
        <a href="main26.php"><img src="./img/main/product10.svg" alt="product"></a>
        
    </div>
    <br><br><br><br><br><br>



    </main>
    <script>


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

    </script>

<!-- footer -->
    <footer>
        <script>
            $('.nav-toggle').on('click', function(){
              $('#menu').toggleClass('active');
            });
            </script>
        <div class="footer_blocks">
            <p>Акции</p>
            <p><a href="../../index.php" style="color: black; padding-right: 167px; text-decoration: none;">Каталоги «Чайка»</a></p>
        </div>
        <div class="footer_blocks">
            <p>Контакты</p>
            <p ><a href="../../main11.php" style="color: black; padding-right: 167px; text-decoration: none;">Реквизиты</a></p>
            
        </div>
        <div class="footer_blocks">
            <p>Мы в социальных сетях</p>
            <a href="#">
                <img src="./img/soc-link1.png" alt="soc-link1">
                <img src="./img/soc-link2.png" alt="soc-link2">
                <img src="./img/soc-link3.png" alt="soc-link3">
            </a>
            <p>Правовая информация</p>
        </div>
    </footer>
</body>
</html>