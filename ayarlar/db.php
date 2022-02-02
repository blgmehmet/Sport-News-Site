<?php

try{
    $db= new PDO("mysql:host=localhost;dbname=kullanici;charset=utf8", 'root','');

}

catch(PDOException $e){

    echo $e->getMessage();
}


if(isset($_SESSION['kullanici'])){

    $kullanicibilgileri =$db->prepare("select * from kullanicilar where mail=?   LIMIT=1");
    $kullanicibilgileri->execute([$_SESSION['kullanici']]);
    $kullanicibilgilerisayisi=$kullanicibilgileri->rowCount();
    $kullanicibilgi=$kullanicibilgileri->fetch(PDO::FETCH_ASSOC);

    if($kullanicibilgilerisayisi>0){

        $kullaniciadi=$kullanicibilgi['kullaniciadi'];
        $kullanicimail=$kullanicibilgi['mail'];
    }

}

