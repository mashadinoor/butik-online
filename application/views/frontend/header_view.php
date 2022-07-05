<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Ezone - eCommerce HTML5 Template</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/img/favicon.png'); ?>">

  <!-- all css here -->
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/animate.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/themify-icons.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/pe-icon-7-stroke.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/icofont.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/meanmenu.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/bundle.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css'); ?>">
  <script src="<?= base_url('assets/js/vendor/modernizr-3.11.7.min.js'); ?>"></script>
</head>

<body>
  <!-- Header Starts -->
  <header>
    <div class="header-top-furniture wrapper-padding-2 res-header-sm">
      <div class="container-fluid">
        <div class="header-bottom-wrapper">
          <div class="logo-2 furniture-logo ptb-30">
            <a href="<?= base_url('Home'); ?>">
              <img src="<?= base_url('assets/img/logo/2.png'); ?>" alt="">
            </a>
          </div>
          <div class="menu-style-2 furniture-menu menu-hover">
            <nav>
              <ul>
                <li><a href="<?= base_url('Home'); ?>">Home</a>
                </li>
                <li><a href="<?= base_url('Shop'); ?>">Shop</a>
                  <div class="category-menu-dropdown shop-menu">
                    <div class="category-dropdown-style category-common2 mb-30">
                      <h4 class="categories-subtitle"> Tops</h4>
                      <ul>
                        <li><a href="#"> Top Collection</a></li>
                        <li><a href="#"> T-Shirts</a></li>
                        <li><a href="#"> Long Sleeves</a></li>
                        <li><a href="#"> Dress</a></li>
                        <li><a href="#"> Sweaters</a></li>
                        <li><a href="#"> Cardigans</a></li>
                      </ul>
                    </div>
                    <div class="category-dropdown-style category-common2 mb-30">
                      <h4 class="categories-subtitle"> Bottoms</h4>
                      <ul>
                        <li><a href="#"> Bottom Collection</a></li>
                        <li><a href="#"> Casual Pants</a></li>
                        <li><a href="#"> Legging Pants</a></li>
                        <li><a href="#"> Jeans</a></li>
                        <li><a href="#"> Shorts</a></li>
                        <li><a href="#"> Skirts</a></li>
                      </ul>
                    </div>
                    <div class="category-dropdown-style category-common2 mb-30">
                      <h4 class="categories-subtitle"> Outwear</h4>
                      <ul>
                        <li><a href="#"> Jackets</a></li>
                        <li><a href="#"> Parkas</a></li>
                        <li><a href="#"> Coats</a></li>
                      </ul>
                    </div>
                    <div class="category-dropdown-style category-common2 mb-30">
                      <h4 class="categories-subtitle"> Accesories</h4>
                      <ul>
                        <li><a href="#"> Hats & Beannies</a></li>
                        <li><a href="#"> Bags</a></li>
                        <li><a href="#"> Umbrella</a></li>
                        <li><a href="#"> Pockets</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li><a href="<?= base_url('Blog'); ?>">blog</a>
                </li>
                <li><a href="<?= base_url('About'); ?>">About Us</a></li>
              </ul>
            </nav>
          </div>
          <div class="header-cart">
            <a class="icon-cart-furniture" href="<?= base_url('Cart'); ?>">
              <i class="ti-shopping-cart"></i>
              <span class="shop-count-furniture green">02</span>
            </a>
            <ul class="cart-dropdown">
              <li class="single-product-cart">
                <div class="cart-img">
                  <a href="#"><img src="assets/img/cart/1.jpg" alt=""></a>
                </div>
                <div class="cart-title">
                  <h5><a href="#"> Bits Headphone</a></h5>
                  <h6><a href="#">Black</a></h6>
                  <span>$80.00 x 1</span>
                </div>
                <div class="cart-delete">
                  <a href="#"><i class="ti-trash"></i></a>
                </div>
              </li>
              <li class="single-product-cart">
                <div class="cart-img">
                  <a href="#"><img src="assets/img/cart/2.jpg" alt=""></a>
                </div>
                <div class="cart-title">
                  <h5><a href="#"> Bits Headphone</a></h5>
                  <h6><a href="#">Black</a></h6>
                  <span>$80.00 x 1</span>
                </div>
                <div class="cart-delete">
                  <a href="#"><i class="ti-trash"></i></a>
                </div>
              </li>
              <li class="single-product-cart">
                <div class="cart-img">
                  <a href="#"><img src="assets/img/cart/3.jpg" alt=""></a>
                </div>
                <div class="cart-title">
                  <h5><a href="#"> Bits Headphone</a></h5>
                  <h6><a href="#">Black</a></h6>
                  <span>$80.00 x 1</span>
                </div>
                <div class="cart-delete">
                  <a href="#"><i class="ti-trash"></i></a>
                </div>
              </li>
              <li class="cart-space">
                <div class="cart-sub">
                  <h4>Subtotal</h4>
                </div>
                <div class="cart-price">
                  <h4>$240.00</h4>
                </div>
              </li>
              <li class="cart-btn-wrapper">
                <a class="cart-btn btn-hover" href="<?= base_url('Cart'); ?>">view cart</a>
                <a class="cart-btn btn-hover" href="<?= base_url('Checkout'); ?>">checkout</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="mobile-menu-area d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
            <div class="mobile-menu">
              <nav id="mobile-menu-active">
                <ul class="menu-overflow">
                  <li><a href="#">HOME</a>
                    <ul>
                      <li><a href="index.html">Fashion</a></li>
                      <li><a href="index-fashion-2.html">Fashion style 2</a></li>
                      <li><a href="index-fruits.html">Fruits</a></li>
                      <li><a href="index-book.html">book</a></li>
                      <li><a href="index-electronics.html">electronics</a></li>
                      <li><a href="index-electronics-2.html">electronics style 2</a></li>
                      <li><a href="index-food.html">food & drink</a></li>
                      <li><a href="index-furniture.html">furniture</a></li>
                      <li><a href="index-handicraft.html">handicraft</a></li>
                      <li><a href="index-smart-watch.html">smart watch</a></li>
                      <li><a href="index-sports.html">sports</a></li>
                    </ul>
                  </li>
                  <li><a href="#">pages</a>
                    <ul>
                      <li><a href="about-us.html">about us</a></li>
                      <li><a href="menu-list.html">menu list</a></li>
                      <li><a href="login.html">login</a></li>
                      <li><a href="register.html">register</a></li>
                      <li><a href="cart.html">cart page</a></li>
                      <li><a href="checkout.html">checkout</a></li>
                      <li><a href="wishlist.html">wishlist</a></li>
                      <li><a href="contact.html">contact</a></li>
                    </ul>
                  </li>
                  <li><a href="#">shop</a>
                    <ul>
                      <li><a href="shop-grid-2-col.html"> grid 2 column</a></li>
                      <li><a href="shop-grid-3-col.html"> grid 3 column</a></li>
                      <li><a href="shop.html">grid 4 column</a></li>
                      <li><a href="shop-grid-box.html">grid box style</a></li>
                      <li><a href="shop-list-1-col.html"> list 1 column</a></li>
                      <li><a href="shop-list-2-col.html">list 2 column</a></li>
                      <li><a href="shop-list-box.html">list box style</a></li>
                      <li><a href="product-details.html">tab style 1</a></li>
                      <li><a href="product-details-2.html">tab style 2</a></li>
                      <li><a href="product-details-3.html"> tab style 3</a></li>
                      <li><a href="product-details-4.html">sticky style</a></li>
                      <li><a href="product-details-5.html">sticky style 2</a></li>
                      <li><a href="product-details-6.html">gallery style</a></li>
                      <li><a href="product-details-7.html">gallery style 2</a></li>
                      <li><a href="product-details-8.html">fixed image style</a></li>
                      <li><a href="product-details-9.html">fixed image style 2</a></li>
                    </ul>
                  </li>
                  <li><a href="#">BLOG</a>
                    <ul>
                      <li><a href="blog.html">blog 3 colunm</a></li>
                      <li><a href="blog-2-col.html">blog 2 colunm</a></li>
                      <li><a href="blog-sidebar.html">blog sidebar</a></li>
                      <li><a href="blog-details.html">blog details</a></li>
                      <li><a href="blog-details-sidebar.html">blog details 2</a></li>
                    </ul>
                  </li>
                  <li><a href="contact.html"> Contact </a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-bottom-furniture wrapper-padding-2 border-top-3">
      <div class="container-fluid">
        <div class="furniture-bottom-wrapper">
          <div class="furniture-login">
            <ul>
              <li>Get Access: <a href="<?= base_url('Auth/login'); ?>">Login </a></li>
              <li><a href="<?= base_url('Auth/register'); ?>">Register </a></li>
            </ul>
          </div>
          <div class="furniture-search">
            <form action="#">
              <input placeholder="I am Searching for . . ." type="text">
              <button>
                <i class="ti-search"></i>
              </button>
            </form>
          </div>
          <div class="furniture-wishlist">
            <ul>
              <li><a href="<?= base_url('Mixmatch'); ?>"><i class="ti-reload"></i> Mix and Match</a></li>
              <li><a href="<?= base_url('Wishlist'); ?>"><i class="ti-heart"></i> Wishlist</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Header Ends -->