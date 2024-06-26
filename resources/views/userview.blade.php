
@include('layouts.header')

<!DOCTYPE html>
<html lang="en">
<head>
  {{-- css --}}
  <style>
    * {
      font-family: poppins;
      margin: 0px;
      padding: 0px;
      box-sizing: border-box;
      scroll-behavior: smooth;
    }
    ul {
      list-style: none;
    }
    
.admin{
    font-size: 20px;
    font-weight: bold;
    color: #4eb060;
    margin-left: 80px;

}
    a {
      text-decoration: none;
    }
    body {
      margin: 0px;
      padding: 0px;
      font-family: poppins;
      width: 100%;
    }
    
    ::selection {
      color: #ffffff;
      background-color: #40aa54;
    }
    
    /* NAVIGATIONS */
    .navigation {
      display: flex;
      align-items: center;
      padding: 35px;
      /* max-width: 96%; */
      width: 100%;
      margin: auto;
    }
    .menu {
      display: flex;
    }
    .menu-mob {
      display: flex;
    }
    .menu li a,
    .menu-mob li a {
      padding: 3px 10px;
      margin: 0px 15px;
      color: #3b3b3b;
      font-weight: 500;
      letter-spacing: 0.5px;
      transition: all ease 0.3s;
    }
    .logo {
      font-size: 1.4rem;
      font-weight: 600;
      letter-spacing: 1px;
      color: #202020;
    }
    .logo span,
    .search-banner-text h1 span {
      color: #40aa54;
    }
    .right-nav {
      display: grid;
      grid-template-columns: auto auto;
      grid-gap: 25px;
    }
    .right-nav a {
      width: 40px;
      height: 40px;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 50%;
      position: relative;
    }
    .right-nav .like {
      background-color: #fff0ee;
      color: #ff6c57;
    }
    .right-nav .cart {
      background-color: #ecf7ee;
      color: #4eb060;
    }
    .right-nav a span {
      position: absolute;
      top: -7px;
      right: -7px;
      width: 20px;
      height: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 50%;
      color: #ffffff;
      font-size: 0.6rem;
      font-weight: 500;
    }
    .right-nav .like span {
      background-color: #ff6c57;
    }
    .right-nav .cart span {
      background-color: #4eb060;
    }
    .menu li a:hover,
    .menu .active,
    .menu-mob li a:hover,
    .menu-mob .active {
      color: #40aa54;
      transition: all ease 0.3s;
    }
    
    .login-btn {
      width: 100px;
      height: 40px;
      border-radius: 30px;
      background-color: #4eb060;
      border: none;
      color: #ffffff;
      outline: none;
      cursor: pointer;
      transition: all ease 0.3s;
    }
    .right {
      display: flex;
      gap: 20px;
    }
    .menu-mob {
      display: block;
    }
    /* SEARCH BANNER */
    #search-banner {
      max-width: 1250px;
      height: 500px;
      border-radius: 30px;
      background-color: #ecf7ee;
      margin: 10px auto;
      position: relative;
      overflow: hidden;
      background-image: url(../images/bg.png);
      background-repeat: no-repeat;
      background-size: 1000px;
      background-position: bottom right;
      padding: 20px;
      display: flex;
      align-items: center;
    }
    .bg-1 {
      position: absolute;
      left: -50px;
      top: -150px;
      width: 300px;
      height: 300px;
      object-fit: contain;
      object-position: center;
    }
    .bg-2 {
      position: absolute;
      left: 60%;
      transform: translateX(-60%);
      top: -230px;
      width: 500px;
      height: 500px;
      object-position: center;
      object-fit: contain;
    }
  .form-log button :hover,
