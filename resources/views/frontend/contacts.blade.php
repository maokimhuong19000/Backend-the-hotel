@include('frontend.header')
@include('frontend.navigation')
<body> 

    
    <main>

        <div class="hero medium-height jarallax" data-jarallax data-speed="0.2">
            <img class="jarallax-img" src="/frontend/asset/img/hero_home_2.jpg" alt="">
            <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <small class="slide-animated one">Luxury Hotel Experience</small>
                    <h1 class="slide-animated two">Contact Us</h1>
                </div>
            </div>
        </div>
        <!-- /Background Img Parallax -->

        <div class="container margin_120_95">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-5 order-lg-2">
                    <div class="contact_info">
                        <ul class="clearfix">
                            <li>
                                <i class="bi bi-geo-alt"></i>
                                <h4>Address</h4>
                                <div>PO Box 97845 Baker st. 567, Los Angeles<br>California - US.</div>
                            </li>
                            <li>
                                <i class="bi bi-envelope-paper"></i>
                                <h4>Email address</h4>
                                <p><a href="#0">booking@Paradise.com</a> - <a href="#0">info@Paradise.com</a></p>
                            </li>
                            <li>
                                <i class="bi bi-telephone"></i>
                                <h4>Telephone</h4>
                                <div>+ 61 (2) 8093 3402 + 61 (2) 8093 3402<br><small>Monday to Friday 9am - 7pm</small></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 order-lg-1">
                    <h3 class="mb-3">Get in Touch</h3>
                    <div id="message-contact"></div>
                    <form method="post" action="phpmailer/contact_template_email.php" id="contactform" autocomplete="off">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="text" id="name_contact" name="name_contact" placeholder="Name">
                                    <label for="name_contact">Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="text" id="lastname_contact" name="lastname_contact" placeholder="Last Name">
                                    <label for="lastname_contact">Last name</label>
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="email" id="email_contact" name="email_contact" placeholder="Email">
                                    <label for="email_contact">Email</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="text" id="phone_contact" name="phone_contact" placeholder="Telephone">
                                    <label for="phone_contact">Telephone</label>
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                        <div class="form-floating mb-4">
                            <textarea class="form-control" placeholder="Message" id="message_contact" name="message_contact"></textarea>
                            <label for="message_contact">Message</label>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="text" id="verify_contact" name="verify_contact" placeholder="Are you human? 3 + 1 =">
                                    <label for="verify_contact">Are you human? 3 + 1 =</label>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3"><input type="submit" value="Submit" class="btn_1 outline" id="submit-contact"></p>
                    </form>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!--/container -->

        <div class="map_contact">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3021.4364241114604!2d-73.96780638459853!3d40.774418641731515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258a29d3847f5%3A0x564dfbba0141774a!2s5th%20Ave%2C%20New%20York%2C%20NY%2C%20Stati%20Uniti!5e0!3m2!1sit!2ses!4v1661414716655!5m2!1sit!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!--/map_contact -->

        <div class="container margin_120_95" id="booking_section">
            <div class="row justify-content-between">
                <div class="col-xl-4">
                    <div data-cue="slideInUp">
                        <div class="title">
                            <small>Paradise Hotel</small>
                            <h2>Check Availability</h2>
                        </div>
                        <p>Mea nibh meis philosophia eu. Duis legimus efficiantur ea sea. Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu. </p>
                        <p class="phone_element no_borders"><a href="tel://423424234"><i class="bi bi-telephone"></i><span><em>Info and bookings</em>+41 934 121 1334</span></a></p>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div data-cue="slideInUp" data-delay="200">
                        <div class="booking_wrapper">
                            <div class="col-12">
                                <input type="hidden" id="date_booking" name="date_booking">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="custom_select">
                                        <select class="wide">
                                            <option>Select Room</option>
                                            <option>Double Room</option>
                                            <option>Deluxe Room</option>
                                            <option>Superior Room</option>
                                            <option>Junior Suite</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="qty-buttons mb-3 version_2">
                                                <input type="button" value="+" class="qtyplus" name="adults_booking">
                                                <input type="text" name="adults_booking" id="adults_booking" value="" class="qty form-control" placeholder="Adults">
                                                <input type="button" value="-" class="qtyminus" name="adults_booking">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3 qty-buttons mb-3 version_2">
                                                <input type="button" value="+" class="qtyplus" name="childs_booking">
                                                <input type="text" name="childs_booking" id="childs_booking" value="" class="qty form-control" placeholder="Childs">
                                                <input type="button" value="-" class="qtyminus" name="childs_booking">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / row -->
                        <p class="text-end mt-5"><a href="#0" class="btn_1 outline">Book Now</a></p>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
        
    </main>   
@include('frontend.footer')