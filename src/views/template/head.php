<?php
require_once __DIR__ . '/../../../vendor/autoload.php';

use smd\controllers\UserController;

$userController = new UserController();
?>
<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="/src/public/style/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="/src/public/style/style.css">
</head>
<body data-spy="scroll" data-target=".follow-navbar" data-offset="50">
<nav id="topNavbar" class="navbar navbar-expand-md fixed-top">
    <a href="/index.php" class="logo navbar-brand"><img src="/src/public/img/logo.svg" alt="Brand Logo"></a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navList">
        <i class="fas fa-bars"></i>
    </button>
    <div id="navList" class="collapse navbar-collapse">
        <ul class="navbar-nav">
            <li class="nav-item"><a href="/index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#theApp" class="nav-link">De app</a></li>
            <li class="nav-item"><a href="#Company" class="nav-link">Bedrijven</a></li>
            <li class="nav-item"><a href="#aboutUs" class="nav-link">Over ons</a></li>
            <?php if ($userController->isLoggedIn()): ?>
                <li class="nav-item"><a href="/src/views/sections/user/profile.php" class="nav-link">Profiel</a></li>
                <li class="nav-item"><a href="/src/views/sections/festivals.php" class="nav-link">Festivals</a></li>
                <li class="nav-item"><a href="/src/views/sections/organisations.php" class="nav-link">Organisaties</a></li>
                <li class="nav-item"><a href="/src/actions/logout.php" class="nav-link">Logout</a></li>
            <?php else: ?>
                <li class="nav-item"><a href="/src/views/sections/user/login.php" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="/src/views/sections/user/register.php" class="nav-link">Registreren</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>