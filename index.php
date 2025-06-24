<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Booking | EventBuzz</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <!-- swiper css  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- add icons  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="toggler.css">
    <link rel="manifest" href="/EVENTBUZZ/manifest.json">
</head>
<body>
    <header class="header" >
        <a href="#" class="logo"><span>Event</span>Buzz</a>
         <nav class="navbar">
            <a href="#home">home</a>
            <a href="#service">service</a>
            <a href="#about">about</a>
            <a href="#gallery">gallery</a>
            <a href="#price">price</a>
            <a href="#review">review</a>
            <a href="#review">rate</a>
            <a href="#contact">Feedback</a>
        </nav>
      <div>
        <input type="checkbox" class="checkbox" id="checkbox">
  <label for="checkbox" class="checkbox-label">
    <i class="fas fa-moon"></i>
    <i class="fas fa-sun"></i>
    <span class="ball"></span>
  </label>
</div>

        <!-- add icon  -->
        <span id="menu-bar" class="fas fa-bars"></span>
    </header>
    <section class="home" id="home" >
        <div class="content">
            <h3>
                Where your dreams take off <br>
                <span>EventBuzz</span>
            </h3>
           
        </div>
        <div class="swiper-container home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/home1.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="images/home2.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="images/home3.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="images/home4.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="images/home5.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="images/home6.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="images/home1.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="images/home2.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="images/home3.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="images/home4.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="images/home5.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="images/home6.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="service" id="service">
        <h1 class="heading">our <span>services</span></h1>

        <div class="box-container">
            <div class="box">
                <div class="fas fa-envelope"></div>
                <h3>invitation card design</h3>
                <p>
                    "Expert invitation design for discerning individuals and events. Our customized cards combine
                    elegance, sophistication, and precision to make a lasting impression."
                </p>
            </div>
            <div class="box">
                <div class="fas fa-video"></div>
                <h3>photo and video</h3>
                <p>
                    "Expert photography solutions for capturing life's milestones. From portraits to events, our
                    professional lens crafts stunning visuals that inspire and delight."
                </p>
            </div>
            <div class="box">
                <div class="fas fa-music"></div>
                <h3>entertainment</h3>
                <p>
                    "Transform events into unforgettable experiences with our premium music and entertainment services.
                    Professional DJs, live performances and customized playlists."
                </p>
            </div>
            <div class="box">
                <div class="fas fa-car"></div>
                <h3>event vehicles</h3>
                <p>
                    "Get there in comfort, arrive with ease. Our event transportation services offer affordable,
                    convenient, and personalized transportation solutions."
                </p>
            </div>
            <div class="box">
                <div class="fas fa-map-marker-alt"></div>
                <h3>Best Venue</h3>
                <p>
                    "Expert venue selection for unforgettable events. Our comprehensive network and personalized service
                    ensure seamless planning and execution."
                </p>
            </div>
            <div class="box">
                <div class="fas fa-birthday-cake"></div>
                <h3>Delicious oods</h3>
                <p>
                    "Deliciously designed menus for unforgettable events. Our culinary experts collaborate with you to
                    create customized, mouth-watering options."
                </p>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <h1 class="heading">about <span>us</span></h1>

        <div class="row">
            <div class="image">
                <img src="images/about.jpg" alt="">
            </div>
            <div class="content">
                <h3>your occasion deserves our careful planning</h3>
                <p>
                    "Make your moment truly special. Our dedicated planners carefully curate every detail to reflect
                    your love, joy and personality.Expert occasion planning for unforgettable memories."
                </p>
                <p>
                    "Your story, our passion. We weave memories into unforgettable occasions, tailored to your heart's
                    desire.Our team collaborates with you to create seamless, customized events."
                </p>
               
            </div>
        </div>
    </section>

    <section class="gallery" id="gallery">
        <h1 class="heading">our <span>gallery</span></h1>

        <div class="box-container">
            <div class="box">
                <img src="images/gallery1.jpg" alt="">
                <h3 class="title" style="color:#3867d6">best events</h3>
                
            </div>
            <div class="box">
                <img src="images/gallery2.jpg" alt="">
                <h3 class="title" style="color:#3867d6">best events</h3>
                
            </div>
            <div class="box">
                <img src="images/gallery3.jpg" alt="">
                <h3 class="title" style="color:#3867d6">best events</h3>
                
            </div>
            <div class="box">
                <img src="images/gallery4.jpg" alt="">
                <h3 class="title" style="color:#3867d6">best events</h3>
              
            </div>
            <div class="box">
                <img src="images/gallery5.jpg" alt="">
                <h3 class="title" style="color:#3867d6">best events</h3>
               
            </div>
            <div class="box">
                <img src="images/gallery6.jpg" alt="">
                <h3 class="title" style="color:#3867d6">best events</h3>
               
            </div>
            <div class="box">
                <img src="images/gallery7.jpg" alt="">
                <h3 class="title" style="color:#3867d6">best events</h3>
                
            </div>
            <div class="box">
                <img src="images/gallery8.jpg" alt="">
                <h3 class="title" style="color:#3867d6">best events</h3>
                
            </div>
        </div>
    </section>

    <section class="price" id="price">
    <h1 class="heading">our <span>packages</span></h1>
    <div class="box-container">
        <div class="box">
            <h3 class="title">Birthday Package</h3>
            <h3 class="amount">$500</h3>
            <ul>
                <li><i class="fas fa-check"></i>full service</li>
                <li><i class="fas fa-check"></i>decoration</li>
                <li><i class="fas fa-check"></i>music and photo</li>
                <li><i class="fas fa-check"></i>food and drinks</li>
                <li><i class="fas fa-check"></i>invitation card</li>
            </ul>
            <!-- Add package_name in the URL -->
            <a href="login.php?package_name=Birthday%20Package" class="btn">check out</a>
        </div>

        <div class="box">
            <h3 class="title">Wedding Package</h3>
            <h3 class="amount">$1000</h3>
            <ul>
                <li><i class="fas fa-check"></i>full service</li>
                <li><i class="fas fa-check"></i>decoration</li>
                <li><i class="fas fa-check"></i>music and photo</li>
                <li><i class="fas fa-check"></i>food and drinks</li>
                <li><i class="fas fa-check"></i>Venue</li>
            </ul>
            <a href="login.php?package_name=Wedding%20Package" class="btn">check out</a>
        </div>

        <div class="box">
            <h3 class="title">Graduation Party</h3>
            <h3 class="amount">$400</h3>
            <ul>
                <li><i class="fas fa-check"></i>full service</li>
                <li><i class="fas fa-check"></i>decoration</li>
                <li><i class="fas fa-check"></i>music and photo</li>
                <li><i class="fas fa-check"></i>food and drinks</li>
                <li><i class="fas fa-check"></i>invitation card</li>
            </ul>
            <a href="login.php?package_name=Graduation%20Party" class="btn">check out</a>
        </div>

        <div class="box">
            <h3 class="title">Official Dinners</h3>
            <h3 class="amount">$300</h3>
            <ul>
                <li><i class="fas fa-check"></i>full service</li>
                <li><i class="fas fa-check"></i>decoration</li>
                <li><i class="fas fa-check"></i>photo</li>
                <li><i class="fas fa-check"></i>food and drinks</li>
                <li><i class="fas fa-check"></i>transport</li>
            </ul>
            <a href="login.php?package_name=Official%20Dinners" class="btn">check out</a>
        </div>
        <div class="box">
            <h3 class="title">Party</h3>
            <h3 class="amount">$100</h3>
            <ul>
                <li><i class="fas fa-check"></i>full service</li>
                <li><i class="fas fa-check"></i>decoration</li>
                <li><i class="fas fa-check"></i>photo</li>
                <li><i class="fas fa-check"></i>food and drinks</li>
                <li><i class="fas fa-check"></i>best venue</li>
            </ul>
            <a href="login.php?package_name=Official%20Dinners" class="btn">check out</a>
        </div>
    </div>
    </section>

    <section class="review" id="review">
        <h1 class="heading">client's <span>review</span></h1>
        <div class="swiper-container review-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/img1.jpg" alt="">
                        <div class="user-info">
                            <h3>Ashub</h3>
                            <span>happy customer</span>
                        </div>
                    </div>
                    <p>
                        "I recently booked a Wedding Package of EventBuzz to manage my sister's wedding, and I must say,
                        they exceeded all our expectations! The team was highly professional, attentive to detail, and
                        went above and beyond to ensure everything was perfect. From venue selection to décor, catering,
                        and entertainment, they took care of everything, allowing us to enjoy the celebration
                        stress-free."
                    </p>
                </div>
                <div class="swiper-slide box">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/img2.jpg" alt="">
                        <div class="user-info">
                            <h3>Ahmed</h3>
                            <span>happy customer</span>
                        </div>
                    </div>
                    <p>
                        "I booked the Birthday Package from EventBuzz for my kid's 10th birthday, and it was an
                        unforgettable experience! The team was fantastic, from planning to execution, they took care of
                        every detail. The decorations, cake, food, and entertainment were all top-notch. My kid and
                        their friends had an amazing time. The best part was the stress-free experience for me! Highly
                        recommended"
                    </p>
                </div>
                <div class="swiper-slide box">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/img3.jpg" alt="">
                        <div class="user-info">
                            <h3>Aiman</h3>
                            <span>happy customer</span>
                        </div>
                    </div>
                    <p>
                        "I recently booked the Official Dinner Package from EventBuzz for our company's annual gala, and
                        I was thoroughly impressed! The team delivered exceptional service, from customized décor to
                        exquisite catering. The event was seamlessly executed, and our guests were thrilled.I highly
                        recommend them for any corporate event."
                    </p>
                </div>
                <div class="swiper-slide box">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/img4.jpg" alt="">
                        <div class="user-info">
                            <h3>Meerab</h3>
                            <span>happy customer</span>
                        </div>
                    </div>
                    <p>
                        "I booked the Graduation Party Package from EventBuzz to celebrate my daughter's
                        milestone, and it was a phenomenal success! The team created a memorable and festive atmosphere,
                        complete with personalized decorations, delicious food, and great music.Our guests were
                        impressed, and we received many compliments.
                        Thank you for making this occasion unforgettable!"
                    </p>
                </div>
                <div class="swiper-slide box">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/img1.jpg" alt="">
                        <div class="user-info">
                            <h3>Ashub</h3>
                            <span>happy customer</span>
                        </div>
                    </div>
                    <p>
                        "I recently booked a Wedding Package of EventBuzz to manage my sister's wedding, and I must say,
                        they exceeded all our expectations! The team was highly professional, attentive to detail, and
                        went above and beyond to ensure everything was perfect. From venue selection to décor, catering,
                        and entertainment, they took care of everything, allowing us to enjoy the celebration
                        stress-free."
                    </p>
                </div>
                <div class="swiper-slide box">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/img2.jpg" alt="">
                        <div class="user-info">
                            <h3>Ahmed</h3>
                            <span>happy customer</span>
                        </div>
                    </div>
                    <p>
                        "I booked the Birthday Package from EventBuzz for my kid's 10th birthday, and it was an
                        unforgettable experience! The team was fantastic, from planning to execution, they took care of
                        every detail. The decorations, cake, food, and entertainment were all top-notch. My kid and
                        their friends had an amazing time. The best part was the stress-free experience for me! Highly
                        recommended"
                    </p>
                </div>
                <div class="swiper-slide box">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/img3.jpg" alt="">
                        <div class="user-info">
                            <h3>Aiman</h3>
                            <span>happy customer</span>
                        </div>
                    </div>
                    <p>
                        "I recently booked the Official Dinner Package from EventBuzz for our company's annual gala, and
                        I was thoroughly impressed! The team delivered exceptional service, from customized décor to
                        exquisite catering. The event was seamlessly executed, and our guests were thrilled.I highly
                        recommend them for any corporate event."
                    </p>
                </div>
                <div class="swiper-slide box">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/img4.jpg" alt="">
                        <div class="user-info">
                            <h3>Meerab</h3>
                            <span>happy customer</span>
                        </div>
                    </div>
                    <p>
                        "I booked the Graduation Party Package from EventBuzz to celebrate my daughter's
                        milestone, and it was a phenomenal success! The team created a memorable and festive atmosphere,
                        complete with personalized decorations, delicious food, and great music.Our guests were
                        impressed, and we received many compliments.
                        Thank you for making this occasion unforgettable!"
                    </p>
                </div>
            </div>
        </div>
    </section>
