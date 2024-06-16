<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">    <title>Pram Oop</title>
</head>
<body id="encap-page">
    <header>
        <h1>Pram OOP</h1>
    </header>
    <nav>
        <a href="../index.php">Home</a>
        <a href="../class_method/classMethod.php">Kelas Method Objek</a>
        <a href="index.php" class="active">Encapsulation</a>
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
            <h3>Encapsulation</h3>
            <div class="center" style="display: flex; justify-content: center;">
                <img src="../code_encap.png" alt="" style="width: 80%; border-radius: 20px;">
            </div>
        </section>
        <section class="box">
            <h2>Hasil</h2>
            <?php require_once 'class.php';
                $buah1 = new Buah("Apel", "Merah", 150);
            ?>
            <h3>Tampilkan class Buah Dengan method infoBuah</h3>
            <div><?php echo $buah1->infoBuah();  $buah1->setWarna("Hijau"); ?></div>
            <h3>Tampilkan class Buah Dengan method infoBuah setelah di ganti dengan method setter</h3>
            <div><?php echo $buah1->infoBuah(); ?></div>
        </section>
    </div>
    </main>
    <footer>&copy; 236250090</footer>
</body>
</html>