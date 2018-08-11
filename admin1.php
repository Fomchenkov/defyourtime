<?php

require_once 'function.php';

session_start();

$title = 'Admin panel';

# Попытка авторизации
if (isset($_POST['admin_auth'])) {
    if ($_POST['login'] == $admin_login && $_POST['password'] == $admin_password) {
        session_start();
        $_SESSION['admin_is_auth'] = true;
        header('Location: admin1.php');
    } else {
        header('Location: admin1.php?error=Не+верный+пароль');
    }
    exit(0);
}
# Выйти из админ-панели
if (isset($_POST['admin_logout'])) {
    session_destroy();
    header('Location: admin1.php');
    exit(0);
}
# Обработать добавление ссылки
if (isset($_POST['send_link'])) {
    print_r($_POST['nickname']);
    add_new_link($_POST['nickname'], $_POST['twitch'], $_POST['pic']);
    header('Location: admin1.php?msg=Успешно');
    exit(0);
}

# Если админ не авторизован
if (!isset($_SESSION['admin_is_auth'])) {
    ?>
        <div class="wrapper-login">
            <div class="form-login">
                <div>
                <center><h2 class="text-reg-gold">Admin Authorization</h2></center>
                <?php 
                    if (isset($_GET['error'])) {
                        echo "<p style='color:red'>Error: " . $_GET['error'] . "</p>";
                    }
                    if (isset($_GET['msg'])) {
                        echo "<p>" . $_GET['msg'] . "</p>";
                    }
                ?>
                <center>
                <form action="admin1.php" method="POST">
                    <p><b>E-mail</b><input class="email" type="text" name="login"></p>
                    <p><b>Password</b><input class="pass" type="password" name="password"></p>
                    <input class="batton-enter" name="admin_auth" type="submit" value="Войти">
                </form>
                </center>
                </div>
            </div>
        </div>
    <?php
    exit(0);
}

?>
<h1>Admin Panel</h1>
<?php 
    if (isset($_GET['error'])) {
        echo "<p style='color:red'>Error: " . $_GET['error'] . "</p>";
    }
    if (isset($_GET['msg'])) {
        echo "<p>" . $_GET['msg'] . "</p>";
    }
?>
<form action="admin1.php" method="POST">
    Username 
    <select name="nickname">
        <option disabled>Select user</option>
        <?php
            $nicknames = get_all_nicknames();
            for ($i = 0; $i < count($nicknames); $i++) {
                echo "<option value='" . $nicknames[$i] . "'>" .  $nicknames[$i] . "</option>";
            }
        ?>
    </select>
    <br>
    Ссылка на Twitch <input class="batton-enter" name="twitch" type="text"><br>
    Ссылка на Картинку <input class="batton-enter" name="pic" type="text"><br>
    <input class="batton-enter" name="send_link" type="submit" value="Отправить"><br>
</form>
<form action="admin1.php" method="POST">
    <input class="batton-enter" name="admin_logout" type="submit" value="Exit">
</form>
