<?php
require_once "./init/db.init.php";
include './include/header.inc.php';
include './include/navbar.inc.php';
// include './page/' . $_GET['page'] . '.php';

$available_pages = ['login', 'register'];

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    if (in_array($page, $available_pages)) {
        include './page/' . $page . '.php';
    } else {
        echo '<h1>Page ng ot mean tee</h1>';
    }
} else {
    echo '<h1> Home Page,</h1>';
}

include './include/footer.inc.php';
// require_once "./init/db.close.php";
?>