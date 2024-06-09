<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <style>
        .dropbtn {
            background-color: #rgba(0, 0, 0, 0);
            color: black;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropbtn:hover,
        .dropbtn:focus {
            background-color: #rgba(0, 0, 0, 0);
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
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown a:hover {
            background-color: #ddd;
        }

        .show {
            display: block;
        }
    </style>
    <header>
        <div class="header_nav1">
            <div class="header_nav1-logo">
                <a href="./index.php"><img src="./img/logo.jpg" alt="logo"></a>
                <a href="./index.php">
                    <h1>Чайка</h1>
                </a>
            </div>
            <div class="header_nav1-catalog">
                <p></p>
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn"
                        style="background-color: transparent; border: none;"><img src="./img/catalog.png"
                            alt="catalog">Каталог</button>
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
        <h2 style="text-align: center;">Регистрация</h2>
        <br>
        <form method="post" style="margin-left: 37%; margin-right: 37%;">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Имя пользователя</label>
                <input name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input name="email" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Пароль</label>
                <input name="password" class="form-control" id="exampleInputPassword1">
            </div>

            <input type="hidden" name="roleid" value="2">

            <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
        </form>

        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Весь код регистрации здесь

    // Подключение к базе данных
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "proekt";

    $conn = mysqli_connect($hostname, $username, $password, $database);

    // Получение данных из формы
    $login = $_POST['login'];
    $email = $_POST['email'];
    $user_password = $_POST['password'];
    $roleid = ($_POST['roleid'] != '') ? $_POST['roleid'] : 0; // Устанавливаем значение по умолчанию, если roleid не был заполнен

    // Защита от SQL-инъекций
    $login = mysqli_real_escape_string($conn, $login);
    $email = mysqli_real_escape_string($conn, $email);
    $user_password = mysqli_real_escape_string($conn, $user_password);
    $roleid = mysqli_real_escape_string($conn, $roleid);

    // Запрос к базе данных для проверки на уникальность email
    $sql_check_email = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql_check_email);
    if (mysqli_num_rows($result) > 0) {
        echo "<div style='text-align: center; margin-top: 50px;'><p>Ошибка: Пользователь с таким email уже зарегистрирован!</p></div>";
    } else {
        // Выполнение регистрации
        if (empty($login) || empty($email) || empty($user_password)) {
            echo "<div style='text-align: center; margin-top: 50px;'><p>Ошибка: Пожалуйста, заполните все поля!</p></div>";
        } else {
            $sql = "INSERT INTO users (login, email, password, roleid) VALUES ('$login', '$email', '$user_password', '$roleid')";
            if (mysqli_query($conn, $sql)) {
                echo "<div style='text-align: center; margin-top: 50px;'><p>Пользователь успешно зарегистрирован!</p></div>";
                // Проверка регистрации перед переходом
                echo "<script>
                setTimeout(function(){
                    window.location.href = 'login.php';
                }, 2000); // Через 2 секунды произойдет переход на страницу login.php
                </script>";
            } else {
                echo "Ошибка: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }

    // Закрытие соединения с базой данных
    mysqli_close($conn);    
}
?>


        <div class="main_markets">
            <br><br>
            <br><br>
<br><br>



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
</main>
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