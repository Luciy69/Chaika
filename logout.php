<?

if (isset($_POST["login"])){
    setcookie("login", "", time()-3600);
    session_unset();
}

header("Location: /login")


?>