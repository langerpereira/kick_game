<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cart</title>
    <link rel="stylesheet" href="product1.css" />
    
  </head>
  <body style="background-color: grey; margin:0px">
    <div class="nav-bar" style="background-color: black;">
      <a href="index.html">
        <span class="navItem">
          <img src="./img/bot1.png" alt="" style="transform: translate(10%, 10%);"/>
        </span>
      </a>

      <div class="hamburger-menu">
                <input id="menu__toggle" type="checkbox" />
                <label class="menu__btn" for="menu__toggle">
                  <span></span>
                </label>
                <ul class="menu__box">
                  <li><a class="menu__item" href="index.html">Home</a></li>
                  <li><a class="menu__item" href="login.php" style="color: rgb(0, 164, 0);"><?php session_start(); if(isset($_SESSION["username"])){echo $_SESSION["name"];}else{echo"Login";} ?></a></li>
                  <li><a class="menu__item" href="Registration.php">Register</a></li>
                  <li><a class="menu__item" href="product_airforce.php">shoes</a></li>
                  <li><a class="menu__item" href="clothing.html">clothing</a></li>
                  <li><a class="menu__item" href="#">support</a></li>
                  <li><a class="menu__item" href="login.php?logout" name="logout" style="color: red;">Log Out</a></li>
              </div>

      <div>
        <i
          class="fa fa-shopping-cart cart1"
          style="font-size: 48px; color: green"
        ></i>
      </div>
    </div>

    <div class="small-container cart-page">
      <table>
        <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Subtotal</th>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="https://i.postimg.cc/YSpFQ4WP/cab9b853-9d87-4ef3-9db3-2f054c1a654d.webp" alt="">
              <div>
                <p>Shoes</p>
                <small>Price :15,000</small>
                <br>
                <a href="">Remove</a>
              </div>
            </div>
          </td>
          <td><input type="number" value="1" /></td>
          <td>50</td>
        </tr>
        
        <tr>
          <td>
            <div class="cart-info">
              <img src="https://i.postimg.cc/YSpFQ4WP/cab9b853-9d87-4ef3-9db3-2f054c1a654d.webp" alt="">
              <div>
                <p>Shoes</p>
                <small>Price :15,000</small>
                <br>
                <a href="">Remove</a>
              </div>
            </div>
          </td>
          <td><input type="number" value="1" /></td>
          <td>50</td>
        </tr>
      </table>
    </div>

    <footer style="background-color: black; width: 100%;">
      <div class="footerLeft">
        <div class="footerMenu">
          <h1 class="fMenuTitle" style="color: aliceblue">About Us</h1>
          <ul class="fList">
            <li class="fListItem">Company</li>
            <li class="fListItem">Contact</li>
            <li class="fListItem">Careers</li>
            <li class="fListItem">Affiliates</li>
            <li class="fListItem">Stores</li>
          </ul>
        </div>
        <div class="footerMenu">
          <h1 class="fMenuTitle" style="color: aliceblue">Useful Links</h1>
          <ul class="fList">
            <li class="fListItem">Support</li>
            <li class="fListItem">Refund</li>
            <li class="fListItem">FAQ</li>
            <li class="fListItem">Feedback</li>
            <li class="fListItem">Stories</li>
          </ul>
        </div>
        <div class="footerMenu">
          <h1 class="fMenuTitle" style="color: aliceblue">Products</h1>
          <ul class="fList">
            <li class="fListItem">Air Force</li>
            <li class="fListItem">Air Jordan</li>
            <li class="fListItem">Blazer</li>
            <li class="fListItem">Crater</li>
            <li class="fListItem">Hippie</li>
          </ul>
        </div>
      </div>
      <div class="footerRight">
        <div class="footerRightMenu">
          <h1 class="fMenuTitle">Subscribe to our newsletter</h1>
          <div class="fMail">
            <input type="text" placeholder="your@email.com" class="fInput" />
            <button class="fButton">Join!</button>
          </div>
        </div>
        <div class="footerRightMenu">
          <h1 class="fMenuTitle">Follow Us</h1>
          <div class="fIcons">
            <img src="./img/facebook.png" alt="" class="fIcon" />
            <img src="./img/twitter.png" alt="" class="fIcon" />
            <img src="./img/instagram.png" alt="" class="fIcon" />
            <img src="./img/whatsapp.png" alt="" class="fIcon" />
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
