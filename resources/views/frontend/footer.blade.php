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
                        <li><strong><a href="#0">info@paradisehotel.com</a></strong></li>
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
                        <form method="post" action="phpmailer/newsletter_template_email.php" name="newsletter_form"
                            id="newsletter_form">
                            <div class="form-group">
                                <input type="email" name="email_newsletter" id="email_newsletter" class="form-control"
                                    placeholder="Your email">
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
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- /back to top -->

    <!-- COMMON SCRIPTS -->
    <script src="{{asset('/frontend/asset/js/common_scripts.js')}}"></script>
    <script src="{{asset('/frontend/asset/js/common_functions.js')}}"></script>
    <script src="{{asset('/frontend/asset/js/datepicker_search.js')}}"></script>
    <script src="{{asset('/frontend/asset/js/datepicker_inline.js')}}"></script>
    <script src="{{asset('/frontend/asset/phpmailer/validate.js')}}"></script>
    <script src="{{asset('/frontend/asset/phpmailer/day_menu.js')}}"></script>
    <script>
    // Progress bars animation
    $(function() {
        "use strict";
        var $section = $('#reviews');
        $(window).on('scroll', function(ev) {
            var scrollOffset = $(window).scrollTop();
            var containerOffset = $section.offset().top - window.innerHeight;
            if (scrollOffset > containerOffset) {
                $(".progress-bar").each(function() {
                    var each_bar_width = $(this).attr('aria-valuenow');
                    $(this).width(each_bar_width + '%');
                });
            }
        });
    });
</script>
<script src="js/isotope.min.js"></script>
<script>
    $(function() {
        "use strict";
        $(window).on('load', function() {
            var $container = $('.isotope-wrapper');
            $container.isotope({ itemSelector: '.item', layoutMode: 'masonry', });
        });
    });
</script>
 
    
</html>