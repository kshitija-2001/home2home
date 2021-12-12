<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user home</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="userhome.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo">
        <img src="images1/logo.png" alt="">
    </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about us</a>
        <a href="#menu">menu</a>
        <a href="#products">products</a>
        <a href="#review">feedback</a>
        <a href="#contact">contact us</a>
        <a href="userlogin.php" type="button" class="btn btn-warning"><h5>Logout</h5></a>
    </nav>

    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div>

    <div class="cart-items-container">
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images1/cake.png" alt="">
            <div class="content">
                <h3>Chocolate Cake</h3>
                <div class="price">Rs.500/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images1/papad.jpg" alt="">
            <div class="content">
                <h3>Udad Papad</h3>
                <div class="price">Rs.100/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images1/Pickle.jpg" alt="">
            <div class="content">
                <h3>Mango Pickle</h3>
                <div class="price">Rs.200/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images1/chips.jpg" alt="">
            <div class="content">
                <h3>Banana Chips</h3>
                <div class="price">Rs.150/-</div>
            </div>
        </div>
        <a href="#" class="btn">checkout now</a>
    </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Order now!</h3>
        <p>Help small business owner and taste the best homemade food</p>
        <a href="#" class="btn">Order Now</a>
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="images1/aboutus.jpg" alt="">
        </div>

        <div class="content">
            <h3>Who are we?</h3>
            <p>We are catalyst between you and the small business to provide you with the best homemade food with different bakers from your loaclity.</p>
            <a href="#" class="btn">learn more</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- menu section starts  -->

<section class="menu" id="menu">

    <h1 class="heading"> our <span>menu</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images1/PineappleCake.jpg" alt="">
            <h3>Pineapple cake</h3>
            <h3>Baker's Nation</h3>
            <div class="price">365/- <span>500/-</span></div>
            <a href="checkout.php" class="btn">Buy Now</a>
        </div>

        <div class="box">
            <img src="images1/tiffin.jpg" alt="">
            <h3>Tiffin Service</h3>
            <h3>Krupa Tiffin services</h3>
            <div class="price">80/- <span>100/-</span></div>
            <a href="#" class="btn">Buy Now</a>
        </div>

        <div class="box">
            <img src="images1/cookies.jpg" alt="">
            <h3>Cookies</h3>
            <h3>Cookie world</h3>
            <div class="price">150/- </div>
            <a href="#" class="btn">Buy Now</a>
        </div>

    

    </div>

</section>

<!-- menu section ends -->

<section class="products" id="products">

    <h1 class="heading"> our <span>products</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images1/donut.jpg" alt="">
            </div>
            <div class="content">
                <h3>Donuts</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Rs.150/- <span>Rs.200/-</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images1/pancake.jpg" alt="">
            </div>
            <div class="content">
                <h3>Pancakes</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Rs.200/- <span>Rs.250/-</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images1/chocolate.jpg" alt="">
            </div>
            <div class="content">
                <h3>Chocolates</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Rs.250/- <span>Rs.300/-</span></div>
            </div>
        </div>

    </div>

</section>

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> 
User <span> Feedbacks</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images1/quote-img.png" alt="" class="quote">
            <p>This website is very helpful we can get homemade food at affordable price.</p>
            <img src="images1/pic-1.png" class="user" alt="">
            <h3>john deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="images1/quote-img.png" alt="" class="quote">
            <p>The quality of homemade food is very nice and the products are also affordable.</p>
            <img src="images1/pic-2.png" class="user" alt="">
            <h3>Sugar plum</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        
    
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <div class="row">

        <!-- <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1629452077891!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe> -->

        <form action="">
            <h3>get in touch</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="name">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="number" placeholder="number">
            </div>
            <input type="submit" value="contact now" class="btn">
        </form>

    </div>

</section>

<!-- contact section ends -->


<!-- footer section starts  -->

<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="links">
        <a href="#">home</a>
        <a href="#">about us</a>
        <a href="#">menu</a>
        <a href="#">products</a>
        <a href="#">feedback</a>
        <a href="#">contact us</a>
        <a href="userlogin.php">Logout</a>

    </div>

    

</section>

<!-- footer section ends -->

















<!-- custom js file link  -->
<script src="userhome.js"></script>

</body>
</html>