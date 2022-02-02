<!doctype html>
<html lang="tr">
<head>

    <title>HUCUMPRESS</title>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../css/bootstrap.min.css">



    <link rel="stylesheet" href="../cssler/head.css">

</head>
<body>

<script src="../js/bootstrap.js"></script>




<nav class=" navbar navbar-expand-lg  container  bg-light" >
<div class="container-fluid">
    <a class="navbar-brand baslik" href="../index.php?sayfa=0">HUCUMPRESS</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
        <span> <img src="../resim/navbar/navbar2.png" alt="navbar" width="50px"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
    <?php
    session_start();
    if(isset($_SESSION['kullanici'])){


        ?>
        <ul class="navbar-nav">
            <li class="nav-item">
        <a href="../index.php?sayfa=0" class="nav-link active mx-2 text-dark renk">Anasayfa</a>
            </li>

            <li>
        <a href="../index.php?sayfa=5 " class="nav-link mx-2 text-dark renk">Gündem</a>
            </li>

            <li>
        <a href="../index.php?sayfa=3 " class="nav-link mx-2 text-dark renk">Yorum Köşesi</a>
            </li>

            <li>
        <a href="#puan" class="nav-link  text-dark mx-2 renk">Puan Durumu</a>
            </li>

            <li>
                <a href="../index.php?sayfa=6" class="nav-link  text-dark mx-2 renk">Bize Ulaşın</a>
            </li>

            <li>
        <a href="#" class="nav-link   text-dark mx-2 renk">Profilim : <?=$_SESSION['kullanici']?></a>
            </li>

            <li>
        <a href="../index.php?sayfa=4" class="nav-link mx-2 text-dark renk">Çıkış Yap</a>
            </li>
        </ul>

        <?php




    }else{
        ?>
        <a href="../index.php?sayfa=0" class="nav-link  mx-2 text-dark  renk">Anasayfa</a>

        <a href="../index.php?sayfa=5 " class="nav-link  mx-2 text-dark  renk">Gündem</a>

        <a href="../index.php?sayfa=3 " class="nav-link  mx-2 text-dark renk">Yorum Köşesi</a>

        <a href="#puan" class="nav-link  text-dark  mx-2 renk">Puan Durumu</a>

        <a href="../index.php?sayfa=6" class="nav-link  text-dark mx-2 renk">Bize Ulaşın</a>

        <a href="../index.php?sayfa=1" class="nav-link   mx-2 text-dark  renk">Giris Yap</a>

        <a href="../index.php?sayfa=2" class="nav-link  mx-2  text-dark  renk">Kayıt Ol</a>



        <?php
    }

    ?>
    </div>
    </div>
</nav>

</body>
</html>
