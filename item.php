<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BRAND</title>
    <link rel="stylesheet/less" type="text/css" href="styles.less" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comic+Neue|Special+Elite&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
        <div class="logo">
          <img src="img/logo.svg" alt="logo">
          <h2>BRAND</h2>
        </div>
      <ul>
        <li>
          <a href="index.php">Global</a>
        </li>
        <li>
          <a href="shop.php">Shop</a>
        </li>
      </ul>
    </header>
    <div class="item-selected">
      <div class="item-img">
        <img src="img/item.jpg" alt="image">
        <img src="img/item.jpg" alt="image">
        <img src="img/item.jpg" alt="image">
        <img src="img/item.jpg" alt="image">
      </div>
      <div class="item-text">
        <h2>Name of item</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h4>Price: $0000</h4>
        <button type="submit" name="button" onclick="location.href='buy.php'">Buy</button>
      </div>
    </div>
    <footer>
      <div class="footer-inner">
        <ul>
          <li>
            <img src="img/message.svg" alt="img">
            <p>example@brandshop.ru</p>
          </li>
          <li>
            <img src="img/phone.svg" alt="img">
            <p>8 800 555 35 35</p>
          </li>
          <li>
            <img src="img/placeholder.svg" alt="img">
            <p>Moscow, Moscovskaya st. 1</p>
          </li>
        </ul>
        <hr>
        <ul class="social-items">
          <li>
            <a href="#"><img src="img/vk.svg" alt="image"></a>
          </li>
          <li>
            <a href="#"><img src="img/google-plus.svg" alt="image"></a>
          </li>
          <li>
            <a href="#"><img src="img/facebook.svg" alt="image"></a>
          </li>
        </ul>
      </div>
    </footer>
    <script src="script.js"></script>
  </body>
</html>
