<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script> -->
    <link href="https://localhost/TellMeMVC/css/bootstrap/bootstrap.css" rel="stylesheet">
    <script src="https://localhost/TellMeMVC/css/bootstrap/bootstrap.js"></script>
    <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
    <title>Tell Me | Home</title>
    <link rel="icon" href="https://localhost/TellMeMVC/img/Charte graphic/favicon logo copy.png">
    <link rel="stylesheet" href="https://localhost/TellMeMVC/css/pages/signin/style.css">
    <title>Document</title>
</head>

<body>
<div class="slide first">
                <img src="./1.jpg" alt="">
            </div>
            <div class="slide">
                <img src="./2.jpg" alt="">
            </div>
            <div class="slide">
                <img src="./3.jpg" alt="">
            </div>
            <div class="slide">
                <img src="./4.jpg" alt="">
            </div>
    <div class="container">
        <div class="row">
            <div class="col pre">
                <img src="http://localhost/TellMeMVC/img/Charte graphic/log owhite.png" alt="">
                <p>Sign in or create an account</p>
            </div>
            <div class="col deu">
                <div class="formlogin">
                    <div class="container">
                        <div class="row">
                            <form action="">
                                <h1>Sign in</h1>
                                <p>New user? <a href="signup"><span>Create an account</span></a></p>
                                <div class="wrapper">
                                    <div class="input-data">
                                        <input type="email" required></input>
                                        <div class="underline"></div>
                                        <label>Email Adress</label>
                                    </div>
                                    <div class="input-data">
                                        <input type="password" required></input>
                                        <div class="underline"></div>
                                        <label>Password</label>
                                    </div>
                                    <button>Continue</button>
                                    <div class="underline">
                                        <div class="underline1"></div>
                                        <div class="underline2">
                                            <p>Or</p>
                                        </div>
                                    </div>
                                    <div class="autre">
                                        <div class="google">
                                            <img class="gog" src="http://localhost/TellMeMVC/img/logo_google_white.png" alt="">
                                            <p>Continue with Google</p>
                                        </div>
                                        <div class="facebook">
                                            <img class="fb" src="http://localhost/TellMeMVC/img/logo_facebook_white.jpg" alt="">
                                            <p>Continue with Facebook</p>
                                        </div>
                                        <div class="apple">
                                        <img class="apl" src="http://localhost/TellMeMVC/img/logo_apple_white.png" alt="">
                                            <p>Continue with Apple</p>
                                        </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
        document.getElementById('radio' + counter).checked=true;
        counter++;
        if(counter > 4){
            counter = 1;
        }
            }, 5000);
    </script>
</body>

</html>