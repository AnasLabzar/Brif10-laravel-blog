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
    <link rel="stylesheet" href="https://localhost/TellMeMVC/css/pages/contact/style.css">
    <link rel="stylesheet" href="https://localhost/TellMeMVC/css/style.css">

    <title>Document</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid ">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-evenly" id="navbarTogglerDemo01">
                <img src="https://localhost/TellMeMVC/img/Charte graphic/Logo blue black.png" alt="logo">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contai1">How it word</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Help</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <a href=""><button class="btn btn-outline-success" type="submit">Register now</button></a>
                </form>
            </div>
        </div>
    </nav>







    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6617.492339067843!2d-6.853831550342351!3d33.97336309997938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda76b871f50c5c1%3A0x7ac946ed7408076b!2sRabat!5e0!3m2!1sfr!2sma!4v1613642645938!5m2!1sfr!2sma"
        width="50%" height="1470" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
        tabindex="0"></iframe>
    <div class="container">
        <h3 class="title">Contact US</h3>
        <div class="input-container ">
            <input type="text" name="name" class="input">
            <label for="">Full Name</label>
            <span>Full Name</span>
        </div>
        <div class="input-container">
            <input type="email" name="email" class="input">
            <label for="">Email</label>
            <span>Email</span>
        </div>
        <div class="input-container">
            <input type="sujet" name="sujet" class="input">
            <label for="">Sujet</label>
            <span>Sujet</span>
        </div>
        <div class="input-container textarea">
            <textarea name="message" class="input"></textarea>
            <label for="">Message</label>
            <span>Message</span>
        </div>
        <input id="submit" type="submit" value="Envoyez" class="btn">
    </div>

    <div id="info">
        <img src="./icons/ver.png" width="120px">
        <p class="textinfo">Succès</p>
        <div class="resu">
            <p id="dispname"></p>
            <p id="dispEmail"></p>
            <p id="dispsujet"></p>
            <p id="dispmessage"></p>
        </div>
        <script src="http://localhost/TellMeMVC/javascript/jscontact.js"></script>

</body>

</html>