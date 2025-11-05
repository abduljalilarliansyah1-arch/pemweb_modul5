<?php 
session_start();
if(empty($_SESSION['username'])){
    echo "<script>alert('Anda harus login terlebih dahulu')</script>";
    echo "<meta http-equiv='refresh' content='0; url=login.php'>";
} else {
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>Dashboard</header>
    <div class="container">
        <aside>
            <ul class="menu">
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="logout.php">Keluar</a></li>
            </ul>
        </aside>
        <section class="main">
            <center>
                <h3>Selamat Datang</h3>
                <p>Anda login sebagai <b><?php echo $_SESSION['username']; ?></b></p>
            </center>
        </section>
    </div>
    <footer>Copyright © 2024</footer>
</body>
</html>
<?php } ?>
