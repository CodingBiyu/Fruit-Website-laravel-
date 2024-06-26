{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .navbar {
            background-color: #333;
            padding: 1rem 2rem;
            border-bottom: 1px solid #444;
        }

        .navbar-brand {
            color: #fff;
            font-size: 24px;
            font-weight: bold;
        }

        .nav-link {
            color: #fff;
            transition: color 0.2s ease;
        }

        .nav-link:hover {
            color: #ccc;
        }

        .slider-content {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">Johnsons.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @guest
                <li class="nav-item active">
                    <a class="nav-link" href="/userdashboard">NFT Info<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="login">Login</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="register">Register</a>
                </li>
                @endguest
                @auth
                <li class="nav-item active">
                    <a class="nav-link" href="/userdashboard">NFT Info<span class="sr-only">(current)</span></a>
                </li>
              
                <li class="nav-item active">
                    <a class="nav-link" href="#">
                        <div>  {{ Auth::user()->name }} </div>
                    </a>
                </li>
                <li class="nav-item" >
                <div class="slider-content" style="margin-left: 29px;margin-top: 8px;">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">{{ __('Log Out') }}</a>
                        </form>
                    </div>
                </li>
                @endauth
            </ul>
        </div>
    </nav>
</body>
</html> --}}



{{-- fruit one --}}
<!DOCTYPE html>

<!--doctype html-->
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Title-->

    <title>Fruits</title>

   
    <!--Fav-icons-->

    <link rel="shortcut icon" href="{{ asset('storage/images/fav-icon.png')}}" />

    <!------Using-Font-Awesome------>
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous" />

      
    <!-----Import-Font-Family from google fonts------->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet" />

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
  justify-content: center;
  align-items: center;
  padding: 15px;
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
.menu li{
  display: flex;
  align-items: center;
  justify-content: center
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
.form-log{
 display : flex; 
  align-items: center;
  width: 280px;
}
.menu .login-btn {
 width: 140px;
  color: white;
margin-right: 4px;

}

.form-log button :hover,
.menu .login-btn:hover {
  color: white;
}
.login-btn {
  width: 250px;
  height: 40px;
  border-radius: 20px;
  background-color: #4eb060;
  border: none;
  color: #ffffff;
  outline: none;
  cursor: pointer;
  transition: all ease 0.3s;
  display: flex;
  align-items: center;
  justify-content: center;
 
}
.right {
  display: flex;
  gap: 20px;
  align-items: center;
  justify-content: center
}
.admin{
    font-size: 20px;
    font-weight: bold;
    color: #4eb060;
    margin-left: 80px;

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
  </head>
  <body>
    <!------Navigation------->
    <nav class="navigation">
      <!--logo-->
      <a href="{{ url('userdashboard') }}" class="logo"> <span>e</span>Fruits </a>
      <!--  -->
      <ul class="menu">
        <li><a href="{{ url('userdashboard') }}" class="active">Home</a></li>
        <li><a href="{{ url('userdashboard#category') }}">Categories</a></li>
        <li><a href="{{ url('userdashboard#popular-bundle-pack') }}">Our Packages</a></li>
        <li><a href="{{ url('userdashboard#download-app') }}">Our App</a></li>
        {{-- <li><a href="../Contact us/contact.html">Contact us</a></li> --}}
        <li class="nav-item active">
          <a href="{{ url('userfruit') }}">Buy<span class="sr-only">(current)</span></a>
          </li>
        @guest
       
        <li >
            <a  href="login" class="login-btn">Login</a>
        </li>
        <li >
            <a  href="register" class="login-btn">Register</a>
        </li>
        @endguest
        @auth
        {{-- <li ><a  href="/userdashboard">NFT Info<span class="sr-only">(current)</span></a>
        </li> --}}
        {{-- <li >
            <a href="#" chref="/userfruit">Total</a>
        </li> --}}
        <li >
            <a  href="#"><div class="admin">  {{ Auth::user()->name }} </div></a>
        </li>
        <li class="nav-item"  >
        <form method="POST" action="{{ route('logout') }}" class="form-log">
        @csrf
        <button class="login-btn">Login</button>
        <button class="login-btn" style="color: white" ><a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">{{ __('Log Out') }}</a></button>  
        </form>
        
        </li>
        @endauth
      </ul>
      <!--right-nav-(cart-like)-->
      <div class="right">
        {{-- <div class="right-nav">
          <!--like----->
          <a href="#" class="like">
            <i class="far fa-heart"></i>
            <span class="likes">0</span>
          </a>
          <!--cart----->
          <a href="#" class="cart">
            <i class="fas fa-shopping-cart"></i>
            <span class="total_fruits">0</span>
          </a>
        </div> --}}
        <!--menu-btn-->
        <input type="checkbox" class="menu-btn" id="menu-btn" />
        <label for="menu-btn" class="menu-icon">
          <span class="nav-icon"></span>
        </label>
        <ul class="menu-mob">
          <li><a href="index.html" class="active">Home</a></li>
          <li><a href="#category">Categories</a></li>
          <li><a href="#popular-bundle-pack">Our Packages</a></li>
          <li><a href="#download-app">Our App</a></li>
          <li>
            <a href="/login/login.html"> Login </a>
          </li>
        </ul>
        <!-- menu -->
        <ul class="menu">
            {{-- @guest
            <li class="nav-item active">
            <a href="/userdashboard">NFT Info<span class="sr-only">(current)</span></a>
            </li>
            <li >
                <a  href="login">Login</a>
            </li>
            <li >
                <a  href="register">Register</a>
            </li>
            @endguest
            @auth
            <li >
                <a  href="/userdashboard"><span class="sr-only">(current)</span></a>
            </li>
            <li >
                <a href="#" chref="/userfruit">Total</a>
            </li>
            <li >
                <a  href="#"><div>  {{ Auth::user()->name }} </div></a>
            </li>
            <li class="nav-item" >
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">{{ __('Log Out') }}</a>
                    </form>
            
            </li>
            @endauth --}}
        </ul>
      </div>
    </nav>
    <!--nav-end-->

</body>