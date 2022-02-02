<!doctype html>
<html lang="tr">
<head>

    <title>Hucum Press</title>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../css/bootstrap.min.css">



    <link rel="stylesheet" href="../cssler/head.css">

</head>
<body>

<script src="../js/bootstrap.js"></script>



<header class=" navbar navbar-expand-lg justify-content-center container  bg-light navigasyon  ">
    <div class=" d-flex ">

        <?php
        session_start();
        if(isset($_SESSION['kullanici'])){


            ?>

            <a href="../index.php?sayfa=0" class="nav-link my-3 text-dark renk">Anasayfa</a>

            <a href="#" class="nav-link  my-3 text-dark renk">Profilim : <?=$_SESSION['kullanici']?></a>

            <a href="../index.php?sayfa=5 " class="nav-link my-3 text-dark renk">Gündem</a>

            <a href="../index.php?sayfa=5 " class="nav-link my-3 text-dark renk">Yorum Köşesi</a>

            <a href="../index.php?sayfa=4" class="nav-link my-3 text-dark renk">Çıkış Yap</a>


            <?php




        }else{
            ?>
            <a href="../index.php?sayfa=0" class="nav-link my-3  text-dark  renk">Anasayfa</a>
            <a href="../index.php?sayfa=5 " class="nav-link my-3 text-dark  renk">Gündem</a>
            <a href="../index.php?sayfa=3 " class="nav-link my-3 text-dark renk">Yorum Köşesi</a>

            <a href="../index.php?sayfa=1" class="nav-link my-3  text-dark  renk">Giris Yap</a>
            <a href="../index.php?sayfa=2" class="nav-link my-3  text-dark  renk">Kayıt Ol</a>



            <?php
        }

        ?>
    </div>

</header>
</body>
</html>
