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
    <div class="buy-form">
      <form action="" method="post">
        <input type="text" id="name" name="name" value="" placeholder="Enter Your name" required><br>
        <input type="text" id="surname" name="surname" value="" placeholder="Enter Your surname" required><br><hr>
        <input type="tel" id="phonenum" name="phone" value="" placeholder="Enter Your phone number" required><br>
        <textarea class="address" id="address" type="text" name="address" value="" placeholder="Enter Your address" required></textarea><br>
        <div class="consert">
          <input type="checkbox" id="check" name="checkbox" value="" placeholder="" required>
          <span>Consent to the processing of personal data</span><br>
        </div>
        <button type="submit" name="button" onclick="test()">Submit</button>
      </form>
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
