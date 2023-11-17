<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sneakers e-Commerce</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/sneakers.css')?>" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <header class="header">
      <p class="logo">Sneakers<span>.</span></p>
      <div class="bx bx-menu" id="menu-icon"></div>

      <ul class="navlist mb-0 ps-0">
        <li><a href="<?= base_url('/home')?>">HOME</a></li>
        <li><a href="<?= base_url('/newarrival')?>">NEW ARRIVALS</a></li>
        <li><a href="<?= base_url('/shop')?>">SHOP</a></li>
        <li><a href="">COLLECTION</a></li>
      </ul>

      <div class="nav-icon">
        <a href=""><i class="bx bx-search"></i></a>
        <a href=""><i class="bx bx-cart"></i></a>
        <a href=""><i class="bx bx-user"></i></a>
      </div>
    </header>
     
    <?= $this->renderSection('content'); ?>
    
    <section id="contact">
      <div class="container">
        <div class="subscribe">
          <h1 class="title mb-0">Join Our <span>News Letters</span></h1>
          <p class="desc">
            Sign up for our newsletter today and embark on a fashionable journey
            where every step is<br />
            an expression of your unique style. Join us and step up your shoe
            game <span>now!</span>
          </p>
          <div class="email mb-3">
            <input
              type="email"
              class="form-control"
              id="email"
              placeholder="Insert your mail here"
            />
            <button type="button" class="btn btn-outline-dark">Send</button>
          </div>
        </div>
        <div class="footer">
          <hr />
          <p class="copyright">
            © 2023 <span>Sneakers e-Commerce</span>. All rights reserved
          </p>
        </div>
      </div>
    </section>
    <script src="<?= base_url('assets/js/script.js')?>"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
      integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
