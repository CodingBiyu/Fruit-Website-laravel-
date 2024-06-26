@include('layouts.adminheader')

<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruits</title>
    <link rel="shortcut icon" href="{{ asset('images/fav-icon.png') }}">
   
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
                <a class="cart-btn"><i class="fas fa-shopping-bag"></i> Add Cart</a>
                <a class="like-btn"><i class="far fa-heart"></i></a>
            </div>
            <div class="product-box">
                <img alt="Mango" src="{{ asset('storage/images/fruits/manngo.jpg') }}" />
                <strong>Mango</strong>
                <span class="quantity">1 KG</span>
                <span class="price">Rs 300</span>
                <a class="cart-btn"><i class="fas fa-shopping-bag"></i> Add Cart</a>
                <a class="like-btn"><i class="far fa-heart"></i></a>
            </div>
            <div class="product-box">
                <img alt="Melon" src="{{ asset('storage/images/fruits/melon.jpg') }}" />
                <strong>Melon</strong>
                <span class="quantity">1 KG</span>
                <span class="price">Rs 100</span>
                <a class="cart-btn"><i class="fas fa-shopping-bag"></i> Add Cart</a>
                <a class="like-btn"><i class="far fa-heart"></i></a>
            </div>
            <div class="product-box">
                <img alt="Orange" src="{{ asset('storage/images/fruits/orange.jpg') }}" />
                <strong>Orange</strong>
                <span class="quantity">1 KG</span>
                <span class="price"> Rs 220</span>
                <a class="cart-btn"><i class="fas fa-shopping-bag"></i> Add Cart</a>
                <a class="like-btn"><i class="far fa-heart"></i></a>
            </div>
            <div class="product-box">
                <img alt="Papaya" src="{{ asset('storage/images/fruits/papaya.jpg') }}" />
                <strong>Papaya</strong>
                <span class="quantity">1 KG</span>
                <span class="price">Rs 300</span>
                <a class="cart-btn"><i class="fas fa-shopping-bag"></i> Add Cart</a>
                <a class="like-btn"><i class="far fa-heart"></i></a>
            </div>
            {{-- <div class="product-box">
                <img alt="Pomegranate" src="{{ asset('storage/images/fruits/Pom.jpg') }}" />
                <strong>Pomegranate</strong>
                <span class="quantity">1 KG</span>
                <span class="price">Rs 280</span>
                <a class="cart-btn"><i class="fas fa-shopping-bag"></i> Add Cart</a>
                <a class="like-btn"><i class="far fa-heart"></i></a>
            </div>
            <div class="product-box">
                <img alt="Strawberries" src="{{ asset('storage/images/fruits/strawnb.jpg') }}" />
                <strong>Strawberries</strong>
                <span class="quantity">1 KG</span>
                <span class="price">Rs 350</span>
                <a class="cart-btn"><i class="fas fa-shopping-bag"></i> Add Cart</a>
                <a class="like-btn"><i class="far fa-heart"></i></a>
            </div> --}}
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
          <a href="#" class="like-btn">
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
          <img alt="pack" src="{{ asset('storage/images/bundle/fruit_basket-1.png')}}" />
          <strong>Big Pack</strong>
          <span class="quantity">Orange, Mango, Apple,+4</span>
          <span class="price">Rs 800</span>
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
          <img alt="apple" src="{{ asset('storage/images/bundle/fruit_bundle-2.png')}}" />
          <strong>Medium Pack</strong>
          <span class="quantity">Apple Orange, Grape,+2</span>
          <span class="price">Rs 500</span>
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
          <img alt="apple" src="{{ asset('storage/images/bundle/fruit bundle-3.jpg')}}" />
          <strong>large Pack</strong>
          <span class="quantity">Banana, Strawberry,Apple,+3</span>
          <span class="price">Rs 400</span>
          <!--cart-btn------->
          <a href="#" class="cart-btn">
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

