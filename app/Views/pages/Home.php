<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- ===== BOX ICONS ===== -->
  <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

  <!-- ===== CSS ===== -->
  <link rel="stylesheet" href="http://localhost/TellMeMVC/public/css/pages/home/style.css">

  <title>Sidebar menu responsive</title>
</head>

<body id="body-pd">
  <header class="header" id="header">
    <div class="header__toggle">
      <i class='bx bx-menu' id="header-toggle"></i>
    </div>

    <div class="header__img">
      <img src="assets/img/perfil.jpg" alt="">
    </div>
  </header>

  <div class="l-navbar" id="nav-bar">
    <nav class="nav">
      <div>
        <a href="#" class="nav__logo">
          <img class="nav__logo-img" src="http://localhost/TellMeMVC/img/charte graphic/flw.png" alt="">
          <span class="nav__logo-name">Bedimcode</span>
        </a>

        <div class="nav__list">
          <a href="#" class="nav__link active">
            <i class='bx bx-grid-alt nav__icon'></i>
            <span class="nav__name">Dashboard</span>
          </a>

          <a href="#" class="nav__link">
            <i class='bx bx-user nav__icon'></i>
            <span class="nav__name">Users</span>
          </a>

          <a href="#" class="nav__link">
            <i class='bx bx-message-square-detail nav__icon'></i>
            <span class="nav__name">Messages</span>
          </a>

          <a href="#" class="nav__link">
            <i class='bx bx-bookmark nav__icon'></i>
            <span class="nav__name">Favorites</span>
          </a>

          <a href="#" class="nav__link">
            <i class='bx bx-folder nav__icon'></i>
            <span class="nav__name">Data</span>
          </a>

          <a href="#" class="nav__link">
            <i class='bx bx-bar-chart-alt-2 nav__icon'></i>
            <span class="nav__name">Analytics</span>
          </a>
        </div>
      </div>

      <a href="#" class="nav__link">
        <i class='bx bx-log-out nav__icon'></i>
        <span class="nav__name">Log Out</span>
      </a>
    </nav>
  </div>

  <h1>Components</h1>
  <div class="wrapper">
    <div class="input-box">
      <div class="tweet-area">
        <span class="placeholder">What's happening?</span>

        <div class="input editable" contenteditable="true" spellcheck="false"></div>
        <div class="tweet-area1" style="    position: absolute;
    top: -30px; gap: 10px;">
          <img src="" id="src" alt="" style="width: 50px;">
        </div>
      </div>
      <div class="privacy">
        <i class="fas fa-globe-asia"></i>
        <span>Everyone can reply</span>
      </div>
    </div>
    <div class="bottom">
      <ul class="icons">
        <li><i class="uil uil-capture"></i></li>
        <li><input id="file" type="file" value="" style="opacity: 0; z-index:9;"><i class="far fa-file-image"
            style="position: absolute; z-index: 1;"></i></li>
        <li><i class="fas fa-map-marker-alt"></i></li>
        <li><i class="far fa-grin"></i></li>
        <li><i class="far fa-user"></i></li>
      </ul>
      <div class="content">
        <span class="counter">100</span>
        <button>Tweet</button>
      </div>
    </div>
  </div>
  <!--===== MAIN JS =====-->
  <script>
    /*===== SHOW NAVBAR  =====*/
    const showNavbar = (toggleId, navId, bodyId, headerId) => {
      const toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId),
        bodypd = document.getElementById(bodyId),
        headerpd = document.getElementById(headerId)

      // Validate that all variables exist
      if (toggle && nav && bodypd && headerpd) {
        toggle.addEventListener('click', () => {
          // show navbar
          nav.classList.toggle('show')
          // change icon
          toggle.classList.toggle('bx-x')
          // add padding to body
          bodypd.classList.toggle('body-pd')
          // add padding to header
          headerpd.classList.toggle('body-pd')
        })
      }
    }

    showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

    /*===== LINK ACTIVE  =====*/
    const linkColor = document.querySelectorAll('.nav__link')

    function colorLink() {
      if (linkColor) {
        linkColor.forEach(l => l.classList.remove('active'))
        this.classList.add('active')
      }
    }
    linkColor.forEach(l => l.addEventListener('click', colorLink))


    const wrapper = document.querySelector(".wrapper"),
      editableInput = wrapper.querySelector(".editable"),
      readonlyInput = wrapper.querySelector(".readonly"),
      placeholder = wrapper.querySelector(".placeholder"),
      counter = wrapper.querySelector(".counter"),
      button = wrapper.querySelector("button");
    editableInput.onfocus = () => {
      placeholder.style.color = "#c5ccd3";
    }
    editableInput.onblur = () => {
      placeholder.style.color = "#98a5b1";
    }
    editableInput.onkeyup = (e) => {
      let element = e.target;
      validated(element);
    }
    editableInput.onkeypress = (e) => {
      let element = e.target;
      validated(element);
      placeholder.style.display = "none";
    }

    function validated(element) {
      let text;
      let maxLength = 100;
      let currentlength = element.innerText.length;
      if (currentlength <= 0) {
        placeholder.style.display = "block";
        counter.style.display = "none";
        button.classList.remove("active");
      } else {
        placeholder.style.display = "none";
        counter.style.display = "block";
        button.classList.add("active");
      }
      counter.innerText = maxLength - currentlength;
      if (currentlength > maxLength) {
        let overText = element.innerText.substr(maxLength); //extracting over texts
        overText = `<span class="highlight">${overText}</span>`; //creating new span and passing over texts
        text = element.innerText.substr(0, maxLength) + overText; //passing overText value in textTag variable
        readonlyInput.style.zIndex = "1";
        counter.style.color = "#e0245e";
        button.classList.remove("active");
      } else {
        readonlyInput.style.zIndex = "-1";
        counter.style.color = "#333";
      }
      readonlyInput.innerHTML = text; //replacing innerHTML of readonly div with textTag value
    }


    let file = document.getElementById("file")
    let src = document.getElementById("src")
    let tweetArea = document.querySelector(".tweet-area1")
    let img = ''
    console.log(tweetArea);

    file.addEventListener("input", () => {

      let imgs = document.createElement("img")
      imgs.style.width = "120px";
      imgs.style.marginTop = "80px";

      imgs.src += 'https://localhost/TellMeMVC/img/' + file.value.split('\\')[2]
      tweetArea.appendChild(imgs)
      console.log(imgs);
      // src.src = 'https://localhost/TellMeMVC/img/'+ file.value.split('\\')[2];

      // if(src.src.includes("img"))
      //   {
      //     src.src += 'https://localhost/TellMeMVC/img/'+ file.value.split('\\')[2];

      //   }

    })
  </script>
</body>

</html>