<section>

<center><a href="starrating.php" style=" color: #eee1e1; font-size: 3rem;">&#128073; YOU CAN RATE US OUR SERVICES</a></center>


</section>

    <section class="contact" id="contact"> 
    <h1 class="heading">Send <span> Feedback</span></h1>
    <?php
if (strpos($_SERVER['REQUEST_URI'], 'manifest.json') !== false) {
    header('Content-Type: application/json');
    readfile('manifest.json');
    exit;
}
?>
    <?php
    if (isset($_GET['success'])) {
        if ($_GET['success'] == 1) {
        } elseif ($_GET['success'] == 0) {
            echo '<p style="color: red;">There was an error sending your message. Please try again.</p>';
        }
    }
    ?>

    <form action="submit_contact.php" method="POST">
        <div class="inputbox">
            <input type="text" name="name" placeholder="Name" required />
            <input type="email" name="email" placeholder="Email" required />
        </div>
        <div class="inputbox">
            <input type="tel" name="phone" placeholder="Phone" required />
            <input type="text" name="subject" placeholder="Subject" required />
        </div>
        <textarea name="message" cols="30" rows="10" placeholder="Message" required></textarea>
        <input type="submit" value="Send message" class="btn">
    </form>
    </section>


    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>branches</h3>
                <a href="https://maps.app.goo.gl/Pvad85G8UY8W27xe8" target="_blank"><i class="fas fa-map-marker-alt"></i>Sheikhupura</a>
                <a href="https://maps.app.goo.gl/Dhr2tuuKfQAnMQyRA"target="_blank"><i class="fas fa-map-marker-alt"></i>Lahore</a>
                <a href="https://maps.app.goo.gl/MAXFufY1FXQMZ79s8" target="_blank"><i class="fas fa-map-marker-alt"></i>Faislabad</a>
                <a href="https://maps.app.goo.gl/xCosaQPxePEPGomo9" target="_blank"><i class="fas fa-map-marker-alt"></i>Multan</a>
                <a href="https://maps.app.goo.gl/Wp9T5J9Ez1ok6d6w9" target="_blank"><i class="fas fa-map-marker-alt"></i>Karachi</a>
            </div>

            <div class="box">
                <h3>Quick Links</h3>
                <a href="#home"><i class="fas fa-arrow-right"></i>home</a>
                <a href="#service"><i class="fas fa-arrow-right"></i>service</a>
                <a href="#about"><i class="fas fa-arrow-right"></i>about</a>
                <a href="#gallery"><i class="fas fa-arrow-right"></i>gallery</a>
                <a href="#price"><i class="fas fa-arrow-right"></i>price</a>
                <a href="#review"><i class="fas fa-arrow-right"></i>review</a>
                <a href="#contact"><i class="fas fa-arrow-right"></i>contact</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="tel:+92 3164068060" title="Call this number"><i class="fas fa-phone"></i> +92 3164068060</a>
                <a href="tel:+92 316 6897202" title="Call this number"><i class="fas fa-phone"></i> +92 32 15573153</a>
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=hamnanazar19@gmail.com&su=Subject%20Here&body=Your%20message%20here" target="_blank">
                <i class="fas fa-envelope"></i> hamnanazar19@gmail.com
                </a>
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=hamnanazar600@gmail.com&su=Subject%20Here&body=Your%20message%20here" target="_blank">
                <i class="fas fa-envelope"></i> ashubshafqat@gmail.com
                </a>
                <a href="https://maps.app.goo.gl/MAXFufY1FXQMZ79s8" target="_blank">
                    <i class="fas fa-map-marker-alt"></i> Faislabad,Pakistan
                </a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i>facebook</a>
                <a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i>twitter</a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i>instagram</a>
                <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i>linkedIn</a>
            </div>
        </div>

        <div class="credit">
            created by <span>Hamna Nazar - Ashub Shafqat</span> | all rights reserved
        </div>
    </section>

    <!-- swiper js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="script.js"></script>

    <script>
if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('/service-worker.js')
    .then(reg => console.log('Service Worker registered:', reg.scope))
    .catch(err => console.error('Service Worker registration failed:', err));
}
</script>

<script src="toggler.js"></script>
<marquee behavior="" direction="left" style="color:white;">....................................................ASHUB SHAFQAT - HAMNA NAZAR ...............................................................BS-SE-6TH................................................................2022-ag(8054,8058)........................................................</marquee>
</body>

</html>
