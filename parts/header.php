<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forsa lapa!!</title>
    <style>
        .active {
            color: red;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <!-- Header -- seit liksim visas CSS lietas
    Lai pieliktu datu bazi lapai, var datu bazes editoraa panemt Export, tad Go,
    vins uzgenere tekstu, kas ir pec tam jaizpilda uz vajadziga datora, tiek uztaisita
    datu baze. -->
    <a href="/Lesson_6" class="asd<?php echo !isset($_GET['page']) ? ' active' : ''; ?>">Index</a>
    <a href="/Lesson_6?page=articles" class="asd<?php echo $_GET['page'] == 'articles' ? ' active' : ''; ?>">Articles</a>

    <?php
    if (isset($_SESSION['user_id'])) { ?>
        <a href="/Lesson_6/logout.php">Logout</a>
    <?php } else { ?>
        <a href="/Lesson_6?page=register" class="asd<?php echo $_GET['page'] == 'register' ? ' active' : ''; ?>">Register</a>
        <a href="/Lesson_6?page=login" class="asd<?= $_GET['page'] == 'login' ? ' active' : ''; ?>">Login</a>
    <?php } ?>


    <h3>Main menu goes here!</h3>