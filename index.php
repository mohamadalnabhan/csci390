
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css files -->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/framework.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- js files -->
    <script src="javascript/main.js"></script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&#038;display=swap" rel="stylesheet" /><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <title>e-commerce project </title>
</head>
<body>
    <header>
        <div class="container">
          <a href="#" class="logo">
            <img decoding="async" src="image/pngegg.png" alt="Kasper" />
          </a>
          <div class="search-container">
            <input type="text" placeholder="Search...">
        </div>
          <nav>
            <ul>
                <li> <a class="active" href="index.html">Home</a></li>
                <li><i class="fas fa-user"></i> <a href="Login.php">login</a></li>
              </ul>
            
          </nav>
        </div>
      </header>
            <!-- END HEADER -->
      <!-- start menu -->
      <div class="menu">
        <div class="container"> 
          <div class="dis">
            <i class="fas fa-laptop electronic-devices-icon"></i>
            <span> <a href="ElectronicDevices.html">Electronic devices</a></span>
          </div>
          <div class="dis">
            <i class="fas fa-tshirt clothes-icon"></i>
            <span><a href="Fashion.html">fashion</a></span>
          </div>
          <div class="dis">
            <i class="fas fa-couch furniture-icon"></i>
            <span><a href="Furniture.html">furniture</a></span>
          </div>
      </div>
    </div>
    <!-- ad -->
      <img src="image/image1.webp" class="ad-img" id="ad-img1" >
      <!-- electronic product -->
      <div class="product">
        <h2> deals on electrical devices :</h2>
        <div class="img-container">
          <div class="box" data-name="p-i-1" >
            <img src="image/electronicDevice/1.jpeg" alt="">
            <div class="caption">
              <h4>Nokia rare phone </h4>
              <p>5000000BTC</p>
            </div>
          </div>
          <div class="box" data-name="p-i-2">
            <img src="image/electronicDevice/2.jpeg" alt="">
            <div class="caption">
              <h4>gaming labtop</h4>
              <p>2000$</p>
            </div>
          </div>
          <div class="box" data-name="p-i-3">
            <img src="image/electronicDevice/3.jpeg" alt="">
            <div class="caption">
              <h4>Amazon TV</h4>
              <p>700$</p>
            </div>
          </div>
          <div class="box" data-name="p-i-4">
            <img src="image/electronicDevice/4.jpeg" alt="">
            <div class="caption">
              <h4>Camera</h4>
              <p>200$</p>
            </div>
          </div>
        </div>
        </div>
      </div>
      <!-- ad -->
      <img src="image/image1.webp"  class="ad-img" id="ad-img2" >
      <!-- fashion product -->
      <div class="product">
        <h2> deals on fashion :</h2>
        <div class="img-container">
          <div class="box" data-name="p-i-5">
            <img src="image/fashion/1.jpeg" alt="">
            <div class="caption">
              <h4>Kids pajamas</h4>
              <p>15$</p>
            </div>
          </div>
          <div class="box" data-name="p-i-6">
            <img src="image/fashion/2.jpeg" alt="">
            <div class="caption">
              <h4>Men's pants</h4>
              <p>20$</p>
            </div>
          </div>
          <div class="box" data-name="p-i-7">
            <img src="image/fashion/3.jpeg" alt="">
            <div class="caption">
              <h4>Abaya</h4>
              <p>75$</p>
            </div>
          </div>
          <div class="box" data-name="p-i-8">
            <img src="image/fashion/4.jpeg" alt="">
            <div class="caption">
              <h4>Nike air</h4>
              <p>300$</p>
            </div>
          </div>
        </div>
        </div>
      </div>
      <div class="product">
        <h2> deals on furniture :</h2>
        <div class="img-container">
          <div class="box"  data-name="p-i-9" >
            <img src="image/furniture/1.jpeg" alt="">
            <div class="caption">
              <h4>One person sofa</h4>
              <p>from 70$</p>
            </div>
          </div>
          <div class="box" data-name="p-i-10">
            <img src="image/furniture/2.jpeg" alt="">
            <div class="caption">
              <h4>Small office</h4>
              <p>120$</p>
            </div>
          </div>
          <div class="box" data-name="p-i-11">
            <img src="image/furniture/3.jpeg" alt="">
            <div class="caption">
              <h4>Electrical oven</h4>
              <p>450$</p>
            </div>
          </div>
          <div class="box"data-name="p-i-12">
            <img src="image/furniture/4.jpeg" alt="">
            <div class="caption">
              <h4>wall clock</h4>
              <p>25$</p>
            </div>
          </div>
        </div>
        </div>
      </div>
      <!-- popup -->
      <div class="product-preview">
        <div class="preview" data-target="p-i-1">
          <i class="fas fa-times" class="close"></i>
          <img src="image/electronicDevice/1.jpeg" alt="">
          <h3>nokia rare phone</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-hald-alt"></i>
            <span>(250)</span>
          </div>
          <p>harder than diamond</p>
          <div class="price">5000000BTC</div>
          <div class="buttons"  >
            <a  href="" class="cart">to contact us</a>
          </div>
        </div>

        <div class="preview" data-target="p-i-2">
          <i class="fas fa-times"></i>
          <img src="image/electronicDevice/2.jpeg" alt="">
          <h3>gaming labtop</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <span>(4540)</span>
          </div>
          <p>core i7 13th <br>RTX3070TI <br> 16RAM <br></p>
          <div class="price">20004$</div>
          <div class="buttons">
            <a href="" class="cart">to contact us</a>
          </div>
        </div>

        <div class="preview" data-target="p-i-3">
          <i class="fas fa-times"></i>
          <img src="image/electronicDevice/3.jpeg" alt="">
          <h3>Amazon TV</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <span>(45)</span>
          </div>
          <p>for watch best movies </p>
          <div class="price">700$</div>
          <div class="buttons">
            <a href="" class="cart">to contact us</a>
          </div>
        </div>

        <div class="preview" data-target="p-i-4">
          <i class="fas fa-times"></i>
          <img src="image/electronicDevice/4.jpeg" alt="">
          <h3>Camera</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-hald-alt"></i>
            <span>(13)</span>
          </div>
          <p> HD surveillance camera</p>
          <div class="price">200$</div>
          <div class="buttons">
            <a href="" class="cart">to contact us</a>
          </div>
        </div>

        <div class="preview" data-target="p-i-5">
          <i class="fas fa-times"></i>
          <img src="image/fashion/1.jpeg" alt="">
          <h3>Kids pajamas</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-hald-alt"></i>
            <span>(250)</span>
          </div>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
          <div class="price">15$</div>
          <div class="buttons">
            <a href="" class="cart">to contact us</a>
          </div>
        </div>

        <div class="preview" data-target="p-i-6">
          <i class="fas fa-times"></i>
          <img src="image/fashion/2.jpeg" alt="">
          <h3>Men's pants</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-hald-alt"></i>
            <span>(250)</span>
          </div>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
          <div class="price">20$</div>
          <div class="buttons">
            <a href="" class="cart">to contact us</a>
          </div>
        </div>

        <div class="preview" data-target="p-i-7">
          <i class="fas fa-times"></i>
          <img src="image/fashion/3.jpeg" alt="">
          <h3>Abaya</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-hald-alt"></i>
            <span>(250)</span>
          </div>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
          <div class="price">75$</div>
          <div class="buttons">
            <a href="" class="cart">to contact us</a>
          </div>
        </div>

        <div class="preview" data-target="p-i-8">
          <i class="fas fa-times"></i>
          <img src="image/fashion/4.jpeg" alt="">
          <h3>Nike air</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-hald-alt"></i>
            <span>(250)</span>
          </div>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
          <div class="price">300$</div>
          <div class="buttons">
            <a href="" class="cart">to contact us</a>
          </div>
        </div>


        <div class="preview" data-target="p-i-9">
          <i class="fas fa-times"></i>
          <img src="image/furniture/1.jpeg" alt="">
          <h3>one person sofa</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-hald-alt"></i>
            <span>(230)</span>
          </div>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
          <div class="price">70$</div>
          <div class="buttons">
            <a href="" class="cart">to contact us</a>
          </div>
        </div>

        <div class="preview" data-target="p-i-10">
          <i class="fas fa-times"></i>
          <img src="image/furniture/2.jpeg" alt="">
          <h3>small office</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-hald-alt"></i>
            <span>(2520)</span>
          </div>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
          <div class="price">130$</div>
          <div class="buttons">
            <a href="" class="cart">to contact us</a>
          </div>
        </div>

        <div class="preview" data-target="p-i-11">
          <i class="fas fa-times"></i>
          <img src="image/furniture/3.jpeg" alt="">
          <h3>electrical oven</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-hald-alt"></i>
            <span>(250)</span>
          </div>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
          <div class="price">450$</div>
          <div class="buttons">
            <a href="" class="cart">to contact us</a>
          </div>
        </div>

        <div class="preview" data-target="p-i-12">
          <i class="fas fa-times"></i>
          <img src="image/furniture/4.jpeg" alt="">
          <h3>wall clock</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-hald-alt"></i>
            <span>(150)</span>
          </div>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
          <div class="price">25$</div>
          <div class="buttons">
            <a href="" class="cart">to contact us</a>
          </div>
        </div>
      </div>
      
      <!--contact us-->
      <div class="contact">
        <div class="container">
          <div class="main-heading">
            <h2> contact us</h2>
            <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pcpvoehv poivcpeivw</p>
          </div>
          <div class="content">
          <form action="">
            <input class="main-input" type="text" name="name" placeholder="Your Name" />
            <input class="main-input" type="email" name="mail" placeholder="Your Email" />
            <textarea class="main-input" name="message" placeholder="Your Message"></textarea>
            <input type="submit" value="Send Message" />
          </form>
          <div class="info"> 
            <h4>Get In Touch</h4>
            <span class="phone">+00 123.456.789</span>
            <span class="phone">+00 123.456.789</span>
            <h4>Where We Are</h4>
          <address>Awesome Address 17<br />New York, NYC<br />123-4567-890<br />USA</address>
          </div>
          </div>
        </div>
      </div>
      <!-- Start Footer -->
<div class="footer">
  <div class="container">
    <p>We Are Kasper company</p>
    <div class="social-icons">
      <i class="fab fa-facebook-f"></i>
      <i class="fab fa-twitter"></i>
      <i class="fas fa-home"></i>
      <i class="fab fa-linkedin"></i>
    </div>
    <p class="copyright">&copy; 2021 <span>Kasper</span> All Right Reserved</p>
  </div>
</div>
<!-- End Footer -->
</body>
</html