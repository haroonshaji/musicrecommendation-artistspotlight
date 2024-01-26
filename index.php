<?php
// Start the session (make sure this is at the top of your PHP file)
session_start();

// Check if the user is logged in
if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    // Redirect to the login page if the user is not logged in
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<style>
    .username{
        color: #fff;
    font-weight: 700;
    font-size: 16px;
    }</style>

    <!-- Title -->
    <title>Music Harmony</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="oneMusic-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="oneMusicNav">

                        <!-- Nav brand -->
                        <a href="index.html" class="nav-brand"><div class=logoname>MUSIC HARMONY</div></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="saved_songs_display.php">Saved Songs</a></li>
                                    <li><a href="artists.php">Artist Spotlight</a></li>
                                    <li><a href="musicrec.php">Music Recommendation</a></li>
                                 
                                   
                                   
                                </ul>

                                <!-- Login/Register & Cart Button -->
                                <div class="login-register-cart-button d-flex align-items-center">
                                    <!-- Login/Register -->
                                    <div class="login-register-btn mr-50 username">
                                        Welcome <?php echo $username; ?></a>
                                    </div>

                                    <div class="login-register-btn mr-50">
                                        <a href="logout.php" id="registerBtn">Logout</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Nav End -->

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-1.jpg);"></div>
                <!-- Slide Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slides-content text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">Your gateway to a world of musical discovery and artist spotlighting.</h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms"> Music Harmony<span>Music Harmony</span></h2>
                          
                            </div>
                        </div>
                    </div>
                </div>
            </div>

         
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Latest Albums Area Start ##### -->
    <section class="latest-albums-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading style-2">
                        <p>Welcome to</p>
                        <h2>Music Harmony</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9">
                    <div class="ablums-text text-center mb-70">
                        <p>Welcome to Music Harmony, where the magic of music meets the world of recommendations and artist spotlights. Music Harmony is your all-encompassing digital haven, designed to guide you through a melodious journey of musical exploration and discovery. Whether you're a seasoned music aficionado or a curious newcomer to the world of sound, our platform offers an immersive and tailored experience that caters to all tastes and preferences.</p>
                    </div>
                </div>
            </div><hr>

            <div class="row">
                <div class="col-12">
                    <div class="section-heading style-2">
                      
                        <h2>Latest Albums</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="albums-slideshow owl-carousel">
                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="img/bg-img/a1.jpg" alt="">
                            <div class="album-info">
                                <a href="#">
                                    <h5>The Cure</h5>
                                </a>
                                <p>Second Song</p>
                            </div>
                        </div>

                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="img/bg-img/a2.jpg" alt="">
                            <div class="album-info">
                                <a href="#">
                                    <h5>Sam Smith</h5>
                                </a>
                                <p>Underground</p>
                            </div>
                        </div>

                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="img/bg-img/a3.jpg" alt="">
                            <div class="album-info">
                                <a href="#">
                                    <h5>Will I am</h5>
                                </a>
                                <p>First</p>
                            </div>
                        </div>

                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="img/bg-img/a4.jpg" alt="">
                            <div class="album-info">
                                <a href="#">
                                    <h5>The Cure</h5>
                                </a>
                                <p>Second Song</p>
                            </div>
                        </div>

                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="img/bg-img/a5.jpg" alt="">
                            <div class="album-info">
                                <a href="#">
                                    <h5>DJ SMITH</h5>
                                </a>
                                <p>The Album</p>
                            </div>
                        </div>

                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="img/bg-img/a6.jpg" alt="">
                            <div class="album-info">
                                <a href="#">
                                    <h5>The Ustopable</h5>
                                </a>
                                <p>Unplugged</p>
                            </div>
                        </div>

                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="img/bg-img/a7.jpg" alt="">
                            <div class="album-info">
                                <a href="#">
                                    <h5>Beyonce</h5>
                                </a>
                                <p>Songs</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Latest Albums Area End ##### -->

   

    <!-- ##### Miscellaneous Area Start ##### -->
    <section class="miscellaneous-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- ***** Weeks Top ***** -->
                <div class="col-12 col-lg-4">
                    <div class="weeks-top-area mb-100">
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>See what’s new</p>
                            <h2>This week’s top</h2>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="100ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/wt1.jpg" alt="">
                            </div>
                            <div class="content-">
                                <h6>Sam Smith</h6>
                                <p>Underground</p>
                            </div>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="150ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/wt2.jpg" alt="">
                            </div>
                            <div class="content-">
                                <h6>Power Play</h6>
                                <p>In my mind</p>
                            </div>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="200ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/wt3.jpg" alt="">
                            </div>
                            <div class="content-">
                                <h6>Cristinne Smith</h6>
                                <p>My Music</p>
                            </div>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="250ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/wt4.jpg" alt="">
                            </div>
                            <div class="content-">
                                <h6>The Music Band</h6>
                                <p>Underground</p>
                            </div>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="300ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/wt5.jpg" alt="">
                            </div>
                            <div class="content-">
                                <h6>Creative Lyrics</h6>
                                <p>Songs and stuff</p>
                            </div>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="350ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/wt6.jpg" alt="">
                            </div>
                            <div class="content-">
                                <h6>The Culture</h6>
                                <p>Pop Songs</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- ***** New Hits Songs ***** -->
                <div class="col-12 col-lg-4">
                    <div class="new-hits-area mb-100">
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>See what’s new</p>
                            <h2>New Hits</h2>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/wt7.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Sam Smith</h6>
                                    <p>Underground</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="150ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/wt8.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Power Play</h6>
                                    <p>In my mind</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="200ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/wt9.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Cristinne Smith</h6>
                                    <p>My Music</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="250ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/wt10.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>The Music Band</h6>
                                    <p>Underground</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/wt11.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Creative Lyrics</h6>
                                    <p>Songs and stuff</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="350ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/wt12.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>The Culture</h6>
                                    <p>Pop Songs</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                        </div>
                    </div>
                </div>

                <!-- ***** Popular Artists ***** -->
                <div class="col-12 col-lg-4">
                    <div class="popular-artists-area mb-100">
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>See what’s new</p>
                            <h2>Popular Artist</h2>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="100ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/harry1.jpg" alt="">
                            </div>
                            <div class="content-">
                                <p>Harry Styles</p>
                            </div>
                        </div><br>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="150ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/taylor.jpg" alt="">
                            </div>
                            <div class="content-">
                                <p>Taylor Swift</p>
                            </div>
                        </div><br>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="200ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/weeknd.jpg" alt="">
                            </div>
                            <div class="content-">
                                <p>Weeknd</p>
                            </div>
                        </div><br>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="250ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/pa4.jpg" alt="">
                            </div>
                            <div class="content-">
                                <p>Tha Stoves</p>
                            </div>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="300ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/pa5.jpg" alt="">
                            </div>
                            <div class="content-">
                                <p>DJ Ajay</p>
                            </div>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="350ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/pa6.jpg" alt="">
                            </div>
                            <div class="content-">
                                <p>Radio Vibez</p>
                            </div>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="400ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/pa7.jpg" alt="">
                            </div>
                            <div class="content-">
                                <p>Music 4u</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Miscellaneous Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(img/bg-img/bg-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading white wow fadeInUp" data-wow-delay="100ms">
                        <p>See what’s new</p>
                        <h2>Get In Touch</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group wow fadeInUp" data-wow-delay="100ms">
                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group wow fadeInUp" data-wow-delay="200ms">
                                        <input type="email" class="form-control" id="email" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group wow fadeInUp" data-wow-delay="300ms">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group wow fadeInUp" data-wow-delay="400ms">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center wow fadeInUp" data-wow-delay="500ms">
                                    <button class="btn oneMusic-btn mt-30" type="submit">Send <i class="fa fa-angle-double-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-12 col-md-6">
                    <a href="index.html"><div class=logoname>MUSIC HARMONY</div></a>
                   
                </div>

                <div class="col-12 col-md-6">
                    <div class="footer-nav">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="albums-store.html">Albums</a></li>
                            <li><a href="musicrec.html">Music recommendations</a></li>
                            <li><a href="artists.html">Artist Spotlight</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>