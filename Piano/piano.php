<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/fdc82b1b55.js" crossorigin="anonymous"></script>

  <!-- bootstrap -->
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Poppins:wght@300;400;500;700&family=Prompt:wght@700&family=Roboto+Condensed:wght@700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>


  <link rel="stylesheet" href="./public/visuals/styles.css">
  <title>Piano Academy</title>
</head>

<body>
  <header>
    <nav>
      <div class="logo">
        <img src="./public/assets/title-icon.png" alt="Piano Icon">
        <h4 class="logo-text">Piano Academy</h4>
      </div>
      <ul class="nav-links">
        <li><a href="#home" target="">Home</a>
        </li>
        <li><a href="#about" target="">About</a></li>
        <!-- <li><a href="#why-musify" target="">Plans</a></li> -->
        <!-- <li><a href="#contact" target="">Contact Us</a></li> -->
      </ul>
      <div class="burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
    </nav>
  </header>

  <div class="content-wrapper">
    <section id="home">
      <div class="presentation-container">
        <div class="presentation">
          <h1>Easiest way to learn Piano</h1>
            <button class="start-now" type="submit" id="submitBtn">Start Now</button>
            <script>
                document.getElementById("submitBtn").addEventListener("click", myFunction);
                function myFunction() 
                {
                 window.location.href="index.php";
                }
            </script>
        </div>
      </div>
    </section>


<!--   <div class="content-wrapper">
    <section id="Login">
      <div class="presentation-container">
        <div class="presentation">
        <iframe src="https://pianosatc.blogspot.com/" width="480" height="350" style="border: 0px" scrolling="no"></iframe>
        </div>
      </div>
    </section> -->

    <section id='about'>
      <div id='about-elements'>
        <div id='about-text'>
          <h2 id='about-text-h2'>
            <strong>Piano Academy is the best</strong>
          </h2>
          <p id='about-text-p'>Teach or learn from people everywhere with a simple to use application designed to make learning easier,
            accessible prices and guaranteed results. Achieve mastery on Piano through a
            best learning system!</p>
        </div>

        <img id='about-image' src="./public/assets/pianosideimage.jpg" alt="">

      </div>
    </section>

 <!--    <section id='why-musify'>
      <div class="why-musify-wrapper">
        <div id='why-musify-elements'>
          <div id='why-musify-text'>
            <h2 id='why-musify-text-h2'>
              <strong>Choose your plan</strong>
            </h2>
            <p id='why-musify-text-p'>Talk to musicians all over the world
              Learn and perfect your skills on any instrument!
              Or go there and help people achieve mastery!
            </p>
          </div>
        </div>
        <div id='cards-container'>
          <div class='card'>
            <div class="card-header">
              <h6 class='header-price-text'>Learn <img class="icon-card" src="./public/assets/speaker.svg"></h6>
            </div>
            <div class="card-items">
              <ul class='list-prices'>
                <li>Learn from people all over the world</li>
                <hr>
                <li>Watch and re-watch classes to perfect your craft</li>
                <hr>
                <li>Achieve your musical goals with a certified system</li>
              </ul>
            </div>
            <button class="join-price">Join now</button>
          </div>
          <div class='card'>
            <div class="card-header">
              <h6 class='header-price-text'>Teach <img class="icon-card" src="./public/assets/disc.svg"></h6>
            </div>
            <div class="card-items">
              <ul class='list-prices'>
                <li>Teach people and help them get better on a different range of musical instruments </li>
              </ul>
            </div>
            <button class="join-price">Join now</button>
          </div>
        </div>
      </div>

    </section> -->
<!-- 
    <section id='contact'>
      <div id="contact-bg-img"></div>
      <div class="contact-wrapper">
        <h2 id='header-contact'>Contact</h2>
        <input class="inp" placeholder="Name" />
        <input class="inp" placeholder="E-mail" />
        <a id='send-image-button' href="mailto:ph-cg@hotmail.com">
        
          <i id="send-image" class="fas fa-paper-plane fa-2x"></i>
        </a>
      </div>
    </section>
 -->
    <section id='footer'>
      <div id='footer-content'>
        <h6 id='copyright-text'>Copyright © 2020</h6>
      </div>
    </section>
  </div>

  <script src="./view/index.js"></script>
</body>


</html>