<?

function putForm() {
  echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
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
    <header>
    <div class="header_nav1">
            <div class="header_nav1-logo">
                <a href="./index.php"><img src="./img/logo.jpg" alt="logo"></a>
                <a href="./index.php"><h1>Чайка</h1></a>
                </div>
            <div class="header_nav1-catalog">
                    <p></p>
                    <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn" style="background-color: transparent; border: none;"><img src="./img/catalog.png" alt="catalog">Каталог</button>
                <div id="myDropdown" class="dropdown-content">
                    <br>
                <a href="main5.php">Акции</a>
                <a href="main1.php">
                        <p>Скидки</p>
                    </a>
                    <a href="main6.php">
                        <p>Готовая еда</p>
                    </a>
                    
                    <a href="main8.php">
                        <p>Молоко, сыр, яйца</p>
                    </a>
                 <a href="main9.php">
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
                <a href="result.php"><img src="./img/finder.png" alt="fidner"></a>
            </div>
            <div class="header_nav1-links">
                <a href="izbran.php"><img src="./img/link1.png" alt="link"></a>
                <a href="login.php"><img src="./img/link2.png" alt="link"></a>
                <a href="main3.php"><img src="./img/link3.png" alt="link"></a>
            </div>
        </div>
        <div class="header_nav2">
            <div class="header_nav2-block1">
                <div class="header_nav2-block1--box">
                    <a href="main5.php">
                        <p>Акции</p>
                    </a>
                </div>
                <div class="header_nav2-block1--box">
                    <a href="main1.php">
                        <p>Скидки</p>
                    </a>
                </div>
                <div class="header_nav2-block1--box">
                    <a href="main6.php">
                        <p>Готовая еда</p>
                    </a>
                </div>
                <div class="header_nav2-block1--box">
                    <a href="main8.php">
                        <p>Молоко, сыр, яйца</p>
                    </a>
                </div>
                <div class="header_nav2-block1--box">
                    <a href="main9.php">
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
<main>
    <br><br>
        <h1 style="text-align: center;">Авторизуйтесь</h1>
        <br><br>
<div>
<form method="POST" style="margin-left: 37%; margin-right: 37%;">

<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Имя пользователя</label>
  <input name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Пароль</label>
  <input name="password" class="form-control" id="exampleInputPassword1">
<br>
<button type="submit" class="btn btn-primary">Вход</button>
<button type="submit" class="btn btn-primary"><a href="register" style="text-decoration: none; color: white;">Регистрация</a></button>

<br>
</form>';
}
      if (! (isset($_POST["login"]) && isset($_POST["password"]))) {
      putForm();
      } else if (isset($_POST["login"]) && isset($_POST["password"] )) {
            try {
                  $conn = new PDO('mysql:host=localhost;dbname=proekt', 'root');
             //     $dbh = $conn->prepare("select * from users where login = :login and password = :password");
                  $dbh = $conn->prepare("select users.login, roles.isAdmin 
                  from users inner join roles
                   on users.roleid = roles.id   
                   where users.login = :login and users.password = :password");
                  $dbh->execute(array('login'=>htmlentities($_POST["login"]), "password"=>htmlentities($_POST["password"])));
                  if ($dbh ->rowCount()>0) {
                  $m = $dbh->fetch(PDO::FETCH_ASSOC);
                  setcookie("login", htmlentities($_POST["login"]));
                  setcookie("isAdmin", $m["isAdmin"]);
                  if($m["isAdmin"] == 1){
                  header("Location: /org-index.php");
                  }else{header("Location: /org-index.php");}
                  
            }else {
                  putForm();
                  echo '<br><div class="alert alert-primary" role="alert">Ошибка: Данные неверны!</div>';
            }}
            
            catch (PDOException $ex) {
                  print "Ошибка подк...".$ex->getMessage ();
                  die();
            }
            $conn = null;

      }
     
   
      echo '

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      
  ';
?>
</div>

<div class="main_markets">
<br><br>
<br><br>
<br><br>




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
        <div class="footer_blocks">
            <p>Акции</p>
            <p><a href="index.php" style="color: black; padding-right: 167px; text-decoration: none;">Каталоги «Чайка»</a></p>
        </div>
        <div class="footer_blocks">
            <p>Контакты</p>
            <p ><a href="main11.php" style="color: black; padding-right: 167px; text-decoration: none;">Реквизиты</a></p>
            
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