<?php
require_once './init/db.init.php';
require_once './init/init.php';
$user = loggedInUser();
include './include/header.inc.php';
include './include/navbar.inc.php';
// include './page/' . $_GET['page'] . '.php';


$available_pages = ['login', 'register', 'dashboard', 'logout', 'profile'];
$login_in_pages = ['dashbaord'];
$non_Login_in_pages = ['login', 'register'];

$page = '';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

if (in_array($page, $login_in_pages) && empty($user)) {
    header('Location: ./?page=login');
}

if (in_array($page, $non_Login_in_pages) && !empty($user)) {
    header('Location: ./?page=dashboard');
}

if (in_array($page, $available_pages)) {
    include './page/' . $page . '.php';
} else {
    header('Location: ./?page=dashboard');
}
include './include/footer.inc.php';
// require_once "./init/db.close.php";
