<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$path = "./pages/{$page}.blade.php";

require './inc/header.blade.php';

if (file_exists($path)) {
    require "{$path}";
} else {
    require "./pages/404.php";
}

require './inc/footer.blade.php';
