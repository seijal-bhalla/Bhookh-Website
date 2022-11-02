<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BHOOKH - Bhookh aisi ki raha na jaye!</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-shopping-basket"></i> BHOOKH  </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#features">features</a>
        <a href="#products">products</a>
        <a href="#categories">categories</a>
        <a href="#review">review</a>
        <a href="#blogs">blogs</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
    </div>

    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <div class="shopping-cart">
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="img/Matar-Paneer-1.jpg" alt="">
            <div class="content">
                <h3>Matar paneer</h3>
                <span class="price"> &#8377 60/-</span>
                <span class="quantity">qty : 1kg</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="img/ladyfinger.webp" alt="">           
            <div class="content">
                <h3> Fried - Bhindi</h3>
                <span class="price"> &#8377 40 /-</span>
                <span class="quantity">qty : 1kg</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="img/pneer.jpg" alt="">
            <div class="content">
                <h3>paneer</h3>
                <span class="price"> &#8377 150/-</span>
                <span class="quantity">qty : 1kg</span>
            </div>
        </div>
        <div class="total"> total :  &#8377 250/- </div>
        <a href="#" class="btn">checkout</a>
    </div>

    <form action="index.html" method="POST" class="login-form">
        <h3>Profile</h3>
        <input type="text" value="<?php echo $_POST['ufname']." ".$_POST['ulname'] ?>" class="box">
        <input type="text"  value="<?php echo $_POST['uloc'] ?>" class="box">
        <input type="submit" value="log out" class="btn">
    </form>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3><span>Bhookh </span>aisi ki raha na jaye!</h3>
        <p>tasty food for you and your loved ones.</p>
        <a href="#" class="btn">shop now</a>
    </div>

</section>

<!-- home section ends -->

<!-- features section starts  -->

<section class="features" id="features">

    <h1 class="heading"> our <span>features</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/img1.jpg" alt="">
            <h3>fresh and organic</h3>
            <p>There is nothing more romantic than delicious food.</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="image/feature-img-2.png" alt="">
            <h3>free delivery</h3>
            <p>Speedy food, good food!</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="image/feature-img-3.png" alt="">
            <h3>easy payments</h3>
            <p>easy payment using credit/debit card, upi and cash on delivery!</p>
            <a href="#" class="btn">read more</a>
        </div>

    </div>

</section>

<!-- features section ends -->

<!-- products section starts  -->

<section class="products" id="products">

    <h1 class="heading"> our <span>products</span> </h1>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/img2.jpg" alt="">
                <h3>French Fries</h3>
                <div class="price"> &#8377 20/- - 30/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/img3.jpeg" alt="">
                <h3>White Pasta</h3>
                <div class="price">  &#8377 30/- - 40/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/img29.jpg" alt="">
                <h3>Tandoori Chicken</h3>
                <div class="price">  &#8377 160/- - 210/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/img5.jpg" alt="">
                <h3>Coffee</h3>
                <div class="price">  &#8377 40/- - 50/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

        </div>

    </div>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/img6.jpg" alt="">
                <h3>Pan Fried Broccoli</h3>
                <div class="price">  &#8377 40/- - 100/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/img7.jpg" alt="">
                <h3>Veg Crispy</h3>
                <div class="price">  &#8377 90/- - 100/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/img8.jpg" alt="">
                <h3>fried Momos</h3>
                <div class="price">  &#8377 80/- - 90/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/img10.jpg" alt="">
                <h3>Red Pasta</h3>
                <div class="price">  &#8377 45/- - 55/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/img16.jpg" alt="">
                <h3>Cold Drink</h3>
                <div class="price">  &#8377 80/- - 90/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/img19.jpg" alt="">
                <h3>Dhokla</h3>
                <div class="price">  &#8377 80/- - 90/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/img20.jpg" alt="">
                <h3>Paneer Wrap</h3>
                <div class="price">  &#8377 80/- - 90/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/img21.jpg" alt="">
                <h3>Pav Bhaji</h3>
                <div class="price">  &#8377 80/- - 90/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/img22.jpg" alt="">
                <h3>Shahi Paneer</h3>
                <div class="price">  &#8377 80/- - 90/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/img23.jpg" alt="">
                <h3>Faluda Kulfi</h3>
                <div class="price">  &#8377 80/- - 90/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/img24.jpg" alt="">
                <h3>Matka Kulfi</h3>
                <div class="price">  &#8377 80/- - 90/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/img25.jpg" alt="">
                <h3>Pulao</h3>
                <div class="price">  &#8377 80/- - 90/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/img26.jpg" alt="">
                <h3>Dal Makhani</h3>
                <div class="price">  &#8377 80/- - 90/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/img27.jpg" alt="">
                <h3>noodles</h3>
                <div class="price">  &#8377 80/- - 90/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/img28.jpg" alt="">
                <h3>Veg Manchurian</h3>
                <div class="price">  &#8377 80/- - 90/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

        </div>

    </div>


