<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мясо и Птица</title>
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
<!-- Header -->
<header>
<div class="header_nav1">
            <div class="header_nav1-logo">
                <a href="./index1.php"><img src="./img/logo.jpg" alt="logo"></a>
                <a href="./index1.php"><h1>Чайка</h1></a>
                </div>
                <div class="header_nav1-catalog">
                    <p></p>
                    <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn" style="background-color: transparent; border: none;"><img src="./img/catalog.png" alt="catalog">Каталог</button>
                <div id="myDropdown" class="dropdown-content">
                    <br>
                <a href="rmain5.php">Акции</a>
                <a href="rmain1.php">
                        <p>Скидки</p>
                    </a>
                    <a href="rmain6.php">
                        <p>Готовая еда</p>
                    </a>
                    
                    <a href="rmain8.php">
                        <p>Молоко, сыр, яйца</p>
                    </a>
                 <a href="rmain9.php">
                        <p>Овощи, фрукты, грибы</p>
                    </a>
               
                    <a href="../../rfish.php">
                        <p>Рыба</p>
                    </a>
            
                    <a href="../../rbird.php">
                        <p>Мясо и птица</p>
                    </a>

                </div>
                
                
                </div>

                
                
            </div>
            <div class="header_nav1-finder">
                <input type="search" placeholder="Поиск по каталогу">
                <a href="rresult.php"><img src="./img/finder.png" alt="fidner"></a>
            </div>
            <div class="header_nav1-links">
            <a href="rizbran.php"><img src="./img/link1.png" alt="link"></a>
            <a href="org-index.php"><img src="./img/link2.png" alt="link"></a>
                <a href="rmain3.php"><img src="./img/link3.png" alt="link"></a>
            </div>
        </div>
        <div class="header_nav2">
            <div class="header_nav2-block1">
                <div class="header_nav2-block1--box">
                    <a href="rmain5.php">
                        <p>Акции</p>
                    </a>
                </div>
                <div class="header_nav2-block1--box">
                    <a href="rmain1.php">
                        <p>Скидки</p>
                    </a>
                </div>
                <div class="header_nav2-block1--box">
                    <a href="rmain6.php">
                        <p>Готовая еда</p>
                    </a>
                </div>
                <div class="header_nav2-block1--box">
                    <a href="rmain8.php">
                        <p>Молоко, сыр, яйца</p>
                    </a>
                </div>
                <div class="header_nav2-block1--box">
                    <a href="rmain9.php">
                        <p>Овощи, фрукты, грибы</p>
                    </a>
                </div>
                <div class="header_nav2-block1--box">
                    <a href="../../rfish.php">
                        <p>Рыба</p>
                    </a>
                </div>
                <div class="header_nav2-block1--box">
                    <a href="../../rbird.php">
                        <p>Мясо и птица</p>
                    </a>
                </div>
            </div>
           
    
            </div>
        </div>
    </header>

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
<!-- main -->
    <main>
        


        <div class="main_categoryproduct">
            <a href="#"><h3>Категории товаров ></h3></a>
            <div class="main_categoryproducts-link">
                <a href="rmain6.php"><img src="./img/main/products2.png" alt="products2"></a>
                <a href="rmain9.php"><img src="./img/main/products3.png" alt="products3"></a>
                <a href="rmain8.php"><img src="./img/main/products1.png" alt="products1"></a>
                <a href="rfish.php"><img src="./img/main/products4.png" alt="products4"></a>
                <a href="rbird.php"><img src="./img/main/products5.png" alt="products5"></a>
            </div>
        </div>
        <div class="main_saleproducts">
            <div class="main_saleproducts-name">
                <a href="#"><h3>Мясо и Птица ></h3></a>
                <br><br><br>
            </div>
         
            <div class="main_saleproducts-products">
                <a href="./Product/rmain41.php"><img src="./img/main/main41.svg" alt="product"></a>
                <a href="./Product/rmain42.php"><img src="./img/main/main42.svg" alt="product"></a>
                <a href="./Product/rmain43.php"><img src="./img/main/main43.svg" alt="product"></a>
                <a href="./Product/rmain44.php"><img src="./img/main/main44.svg" alt="product"></a>
                <a href="./Product/rmain45.php"><img src="./img/main/main45.svg" alt="product"></a>
                
            </div>
        </div>





    </main>


<!-- footer -->
<footer>
        <div class="footer_blocks">
            <p>Акции</p>
            <p><a href="index1.php" style="color: black; padding-right: 167px; text-decoration: none;">Каталоги «Чайка»</a></p>
        </div>
        <div class="footer_blocks">
            <p>Контакты</p>
            <p ><a href="rmain11.php" style="color: black; padding-right: 167px; text-decoration: none;">Реквизиты</a></p>
            
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