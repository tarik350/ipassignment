<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon.png" />
    <title>Enebla.com| Order Your Food In Just A Click</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">

</head>

<body>
    <div class="big-wrapper light">
        
        

            <!-- header section starts      -->
        
            <header>
        
                <a href="#" class="logo"><i class="fas fa-utensils"></i> እንብላ. </a>
        
                <nav class="navbar">
                    <a href="#home">HOME</a>
                    <a href="#dishes">DISHES</a>
                    <a href="#about">ABOUT</a>
                    <a href="#review">MENU</a>
                    <!-- <a href="#review">REVIEW</a> -->
                    <a href="#order">REVIEW</a>
                </nav>
        
                <div class="icons">
                    <i class="fas fa-bars" id="menu-bars"></i>
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="login.php" class="btn">login</a>
                </div>
               
        
            </header>
        
            <!-- header section ends-->
        
            <!-- search form  -->
        
            <form action="" id="search-form">
                <input type="search" placeholder="search here..." name="" id="search-box">
                <label for="search-box" class="fas fa-search"></label>
                <i class="fas fa-times" id="close"></i>
            </form> -->
        
            <!-- home section starts  -->
        
            <section class="home" id="home">
        
                <div class="swiper-container home-slider">
        
                    <div class="swiper-wrapper wrapper">
        
                        <div class="swiper-slide slide">
                            <div class="content">
                                <span>our special dish</span>
                                <h3>Mulu Agelgel</h3>
                                <p>Our Goal is providing a complete Ordering channel for all of the best foods in the country</p>
                                <a href="#order" class="btn">order now</a>
                            </div>
                            <div class="image">
                                <img src="images/home-5.png" alt="">
                            </div>
                        </div>
        
        
                    </div>
                </div>
        
            </section>
        
            <!-- home section ends -->
        
            <!-- dishes section starts  -->
        
            <section class="dishes" id="dishes">
        <form action="cart.php" method="post">
                <h3 class="sub-heading"> our dishes </h3>
                <h1 class="heading"> popular dishes </h1>
        
                <div class="box-container">
                    
        
                    <div class="domestic">
                        <h1 class="heading "> domestic popular dishes </h1>
        
        
                        <div class="box">
        
                            <img src="images/home-1.png" alt="">
                            <h3>Shiro Tegabino</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span>55.99</span>
                            <input type="checkbox" name="shiro_tegabino" value="shiro_tegabino">
                            <input type="hidden" name="shiro_tegabino_Price" value="55.99">
                            <input type="number" name="shiro_tegabino_amount">
                            </div>
        
                        <div class="box">
        
                            <img src="images/home-img-2.png" alt="">
                            <h3>chicken Roast</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span>85.99</span>
                            <input type="checkbox" name="chicken_Roast" value="chicken_Roast">
                            <input type="hidden" name="chicken_Roast_price" value="85.99">

                            <input type="number" name="chicken_Roast_amount">                </div>
        
                        <div class="box">
        
                            <img src="images/home-3.png" alt="">
                            <h3>Tibs</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span>50.99</span>
                            <input type="checkbox" name="tibs" value="tibs">
                            <input type="hidden" name="tibs_price" value="50.99">
                            
                            <input type="number" name="tibs_amount"> </div>
        
                        <div class="box">
        
                            <img src="images/home-4.png" alt="">
                            <h3>Kitfo</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span>65.99</span>
                            <input type="checkbox" name="kitfo" value="Kitfo">
                            <input type="hidden" name="kitfo_price" value="65.99">

                            <input type="number" name="kitfo_amount">                 </div>
                    </div>
        
                    <div class="foreign">
                        <h1 class="heading "> foraign popular dishes</h1>
        
                        <div class="box">
        
                            <img src="images/home-5.png" alt="">
                            <h3>Beyainatu</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span>35.99</span>
                            <input type="checkbox" name="beyaynetu" value="beyaynetu">


                            <input type="number" name="beyaynetu_amount"  />
                            <input type="hidden" name="beyaynetu_price" value="35.99">
                   </div>
        
                        <div class="box">
        
                            <img src="images/home-6.png" alt="">
                            <h3>Fuul</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span>35.99</span>
                            <input type="checkbox" name="fuul" value="fuul">
                            <input type="hidden" name="fuul_price" value="35.99">

                            <input type="number" name="fuul_amount">                 
                        </div>
                        <div class="box">
        
                            <img src="images/home-7.png" alt="">
                            <h3>Tere siga</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span>85.99</span>
                            <input type="checkbox" name="tere_siga" value="tere_siga">
                            <input type="hidden" name="tere_sega_price" value="85.99">

                            <input type="number" name="tere_siga_amount">                    </div>
                        <div class="box">
        
                            <img src="images/dish-4.png" alt="">
                            <h3>Doro wot</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span>75.99</span>
                            <input type="checkbox" name="Doro_wot" value="Doro_wot">
                            <input type="hidden" name="doro_wot_price" value="75.99">

                            <input type="number" name="Doro_wot_amount">
                        </div>
        
                    </div>
        
                    <div class="homes">
                        <!-- check i this -->
                        <h1 class="heading "> home special dishes</h1>
                        <div class="box">
        
                            <img src="images/home-9.png" alt="">
                            <h3>Enkulal firfir</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span>75.99</span>
                            <input type="checkbox" name="Enkulal_firfir" value="Enkulal_firfir">
                            <input type="hidden" name="Enkulal_firfir_price" value="75.99">

                            <input type="number" class="number" name="Enkulal_firfir_amount">
                        </div>
        
                        <div class="box">
        
                            <img src="images/home-8.png" alt="">
                            <h3>Dulet</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span>75.99</span>
                            <input type="checkbox" name="dulet" value="dulet">
                            <input type="hidden" name="dulet_price" value="75.99">
                            <input type="number" name="dulet_amount">
                        </div>    
                        <div class="box">
        
                            <img src="images/home-2.png" alt="">
                            <h3>Dabbo firfir</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span>65.99</span>
                            <input type="checkbox" name="Dabbo_firfir" value="Dabbo_firfir">
                            <input type="hidden" name="Dabbo_firfir_price" value="65.99">

                            <input type="number" name="Dabbo_firfir_amount">
                        </div>
                        <div class="box">
        
                            <img src="images/home-5.png" alt="">
                            <h3>Fatira</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span>55.99</span>
                            <input type="checkbox" name="fetira" value="fetira">
                            <input type="hidden" name="fetira_price" value="59.99">

                            <input type="number" name="fetira_amount">


                            </div>


        
                    </div>
        
                   
  
                </div>
                <input class="btn" type="submit" value="Submit Order">
        </form>
            </section>
        
            <!-- dishes section ends -->
        
            <h3 class="sub-heading"> about us </h3>
            <h1 class="heading"> why choose us? </h1>
        
            <!-- about section starts  -->
        
            <section class="about" id="about">
                <div class="about-highlights">
        
                <div class="row">
        
                    <div class="content">
                        <h3>best food in the country</h3>
                        <p>Once we have your order, we'll contact the restaurant and send a driver. We aim to deliver 
                            in an hour or less but please be patient if you order during peak hours! Deliveries are 
                            priced depending on your distance from the restaurant.</p>
                        <p>Get food from your favorite restaurants delivered to you any where</p>
                        <div class="icons-container">
                            <div class="btn">
                                <i class="fas fa-shipping-fast"></i>
                                <span>free delivery</span>
                            </div>
                            <div class="btn">
                                <i class="fas fa-dollar-sign"></i>
                                <span>easy payments</span>
                            </div>
                            <div class="btn">
                                <i class="fas fa-headset"></i>
                                <span>24/7 service</span>
                            </div>
                            
                        </div>
                        <a href="#" class="call about-btn">learn more !</a>
                    </div>
        
                </div>
                </div>
                
        
            </section>
        
            <!-- about section ends -->
        
            <!-- trying the menu -->
        
            
            <section class="review" id="review">
        
                <h3 class="sub-heading"> Menu </h3>
                <h1 class="heading"> Introduce Our Menu </h1>
        
                <div class="swiper-container review-slider">
        
                    <div class="swiper-wrapper">
        
                        <div class="swiper-slide slide">
                            <i class="fas fa-quote-right"></i>
                            <div class="user">
                            <img src="images/home-8.png" alt="">
                                <div class="portfolio__link">
                                    <a href="#" class="portfolio__link-name">Shiro Tegabino</a><br>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    
                                    <p>your injera arrives blanketed in piles of tasty and colorful vegetables, potatoes, curries, lentil stews and more</p>
                                    <a href="#" class="about-btn price-btn"> <span>View Price</span> </a>
                                    
                                </div>

                            </div>
        
                        </div>
        
                        <div class="swiper-slide slide">
                            <i class="fas fa-quote-right"></i>
                            <div class="user">
                                <img src="images/home-5.png" alt="">

                            
                                <div class="portfolio__link">
                                    <a href="#" class="portfolio__link-name">Beyainatu</a><br>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    
                                    <p>your injera arrives blanketed in piles of tasty and colorful vegetables, potatoes, curries, lentil stews and more</p>
                                    <a href="#" class="about-btn price-btn"> <span>View Price</span> </a>
                                    
                                </div>

                            </div>
        
                        </div>
        
                        <div class="swiper-slide slide">
                            <i class="fas fa-quote-right"></i>
                            <div class="user">
                            <img src="images/menu-1.jpg" alt="">
                               

                    
                                <div class="portfolio__link">
                                    <a href="#" class="portfolio__link-name">Fuul</a><br>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    
                                    <p> mix of stewed and spiced fava beans eaten by many for breakfast..</p>
                                    <a href="#" class="about-btn price-btn"> <span>View Price</span> </a>
                                    
                                </div>

                            </div>
        
                        </div>
        
                        <div class="swiper-slide slide">
                            <i class="fas fa-quote-right"></i>
                            <div class="user">
                                <img src="images/home-5.png" alt="">

                                <div class="portfolio__link">
                                    <a href="#" class="portfolio__link-name">Doro wot</a><br>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    
                                    <p>chicken drumsticks or wings cooked and served in a hot sauce of butter, onion, chilli, cardamom and berbere</p>
                                    <a href="#" class="about-btn price-btn"> <span>View Price</span> </a>
                                    
                                </div>

                            </div>
        
                        </div>
        
                        <div class="swiper-slide slide">
                            <i class="fas fa-quote-right"></i>
                            <div class="user">
                                <img src="images/home-2.png" alt="">

                                <div class="portfolio__link">
                                    <a href="#" class="portfolio__link-name">Dulet</a><br>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    
                                    <p> minced tripe (an animal's stomach lining), along with liver and lean beef fried in butter, onions, chilli, cardamom and pepper.</p>
                                    <a href="#" class="about-btn price-btn"> <span>View Price</span> </a>
                                    
                                </div>
                            </div>
        
                        </div>
                    </div>
        
                </div>
        
            </section>
        
            <!-- order section starts  -->
        
            <section class="order" id="order">
        
                <h3 class="sub-heading"> Leave a Rating </h3>
                <h1 class="heading"> Tell Us What You Think!! </h1>
        
                <form action="https://formsubmit.co/contactolyad@gmail.com" method="POST" class="contact__form">
                        <input type="hidden" name="_subject" value="New Rating enebla.com!">
                       <input type="hidden" name="_captcha" value="false">
                    
                    <div class="inputBox">
                        <div class="input">
                            <span>your name</span>
                            <input type="text" name="Name" placeholder="enter your name"  id="user_nmae"required>
                        </div>
                        <div class="input">
                            <span>Rating</span>
                            <input type="text" name="Rating" placeholder="Rate us out of 10" id="rating" required>
                        </div>
                    </div>
                    <div class="inputBox">
                        <div class="input">
                            <span>your message</span>
                            <textarea name="Message" placeholder="enter your message" id="message" cols="30" rows="10" required></textarea>
                        </div>
                        <div class="input">
                            <span>Email</span>
                            <input type="text" name="Name" placeholder="enter your Email" id="user_email" required>
                        </div>
                    </div>
        

                    <button type="submit" value="order now" class="btn btn--submit">Send Message</button>
        
        
                </form>
        
            </section>
        
            <!-- order section ends -->
        
            <!-- footer section starts  -->
        
            <section class="footer">
        
                <div class="box-container">
                    <div class="box box--footer">
                        <img  src="./images/enebla/logo_transparent.png" alt="">
                    </div>
                    
        
                    <div class="box">
                        <h3>GROUP MENMBERS</h3>
                        <a href="#"class="btn">Olyad Muluget - ID 1102901</a>
                        <a href="#"class="btn">Tarik Teshome - ID 1103437</a>
                        <a href="#" class="btn">Michael belachew - ID 1101883</a>
                        <a href="#" class="btn">Eleni Maru - ID 1103272</a>
                        <a href="#" class="btn"> Efrata degen - ID 1103504</a>
                        <a href="#" class="btn"> Resekal Enku - ID 1102079</a>
                        <a href="#" class="btn"> Thomas Abebe - ID 1102028</a>


                    </div>
        
                </div>
        
                <div class="credit"> copyright @ 2021<span>All Rights Are Reserved</span> </div>
        
            </section>
        
            <!-- footer section ends -->
        
        
        
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        
            <!-- custom js file link  -->
                    <script type="text/javascript" src="http://localhost:8111/js/script.js"></script>
        
    </div>
</body>
</html>