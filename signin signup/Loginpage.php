<!DOCTYPE html>
<html lang="tr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Hucum PressM</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet" href="../cssler/bg.css">

</head>

<body>








<div class=" d-block " tabindex="-1" role="dialog" id="modalSignin">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-5 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <!-- <h5 class="modal-title">Modal title</h5> -->
                <h2 class="fw-bold mb-0">Giris Yap</h2>

            </div>

            <div class="modal-body p-5 pt-0">

                <?php

                $db= new PDO("mysql:host=localhost;dbname=kullanici;charset=utf8", "root","");
                if (isset($_SESSION['kullanici'])) {
                    echo '<div class="alert alert-danger ">Lütfen önce hesabınızdan çıkış yapın</div>';



                }
                else {

                    if ($_POST) {

                        $gelenmail = $_POST['email'];
                        $gelensifre = md5($_POST['password']);

                        if ($gelenmail != "" and $gelensifre != "") {

                            $kullanicisorgusu = $db->prepare("select * from kullanicilar where mail=? and sifre=? LIMIT 1");
                            $kullanicisorgusu->execute([$gelenmail, $gelensifre]);
                            $kullanicisorgusayisi = $kullanicisorgusu->rowCount();

                            if ($kullanicisorgusayisi > 0) {

                                session_start();
                                $_SESSION['kullanici'] = $gelenmail;

                                echo '<div class="alert alert-primary ">Giris Basarili</div>';

                                header("refresh:0, url=index.php?sayfa=0");

                            } else {
                                echo '<div class="alert alert-danger">Yanlış E-Mail veya Sifre</div>';
                            }

                        } else {
                            echo '<div class="alert alert-danger">Lütfen boslukları doldurun</div>';
                        }
                    }

                }


                ?>


                <form  method="post">
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control rounded-4" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>

                       <div  class="form-floating mb-1">
                           <a href="#" class="text-primary text-decoration-none   small">Şifremi unuttum</a>
                       </div>


                    <button type="submit" class="w-100 mb-2 btn btn-lg rounded-4 btn-primary active" role="button" aria-pressed="true" >Giris Yap</button>

                    <div class="form-floating mb-3">Hesabın yok mu?
                        <a class="text-decoration-none" href="../index.php?sayfa=2"> Kayıt ol.</a>

                    </div>


                </form>



                <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
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