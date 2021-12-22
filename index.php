<?php
  require "db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karpaty</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>
    <!-- Bootstrap CSS (Cloudflare CDN) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css"
        integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <!-- jQuery (Cloudflare CDN) -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap Bundle JS (Cloudflare CDN) -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/js/bootstrap.min.js"
        integrity="sha512-UR25UO94eTnCVwjbXozyeVd6ZqpaAE9naiEUBK/A+QDbfSTQFhPGj5lOR6d8tsgbBk84Ggb5A3EkjsOgPRPcKA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="module">
  import { Fancybox } from "https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.esm.js";
</script>
    <link rel="stylesheet" href="./css/main.css">
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand nav_fix" href="index.php"><img src="./img/1gor.jpg" alt="Rock" class="logo_img"><p>Karpaty Life</p></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Головна <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="cotedj.php">Котеджі</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Ціни</a>
                </li>
              </ul>
              <span class="navbar-text">
                Ми відповідаємо за ваш відпочинок!
              </span>
              <?php
                                    if( isset($_SESSION['logged_user'])) : ?>
                                    <a class="nav-link login" href="logout.php">Вийти</a>
                                    <?php else : ?>
              <a href="signup.php"class="login-btn"><button type="button" class="btn btn-secondary">Зареєструватися/увійти</button></a>
                                    <?php endif; ?>
            </div>
          </nav>
    </div>
    <section class="container">
      <div class="row">
        <div class="col-12 justify-content-center text-center">
          <div class="main">
            <h1 class="text-light main-text">Karpaty Life</h1>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 text-center">
          <h1>Житло Українських Карпат</h1>
          <p>Каталог житла у Карпатах категоризований за найбільш популярними запитами та тематичними групами. Так вам не доведеться, скажімо, спочатку гуглити населені пункти, наближені до гірськолижних курортів, а тільки після — шукати в них житло за конкретним запитом.</p>
        </div>
      </div>
      <div class="row gallary">
                 
                    <div class="col-lg-4 col-md-4 col-6 thumb">
                        <a href="./img/1l.png"data-fancybox="gallery">
                            <img class="img-fluid" src="./img/1k.jpg" alt="">
                        </a>
                    </div>
                
                
                    <div class="col-lg-4 col-md-4 col-6 thumb">
                        <a href="./img/2l.png"data-fancybox="gallery">
                            <img class="img-fluid" src="./img/2k.jpg" alt="">
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-6 thumb">
                        <a href="./img/3l.png"data-fancybox="gallery">
                            <img class="img-fluid" src="./img/3k.jpg" alt="">
                        </a>
                    </div>

                    
                
            </div>
    </section>

    <footer class="mt-auto container d-flex flex-wrap justify-content-between align-items-center py-3 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
      </a>
      <span class="text-white">© 2021 Denys</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-muted" href="#"><img src="./img/facebook.png" alt="facebook" width="25px"></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><img src="./img/instagram.png" alt="instagram" width="25px"></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><img src="./img/youtube.png" alt="youtube" width="25px"></a></li>
    </ul>
  </footer>
</body>

</html>