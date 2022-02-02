<?php
session_start();
if(isset($_SESSION['kullanici'])){


session_destroy();
header("Location:index.php?sayfa=0");



}
else{

    header("Location:index.php?sayfa=0");
    exit();

}

