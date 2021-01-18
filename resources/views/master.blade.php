<!doctype html>
<html lang="en">
<head>
    <title>@yield('title')</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/css/reset.css">
  <link rel="stylesheet" href="/css/style.css"/>
  <link rel="stylesheet" href="/css/card_style.css"/>
  <link rel="stylesheet" href="/css/header_style.css"/>
  <link rel="stylesheet" href="/css/categories_style.css"/>
  <link rel="stylesheet" href="/css/order_style.css"/>
  <link rel="stylesheet" href="/css/cart_style.css"/>
  <link rel="stylesheet" href="/css/product_style.css"/>
  <link rel="stylesheet" href="/css/pagination.css"/>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet"/>
</head>
<body>
</nav>
  <nav class="navbar">
    <ul class="navbar-nav">
      <li class="logo">
        <a href="{{route('index')}}" class="nav-link">
          <span class="link-text logo-text">Menu</span>
          <svg
            aria-hidden="true"
            focusable="false"
            data-prefix="fad"
            data-icon="angle-double-right"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 448 512"
            class="svg-inline--fa fa-angle-double-right fa-w-14 fa-5x"
          >
            <g class="fa-group">
              <path
                fill="currentColor"
                d="M224 273L88.37 409a23.78 23.78 0 0 1-33.8 0L32 386.36a23.94 23.94 0 0 1 0-33.89l96.13-96.37L32 159.73a23.94 23.94 0 0 1 0-33.89l22.44-22.79a23.78 23.78 0 0 1 33.8 0L223.88 239a23.94 23.94 0 0 1 .1 34z"
                class="fa-secondary"
              ></path>
              <path
                fill="currentColor"
                d="M415.89 273L280.34 409a23.77 23.77 0 0 1-33.79 0L224 386.26a23.94 23.94 0 0 1 0-33.89L320.11 256l-96-96.47a23.94 23.94 0 0 1 0-33.89l22.52-22.59a23.77 23.77 0 0 1 33.79 0L416 239a24 24 0 0 1-.11 34z"
                class="fa-primary"
              ></path>
            </g>
          </svg>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{route('index')}}" class="nav-link">
            <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="product-hunt" class="svg-inline--fa fa-product-hunt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M326.3 218.8c0 20.5-16.7 37.2-37.2 37.2h-70.3v-74.4h70.3c20.5 0 37.2 16.7 37.2 37.2zM504 256c0 137-111 248-248 248S8 393 8 256 119 8 256 8s248 111 248 248zm-128.1-37.2c0-47.9-38.9-86.8-86.8-86.8H169.2v248h49.6v-74.4h70.3c47.9 0 86.8-38.9 86.8-86.8z"></path></svg>
          <span class="link-text" >All Products</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{route('categories')}}" class="nav-link">
            <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="cuttlefish" class="svg-inline--fa fa-cuttlefish fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 440 512"><path fill="currentColor" d="M344 305.5c-17.5 31.6-57.4 54.5-96 54.5-56.6 0-104-47.4-104-104s47.4-104 104-104c38.6 0 78.5 22.9 96 54.5 13.7-50.9 41.7-93.3 87-117.8C385.7 39.1 320.5 8 248 8 111 8 0 119 0 256s111 248 248 248c72.5 0 137.7-31.1 183-80.7-45.3-24.5-73.3-66.9-87-117.8z"></path></svg>
          <span class="link-text">Categories</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{route('cart')}}" class="nav-link">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shopping-cart" class="svg-inline--fa fa-shopping-cart fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z"></path></svg>
          <span class="link-text">Cart</span>
        </a>
      </li>
      <li class="nav-item">
        <a href = "{{route('adminpanel')}}" class="nav-link">
            <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="opera" class="svg-inline--fa fa-opera fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path fill="currentColor" d="M313.9 32.7c-170.2 0-252.6 223.8-147.5 355.1 36.5 45.4 88.6 75.6 147.5 75.6 36.3 0 70.3-11.1 99.4-30.4-43.8 39.2-101.9 63-165.3 63-3.9 0-8 0-11.9-.3C104.6 489.6 0 381.1 0 248 0 111 111 0 248 0h.8c63.1.3 120.7 24.1 164.4 63.1-29-19.4-63.1-30.4-99.3-30.4zm101.8 397.7c-40.9 24.7-90.7 23.6-132-5.8 56.2-20.5 97.7-91.6 97.7-176.6 0-84.7-41.2-155.8-97.4-176.6 41.8-29.2 91.2-30.3 132.9-5 105.9 98.7 105.5 265.7-1.2 364z"></path></svg>
          <span class="link-text">Orders</span>
        </a>
      </li>
      @guest
      <li class="nav-item" id="authbutton">
          <span class="link-text">
            <li class="nav-item">
              <a href="{{route('login')}}" class="nav-link">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="question-circle" class="svg-inline--fa fa-question-circle fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path></svg>
                <span class="link-text">Login</span>
              </a>
            </li>
          </span>
      </li>
      @endguest
      @auth
      <li class="nav-item" id="authbutton">
          <span class="link-text">
            <li class="nav-item">
              <a href="{{route('get-logout')}}" class="nav-link">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="question-circle" class="svg-inline--fa fa-question-circle fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path></svg>
                <span class="link-text">Log Out</span>
              </a>
            </li>
          </span>
      </li>
      @endauth

    </ul>
  </nav>

<div class="container">
        @yield('content')
          <div class = 'header'>
            @if(session()->has('success'))
          <div class ='header-title alert alert-success'>
            <p style = 'font-size:25px; border:none'>{{session()->get('success')}}</p>
          </div>
        @elseif(session()->has('warning'))
          <div class ='header-title alert alert-warning'>
            <p style = 'font-size:25px; border:none'>{{session()->get('warning')}}</p>
          </div>
        @endif
  </div>
</div>
</body>
</html>
