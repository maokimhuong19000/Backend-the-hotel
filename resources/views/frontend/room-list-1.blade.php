@include('frontend.header')
@include('frontend.navigation')
<body>
    <main>
        <div class="hero medium-height jarallax" data-jarallax data-speed="0.2">
            <img class="jarallax-img" src="/frontend/asset/img/rooms/4.jpg" alt="">
            <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero"
                data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <small class="slide-animated one">Luxury Hotel Experience</small>
                    <h1 class="slide-animated two">Our Rooms & Suites</h1>
                </div>
            </div>
        </div>
        <!-- /Background Img Parallax -->

        <div class="container margin_120_95 pb-0" id="first_section">
            @foreach ($getData as $item)
                <div class="row_list_version_1">
                    <div class="pinned-image rounded_container pinned-image--medium">
                        <div class="pinned-image__container">
                            <img src="{{$item->room_img}}" alt="">
                        </div>
                    </div>  
                    <!-- /pinned-image -->
                    <div class="row justify-content-start">
                        <div class="col-lg-8">
                            <div class="box_item_info" data-jarallax-element="-30">
                                <small>From ${{ $item->room_price }}/night</small>
                                <h2>{{ $item->room_name }}</h2>
                                <p>{{ $item->room_desc }}</p>
                                <div class="facilities clearfix">
                                    <ul>
                                        <li><i class="customicon-double-bed"></i> King Size Bed</li>
                                        <li><i class="customicon-wifi"></i> Free Wifi</li>
                                        <li><i class="customicon-television"></i> 32 Inc TV </li>
                                    </ul>
                                </div>
                                <div class="box_item_footer d-flex align-items-center justify-content-between">
                                    
                                    <a href="{{url('/sendTelegramMessage')}}" class="btn_4 learn-more">
                                        <span class="circle">
                                            <span class="icon arrow"></span>
                                        </span>
                                        <span class="button-text">Book Now</span>
                                    </a>
                                    <a href="/roomdetails" class="animated_link">
                                        <strong>Read more</strong>
                                    </a>
                                </div>
                                <!-- /box_item_footer -->
                            </div>
                            <!-- /box_item_info -->
                        </div>
                        <!-- /col -->
                    </div>
                    <!-- /row -->
                </div>
            @endforeach

            <!-- /row_list_version_1 -->

            {{-- <div class="row_list_version_1">
                <div class="pinned-image rounded_container pinned-image--medium">
                    <div class="pinned-image__container">
                        <img src="/frontend/asset/img/rooms/2_b.jpg" alt="">
                    </div>
                </div>
                <!-- /pinned-image -->
                <div class="row justify-content-end">
                    <div class="col-lg-8">
                        <div class="box_item_info float-lg-end" data-jarallax-element="-30">
                            <small>From $190/night</small>
                            <h2>Deluxe Room</h2>
                            <p>Beautiful design with modern furnishings including a glamorous bay window with your own private view of Lucerne.</p>
                            <div class="facilities clearfix">
                                <ul>
                                    <li>
                                        <i class="customicon-double-bed"></i> King Size Bed
                                    </li>
                                    <li>
                                        <i class="customicon-wifi"></i> Free Wifi
                                    </li>
                                    <li>
                                        <i class="customicon-television"></i> 32 Inc TV
                                    </li>
                                </ul>
                            </div>
                            <div class="box_item_footer d-flex align-items-center justify-content-between">
                                <a href="#0" class="btn_4 learn-more">
                                    <span class="circle">
                                        <span class="icon arrow"></span>
                                    </span>
                                    <span class="button-text">Book Now</span>
                                </a>
                                <a href="/roomdetails" class="animated_link">
                                    <strong>Read more</strong>
                                </a>
                            </div>
                            <!-- /box_item_footer -->
                        </div>
                        <!-- /box_item_info -->
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
            </div> --}}
            <!-- /row_list_version_1 -->
            {{-- 
            <div class="row_list_version_1">
                <div class="pinned-image rounded_container pinned-image--medium">
                    <div class="pinned-image__container">
                        <img src="/frontend/asset/img/rooms/3_b.jpg" alt="">
                    </div>
                </div>
                <!-- /pinned-image -->
                <div class="row justify-content-start">
                    <div class="col-lg-8">
                        <div class="box_item_info" data-jarallax-element="-30">
                            <small>From $240/night</small>
                            <h2>Superior Room</h2>
                            <p>Beautiful design with modern furnishings including a glamorous bay window with your own private view of Lucerne.</p>
                            <div class="facilities clearfix">
                                <ul>
                                    <li>
                                        <i class="customicon-double-bed"></i> King Size Bed
                                    </li>
                                    <li>
                                        <i class="customicon-wifi"></i> Free Wifi
                                    </li>
                                    <li>
                                        <i class="customicon-television"></i> 32 Inc TV
                                    </li>
                                </ul>
                            </div>
                            <div class="box_item_footer d-flex align-items-center justify-content-between">
                                <a href="#0" class="btn_4 learn-more">
                                    <span class="circle">
                                        <span class="icon arrow"></span>
                                    </span>
                                    <span class="button-text">Book Now</span>
                                </a>
                                <a href="/roomdetails" class="animated_link">
                                    <strong>Read more</strong>
                                </a>
                            </div>
                            <!-- /box_item_footer -->
                        </div>
                        <!-- /box_item_info -->
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
            </div> --}}
            <!-- /row_list_version_1 -->

            {{-- <div class="row_list_version_1">
                <div class="pinned-image rounded_container pinned-image--medium">
                    <div class="pinned-image__container">
                        <img src="/frontend/asset/img/rooms/4.jpg" alt="">
                    </div>
                </div>
                <!-- /pinned-image -->
                <div class="row justify-content-end">
                    <div class="col-lg-8">
                        <div class="box_item_info float-lg-end" data-jarallax-element="-30">
                            <small>From $260/night</small>
                            <h2>Junior Suite</h2>
                            <p>Beautiful design with modern furnishings including a glamorous bay window with your own private view of Lucerne.</p>
                            <div class="facilities clearfix">
                                <ul>
                                    <li>
                                        <i class="customicon-double-bed"></i> King Size Bed
                                    </li>
                                    <li>
                                        <i class="customicon-wifi"></i> Free Wifi
                                    </li>
                                    <li>
                                        <i class="customicon-television"></i> 32 Inc TV
                                    </li>
                                </ul>
                            </div>
                            <div class="box_item_footer d-flex align-items-center justify-content-between">
                                <a href="#0" class="btn_4 learn-more">
                                    <span class="circle">
                                        <span class="icon arrow"></span>
                                    </span>
                                    <span class="button-text">Book Now</span>
                                </a>
                                <a href="/roomdetails" class="animated_link">
                                    <strong>Read more</strong>
                                </a>
                            </div>
                            <!-- /box_item_footer -->
                        </div>
                        <!-- /box_item_info -->
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
            </div> --}}
            <!-- /row_list_version_1 -->

        </div>
        <!-- /container -->

        <div class="bg_white">
            <div class="container margin_120_95">
                <div class="title center mb-5">
                    <small data-cue="slideInUp">Paradise Hotel</small>
                    <h2 data-cue="slideInUp" data-delay="100">Main Facilities</h2>
                </div>
                <div class="row mt-4">
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="box_facilities no-border" data-cue="slideInUp">
                            <i class="customicon-private-parking"></i>
                            <h3>Private Parking</h3>
                            <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="box_facilities" data-cue="slideInUp">
                            <i class="customicon-wifi"></i>
                            <h3>High Speed Wifi</h3>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="box_facilities" data-cue="slideInUp">
                            <i class="customicon-cocktail"></i>
                            <h3>Bar & Restaurant</h3>
                            <p>Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum
                                fuga.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="box_facilities" data-cue="slideInUp">
                            <i class="customicon-swimming-pool"></i>
                            <h3>Swimming Pool</h3>
                            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /Row -->
            </div>
            <!-- /container-->
            <div class="marquee">
                <div class="track">
                    <div class="content">&nbsp;Relax Enjoy Luxury Holiday Travel Discover Experience Relax Enjoy Luxury
                        Holiday Travel Discover Experience Relax Enjoy Luxury Holiday Travel Discover Experience Relax
                        Enjoy Luxury Holiday Travel Discover Experience</div>
                </div>
            </div>
            <!-- /marquee-->
        </div>
        <!-- /bg_white -->

        <div class="container margin_120_95" id="booking_section">
            <div class="row justify-content-between">
                <div class="col-xl-4">
                    <div data-cue="slideInUp">
                        <div class="title">
                            <small>Paradise Hotel</small>
                            <h2>Check Availability</h2>
                        </div>
                        <p>Mea nibh meis philosophia eu. Duis legimus efficiantur ea sea. Id placerat tacimates
                            definitionem sea, prima quidam vim no. Duo nobis persecuti cu. </p>
                        <p class="phone_element no_borders"><a href="tel://423424234"><i
                                    class="bi bi-telephone"></i><span><em>Info and bookings</em>+41 934 121
                                    1334</span></a></p>
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
                                                <input type="button" value="+" class="qtyplus"
                                                    name="adults_booking">
                                                <input type="text" name="adults_booking" id="adults_booking"
                                                    value="" class="qty form-control" placeholder="Adults">
                                                <input type="button" value="-" class="qtyminus"
                                                    name="adults_booking">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3 qty-buttons mb-3 version_2">
                                                <input type="button" value="+" class="qtyplus"
                                                    name="childs_booking">
                                                <input type="text" name="childs_booking" id="childs_booking"
                                                    value="" class="qty form-control" placeholder="Childs">
                                                <input type="button" value="-" class="qtyminus"
                                                    name="childs_booking">
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
    <!-- Add this script to your HTML file -->
    @include('frontend.footer')