</section>

<!-- products section ends -->

<!-- categories section starts  -->

<section class="categories" id="categories">

    <h1 class="heading"> product <span>categories</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/img33.jpg" alt="">
            <h3>Pizza</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="image/img32.jpg" alt="">
            <h3>Burgers</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="image/img34.jpg" alt="">
            <h3>Sandwich</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="image/img31.jpg" alt="">
            <h3>Snacks</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

    </div>

</section>

<!-- categories section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/pic-1.png" alt="">
                <p>Bhookh is one of the best food delivery apps that provide unlimited food delivery service anytime. You can order your favorite delicacies and get it  ‘ready to serve’ at your doorsteps.</p>
                <!-- <br><br><br> -->
                <h3>salil chandan</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i><br>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-2.png" alt="">
                <p>Users can order for pickup delivery or book in advance. The Website enables users to explore different menus, reviews, avail offers, and more. You could manage multiple addresses to get your dishes anywhere you frequently visit.</p>
                <h3>seijal bhalla</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-3.png" alt="">
                <p>It is the fastest way for food lovers to get your most favourite pizza, fries, desserts and a lot more. Crossing almost 1 million downloads; the app is completely redesigned in every way for users to check out deals easily.</p>
                <!-- <br><br> -->
                <h3>siddarth chopra</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-4.png" alt="">
                <p>It features a mind-blowing Meal Chart that makes it easy for customers who often get confused of what to eat for the next meal. The user just needs to scroll through the meal chart to pick up the choice of food and set a delivery time.</p>
                <h3>tamanna sharma</h3>
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

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/img1.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by stacy stuckrath </a>
                    <a href="#"> <i class="fas fa-calendar"></i> 13th july, 2018 </a>
                </div>
                <h3>An Ice Cream Story</h3>
                <p>Trading my toy out for ice cream at Chick-fil-a was the easiest decision I ever had to make.</p>
                <a href="https://thrivemeetings.com/2018/07/an-ice-cream-story-guess-blog-post/" class="btn" target="_blank">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="image/img17.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by James Long </a>
                    <a href="#"> <i class="fas fa-calendar"></i> 6th august, 2021 </a>
                </div>
                <h3>Dosa with Sambar and Coconut Chutney</h3>
                <p>Dosa or dosai are one of the staples of Southern India.</p>
                <a href="https://worldtravelchef.com/south-indian-dosa-sambar-coconut-chutney-world-food-photos-india/" class="btn" target="_blank">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="image/img18.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by Shumaila </a>
                    <a href="#"> <i class="fas fa-calendar"></i> 6th march, 2021 </a>
                </div>
                <h3>Garam Masala Tuesdays: Shahi Paneer</h3>
                <p>“Shahi” means royal in Urdu and “paneer” is the name given to Indian cottage cheese.</p>
                <a href="https://www.novicehousewife.com/2012/03/06/garam-masala-tuesdays-shahi-paneer/" class="btn" target="_blank">read more</a>
            </div>
        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3> Bhookh<i class="fas fa-shopping-basket"></i> </h3>
            <p>Follow us on the links below to keep youself updated.</p>
            <div class="share">
                <a target="_blank" href="#" class="fab fa-facebook-f"> </a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +919345728887 </a>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +919023860174 </a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> Bhookh@gmail.com </a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Amritsar, india - 143001 </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> features </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> products </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> categories </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> review </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <input type="email" placeholder="your email" class="email">
            <input type="submit" value="subscribe" class="btn">
            <img src="image/payment.png" class="payment-img" alt="">
        </div>

    </div>

    <div class="credit"> created by <span> agc students </span> | all rights reserved </div>

</section>

<!-- footer section ends -->















<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>