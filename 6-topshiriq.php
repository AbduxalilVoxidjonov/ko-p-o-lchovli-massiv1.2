<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .menu {
            background-color: #f4f4f4;
            padding: 10px;
            margin-bottom: 20px;
        }
        .menu ul {
            list-style-type: none;
            padding: 0;
        }
        .menu li {
            display: inline;
            margin-right: 15px;
        }
        .menu ul ul {
            display: none;
            position: absolute;
            background-color: #fff;
            border: 1px solid #ccc;
            list-style: none;
            padding: 5px;
        }
        .menu li:hover ul {
            display: block;
        }
        .blog-post {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .pagination {
            margin-top: 20px;
        }
        .pagination a {
            margin: 0 5px;
            padding: 5px 10px;
            border: 1px solid #ddd;
            text-decoration: none;
            color: #333;
        }
        .pagination a.active {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdown Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        /* Menyu uchun asosiy style */
        .menu {
            background-color: #f4f4f4;
            padding: 10px;
            border: 1px solid #ddd;
        }
        .menu ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        .menu > ul > li {
            display: inline-block;
            position: relative;
            margin-right: 20px;
        }
        .menu a {
            text-decoration: none;
            color: #333;
            padding: 8px 12px;
            display: block;
        }
        .menu a:hover {
            background-color: #ddd;
        }
        /* Pastki menyu */
        .menu ul ul {
            display: none;
            position: absolute;
            background-color: #fff;
            border: 1px solid #ccc;
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .menu ul ul li {
            display: block;
        }
        .menu ul ul a {
            padding: 8px 15px;
        }
        .menu ul li:hover ul {
            display: block;
        }
        .card {
            width: 350px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .card-header {
            padding: 15px;
            background-color: #007BFF;
            color: #fff;
            font-size: 18px;
            font-weight: bold;
        }
        .card-content {
            padding: 15px;
        }
        .card-content p {
            margin: 10px 0;
            font-size: 14px;
            color: #555;
        }
        .card-footer {
            padding: 10px 15px;
            background-color: #f4f4f4;
            font-size: 13px;
            color: #777;
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>

    <!-- Menyu tuzilmasi -->
    <div class="menu">
        <ul>
            <li><a href="?page=asosiy">Asosiy sahifa</a></li>
            <li>
                <a href="?page=sport">Sport yangiliklari</a>
                <ul>
                    <li><a href="?page=apl">APL</a></li>
                    <li><a href="?page=ochl">OCHL</a></li>
                    <li><a href="?page=echl">ECHL</a></li>
                </ul>
            </li>
            <li>
                <a href="?page=texnologiya">Texnologiya</a>
                <ul>
                    <li><a href="?page=kompyuter">Kompyuter</a></li>
                    <li><a href="?page=mobil">Mobil telefonlar</a></li>
                </ul>
            </li>
            <li><a href="?page=boglanish">Bog'lanish</a></li>
        </ul>
    </div>


    <div class="content">
        <?php
        if (isset($_GET['page']) && $_GET['page'] == 'asosiy') {
            echo "<h1>Bu Asosiy menu</h1>";
        }elseif (isset($_GET['page']) && $_GET['page'] == 'sport') {
            echo "<h1>Sport yangiliklari</h1>";
            
        }elseif (isset($_GET['page']) && $_GET['page'] == 'apl') {
            echo "<h1>APL yangiliklari</h1>";
// 6-topshiriq(apl).php fayliga o'tkazib ko'rsatish
            include "6-topshiriq(apl).php";


        }elseif (isset($_GET['page']) && $_GET['page'] == 'ochl') {
            echo "<h1>OCHL yangiliklari</h1>";
            include "6-topshiriq(ochl).php";
        }elseif (isset($_GET['page']) && $_GET['page'] == 'echl') {
            echo "<h1>ECHL yangiliklari</h1>";
            include "6-topshiriq(echl).php";

        }elseif (isset($_GET['page']) && $_GET['page'] == 'texnologiya') {
            echo "<h1>Texnologiya yangiliklari</h1>";
        }elseif (isset($_GET['page']) && $_GET['page'] == 'kompyuter') {
            echo "<h1>Kompyuter yangiliklari</h1>";
            include "6-topshiriq(kompyuter).php";
        }elseif (isset($_GET['page']) && $_GET['page'] == 'mobil') {
            echo "<h1>Mobil telefonlar yangiliklari</h1>";
            include "6-topshiriq(mobil).php";
        }elseif (isset($_GET['page']) && $_GET['page'] == 'boglanish') {
            echo "<h1>Bog'lanish sahifasi</h1>";
        }
        else {
            echo "<h1>404 - Sahifa topilmadi</h1>";
        }




        ?>
    </div>


    
</body>
</html>

</body>
</html>
