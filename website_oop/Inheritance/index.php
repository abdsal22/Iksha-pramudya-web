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
        <a href="../encaptulation/index.php">Encapsulation</a>
        <a href="index.php" class="active">Inheritance</a>
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
            <h3>Inheritance</h3>
            <div class="center" style="display: flex; justify-content: center;">
                <img src="../code_inherit.png" alt="" style="width: 80%; border-radius: 20px;">
            </div>
        </section>
        <section class="box">
            <h2>Hasil</h2>
            <?php require_once 'class.php';
                $apel = new Apel("Red Delicious", "Merah");
                $pisang = new Pisang(20);
            ?>
            <h3>Tampilkan class apel yang di inherite dari class buah</h3>
            <div><?php echo $apel->getInfo(); ?></div>
            <h3>Tampilkan class pisang yang di inherite dari class buah</h3>
            <div><?php echo $pisang->getInfo(); ?></div>
        </section>
    </div>
    </main>
    <footer>&copy; 236250090</footer>
</body>
</html>