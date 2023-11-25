<?= $this->extend('layouts/index');?>
<?= $this->section('content');?>

    <header class="header">
      <p class="logo">Sneakers<span>.</span></p>
      <div class="bx bx-menu" id="menu-icon"></div>

      <ul class="navlist mb-0 ps-0">
        <li><a href="index.php">HOME</a></li>
        <li><a href="/newarrival">NEW ARRIVALS</a></li>
        <li><a href="/shop">SHOP</a></li>
        <li><a href="/collection">COLLECTION</a></li>
      </ul>

      <div class="nav-icon">
        <a href=""><i class="bx bx-search"></i></a>
        <a href=""><i class="bx bx-cart"></i></a>
        <div class="dropdown no-arrow">
          <a
            href="#"
            role="button"
            id="dropdownMenuLink"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <p class="sort mb-0">
              <i class="bx bx-user"></i>
            </p>
          </a>
          <div
            class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
            aria-labelledby="dropdownMenuLink"
          >
            <div class="dropdown-header">Pilih:</div>
            <a class="dropdown-item" href="login_register_page.php">Login</a>      
            <a class="dropdown-item" href="logout.php">Logout</a>  
          </div>
        </div>
      </div>
    </header>
    <?= $this->renderSection('content'); ?>
    
    <section id="home" class="new-arr">
      <div class="container">
        <div class="new-img">
          <div
            id="carouselExampleAutoplaying"
            class="carousel slide"
            data-bs-ride="carousel"
          >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/img/coll-pict1.jpg" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="assets/img/coll-pict2.jpg" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="assets/img/coll-pict3.jpg" class="d-block w-100" alt="..." />
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleAutoplaying"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleAutoplaying"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="first-look">
          <div class="title-new">
            <p>New Collection</p>
            <h1>NIKE AIR MAX VOLTE</h1>
            <p>
              Extreme comfort. Hyper durable. Max volume. Introducing the Air
              Max Volte<br />
              —designed to push you past your limits and help you go to the max.
            </p>
          </div>
          <div class="slider-new">
            <h4>Best of Air Max</h4>
          </div>
          <div class="wrapper-new">
          <div class="product-box" id="box">
                    <a href="">
                      <img src="<?=base_url('assets/img/Air Jordan 1 Mid SE Craft.jpg')?>" class="product-img">
                    </a>

              <h2 class="product-title"></h2>
              <span class="price"></span>
              <i class="bx bx-shopping-bag addcart"></i>
</div>
              <div class="mb-3 empty">a</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="featured">
          <div class="featured-img">
            <img src="assets/img/coll-pict4.jpg" />
          </div>
          <div class="title-new">
            <h1>SNKRS STYLE</h1>
            <p>
              Your built-to-last, all-week wears—but with style only Jordan
              Brand can deliver.
            </p>
          </div>
          <h4>Street SNKRS</h4>
          <div class="fea-content">
            <img src="assets/img/coll-pict5.jpg" alt="" />
            <img src="assets/img/coll-pict6.jpg" alt="" />
            <img src="assets/img/coll-pict7.jpg" alt="" />
          </div>
        </div>
      </div>
    </section>
    <section id="new">
      <div class="container">
        <div class="content-new">
          <div class="title-new">
            <h1>POOLSIDE FIT</h1>
            <p>Get ready to make a splash with your style.</p>
          </div>
          <div class="shop-content">
            <div class="product-box" id="box">
            <a href="#">
            </a>
              <h2 class="product-title"></h2>
              <span class="price"></span>
              <i class="bx bx-shopping-bag add-cart"></i>
            </div>
          </div>
          <a href="shop.php">
            <button type="button" class="btn btn-outline-dark collec">
              Shop Now <i class="bx bx-chevron-right mb-0 ms-1"></i>
            </button>
          </a>
        </div>
      </div>
    </section>
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
            © 2023 <span>Hachi Store</span>. All rights reserved
          </p>
        </div>
      </div>
    </section>
    <script src="script.js"></script>
    <script src="sb-admin/vendor/jquery/jquery.min.js"></script>
    <script src="sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
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
    
    <?= $this->endSection();?>
