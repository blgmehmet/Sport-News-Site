<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hucum Press</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet" href="../cssler/bg.css">



</head>
<body>







<div class=" d-block  " tabindex="-1" role="dialog" id="modalSignin">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-5 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <!-- <h5 class="modal-title">Modal title</h5> -->
                <h2 class="fw-bold mb-0">Kayıt Ol</h2>

            </div>

            <div class="modal-body p-5 pt-0">


<?php


$db= new PDO("mysql:host=localhost;dbname=kullanici;charset=utf8", "root","");





if($_POST){
$username=$_POST['username'];
$mail=$_POST['mail'];
$password=$_POST['password'];
$password2=$_POST['password2'];

if(isset($_POST['onay'])){
$onay=$_POST['onay'];
}
else{
$onay="";
}


if($onay != ""){

if($password!="" and $password2!="" and $mail!="" and $username!=""){

    if($password ==  $password2){

        $password= md5($password);

        $mailsorgusu=$db->prepare("select * from kullanicilar where mail=? LIMIT 1");
        $mailsorgusu->execute([$mail]);
        $mailsorgususayisi=$mailsorgusu->rowCount();

        if($mailsorgususayisi>0 ){

            echo '<div class="alert alert-danger">E-mail adresi zaten mevcut</div>';
        }
        else{

         $ekle=$db->prepare("INSERT INTO kullanicilar SET kullaniciadi=? , mail=? , sifre=? , sozlesme=?");

            $ekle->execute([$username, $mail, $password, $onay]);

            $eklesayi=$ekle->rowCount();

            if($eklesayi > 0){
                echo '<div class="alert alert-primary">Kayıt Basarılı.</div>';
                header("refresh:2, url=index.php?sayfa=1");
            }

            else{
                echo '<div class="alert alert-danger">Kayıt islemi basarisiz</div>';

            }
        }

    }
    else{
    echo '<div class="alert alert-danger">Sifreler uyusmuyor.</div>';
    }

    }

else{
echo '<div class="alert alert-danger">Lütfen bütün bilgileri doldurun</div>';
}

}
else{
echo '<div class="alert alert-danger">Üyelik sözlesmesini onaylamadınız.</div>';
}

}



?>




                      <form action="#" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" name="username" class="form-control rounded-4" id="floatingname" placeholder="name@example.com">
                        <label for="floatingname">Kullanıcı Adı</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="mail" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">E-Mail </label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control rounded-4" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Sifre</label>
                    </div>

                    <div class="form-floating mb-3">
                         <input type="password" name="password2" class="form-control rounded-4" id="floatingPassword2" placeholder="Password">
                         <label for="floatingPassword2">Sifre Tekrar</label>
                     </div>

                    <div class="form-floating mb-3">
                         <input type="checkbox" name="onay" value="1"><a class="text-decoration-none" href="#"> Üyelik sözlesmesini</a> okudum kabul ediyorum.

                     </div>



                    <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary active" role="button" aria-pressed="true" >Kayıt Ol</button>  </form>

                <div class="form-floating mb-3">Hesabın var mı?
                  <a class="text-decoration-none" href="../index.php?sayfa=1"> Oturum aç.</a>

                </div>


                    <hr class="my-4">
                    <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
                    <button class="w-100 py-2 mb-2 btn btn-outline-dark rounded-4" type="submit">
                        <svg class="bi me-1" width="16" height="16"><use xlink:href="#twitter"></use></svg>
                        Sign up with Twitter
                    </button>
                    <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-4" type="submit">
                        <svg class="bi me-1" width="16" height="16"><use xlink:href="#facebook"></use></svg>
                        Sign up with Facebook
                    </button>
                    <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-4" type="submit">
                        <svg class="bi me-1" width="16" height="16"><use xlink:href="#github"></use></svg>
                        Sign up with GitHub
                    </button>

            </div>
        </div>
    </div>
</div>



</body>
</html>


