<?php
require_once 'classMethodPbo.php';
$myObject = new Mobil();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <title>Pram Oop</title>
</head>
<body id="objek-page">
    <header>
        <h1>Pram OOP</h1>
    </header>
    <nav>
        <a href="../index.php">Home</a>
        <a href="classMethod.php" class="active">Kelas Method Objek</a>
        <a href="../encaptulation/index.php">Encapsulation</a>
        <a href="../inheritance/index.php">Inheritance</a>
        <a href="../polymorphism/index.php">Polymorphism</a>
        <a href="../magic_method/index.php">Magic Method</a>
        <a href="../abstraksi/index.php">Abstraksi</a>
        <a href="../overriding/index.php">Overriding</a>
        <a href="../overloading/index.php">Overloading</a>
    </nav>
    <main>
    <div class="container">
        <section class="box">
            <h2>Kode</h2>
            <h3>Method Objek</h3>
            <div class="center">
                <img src="../code.png" alt="">
            </div>
        </section>
        <section class="box">
            <h2>Hasil</h2>
            <p><?php  $myObject->jumlahRoda(); ?></p>
            <p><?php  $myObject->aktifkanJalan(); ?></p>
        </section>
    </div>
    </main>
    <footer>&copy; 236250090</footer>
</body>
</html>