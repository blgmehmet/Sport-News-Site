<?php

include 'ayarlar/db.php';
include 'ayarlar/sayfalar.php';





    include 'partials/header.php';


if(isset($_REQUEST['sayfa'])){

    $gelensayfakodu=$_REQUEST['sayfa'];
}else{

    $gelensayfakodu="";
}

if($gelensayfakodu== 0 or $gelensayfakodu== ""){

    include "sporsayfasi/sporsayfasi.php";

}else{

include $sayfa[$gelensayfakodu];


}



    include 'partials/puandurumu.php';
    include 'partials/footer.php';