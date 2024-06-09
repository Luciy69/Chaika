<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proekt";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $sql = "SELECT id, login FROM users WHERE login = '$login' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_login'] = $row['login'];
    } else {
        echo "Неверный логин или пароль. Попробуйте еще раз.";
    }
}

if (isset($_POST['logout'])) {
    session_unset();
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/main.css">
    <script src="tututu.js"></script>
    <script>
           function showSection(sectionId) {
            let sections = document.querySelectorAll('.main_content');
            sections.forEach(section => {
                section.style.display = 'none';
            });
            document.getElementById(sectionId).style.display = 'block';
        }

        // Вызов функции при загрузке страницы
        window.onload = function() {
            showSection('lich');
        };
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



<!-- main -->
    <main>
        

        <br>
        <div class="main_categoryproduct">
        <div class="main_categoryproduct">
            <h3 onclick="showSection('lich')" style="padding-left: 15px;">Личный кабинет</h3>
            <h3 onclick="showSection('orders')" style="padding-left: 15px; cursor: pointer;">Заказы</h3>
            <h3 onclick="showSection('purchases')" style="padding-left: 15px; cursor: pointer;">Вы уже покупали</h3>
            <h3 onclick="showSection('favorites')" style="padding-left: 15px; cursor: pointer;">Избранное</h3>
            <h3  style="padding-left: 15px; cursor: pointer; "><a href="logout" style="text-decoration: none; color: black;">Выйти</a></h3>
            <div id="orders" class="main_content" style="display: none;">
            <br> <br> 
            <h1 class="lich" style="padding-left: 225px;">Заказы</h1>
        </div>
        <div id="purchases" class="main_content" style="display: none;">
        <br> <br> 
        <h1 class="lich" style="padding-left: 225px;">Вы уже покупали</h1>
        </div>
        <div id="favorites" class="main_content" style="display: none;">
        <br> <br> 
        <h1 class="lich" style="padding-left: 225px;">Избранное</h1>
        </div>
        </div>
        </div>
        <div id="lich" class="main_content" style="display: none;">
        <div class="main_saleproducts">
            <br><br>
            <h1 class="lich" style="padding-left: 225px;">Личный кабинет</h1>
            <p class="qq1"></p>
    </div>
                <img class="avatar" id="avatar" src="./img/avatar.jpg" alt="avatar" width="180"  height="150">
                <button class="knopka"><input type="file" id="file-input" accept="image/jpeg, image/png" onchange="avatar(event)">

                </button>
                <h3 class="io" style="margin: -110px;"><?php echo "Логин: " . ($_SESSION['user_login'] ?? 'Гость'); ?></h3>
                    
    </div>

<div class="main_markets">
           
</div>
<br><br><br><br><br><br><br><br><br>



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