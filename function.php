<?php

require_once 'config.php';

class User {
    public $id;
    public $nickname;
    public $login;
    public $password;
    public $skype_contact;
    public $discard_contact;

    function __construct(
        $id, 
        $nickname, 
        $login, 
        $password, 
        $skype_contact='', 
        $discard_contact=''
    ) {
        $this->id = $id;
        $this->nickname = $nickname;
        $this->login = $login;
        $this->password = $password;
        $this->skype_contact = $skype_contact;
        $this->discard_contact = $discard_contact;
    }
}

class Order {
    public $id;
	public $nickname;
	public $price;
	public $title;
	public $product_id;
	public $count;
	public $user_name;
	public $user_phone;
	public $user_mail;
    public $user_comment;
    
    function __construct(
        $id,
        $nickname,
        $price,
        $title, 
        $product_id, 
        $count,
        $user_name, 
        $user_phone, 
        $user_mail,
        $user_comment
    ) {
        $this->id = $id;
        $this->nickname = $nickname;
        $this->price = $price;
        $this->title = $title;
        $this->product_id = $product_id;
        $this->count = $count;
        $this->user_name = $user_name;
        $this->user_phone = $user_phone;
        $this->user_mail = $user_mail;
        $this->user_comment = $user_comment;
    }
}

/**
 * Проверить есть ли в базе данных пользователь
 * с такими логином и паролем
 */
function login($login, $password) {
    global $mysql_host;
    global $mysql_user;
    global $mysql_password;
    global $mysql_db;

    $conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_db);
    $sql = "SELECT * FROM users WHERE user_login='$login' AND user_password='" . md5($password) . "'";
    $result = $conn->query($sql);
    $r = $result->num_rows;
    $conn->close();
    return $r;
}

// echo login('1', '0');

/**
 * Проверить уникальность нового nickname
 * true - если такого nickname ещё не существует
 */
function unique_nickname($new_nickname) {
    global $mysql_host;
    global $mysql_user;
    global $mysql_password;
    global $mysql_db;

    $conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_db);
    $sql = "SELECT * FROM users WHERE nickname='$new_nickname'";
    $result = $conn->query($sql);
    $is_unique = $result->fetch_row() ? 0 : 1;
    $conn->close();
    return $is_unique;
}

// echo unique_nickname('slava1');

/**
 * Проверить уникальность нового login
 * true - если такого login ещё не существует
 */
function unique_login($new_login) {
    global $mysql_host;
    global $mysql_user;
    global $mysql_password;
    global $mysql_db;

    $conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_db);
    $sql = "SELECT * FROM users WHERE user_login='$new_login'";
    $result = $conn->query($sql);
    $is_unique = $result->fetch_row() ? 0 : 1;
    $conn->close();
    return $is_unique;
}

// echo unique_login('login');

/**
 * Зарегистрировать новго пользователя в системе
 */
function register_new_user($nickname, $login, $password) {
    global $mysql_host;
    global $mysql_user;
    global $mysql_password;
    global $mysql_db;

    $password = md5($password);

    $mysqli = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_db);
    $sql = "INSERT INTO users (nickname, user_login, user_password) VALUES ('$nickname', '$login', '$password')";
    $mysqli->query($sql);
    $mysqli->close();
}

/**
 * Получить пользователя по его логину
 */
function get_user_by_login($login) {
    global $mysql_host;
    global $mysql_user;
    global $mysql_password;
    global $mysql_db;

    $conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_db);
    $sql = "SELECT * FROM users WHERE user_login='$login'";
    $result = $conn->query($sql);
    $r = $result->num_rows;
    $row = $result->fetch_assoc();
    // print_r($row);
    $result->free();
    $conn->close();
    if (!$row) return null; 
    return new User(
        $row['id'], 
        $row['nickname'], 
        $row['user_login'], 
        $row['user_password'], 
        $row['skype_contact'], 
        $row['discard_contact']);
}

// echo get_user_by_login('login0');

/**
 * Изменить информацию о пользователе
 */
function change_user_info($login, $nickname, $sk, $dk) {
    global $mysql_host;
    global $mysql_user;
    global $mysql_password;
    global $mysql_db;

    $conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_db);
    $sql = "UPDATE users SET nickname='$nickname', skype_contact='$sk', discard_contact='$dk' WHERE user_login='$login'";
    $conn->query($sql);
    $conn->close();
}


/**
 * Проверить, является ли $email почтовым адресом
 * Возвращает true если является
 */
function is_email($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    return true;
}

/**
 * Изменить пароль пользователя
 */
function change_user_password($login, $new_password) {
    global $mysql_host;
    global $mysql_user;
    global $mysql_password;
    global $mysql_db;

    $new_password = md5($new_password);

    $conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_db);
    $sql = "UPDATE users SET user_password='$new_password' WHERE user_login='$login'";
    $conn->query($sql);
    $conn->close();
}

/**
 * Сгенерировать новый пароль
 * @param $length - длина пароля
 */
function generate_new_password($length=10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

/**
 * Получить сумму покупок пользователя
 */
function get_user_amount($login) {
    global $mysql_host;
    global $mysql_user;
    global $mysql_password;
    global $mysql_db;

    $conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_db);
    $sql = "SELECT * FROM orders WHERE nickname='$login'";
    $amount = 0;
    if ($result = $conn->query($sql)) {
        while ($row = $result->fetch_assoc()) {
            $amount += $row['price'] * $row['count_'];
        }
        $result->free();
    }
    $conn->close();
    return $amount;
}

/**
 * Получить заказы пользователя
 */
function get_user_orders($login) {
    global $mysql_host;
    global $mysql_user;
    global $mysql_password;
    global $mysql_db;

    $conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_db);
    $sql = "SELECT * FROM orders WHERE nickname='$login'";
    $orders = [];
    if ($result = $conn->query($sql)) {
        while ($row = $result->fetch_assoc()) {
            $new_order = new Order(
                $row['id'], 
                $row['nickname'], 
                $row['price'], 
                $row['title'], 
                $row['product_id'], 
                $row['count_'], 
                $row['user_name_'], 
                $row['user_phone'], 
                $row['user_mail'], 
                $row['user_comment']
            );
            array_push($orders, $new_order);
        }
        $result->free();
    }
    $conn->close();
    return $orders;
}