.menu .login-btn:hover {
  color: white;
}
    .search-banner-text {
      display: flex;
      flex-direction: column;
      width: 500px;
      margin-left: 70px;
      position: relative;
    }
    .search-banner-text h1 {
      font-size: 3rem;
      line-height: 55px;
      color: #202020;
    }
    .search-banner-text strong {
      color: #4eb060;
      font-size: 1.4rem;
      margin-top: 4px;
    }
    .search-box {
      background-color: #ffffff;
      height: 50px;
      display: flex;
      align-items: center;
      margin-top: 25px;
      padding: 0px 5px 0px 20px;
      border-radius: 30px;
    }
    .search-box i {
      font-size: 1.3rem;
      color: #3b3b3b;
      margin: 0px 10px;
    }
    .search-box .search-input {
      height: 40px;
      border: none;
      width: 100%;
      padding: 0px 10px;
      outline: none;
    }
    .search-box .search-btn {
      width: 220px;
      height: 40px;
      border-radius: 30px;
      background-color: #4eb060;
      border: none;
      color: #ffffff;
      outline: none;
      cursor: pointer;
      transition: all ease 0.3s;
    }
    .search-box .search-btn:hover {
      background-color: #5ccf71;
      transition: all ease 0.3s;
    }
    /* CATEGORY */
    #category,
    #popular-product,
    #popular-bundle-pack,
    #partner {
      display: flex;
      flex-direction: column;
      max-width: 1000px;
      margin: 50px auto;
    }
    .category-heading,
    .product-heading,
    .partner-heading {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .category-heading h2,
    .product-heading h3,
    .partner-heading h3 {
      font-size: 1.56rem;
      font-weight: 700;
      color: #202020;
      letter-spacing: 0.5px;
    }
    .category-heading span,
    .product-heading span {
      color: #a7a7a7;
      font-weight: 400;
      letter-spacing: 1px;
    }
    .category-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 40px;
    }
    .category-box {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      background-color: #fafafa;
      border-radius: 10px;
      min-height: 130px;
      width: 120px;
      border: 1px solid rgba(0, 0, 0, 0.03);
    }
    .category-box img {
      height: 35px;
      width: 50px;
      object-fit: contain;
      object-position: center;
      transition: all ease 0.1s;
    }
    .category-box span {
      color: #393939;
      font-size: 0.8rem;
      margin-top: 20px;
      letter-spacing: 0.3px;
      font-weight: 600;
    }
    .category-box:hover img {
      transform: scale(1.1);
      transition: all ease 0.1s;
    }
    /* POPULAR PRODUCTS */
    #popular-product {
      margin: 80px auto;
    }
    .product-container {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      grid-gap: 30px;
      align-items: center;
      margin: 40px 0px;
    }
    .product-box img {
      width: 90%;
      height: 180px;
      object-fit: contain;
      object-position: center;
      margin: auto;
    }
    .product-box {
      width: 100%;
      border: 1px solid #eeeeee;
      border-radius: 20px;
      background-color: #ffffff;
      padding: 20px;
      display: flex;
      flex-direction: column;
      position: relative;
    }
    .product-box strong {
      color: #202020;
      font-size: 1.1rem;
      letter-spacing: 1px;
      font-weight: 600;
      margin-top: 10px;
    }
    .product-box .quantity {
      color: #949494;
      font-size: 0.8rem;
      font-weight: 500;
      letter-spacing: 1px;
    }
    .product-box .price {
      margin-top: 10px;
      font-weight: 600;
      font-size: 1.4rem;
      color: #393939;
    }
    .product-box .cart-btn {
      width: 100%;
      height: 40px;
      background-color: #ecf7ee;
      color: #4eb060;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 20px;
      transition: all ease 0.3s;
    }
    .product-box .cart-btn i {
      margin-right: 10px;
    }
    .product-box .cart-btn:hover {
      background-color: #4eb060;
      color: #ffffff;
      transition: all ease 0.3s;
    }
    .product-box .like-btn {
      position: absolute;
      right: 30px;
      top: 20px;
      color: #c9c9c9;
      font-size: 1.3rem;
    }
    
    /* POPULAR BUNDLE PACKS */
    #popular-bundle-pack {
      display: flex;
      flex-direction: column;
      justify-content: center;
      max-width: 1150px;
      margin: 50px auto;
      padding: 60px 0px 20px 0px;
      border-radius: 20px;
      background-color: #ecf7ee;
      border: 1px solid #f3f3f3;
      align-items: center;
    }
    .product-container,
    .product-heading {
      max-width: 1000px;
      width: 100%;
    }
    /* CLIENTS */
    #clients {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background-color: #f6f6f656;
      padding: 80px 0px;
      margin: 40px 0px;
      border-top: 1px solid #f3f3f3;
      border-bottom: 1px solid #f3f3f3;
    }
    .client-heading h3 {
      font-size: 1.56rem;
      color: #202020;
      font-weight: 700;
      letter-spacing: 0.5px;
    }
    .client-box-container {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      grid-gap: 20px;
      width: 90%;
      margin-top: 40px;
    }
    .client-box {
      background-color: #ffffff;
      padding: 30px 20px;
      border: 1px solid #f1f1f1;
      box-shadow: 2px 2px 50px rgba(0, 0, 0, 0.05);
      border-radius: 0px 30px 0px 30px;
    }
    .client-profile {
      display: flex;
      align-items: center;
    }
    .client-profile img {
      width: 40px;
      height: 40px;
      object-fit: cover;
      object-position: center;
      border-radius: 50%;
    }
    .profile-text {
      display: flex;
      flex-direction: column;
      margin-left: 10px;
    }
    .profile-text strong {
      color: #393939;
      font-size: 1rem;
      font-weight: 600;
    }
    .profile-text span {
      color: #949494;
      font-weight: 500;
      font-size: 0.9rem;
    }
    .rating {
      display: flex;
      margin: 10px 0px;
    }
    .rating i {
      color: #fdcc0d;
    }
    .client-box p {
      color: #7c7c7c;
    }
    /* PARTNER LOGO */
    #partner {
      margin: 100px auto;
    }
    .logo-container {
      display: flex;
      justify-content: space-between;
      margin-top: 40px;
    }
    .logo-container img {
      height: 55px;
      object-fit: contain;
      object-position: center;
      filter: grayscale(1);
      opacity: 0.3;
      transition: all ease 0.3s;
    }
    .logo-container img:hover {
      filter: grayscale(0);
      opacity: 1;
      transition: all ease 0.3s;
    }
    /* DOWNLOAD APP */
    #download-app {
      max-width: 1150px;
      width: 100%;
      background-color: #ecf7ee;
      height: 400px;
      margin: 225px auto;
      border-radius: 20px;
      padding: 20px;
      display: flex;
      justify-content: space-around;
      align-items: center;
    }
    .app-img {
      width: 275px;
      height: 550px;
      background-color: #ffffff;
      border: 4px solid #393939;
      border-radius: 20px;
      overflow: hidden;
    }
    .app-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: top center;
    }
    .download-app-text {
      max-width: 400px;
    }
    .download-app-text strong {
      color: #393939;
      font-size: 1.56rem;
    }
    .download-app-text p {
      color: #3b3b3b;
      margin: 15px 0px;
    }
    .download-btns {
      display: flex;
    }
    .download-btns a {
      height: 44px;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-right: 10px;
      border-radius: 5px;
      overflow: hidden;
    }
    .download-btns a img {
      height: 100%;
      object-fit: cover;
      object-position: center;
    }
    /* FOOTER */
    footer {
      background-color: #1b1d1f;
      padding: 50px 20px;
      border-top: 5px solid #4eb060;
    }
    .footer-container {
      max-width: 1100px;
      margin: auto;
      display: flex;
      justify-content: space-around;
      align-items: flex-start;
    }
    .footer-logo {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    .footer-logo a {
      color: #ffffff;
      font-size: 1.4rem;
      font-weight: 600;
      letter-spacing: 1px;
    }
    .footer-logo a span {
      color: #4eb060;
    }
    .footer-social {
      display: flex;
      margin-top: 10px;
    }
    .footer-social a {
      width: 40px;
      height: 40px;
      display: flex;
      justify-content: center;
      align-items: center;
      color: #ffffff;
      border: 1px solid #ffffff15;
      font-size: 0.9rem;
      margin: 0px 5px;
      transition: all ease 0.3s;
    }
    .footer-social a:hover {
      background-color: #4eb060;
      transition: all ease 0.3s;
    }
    .footer-links strong {
      color: #ffffff;
      font-size: 1.4rem;
      font-weight: 600;
    }
    .footer-links ul {
      margin-top: 10px;
    }
    .footer-links ul li a {
      color: #ffffff;
      opacity: 0.5;
      margin: 4px 0px;
      font-size: 0.9rem;
      letter-spacing: 1px;
      transition: all ease 0.3s;
    }
    .footer-links li a:hover {
      opacity: 1;
      transition: all ease 0.3s;
    }
    
    .menu-icon,
    .menu-btn {
      display: none;
    }
    
    @media (max-width: 1280px) {
      #search-banner {
        width: 1150px;
      }
    }
    @media (max-width: 1200px) {
      #search-banner {
        width: 90%;
        height: 500px;
      }
      #popular-bundle-pack,
      #popular-product,
      #download-app {
        width: 90%;
      }
      #popular-bundle-pack {
        padding: 50px 30px 0px 30px;
      }
    }
    @media (max-width: 1050px) {
      .bg-1 {
        width: 150px;
        height: 150px;
        top: -20px;
      }
      #search-banner {
        background-size: 700px;
      }
      #category,
      #partner {
        width: 90%;
      }
    }
    @media (max-width: 965px) {
      .navigation {
        justify-content: space-between;
        height: 65px;
        padding: 35px 25px;
      }
      .logo {
        font-size: 1.2rem;
      }
      .navigation .menu-mob {
        display: none;
        position: absolute;
        top: 65px;
        left: 0px;
        z-index: 100;
        background-color: #ffffff;
        width: 100%;
        padding: 0px;
        margin: 0px;
        border-bottom: 1px solid rgba(245, 245, 245);
      }
      .navigation .menu-mob li {
        width: 100%;
        margin: 0px;
        padding: 0px;
      }
      .navigation .menu-mob li a {
        width: 100%;
        height: 40px;
        display: flex;
        align-items: center;
        padding: 30px 20px;
        margin: 0px;
        border: 1px solid rgba(248, 247, 247, 0.5);
      }
      .menu-icon {
        display: block;
      }
      .login-btn,
      .menu {
        display: none;
      }
      .menu-icon {
        cursor: pointer;
        float: right;
        padding: 5px;
        padding-top: 20px;
        position: relative;
        user-select: none;
        z-index: 2;
      }
      .menu-icon .nav-icon {
        background-color: #141414cc;
        display: block;
        height: 2px;
        width: 25px;
        position: relative;
        transition: background 0.2s ease-out;
      }
      .menu-icon .nav-icon::before,
      .menu-icon .nav-icon::after {
        background-color: #141414cc;
        content: "";
        display: block;
        position: absolute;
        width: 100%;
        height: 100%;
        transition: all ease-out 0.2s;
      }
      .navigation .nav-icon::before {
        top: 7px;
      }
      .navigation .nav-icon::after {
        top: -7px;
      }
      .navigation .menu-btn:checked ~ .menu-icon .nav-icon::before {
        transform: rotate(-45deg);
        top: 0px;
      }
      .navigation .menu-btn:checked ~ .menu-icon .nav-icon::after {
        transform: rotate(45deg);
        top: 0px;
      }
      .navigation .menu-btn:checked ~ .menu-icon .nav-icon {
        background-color: transparent;
      }
      .navigation .menu-btn:checked ~ .menu-mob {
        display: block;
      }
    
      #search-banner {
        height: 400px;
        background-size: 500px;
      }
      .bg-2 {
        width: 100px;
        height: 100px;
        top: -50px;
      }
      .category-container {
        flex-wrap: wrap;
        justify-content: center;
      }
      .category-box {
        margin: 10px;
      }
      .product-container {
        grid-template-columns: 1fr 1fr;
      }
      .client-box-container {
        grid-template-columns: 1fr 1fr;
      }
      .partner-heading {
        justify-content: center;
      }
      .logo-container {
        flex-wrap: wrap;
        justify-content: center;
      }
      .logo-container img {
        margin: 10px;
      }
      #download-app {
        flex-direction: column;
        height: 100%;
        background-color: transparent;
        margin-top: 0px;
        width: 90%;
        max-width: 100%;
      }
      .app-img {
        height: 450px;
        width: 220px;
      }
      .download-app-text {
        max-width: 100%;
        background-color: #ecf7ee;
        padding: 20px;
        border-radius: 20px;
        margin-top: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
      }
      .footer-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
      }
      .footer-links {
        text-align: center;
      }
    }
    .menu-mob {
      display: none;
    }
    @media (max-width: 750px) {
      #search-banner {
        height: 300px;
      }
      .search-banner-text {
        margin-left: 20px;
      }
    
      .search-banner-text h1 {
        font-size: 2rem;
        line-height: 30px;
      }
      .bg-1 {
        display: none;
      }
      .client-box-container {
        grid-template-columns: 1fr;
      }
    }
    @media (max-width: 500px) {
      #search-banner {
        height: 200px;
        background-size: 300px;
      }
      .search-banner-text {
        margin-left: 0px;
        max-width: 100%;
      }
      .search-banner-text h1 {
        font-size: 1.3rem;
      }
      .search-box {
        width: 100%;
        max-width: 100%;
        height: 40px;
        padding-left: 10px;
      }
      .search-box i {
        font-size: 1rem;
      }
      .search-box .search-btn {
        height: 30px;
      }
      .category-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-gap: 15px;
      }
      .category-box {
        width: 100%;
        margin: 0px;
      }
      .product-container {
        grid-template-columns: 1fr;
      }
      #popular-bundle-pack {
        padding: 30px 20px 0px 20px;
      }
      .footer-container {
        grid-template-columns: 1fr;
      }
      .footer-links {
        margin-top: 10px;
      }
    }
    @media (max-width: 400px) {
      .category-heading h2,
      .product-heading h3,
      .client-heading h3,
      .partner-heading h3 {
        font-size: 1.2rem;
      }
    }
    @media (max-width: 350px) {
      .download-btns {
        flex-direction: column;
      }
      .download-btns a {
        margin: 4px 0px;
        width: 140px;
      }
      .download-btns a img {
        width: 100%;
      }
      .right-nav {
        grid-gap: 5px;
      }
    }
    
    </style>
  {{-- css end --}}

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruits</title>
    <link rel="shortcut icon" href="{{ asset('/storage/app/public/images/fav-icon.png') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <!--Search-banner-->
    <section id="search-banner">
        <img alt="bg" class="bg-1" src="{{ asset('storage/images/bg-1.png') }}" />
        <img alt="bg-2" class="bg-2" src="{{ asset('storage/images/fruit-bg2.png') }}" />
        <div class="search-banner-text">
            <h1>Order Your daily Grocery <span>Fruits</span></h1>
            <strong>#Free Delivery</strong>
            <form action="" class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" class="search-input" placeholder="Search your daily Fruits" name="search" required />
                <input type="submit" class="search-btn" value="Search" />
            </form>
        </div>
    </section>
    <!--search-banner-end-->

    <!--category-->
    <section id="category">
        <div class="category-heading">
     
          <h2>Category</h2>
            <span>All</span>
        </div>
        <div class="category-container">
            <a href="#" class="category-box">
                <img alt="Fruit" src="{{ asset('storage/images/fruits/harvest.png') }}" />
                <span>All fruits</span>
            </a>
            <a href="#" class="category-box">
                <img alt="Berries" src="{{ asset('storage/images/berries.png') }}" />
                <span>Berries</span>
            </a>
            <a href="#" class="category-box">
                <img alt="Citrus Fruit" src="{{ asset('storage/images/orange.png') }}" />
                <span>Citrus Fruit</span>
            </a>
            <a href="#" class="category-box">
                <img alt="Tropical Fruit" src="{{ asset('storage/images/banana.png') }}" />
                <span>Tropical Fruit</span>
            </a>
            <a href="#" class="category-box">
                <img alt="Dry Fruits" src="{{ asset('storage/images/pistachio.png') }}" />
                <span>Dry Fruits</span>
            </a>
            <a href="#" class="category-box">
                <img alt="Bundle" src="{{ asset('storage/images/bundle.png') }}" />
                <span>Bundle</span>
            </a>
        </div>
    </section>
    <!--category-end-->

    <!--Products-->
    <section id="popular-product">
        <div class="product-heading">
            <h3>Popular Product</h3>
            <span>All</span>
        </div>
        <div class="product-container">
            <div class="product-box">
                <img alt="Apple" src="{{ asset('storage/images/fruits/apple.png') }}" />
                <strong>Apple</strong>
                <span class="quantity">1 KG</span>
                <span class="price">Rs 200</span>
                <a href="{{ url('userfruit') }}" class="cart-btn"><i class="fas fa-shopping-bag"></i> Add Cart</a>
                <a class="like-btn"><i class="far fa-heart"></i></a>
            </div>
            <div class="product-box">
                <img alt="Mango" src="{{ asset('storage/images/fruits/manngo.jpg') }}" />
                <strong>Mango</strong>
                <span class="quantity">1 KG</span>
                <span class="price">Rs 300</span>
                <a  href="{{ url('userfruit') }}" class="cart-btn"><i class="fas fa-shopping-bag"></i> Add Cart</a>
                <a class="like-btn"><i class="far fa-heart"></i></a>
            </div>
            <div class="product-box">
                <img alt="Melon" src="{{ asset('storage/images/fruits/melon.jpg') }}" />
                <strong>Melon</strong>
                <span class="quantity">1 KG</span>
                <span class="price">Rs 100</span>
                <a href="{{ url('userfruit') }}" class="cart-btn"><i class="fas fa-shopping-bag"></i> Add Cart</a>
                <a class="like-btn"><i class="far fa-heart"></i></a>
            </div>
            <div class="product-box">
                <img alt="Orange" src="{{ asset('storage/images/fruits/orange.jpg') }}" />
                <strong>Orange</strong>
                <span class="quantity">1 KG</span>
                <span class="price"> Rs 220</span>
                <a href="{{ url('userfruit') }}" class="cart-btn"><i class="fas fa-shopping-bag"></i> Add Cart</a>
                <a class="like-btn"><i class="far fa-heart"></i></a>
            </div>
            <div class="product-box">
                <img alt="Papaya" src="{{ asset('storage/images/fruits/papaya.jpg') }}" />
                <strong>Papaya</strong>
                <span class="quantity">1 KG</span>
                <span class="price">Rs 300</span>
                <a href="{{ url('userfruit') }}" class="cart-btn"><i class="fas fa-shopping-bag"></i> Add Cart</a>
                <a class="like-btn"><i class="far fa-heart"></i></a>
            </div>
            <div class="product-box">
                <img alt="Pomegranate" src="{{ asset('storage/images/fruits/Pom.jpg') }}" />
                <strong>Pomegranate</strong>
                <span class="quantity">1 KG</span>
                <span class="price">Rs 280</span>
                <a href="{{ url('userfruit') }}" class="cart-btn"><i class="fas fa-shopping-bag"></i> Add Cart</a>
                <a class="like-btn"><i class="far fa-heart"></i></a>
            </div>
            <div class="product-box">
                <img alt="Strawberries" src="{{ asset('storage/images/fruits/strawnb.jpg') }}" />
                <strong>Strawberries</strong>
                <span class="quantity">1 KG</span>
                <span class="price">Rs 350</span>
                <a href="{{ url('userfruit') }}" class="cart-btn"><i class="fas fa-shopping-bag"></i> Add Cart</a>
                <a class="like-btn"><i class="far fa-heart"></i></a>
            </div>
        </div>
    </section>
    <!--Products-end-->

    <!--Popular-bundle-pack------->
    <section id="popular-bundle-pack">
      <!--heading-------------->
      <div class="product-heading">
        <h3>Popular Bundle Pack</h3>
      </div>
      <!--box-container------>
      <div class="product-container">
        <!--box---------->
        <div class="product-box">
          <img alt="pack" src="{{ asset('/storage/images/bundle/fruit bundle-7.png')}}" />
          <strong>Big Pack</strong>
          <span class="quantity">Kiwi, Grapes, Pineapple,+4</span>
          <span class="price">Rs 2500</span>
          <!--cart-btn------->
          <a href="#" class="cart-btn">
            <i class="fas fa-shopping-bag"></i> Add Cart
          </a>
          <!--like-btn------->
          <a href="#" class="like-btn">
            <i class="far fa-heart"></i>
          </a>
        </div>
        <!--box---------->
        <div class="product-box">
          <img alt="apple" src="{{ asset('/storage/images/bundle/fruit-bundle-6.png')}}" />
          <strong>Large Pack</strong>
          <span class="quantity">Grapes, Orange, Mango,+2</span>
          <span class="price">Rs 1500</span>
          <!--cart-btn------->
          <a href="#" class="cart-btn">
            <i class="fas fa-shopping-bag"></i> Add Cart
          </a>
          <!--like-btn------->
          <a href="{{ url('userfruit') }}" class="like-btn">
            <i class="far fa-heart"></i>
          </a>
        </div>
        <!--box---------->
        <div class="product-box">
          <img alt="apple" src="{{ asset('/storage/images/bundle/fruit bundle-5.png')}}" />
          <strong>Small Pack</strong>
          <span class="quantity">Kiwi, Orange, Grapes</span>
          <span class="price">Rs 1200</span>
          <!--cart-btn------->
          <a href="{{ url('userfruit') }}" class="cart-btn">
            <i class="fas fa-shopping-bag"></i> Add Cart
          </a>
          <!--like-btn------->
          <a href="#" class="like-btn">
            <i class="far fa-heart"></i>
          </a>
        </div>
        <!--box---------->
        <div class="product-box">
          <img alt="pack" src="{{ asset('storage/images/bundle/fruit_basket-1.png')}}" />
          <strong>Big Pack</strong>
          <span class="quantity">Orange, Mango, Apple,+4</span>
          <span class="price">Rs 800</span>
          <!--cart-btn------->
          <a href="{{ url('userfruit') }}" class="cart-btn">
            <i class="fas fa-shopping-bag"></i> Add Cart
          </a>
          <!--like-btn------->
          <a href="#" class="like-btn">
            <i class="far fa-heart"></i>
          </a>
        </div>
        <!--box---------->
        <div class="product-box">
          <img alt="apple" src="{{ asset('storage/images/bundle/fruit_bundle-2.png')}}" />
          <strong>Medium Pack</strong>
          <span class="quantity">Apple Orange, Grape,+2</span>
          <span class="price">Rs 500</span>
          <!--cart-btn------->
          <a href="{{ url('userfruit') }}" class="cart-btn">
            <i class="fas fa-shopping-bag"></i> Add Cart
          </a>
          <!--like-btn------->
          <a href="#" class="like-btn">
            <i class="far fa-heart"></i>
          </a>
        </div>
        <!--box---------->
        <div class="product-box">
          <img alt="apple" src="{{ asset('storage/images/bundle/fruit bundle-3.jpg')}}" />
          <strong>large Pack</strong>
          <span class="quantity">Banana, Strawberry,Apple,+3</span>
          <span class="price">Rs 400</span>
          <!--cart-btn------->
          <a href="{{ url('userfruit') }}" class="cart-btn">
            <i class="fas fa-shopping-bag"></i> Add Cart
          </a>
          <!--like-btn------->
          <a href="#" class="like-btn">
            <i class="far fa-heart"></i>
          </a>
        </div>
      </div>
    </section>

    <!---------Clients-------------->
    <section id="clients">
      <!-- Heading -->
      <div class="client-heading">
        <h3>What Our Customers Say</h3>
      </div>
      <!-- Box Container -->
      <div class="client-box-container">
        <!-- Box 1 -->
        <div class="client-box">
          <!-- Profile -->
          <div class="client-profile">
            <!-- Image -->
            <img alt="client" src="{{ asset('storage/images/CLIENTS/client-1.jpg')}}" />
            <!-- Text -->
            <div class="profile-text">
              <strong>Hamza saad</strong>
              <span>Fruit Enthusiast</span>
            </div>
          </div>
          <!-- Rating -->
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <!-- Review -->
          <p>
            I absolutely love the variety of fruits available on this website!
            The quality is always top-notch, and the fruits are always fresh.
            Plus, the customer service is fantastic. Highly recommend!
          </p>
        </div>
        <!-- Box 2 -->
        <div class="client-box">
          <!-- Profile -->
          <div class="client-profile">
            <!-- Image -->
            <img alt="client" src="{{ asset('storage/images/CLIENTS/client-2.jpg')}}" />
            <!-- Text -->
            <div class="profile-text">
              <strong>Asmir Shafi</strong>
              <span>Health Enthusiast</span>
            </div>
          </div>
          <!-- Rating -->
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <!-- Review -->
          <p>
            As someone who prioritizes health, I rely on fresh fruits as a key
            part of my diet. This website has been a lifesaver! The fruits are
            always delivered promptly and are of exceptional quality. Couldn't
            ask for more!
          </p>
        </div>
        <!-- Box 3 -->
        <div class="client-box">
          <!-- Profile -->
          <div class="client-profile">
            <!-- Image -->
            <img alt="client" src="{{ asset('storage/images/CLIENTS/client-3.jpg')}}" />
            <!-- Text -->
            <div class="profile-text">
              <strong>Sarah Ibrahim</strong>
              <span>Fitness Trainer</span>
            </div>
          </div>

          <!-- Rating -->
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>

          <!-- Review -->
          <p>
            This fruit website is a game-changer! The variety of fruits
            available is impressive, and the prices are very reasonable. Whether
            I need fruits for myself or for my clients, this is my go-to
            destination.
          </p>
        </div>
      </div>
    </section>

    <!--client-section-end---------->

    <!--==Partnre-logo-->
    <section id="partner">
      <!--heading------------>
      <div class="partner-heading">
        <h3>Our Trusted Partner</h3>
      </div>

      <!--logo-container----->
      <div class="logo-container">
        <img alt="logo" src="{{ asset('storage/images/logo-1.png')}}" />
        <img alt="logo" src="{{ asset('storage/images/logo-2.png')}}" />
        <img alt="logo" src="{{ asset('storage/images/logo-3.png')}}" />
        <img alt="logo" src="{{ asset('storage/images/logo-4.png')}}" />
      </div>
    </section>
    <!--logo-section-end--------------------->

    <!--------download-app------->
    <section id="download-app">
      <div class="app-img">
        <!-- Image of the mobile app -->
        <img alt="app" src="{{ asset('storage/images/mobile-app-2.png')}}" />
      </div>

      <div class="download-app-text">
        <!-- Heading -->
        <strong>Download Our Mobile App</strong>

        <!-- Description -->
        <p>
          Stay connected with us on-the-go by downloading our mobile app! Access
          a wide range of fresh fruits, vegetables, and other groceries right at
          your fingertips. With our user-friendly interface and secure checkout
          process, shopping for your favorite produce has never been easier.
        </p>
        <!-- Download buttons -->
        <div class="download-btns">
          <!-- App Store button -->
          <a href="#"
            ><img alt="App Store" src="{{ asset('storage/images/appstore-btn.png')}}"
          /></a>

          <!-- Google Play button -->
          <a href="#"
            ><img alt="Google Play" src="{{ asset('/storage/images/googleplay-btn.png')}}"
          /></a>
        </div>
      </div>
    </section>

    <!------download-app-section-end------------------------->

    <!--------Footer-------------->

 
    <script src="index.js"></script>
  </body>
</html>

@include('layouts.footer')
