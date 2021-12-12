<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buisness home</title>

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



<!-- menu section starts  -->

<section class="menu" id="menu">

    <h1 class="heading"> Your <span>Orders</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images1/PineappleCake.jpg" alt="">
            <h3>Pineapple cake</h3>
            <h3>Baker's Nation</h3>
            <div class="price">Rs.365/- <span>Rs.500/-</span></div>
        </div>

        <div class="box">
            
            <h3>Ms. Sugar Plum</h3>
            <h6>101, rose villa, Mumbai-400001</h6>
            <div class="price">Rs.365/- <span>Rs.500/-</span></div>
            <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_IWVtu62hCo84oZ" async> </script> </form>
        </div>

       

    </div>

</section>

<!-- menu section ends -->


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
        <a href="#">contact us</a>
        <a href="#">orders</a>
        <a href="userlogin.php">Logout</a>

    </div>

    

</section>

<!-- footer section ends -->

















<!-- custom js file link  -->
<script src="userhome.js"></script>

</body>
</html>