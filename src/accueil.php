<?php
include ("database/connection.php");
$objPdo = connect();
session_start();
$objPdo->query('SET NAMES utf8');
?>

<!DOCTYPE html>
<html lang="FR">

<head>
    <meta charset="UTF-8">
    <title>Stream Mangas</title>
    <link rel="stylesheet" type="text/css" media="screen and (min-width:0px)" href="style_computer.css">
    <link rel="icon" type="images/x-icon" href="images/Logo.png" />
</head>

<body>
    <form method="post" action = "accueil.php">
        <header>
            <img src="images/Logo.png" alt="" width="90" height="90" />
            <h1 class="titre_site"><a href="accueil.php">STREAM MANGAS</a></h1>
            <div class="menu">
                <a href="liste.php">
                    <article class="left">
                        LISTE
                    </article>
                </a>
            </div>
            <div class="menu">
                <a href="">
                    <article class="middle">
                        NEWS
                    </article>
                </a>
            </div>
            <div class="menu">
                <a href="">
                    <article class="right">
                        NEWS
                    </article>
                </a>
            </div>
        </header>
</body>
</html>
