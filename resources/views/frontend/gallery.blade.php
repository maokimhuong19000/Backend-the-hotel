<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>PARADISE - Hotel and Bed&Breakfast Site Template</title>
    
    <!-- Favicons-->
    <link rel="shortcut icon" href="/frontend/asset/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="/frontend/asset/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="/frontend/asset/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="/frontend/asset/img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="/frontend/asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="/frontend/asset/css/style.css" rel="stylesheet">
	<link href="/frontend/asset/css/vendors.min.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="/frontend/asset/css/custom.css" rel="stylesheet">
</head>

@include('frontend.navigation')
<body> 

    <main>

        <div class="hero medium-height jarallax" data-jarallax data-speed="0.2">
            <img class="jarallax-img" src="/frontend/asset/img/hero_home_2.jpg" alt="">
            <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <small class="slide-animated one">Luxury Hotel Experience</small>
                    <h1 class="slide-animated two">Gallery</h1>
                </div>
            </div>
        </div>
        <!-- /Background Img Parallax -->

        <div class="container margin_120_95">
            <div class="isotope-wrapper">
                <div class="row justify-content-center">
                    <div class="item col-xl-4 col-lg-6 col-mb-6 mb-4">
                        <div class="item-img" data-cue="slideInUp">
                            <img src="/frontend/asset/img/gallery/1.jpg" alt="" />
                            <div class="content">
                                <a  data-fslightbox="gallery_1" data-type="image" href="/frontend/asset/img/gallery/1.jpg"><i class="bi bi-arrows-angle-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xl-4 col-lg-6 col-mb-6 mb-4">
                        <div class="item-img" data-cue="slideInUp">
                            <img src="/frontend/asset/img/gallery/2.jpg" alt="" />
                            <div class="content">
                                <a  data-fslightbox="gallery_1" data-type="image" href="img/gallery/2.jpg"><i class="bi bi-arrows-angle-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xl-4 col-lg-6 col-mb-6 mb-4">
                        <div class="item-img" data-cue="slideInUp">
                            <img src="/frontend/asset/img/gallery/3.jpg" alt="" />
                            <div class="content">
                                <a  data-fslightbox="gallery_1" data-type="image" href="/frontend/asset/img/gallery/3.jpg"><i class="bi bi-arrows-angle-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xl-4 col-lg-6 col-mb-6 mb-4">
                        <div class="item-img" data-cue="slideInUp">
                            <img src="/frontend/asset/img/gallery/4.jpg" alt="" />
                            <div class="content">
                                <a  data-fslightbox="gallery_1" data-type="image" href="/frontend/asset/img/gallery/4.jpg"><i class="bi bi-arrows-angle-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xl-4 col-lg-6 col-mb-6 mb-4">
                       <div class="item-img" data-cue="slideInUp">
                            <img src="/frontend/asset/img/gallery/5.jpg" alt="" />
                            <div class="content">
                                <a  data-fslightbox="gallery_1" data-type="image" href="/frontend/asset/img/gallery/5.jpg"><i class="bi bi-arrows-angle-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xl-4 col-lg-6 mb-4">
                        <div class="item-img" data-cue="slideInUp">
                            <img src="/frontend/asset/img/gallery/6.jpg" alt="" />
                            <div class="content">
                                <a  data-fslightbox="gallery_1" data-type="image" href="/frontend/asset/img/gallery/6.jpg"><i class="bi bi-arrows-angle-expand"></i></a>
                            </div>
                        </div>
                    </div>
                     <div class="item col-xl-4 col-lg-6 mb-4">
                        <div class="item-img" data-cue="slideInUp">
                            <img src="/frontend/asset/img/gallery/7.jpg" alt="" />
                            <div class="content">
                                <a  data-fslightbox="gallery_1" data-type="image" href="/frontend/asset/img/gallery/7.jpg"><i class="bi bi-arrows-angle-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/row -->
            </div>
            <!--/isotope-wrapper -->

            <div class="pagination__wrapper">
                <ul class="pagination">
                    <li><a href="#0" class="prev"><i class="bi bi-arrow-left-short"></i></a></li>
                    <li>
                        <a href="#0" class="active">1</a>
                    </li>
                    <li>
                        <a href="#0">2</a>
                    </li>
                    <li>
                        <a href="#0">3</a>
                    </li>
                    <li>
                        <a href="#0">4</a>
                    </li>
                    <li><a href="#0" class="next"><i class="bi bi-arrow-right-short"></i></a></li>
                </ul>
            </div>
            <!-- /pagination -->

        </div>
        <!--/container -->
    </main>


    <footer class="revealed">
        <div class="footer_bg">
            <div class="gradient_over"></div>
            <div class="background-image" data-background="url(/frontend/asset/img/rooms/3.jpg)"></div>
        </div>
        <div class="container">
            <div class="row move_content">
                <div class="col-lg-4 col-md-12">
                    <h5>Contacts</h5>
                    <ul>
                        <li>Baker Street 567, Los Angeles 11023<br>California - US<br><br></li>
                        <li><strong><a href="#0">info@Paradisehotel.com</a></strong></li>
                        <li><strong><a href="#0">+434 43242232</a></strong></li>
                    </ul>
                    <div class="social">
                        <ul>
                            <li><a href="#0"><i class="bi bi-instagram"></i></a></li>
                            <li><a href="#0"><i class="bi bi-whatsapp"></i></a></li>
                            <li><a href="#0"><i class="bi bi-facebook"></i></a></li>
                            <li><a href="#0"><i class="bi bi-twitter-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 ms-lg-auto">
                    <h5>Explore</h5>
                    <div class="footer_links">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="http://127.0.0.1:8000/roomlist1">Rooms &amp; Suites</a></li>
                            <li><a href="news-1.html">News &amp; Events</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="about.html">Terms and Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div id="newsletter">
                        <h5>Newsletter</h5>
                        <div id="message-newsletter"></div>
                        <form method="post" action="phpmailer/newsletter_template_email.php" name="newsletter_form" id="newsletter_form">
                            <div class="form-group">
                                <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
                                <button type="submit" id="submit-newsletter"><i class="bi bi-send"></i></button>
                            </div>
                        </form>
                        <p>Receive latest offers and promos without spam. You can cancel anytime.</p>
                    </div>
                </div>
            </div>
            <!--/row-->
        </div>
        <!--/container-->
        <div class="copy">
            <div class="container">
                © Paradise - by <a href="#">Ansonika</a>
            </div>
        </div>
    </footer>
    <!-- /footer -->
   

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
    </div>
    <!-- /back to top -->


<!-- COMMON SCRIPTS -->
<script src="/frontend/asset/js/common_scripts.js"></script>
<script src="/frontend/asset/js/common_functions.js"></script>
<script src="/frontend/asset/phpmailer/validate.js"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="/frontend/asset/js/isotope.min.js"></script>
<script>
    $(function() {
        "use strict";
        $(window).on('load', function() {
            var $container = $('.isotope-wrapper');
            $container.isotope({ itemSelector: '.item', layoutMode: 'masonry', });
        });
    });
</script>

</body>
</html>