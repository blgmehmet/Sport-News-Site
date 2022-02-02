<!doctype html>
<html lang="tr">
<head>

    <title>Hucum Press</title>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet" href="../cssler/sporsayfasi4.css">
</head>
<body>











<?php



?>


<form action="" method="post">
    <table class="container bg-white  py-3 my-2 d-flex text-primary justify-content-center ">
        <tbody class="">

        <tr>
            <td class=""></td>
            <td><input class="" type="hidden" name="konuid" value="
            <?php

                ?>"
                ></td>
        </tr>



        <tr class="">

            <td class="py-3 fw-bold ">Bize Ulaşın</td>

        </tr>

        <tr class="">
            <td class="py-3 fw-bold ">İsim</td>
            <td><input  class="form-control" type="text"  name="isim"></td>
        </tr>

        <tr>
            <td class=" py-3 fw-bold">E-posta</td>
            <td><input class="form-control" type="email" name="eposta"></td>
        </tr>


        <tr>
            <td class=" py-3 fw-bold ">Mesaj</td>
            <td><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mesaj"></textarea></td>
        </tr>

        <tr>
            <td class="px-1 py-3 fw-bold">  </td>
            <td><input class="" type="submit" value="Gönder"></td>
        </tr>


        <?php

        ?>

        <tr>
            <td class="fw-bold  px-1 py-3"><br> <?php

                $db= new PDO("mysql:host=localhost;dbname=kullanici;charset=utf8", "root","");


                if($_POST) {
                    $gelenid = $_POST['konuid'];
                    $gelenisim = $_POST['isim'];
                    $geleneposta = ($_POST['eposta']);
                    $gelenmesaj = ($_POST['mesaj']);

                    $yorumid = $db->prepare("select * from yorumlar where yorum_id=? LIMIT 1");
                    $yorumid->execute(array($gelenmesaj));
                    $yorumidsayisi = $yorumid->rowCount();


                    if (!$gelenisim or !$geleneposta or !$gelenmesaj) {

                        echo '<div class=" py-2 my-2 container alert alert-danger">Lütfen bütün bilgileri doldurun!</div>';

                    } else {

                        $kullaniciyorum = $db->prepare("INSERT INTO  yorumlar SET yorum_ekleyen=?, yorum_eposta=? ,yorum_mesaj=? ");

                        $x = $kullaniciyorum->execute([$gelenisim, $geleneposta, $gelenmesaj]);




                        echo '<div class=" py-2 my-2 container alert alert-primary">Mesajınız başarıyla gönderilmiştir.</div>';

                    }





                }
                ?></td>
        </tr>
        <?php
        ?>

        </tbody>

    </table>
</form>







</body>
</html>
