@extends('web.layouts.e_master')

@section('title', 'Taj Tailors : Home')

@section('head')
    {{--<link rel="stylesheet" href="{{url('css/sequence-slide.css')}}"/>--}}
    {{--<script type="text/javascript" src="{{url('js/sequence.min.js')}}"></script>--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <style type="text/css">
        .main_logo_small {
            display: none;
        }

        .main_logo_big {
            display: block;
        }
        .main_menu
        {
            background: transparent;
        }
        .fixed_menu
        {
            background: #005a3c;
        }
        .fixed_menu .main_logo_big {
            display: none;
        }

        .fixed_menu .main_logo_small {
            display: block;
        }

        .why_choose {
            display: inline-block;
            width: 100%;
            position: relative;
            padding-left: 50%;
            border-bottom: solid thin #ecebebb0;
            border-top: solid thin #ecebebb0;
            margin-bottom: 30px;
        }

        .why_choose_imgbox {
            width: 50%;
            display: inline-block;
            background-image: url(images/coustom_images/why-choose-img.jpg);
            background-size: cover;
            background-position: center;
            height: 100%;
            float: left;
            -o-object-fit: cover;
            object-fit: cover;
            position: absolute;
            left: 0px;
            vertical-align: middle;
        }

        .why_choose_txtmainbox {
            width: 100%;
            padding: 50px 40px 30px 50px;
        }

        .why_choose_txtbox {
            width: 100%;
            margin-top: 50px;
        }

        .why_choose_txtbox h3 {
            font-size: 28px;
            text-transform: uppercase;
            text-shadow: 1px 1px #eaeaea;
        }

        .why_choose_txtbox .text-success {
            text-shadow: none;
        }

        .why_choose_txtbox p {
            line-height: 24px;
            font-size: 16px;
            color: #666666;
            margin: 30px 0px;
        }

        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .slider_block {
            width: 100%;
            overflow: hidden;
        }

        .main_slider {
            width: 100%;
            height: auto;
            min-height: 100vh;
            position: relative;
            margin: 0px auto;
        }

        .main_slider_img {
            cursor: move;
            position: absolute;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .main_slider_txt {
            position: absolute;
            white-space: normal;
            font-size: 56px;
            line-height: 60px;
            color: rgb(255, 255, 255);
            font-family: Vidaloka;
            transition: none 0s ease 0s;
            text-align: center;
            border-width: 0px;
            width: 760px;
            top: 40%;
            left: 50%;
            margin-left: -370px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
        }

        .frame-img:after, .frame-img:before, .getstarted .theme-btn, .frame-img img {
            border-color: #ffffff;
        }

        .frame-img:before, .frame-img:after {
            position: absolute;
            content: '';
            border: 1px solid #ffffff;
            z-index: 1;
            width: 95%;
            height: 93%;
        }

        .frame-img:before {
            right: 0;
            bottom: 0;
        }

        .frame-img:after {
            left: 0;
            top: 0;
        }

        .banner-topten {
            overflow: hidden;
            position: relative;
            color: #ffffff;
        }

        .frame-img img {
            display: block;
            width: 100%;
            height: auto;
            border: 1px solid;
            position: relative;
            z-index: 2;
            min-height: 300px;
        }

        .how_it_work_block {
            background-size: cover;
            padding: 80px 0px;
            width: 100%;
            float: left;
            position: relative;
            background-image: url('images/coustom_images/how-it-work-bg.jpg');
            background-size: cover;
            padding: 80px 0px;
            background-attachment: fixed;
            margin-top: 30px;
            overflow: hidden;
        }

        .frame-img {
            padding: 10px;
            position: relative;
            z-index: 2;
        }

        .how_innerbox {
            width: 100%;
            background: #ffffff;
            display: inline-block;
            margin-bottom: 20px;
            transition: .5s all;
            min-height: 170px;
            padding: 25px;
            padding-left: 110px;
        }
        .how_innerbox i {
            font-size: 65px;
            color: #6f6f6f;
            position: absolute;
            left: 30px;
        }
        .how_innerbox h3 {
            font-size: 20px;
            text-transform: uppercase;
            text-shadow: 1px 1px #eaeaea;
            margin-top: 8px;
        }

        .how_innerbox p {
            font-size: 16px;
            color: #666666;
            margin: 0px;
        }

        .how_innerbox:hover {
            background: rgba(255, 255, 255, 0.8);
            padding: 15px;
            border: solid 15px #ffffff;
            padding-left: 80px;
        }
        .aboutus {
            width: 100%;
            margin-top: 50px;
        }
        .aboutus p {
            line-height: 34px;
            font-size: 18px;
            color: #666666;
            margin: 30px 0px;
        }
        .aboutus_block {
            display: inline-block;
            width: 100%;
            padding: 50px 0px;
        }
        .object_block {
            position: relative;
            margin: 0px auto;
            max-width: 600px;
            margin-top: 45px;
            padding-bottom: 200px;
        }
        .object_back {
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
            background-color: #005a3c;
            content: "";
            height: 95%;
            margin-left: 8%;
            position: absolute;
            transform: skewY(181deg);
            width: 90%;
            border-radius: 10px;
        }
        .object_frount {
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
            content: "";
            top: 85px;
            transform: skewY(6deg);
            width: 90%;
            position: relative;
            display: inline-block;
            height: 400px;
            background-image: url(images/coustom_images/home-about-bg.jpg);
            background-size: cover;
            border-radius: 10px;
        }
        .how_innerbox:hover i {
            color: #005a3c;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function () {
            pagemenuclick = true;
//            var sequenceElement = document.getElementById("sequence");
//            var options = {
//                animateCanvas: true,
//                phaseThreshold: true,
//                preloader: true,
//                reverseWhenNavigatingBackwards: true
//            }
//            var mySequence = sequence(sequenceElement, options);

            $("#testimonial-slider").owlCarousel({
                items: 2,
                itemsDesktop: [1000, 2],
                itemsDesktopSmall: [980, 1],
                itemsTablet: [768, 1],
                pagination: true,
                navigation: false,
                navigationText: ["", ""],
                autoPlay: true
            });
        });
    </script>
@stop

@section('content')
    <section class="slider_block">
        <div id="slider1_container" class="main_slider">
            <div u="slides" class="main_slider_img">
                <div>
                    <img u="image" src="images/coustom_images/banner-img.jpg"/>
                    <div class="main_slider_txt">Create Your Own Style</div>
                </div>
                <div>
                    <img u="image" src="images/coustom_images/banner-img7.jpg"/>
                    <div class="main_slider_txt">Individuality of your Style</div>
                </div>
                <div>
                    <img u="image" src="images/coustom_images/banner-img5.jpg"/>
                    <div class="main_slider_txt">Tailoring a unique creation
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="aboutus_block">
        <div class="col-sm-6">
            <div class="why_choose_txtmainbox">
            <div class="main_heading">
                <div class="main_head_txt">
                    About Us
                </div>
                <div class="border_bottom main_border"></div>
            </div>

            <div class="aboutus">
                <p>We provide you with great suits that befit you and your lifestyle. Our suits are made from the
                    highest quality fabrics and guaranteed to give you functionality, durability and comfort. Our
                    skilled master tailors handle all of our cutting and sewing, ensuring precision in all production
                    processes and paying attention to the details. Come to us and choose the best suit for your
                    lifestyle.</p>
                <a href="{{url('about')}}" class="btn btn-success btnmain_about">
                    <i class="mdi mdi-arrow-right-bold"></i> Know More
                </a>
            </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="object_block">
                <div class="object_back"></div>
                <div class="object_frount">
                    <div class="object_frount_img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="why_choose">
        <div class="why_choose_imgbox">

        </div>
        <div class="why_choose_txtmainbox">
            <div class="main_heading">
                <div class="main_head_txt">
                    Why Choose Us
                </div>
                <div class="border_bottom main_border"></div>
            </div>
            <div class="why_choose_txtbox"><h3><span class="text-success">1.</span> Skill</h3>
                <p>Aenean elit ipsum, lacinia a massa a, iaculis semper nibh. Etiam tincidunt varius mi. Morbi elementum
                    tincidunt accumsan. Aliquam suscipit, ante sed vehicula suscipit, tortor urna vehicula ligula, quis
                    convallis libero tortor vel leo.</p>
            </div>
            <div class="why_choose_txtbox"><h3><span class="text-success">2.</span> Experience</h3>
                <p>Aenean elit ipsum, lacinia a massa a, iaculis semper nibh. Etiam tincidunt varius mi. Morbi elementum
                    tincidunt accumsan. Aliquam suscipit, ante sed vehicula suscipit, tortor urna vehicula ligula, quis
                    convallis libero tortor vel leo.</p>
            </div>
            <div class="why_choose_txtbox"><h3><span class="text-success">3.</span> Quality</h3>
                <p>Aenean elit ipsum, lacinia a massa a, iaculis semper nibh. Etiam tincidunt varius mi. Morbi elementum
                    tincidunt accumsan. Aliquam suscipit, ante sed vehicula suscipit, tortor urna vehicula ligula, quis
                    convallis libero tortor vel leo.</p>
            </div>
        </div>
    </section>

    <div class="main_heading" id="how_row_block">
        <div class="main_head_txt">
            How It Work
        </div>
        <div class="border_bottom main_border"></div>
        <div class="main_subhead">
            Get perfectly stitched clothes at your doorstep in just 4 steps
        </div>
    </div>
    <section class="how_it_work_block">
        <div class="container">
            <div class="col-xs-12 col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0">
                <figure class="frame-img">
                    <div class="banner-topten">
                        <img src="images/coustom_images/how-it-work-bg.jpg"
                             class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt=""
                             sizes="(max-width: 300px) 100vw, 300px">
                    </div>
                </figure>
            </div>
            <div class="col-xs-12 col-md-8 col-sm-12">
                <div class="row">
                    <div class="col-sm-6 col-xs-6 how_box">
                        <div class="how_innerbox">
                            <i class="mdi mdi-calendar-multiple-check"></i>
                            <h3>Book Appointment</h3>

                            <p>Fill the form on website or call 9589883533</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6 how_box">
                        <div class="how_innerbox">
                            <i class="mdi mdi-cards"></i>
                            <h3>Give/Select Fabric</h3>
                            <p>Give your fabric or choose from our collection</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6 how_box">
                        <div class="how_innerbox">
                            <i class="mdi mdi-format-list-checks"></i>
                            <h3>Get Measured</h3>
                            <p>Get measuremed at your home or office and website</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6 how_box">
                        <div class="how_innerbox">
                            <i class="mdi mdi-truck-delivery"></i>
                            <h3>Quick Delivery</h3>
                            <p>Delivery within 5-10 days based on garments</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home_about" id="review_row_block">
        @php
            $testimonial = \App\Testimonial::where(['is_active'=>1])->get();
            $count = 1;
        @endphp
        <div class="container">
            <div class="row">
                <div class="main_heading">
                    <div class="main_head_txt">
                        Testimonials
                    </div>
                    <div class="border_bottom main_border"></div>
                    <div class="main_subhead">
                        Loved by our customers
                    </div>
                </div>
                <div class="col-md-12">
                    @if(count($testimonial)>0)
                        <div id="testimonial-slider" class="owl-carousel testomonial_mainbox">
                            @foreach($testimonial as $test)
                                <div class="testimonial">
                                    <div class="pic">
                                        @if($test->user->profile_img != 'images/Male_default.png')
                                            <img src="{{url('u_img').'/'.$test->user_id.'/'.$test->user->profile_img}}">
                                        @else
                                            <img src="{{url('images/Male_default.png')}}">
                                        @endif
                                    </div>
                                    <p class="description">{{$test->review}}</p>
                                    <div class="testimonial-content">
                                        <a href="#" class="title">{{$test->user->name}}</a>
                                        {{--<span class="post">Web Developer</span>--}}
                                    </div>
                                </div>
                                @php $count++ @endphp
                            @endforeach
                            {{-- <div class="testimonial">
                                 <div class="pic">
                                     <img src="images/testominial_img2.jpg" alt="">
                                 </div>
                                 <p class="description">
                                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis tempus
                                     est
                                     non
                                     fermentum. Nulla ut placerat tellus. Donec faucibus mi eu felis bibendum, eget.
                                 </p>
                                 <div class="testimonial-content">
                                     <a href="#" class="title">kristiana</a>
                                     <span class="post">Web Designer</span>
                                 </div>
                             </div>
                             <div class="testimonial">
                                 <div class="pic">
                                     <img src="images/testominial_img3.jpg" alt="">
                                 </div>
                                 <p class="description">
                                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis tempus
                                     est
                                     non
                                     fermentum. Nulla ut placerat tellus. Donec faucibus mi eu felis bibendum, eget.
                                 </p>
                                 <div class="testimonial-content">
                                     <a href="#" class="title">Williamson</a>
                                     <span class="post">Web Developer</span>
                                 </div>
                             </div>
                             <div class="testimonial">
                                 <div class="pic">
                                     <img src="images/testominial_img4.jpg" alt="">
                                 </div>
                                 <p class="description">
                                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis tempus
                                     est
                                     non
                                     fermentum. Nulla ut placerat tellus. Donec faucibus mi eu felis bibendum, eget.
                                 </p>
                                 <div class="testimonial-content">
                                     <a href="#" class="title">kristiana</a>
                                     <span class="post">Web Designer</span>
                                 </div>
                             </div>
                             <div class="testimonial">
                                 <div class="pic">
                                     <img src="images/testominial_img3.jpg" alt="">
                                 </div>
                                 <p class="description">
                                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis tempus
                                     est
                                     non
                                     fermentum. Nulla ut placerat tellus. Donec faucibus mi eu felis bibendum, eget.
                                 </p>
                                 <div class="testimonial-content">
                                     <a href="#" class="title">Williamson</a>
                                     <span class="post">Web Developer</span>
                                 </div>
                             </div>
                             <div class="testimonial">
                                 <div class="pic">
                                     <img src="images/testominial_img2.jpg" alt="">
                                 </div>
                                 <p class="description">
                                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis tempus
                                     est
                                     non
                                     fermentum. Nulla ut placerat tellus. Donec faucibus mi eu felis bibendum, eget.
                                 </p>
                                 <div class="testimonial-content">
                                     <a href="#" class="title">kristiana</a>
                                     <span class="post">Web Designer</span>
                                 </div>
                             </div>--}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <section class="about_block"  style="display: none">
        <div class="container">
            <div class="row">
                <div class="main_heading">
                    <div class="main_head_txt">
                        How It Work
                    </div>
                    <div class="border_bottom main_border"></div>
                    <div class="main_subhead">
                        Get perfectly stitched clothes at your doorstep in just 4 steps
                    </div>
                </div>
                <div class="staps_block">
                    <div class="col-sm-3">
                        <div class="staps_brics_block stap1_color">
                            <div class=" icon_upper" style="
    box-shadow: 0 12px 20px -10px rgb(254, 129, 82), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(156, 39, 176, 0.2);
">
                                <i class="mdi mdi-calendar-multiple-check stap_icon1"></i>
                            </div>
                            <h2>Book Appointment</h2>
                            <p>Fill the form on website or call 9589883533</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="staps_brics_block stap4_color">
                            <div class="icon_upper" style="
    box-shadow: 0 12px 20px -10px rgb(45, 148, 255), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(156, 39, 176, 0.2);
">
                                <i class="mdi mdi-cards stap_icon2"></i>
                            </div>
                            <h2>Give/Select Fabric</h2>
                            <p>Give your fabric or choose from our collection</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="staps_brics_block stap2_color">
                            <div class="icon_upper " style="
    box-shadow: 0 12px 20px -10px rgb(255, 108, 224), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(156, 39, 176, 0.2);
">
                                <i class="mdi mdi-format-list-checks stap_icon3"></i>
                            </div>
                            <h2>Get Measured</h2>
                            <p>Get measuremed at your home or office and website</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="staps_brics_block stap3_color ">
                            <div class="icon_upper " style="
    box-shadow: 0 12px 20px -10px rgb(239, 181, 57), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(156, 39, 176, 0.2);
">
                                <i class="mdi mdi-truck-delivery stap_icon4"></i>
                            </div>
                            <h2>Quick Delivery</h2>
                            <p>Delivery within 5-10 days based on garment</p>
                        </div>
                    </div>
                </div>
                <div class="appointment_btn_block">
                    <a class="btn btn-success btn_get_appointment" href="{{url('book_appointment')}}">
                        <i class="mdi mdi-calendar-multiple-check basic_icon_margin"></i>Get Appointment
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="price_box" id="price_row_block" style="display: none">
        <div class="container">
            <div class="row">
                <div class="main_heading">
                    <div class="main_head_txt">
                        Stitching Prices
                    </div>
                    <div class="border_bottom main_border"></div>
                    <div class="main_subhead">
                        Taj Tailors proudly brings you the ultimate experience in confidence, comfort and peace of mind.
                        If you are not satisfied with the fit of your garment we will adjust and replace it for free. No
                        returns needed.
                    </div>
                </div>
                <div class="price_list_block">
                    <div class="price_list_head_block">
                        <div class="price_product_box">
                            <div class="price_prodoct_brics">
                                <b>Product Name</b>
                            </div>
                        </div>
                        <div class="price_basic">
                            <div class="price_basic_brics">
                                <b>Basic Stitching</b>
                            </div>
                        </div>
                        <div class="price_premium">
                            <div class="price_premium_brics">
                                <b>Premium Stitching</b>
                            </div>
                        </div>
                    </div>
                    <div class="price_list_box">
                        @php
                            $stitches = \Illuminate\Support\Facades\DB::select("SELECT * FROM stitching_prices where is_active = 1");
                        @endphp
                        @if(count($stitches))
                            @foreach($stitches as $stitch)
                                <div class="price_list_row">
                                    <div class="price_product_box price_product_list_col">
                                        {{$stitch->product_name}}
                                    </div>
                                    <div class="price_basic price_list_col">
                                        <i class="mdi mdi-currency-inr"></i>{{$stitch->basic_price}}
                                    </div>
                                    <div class="price_premium price_list_col">
                                        <i class="mdi mdi-currency-inr"></i>{{$stitch->premium_price}}
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        {{-- <div class="price_list_row">
                             <div class="price_product_box price_product_list_col">
                                 Tuxedo Suit (2 piece)
                             </div>
                             <div class="price_basic price_list_col">
                                 <i class="mdi mdi-currency-inr"></i>4699
                             </div>
                             <div class="price_premium price_list_col">
                                 <i class="mdi mdi-currency-inr"></i>6899
                             </div>
                         </div>
                         <div class="price_list_row">
                             <div class="price_product_box price_product_list_col">3 Piece Suit</div>
                             <div class="price_basic price_list_col">
                                 <i class="mdi mdi-currency-inr"></i>4699
                             </div>
                             <div class="price_premium price_list_col">
                                 <i class="mdi mdi-currency-inr"></i>6899
                             </div>
                         </div>
                         <div class="price_list_row">
                             <div class="price_product_box price_product_list_col">Safari Suit</div>
                             <div class="price_basic price_list_col">
                                 <i class="mdi mdi-currency-inr"></i>4699
                             </div>
                             <div class="price_premium price_list_col">
                                 <i class="mdi mdi-currency-inr"></i>6899
                             </div>
                         </div>
                         <div class="price_list_row">
                             <div class="price_product_box price_product_list_col">Blazer</div>
                             <div class="price_basic price_list_col">
                                 <i class="mdi mdi-currency-inr"></i>4699
                             </div>
                             <div class="price_premium price_list_col">
                                 <i class="mdi mdi-currency-inr"></i>6899
                             </div>
                         </div>
                         <div class="price_list_row">
                             <div class="price_product_box price_product_list_col">BandhGala Blazer</div>
                             <div class="price_basic price_list_col">
                                 <i class="mdi mdi-currency-inr"></i>4699
                             </div>
                             <div class="price_premium price_list_col">
                                 <i class="mdi mdi-currency-inr"></i>6899
                             </div>
                         </div>
                         <div class="price_list_row">
                             <div class="price_product_box price_product_list_col">Tuxedo Blazer</div>
                             <div class="price_basic price_list_col">
                                 <i class="mdi mdi-currency-inr"></i>4699
                             </div>
                             <div class="price_premium price_list_col">
                                 <i class="mdi mdi-currency-inr"></i>6899
                             </div>
                         </div>
                         <div class="price_list_row">
                             <div class="price_product_box price_product_list_col">Overcoat/Long Coat</div>
                             <div class="price_basic price_list_col">
                                 <i class="mdi mdi-currency-inr"></i>4699
                             </div>
                             <div class="price_premium price_list_col">
                                 <i class="mdi mdi-currency-inr"></i>6899
                             </div>
                         </div>
                         <div class="price_list_row">
                             <div class="price_product_box price_product_list_col">Shirt</div>
                             <div class="price_basic price_list_col">
                                 <i class="mdi mdi-currency-inr"></i>4699
                             </div>
                             <div class="price_premium price_list_col">
                                 <i class="mdi mdi-currency-inr"></i>6899
                             </div>
                         </div>
                         <div class="price_list_row">
                             <div class="price_product_box price_product_list_col">Trouser</div>
                             <div class="price_basic price_list_col">
                                 <i class="mdi mdi-currency-inr"></i>4699
                             </div>
                             <div class="price_premium price_list_col">
                                 <i class="mdi mdi-currency-inr"></i>6899
                             </div>
                         </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script type="text/javascript" src="//jssors8.azureedge.net/script/jssor.slider-27.5.0.min.js"></script>
    <script type="text/javascript">
        var _SlideshowTransitionC = {};
        var _SlideshowTransitionCodes = {};
        var _SlideshowTransitions = [];

        //---- Zoom Transitions -----
        {

            _SlideshowTransitionC["Zoom VDouble+ in"] = {
                $Duration: 1200,
                y: 2,
                $Rows: 2,
                $Zoom: 11,
                $Assembly: 2049,
                $ChessMode: {$Row: 15},
                $Easing: {$Top: $Jease$.$InCubic, $Zoom: $Jease$.$InCubic, $Opacity: $Jease$.$OutQuad},
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom VDouble+ in"] = "{$Duration:1200,y:2,$Rows:2,$Zoom:11,$Assembly:2049,$ChessMode:{$Row:15},$Easing:{$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom HDouble+ in"] = {
                $Duration: 1200,
                x: 4,
                $Cols: 2,
                $Zoom: 11,
                $Assembly: 2049,
                $ChessMode: {$Column: 15},
                $Easing: {$Left: $Jease$.$InCubic, $Zoom: $Jease$.$InCubic, $Opacity: $Jease$.$OutQuad},
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom HDouble+ in"] = "{$Duration:1200,x:4,$Cols:2,$Zoom:11,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom VDouble- in"] = {
                $Duration: 1200,
                y: 1,
                $Rows: 2,
                $Zoom: 1,
                $Assembly: 2049,
                $ChessMode: {$Row: 15},
                $Easing: {$Top: $Jease$.$InCubic, $Zoom: $Jease$.$InCubic, $Opacity: $Jease$.$Linear},
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom VDouble- in"] = "{$Duration:1200,y:1,$Rows:2,$Zoom:1,$Assembly:2049,$ChessMode:{$Row:15},$Easing:{$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}";

            _SlideshowTransitionC["Zoom HDouble- in"] = {
                $Duration: 1200,
                x: 0.5,
                $Cols: 2,
                $Zoom: 1,
                $Assembly: 2049,
                $ChessMode: {$Column: 15},
                $Easing: {$Left: $Jease$.$InCubic, $Zoom: $Jease$.$InCubic, $Opacity: $Jease$.$Linear},
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom HDouble- in"] = "{$Duration:1200,x:0.5,$Cols:2,$Zoom:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}";

            _SlideshowTransitionC["Zoom VDouble+ out"] = {
                $Duration: 1200,
                y: 2,
                $Rows: 2,
                $Zoom: 11,
                $SlideOut: true,
                $Assembly: 2049,
                $ChessMode: {$Row: 15},
                $Easing: {$Top: $Jease$.$InExpo, $Zoom: $Jease$.$InExpo, $Opacity: $Jease$.$Linear},
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom VDouble+ out"] = "{$Duration:1200,y:2,$Rows:2,$Zoom:11,$SlideOut:true,$Assembly:2049,$ChessMode:{$Row:15},$Easing:{$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2}";

            _SlideshowTransitionC["Zoom HDouble+ out"] = {
                $Duration: 1200,
                x: 4,
                $Cols: 2,
                $Zoom: 11,
                $SlideOut: true,
                $Assembly: 2049,
                $ChessMode: {$Column: 15},
                $Easing: {$Left: $Jease$.$InExpo, $Zoom: $Jease$.$InExpo, $Opacity: $Jease$.$Linear},
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom HDouble+ out"] = "{$Duration:1200,x:4,$Cols:2,$Zoom:11,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2}";

            _SlideshowTransitionC["Zoom VDouble- out"] = {
                $Duration: 1200,
                y: 1,
                $Rows: 2,
                $Zoom: 1,
                $SlideOut: true,
                $Assembly: 2049,
                $ChessMode: {$Row: 15},
                $Easing: {$Top: $Jease$.$InExpo, $Zoom: $Jease$.$InExpo, $Opacity: $Jease$.$Linear},
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom VDouble- out"] = "{$Duration:1200,y:1,$Rows:2,$Zoom:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Row:15},$Easing:{$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2}";

            _SlideshowTransitionC["Zoom HDouble- out"] = {
                $Duration: 1200,
                x: 0.5,
                $Cols: 2,
                $Zoom: 1,
                $SlideOut: true,
                $Assembly: 2049,
                $ChessMode: {$Column: 15},
                $Easing: {$Left: $Jease$.$InExpo, $Zoom: $Jease$.$InExpo, $Opacity: $Jease$.$Linear},
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom HDouble- out"] = "{$Duration:1200,x:0.5,$Cols:2,$Zoom:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2}";

            _SlideshowTransitionC["Zoom+ in"] = {
                $Duration: 1000,
                $Zoom: 11,
                $Easing: {$Zoom: $Jease$.$InCubic, $Opacity: $Jease$.$OutQuad},
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom+ in"] = "{$Duration:1000,$Zoom:11,$Easing:{$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom+ in L"] = {
                $Duration: 1000,
                x: 4,
                $Zoom: 11,
                $Easing: {$Left: $Jease$.$InCubic, $Zoom: $Jease$.$InCubic, $Opacity: $Jease$.$OutQuad},
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom+ in L"] = "{$Duration:1000,x:4,$Zoom:11,$Easing:{$Left:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom+ in R"] = {
                $Duration: 1000,
                x: -4,
                $Zoom: 11,
                $Easing: {$Left: $Jease$.$InCubic, $Zoom: $Jease$.$InCubic, $Opacity: $Jease$.$OutQuad},
                $Opacity: 2,
                $Round: {$Top: 2.5}
            };
            _SlideshowTransitionCodes["Zoom+ in R"] = "{$Duration:1000,x:-4,$Zoom:11,$Easing:{$Left:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2,$Round:{$Top:2.5}}";

            _SlideshowTransitionC["Zoom+ in T"] = {
                $Duration: 1000,
                y: 4,
                $Zoom: 11,
                $Easing: {$Top: $Jease$.$InCubic, $Zoom: $Jease$.$InCubic, $Opacity: $Jease$.$OutQuad},
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom+ in T"] = "{$Duration:1000,y:4,$Zoom:11,$Easing:{$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom+ in B"] = {
                $Duration: 1000,
                y: -4,
                $Zoom: 11,
                $Easing: {$Top: $Jease$.$InCubic, $Zoom: $Jease$.$InCubic, $Opacity: $Jease$.$OutQuad},
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom+ in B"] = "{$Duration:1000,y:-4,$Zoom:11,$Easing:{$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom+ in TL"] = {
                $Duration: 1000,
                x: 4,
                y: 4,
                $Zoom: 11,
                $Easing: {
                    $Left: $Jease$.$InCubic,
                    $Top: $Jease$.$InCubic,
                    $Zoom: $Jease$.$InCubic,
                    $Opacity: $Jease$.$OutQuad
                },
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom+ in TL"] = "{$Duration:1000,x:4,y:4,$Zoom:11,$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom+ in TR"] = {
                $Duration: 1000,
                x: -4,
                y: 4,
                $Zoom: 11,
                $Easing: {
                    $Left: $Jease$.$InCubic,
                    $Top: $Jease$.$InCubic,
                    $Zoom: $Jease$.$InCubic,
                    $Opacity: $Jease$.$OutQuad
                },
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom+ in TR"] = "{$Duration:1000,x:-4,y:4,$Zoom:11,$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom+ in BL"] = {
                $Duration: 1000,
                x: 4,
                y: -4,
                $Zoom: 11,
                $Easing: {
                    $Left: $Jease$.$InCubic,
                    $Top: $Jease$.$InCubic,
                    $Zoom: $Jease$.$InCubic,
                    $Opacity: $Jease$.$OutQuad
                },
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom+ in BL"] = "{$Duration:1000,x:4,y:-4,$Zoom:11,$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom+ in BR"] = {
                $Duration: 1000,
                x: -4,
                y: -4,
                $Zoom: 11,
                $Easing: {
                    $Left: $Jease$.$InCubic,
                    $Top: $Jease$.$InCubic,
                    $Zoom: $Jease$.$InCubic,
                    $Opacity: $Jease$.$OutQuad
                },
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom+ in BR"] = "{$Duration:1000,x:-4,y:-4,$Zoom:11,$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom+ out"] = {
                $Duration: 1000,
                $Zoom: 11,
                $SlideOut: true,
                $Easing: {$Zoom: $Jease$.$InExpo, $Opacity: $Jease$.$Linear},
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom+ out"] = "{$Duration:1000,$Zoom:11,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2}";

            _SlideshowTransitionC["Zoom+ out L"] = {
                $Duration: 1000,
                x: 4,
                $Zoom: 11,
                $SlideOut: true,
                $Easing: {$Left: $Jease$.$InExpo, $Zoom: $Jease$.$InExpo, $Opacity: $Jease$.$Linear},
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom+ out L"] = "{$Duration:1000,x:4,$Zoom:11,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2}";

            _SlideshowTransitionC["Zoom+ out R"] = {
                $Duration: 1000,
                x: -4,
                $Zoom: 11,
                $SlideOut: true,
                $Easing: {$Left: $Jease$.$InExpo, $Zoom: $Jease$.$InExpo, $Opacity: $Jease$.$Linear},
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom+ out R"] = "{$Duration:1000,x:-4,$Zoom:11,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2}";

            _SlideshowTransitionC["Zoom+ out T"] = {
                $Duration: 1000,
                y: 4,
                $Zoom: 11,
                $SlideOut: true,
                $Easing: {$Top: $Jease$.$InExpo, $Zoom: $Jease$.$InExpo, $Opacity: $Jease$.$Linear},
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom+ out T"] = "{$Duration:1000,y:4,$Zoom:11,$SlideOut:true,$Easing:{$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2}";

            _SlideshowTransitionC["Zoom+ out B"] = {
                $Duration: 1000,
                y: -4,
                $Zoom: 11,
                $SlideOut: true,
                $Easing: {$Top: $Jease$.$InExpo, $Zoom: $Jease$.$InExpo, $Opacity: $Jease$.$Linear},
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom+ out B"] = "{$Duration:1000,y:-4,$Zoom:11,$SlideOut:true,$Easing:{$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2}";

            _SlideshowTransitionC["Zoom+ out TL"] = {
                $Duration: 1000,
                x: 4,
                y: 4,
                $Zoom: 11,
                $SlideOut: true,
                $Easing: {
                    $Left: $Jease$.$InExpo,
                    $Top: $Jease$.$InExpo,
                    $Zoom: $Jease$.$InExpo,
                    $Opacity: $Jease$.$Linear
                },
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom+ out TL"] = "{$Duration:1000,x:4,y:4,$Zoom:11,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2}";

            _SlideshowTransitionC["Zoom+ out TR"] = {
                $Duration: 1000,
                x: -4,
                y: 4,
                $Zoom: 11,
                $SlideOut: true,
                $Easing: {
                    $Left: $Jease$.$InExpo,
                    $Top: $Jease$.$InExpo,
                    $Zoom: $Jease$.$InExpo,
                    $Opacity: $Jease$.$Linear
                },
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom+ out TR"] = "{$Duration:1000,x:-4,y:4,$Zoom:11,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2}";

            _SlideshowTransitionC["Zoom+ out BL"] = {
                $Duration: 1000,
                x: 4,
                y: -4,
                $Zoom: 11,
                $SlideOut: true,
                $Easing: {
                    $Left: $Jease$.$InExpo,
                    $Top: $Jease$.$InExpo,
                    $Zoom: $Jease$.$InExpo,
                    $Opacity: $Jease$.$Linear
                },
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom+ out BL"] = "{$Duration:1000,x:4,y:-4,$Zoom:11,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2}";

            _SlideshowTransitionC["Zoom+ out BR"] = {
                $Duration: 1000,
                x: -4,
                y: -4,
                $Zoom: 11,
                $SlideOut: true,
                $Easing: {
                    $Left: $Jease$.$InExpo,
                    $Top: $Jease$.$InExpo,
                    $Zoom: $Jease$.$InExpo,
                    $Opacity: $Jease$.$Linear
                },
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom+ out BR"] = "{$Duration:1000,x:-4,y:-4,$Zoom:11,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2}";

            _SlideshowTransitionC["Zoom- in"] = {
                $Duration: 1200,
                $Zoom: 1,
                $Easing: {$Zoom: $Jease$.$InCubic, $Opacity: $Jease$.$OutQuad},
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom- in"] = "{$Duration:1200,$Zoom:1,$Easing:{$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom- in L"] = {
                $Duration: 1200,
                x: 0.6,
                $Zoom: 1,
                $Easing: {$Left: $Jease$.$InCubic, $Zoom: $Jease$.$InCubic, $Opacity: $Jease$.$OutQuad},
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom- in L"] = "{$Duration:1200,x:0.6,$Zoom:1,$Easing:{$Left:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom- in R"] = {
                $Duration: 1200,
                x: -0.6,
                $Zoom: 1,
                $Easing: {$Left: $Jease$.$InCubic, $Zoom: $Jease$.$InCubic, $Opacity: $Jease$.$OutQuad},
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom- in R"] = "{$Duration:1200,x:-0.6,$Zoom:1,$Easing:{$Left:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom- in T"] = {
                $Duration: 1200,
                y: 0.6,
                $Zoom: 1,
                $Easing: {$Top: $Jease$.$InCubic, $Zoom: $Jease$.$InCubic, $Opacity: $Jease$.$OutQuad},
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom- in T"] = "{$Duration:1200,y:0.6,$Zoom:1,$Easing:{$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom- in B"] = {
                $Duration: 1200,
                y: -0.6,
                $Zoom: 1,
                $Easing: {$Top: $Jease$.$InCubic, $Zoom: $Jease$.$InCubic, $Opacity: $Jease$.$OutQuad},
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom- in B"] = "{$Duration:1200,y:-0.6,$Zoom:1,$Easing:{$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom- in TL"] = {
                $Duration: 1200,
                x: 0.6,
                y: 0.6,
                $Zoom: 1,
                $Easing: {
                    $Left: $Jease$.$InCubic,
                    $Top: $Jease$.$InCubic,
                    $Zoom: $Jease$.$InCubic,
                    $Opacity: $Jease$.$OutQuad
                },
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom- in TL"] = "{$Duration:1200,x:0.6,y:0.6,$Zoom:1,$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom- in TR"] = {
                $Duration: 1200,
                x: -0.6,
                y: 0.6,
                $Zoom: 1,
                $Easing: {
                    $Left: $Jease$.$InCubic,
                    $Top: $Jease$.$InCubic,
                    $Zoom: $Jease$.$InCubic,
                    $Opacity: $Jease$.$OutQuad
                },
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom- in TR"] = "{$Duration:1200,x:-0.6,y:0.6,$Zoom:1,$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom- in BL"] = {
                $Duration: 1200,
                x: 0.6,
                y: -0.6,
                $Zoom: 1,
                $Easing: {
                    $Left: $Jease$.$InCubic,
                    $Top: $Jease$.$InCubic,
                    $Zoom: $Jease$.$InCubic,
                    $Opacity: $Jease$.$OutQuad
                },
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom- in BL"] = "{$Duration:1200,x:0.6,y:-0.6,$Zoom:1,$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom- in BR"] = {
                $Duration: 1200,
                x: -0.6,
                y: -0.6,
                $Zoom: 1,
                $Easing: {
                    $Left: $Jease$.$InCubic,
                    $Top: $Jease$.$InCubic,
                    $Zoom: $Jease$.$InCubic,
                    $Opacity: $Jease$.$OutQuad
                },
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom- in BR"] = "{$Duration:1200,x:-0.6,y:-0.6,$Zoom:1,$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom- out"] = {
                $Duration: 1000,
                $Zoom: 1,
                $SlideOut: true,
                $Easing: {$Zoom: $Jease$.$InExpo, $Opacity: $Jease$.$Linear},
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom- out"] = "{$Duration:1000,$Zoom:1,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2}";

            _SlideshowTransitionC["Zoom- out L"] = {
                $Duration: 1000,
                x: 1,
                $Zoom: 1,
                $SlideOut: true,
                $Easing: {$Left: $Jease$.$InExpo, $Zoom: $Jease$.$InExpo, $Opacity: $Jease$.$Linear},
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom- out L"] = "{$Duration:1000,x:1,$Zoom:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2}";

            _SlideshowTransitionC["Zoom- out R"] = {
                $Duration: 1000,
                x: -1,
                $Zoom: 1,
                $SlideOut: true,
                $Easing: {$Left: $Jease$.$InExpo, $Zoom: $Jease$.$InExpo, $Opacity: $Jease$.$Linear},
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom- out R"] = "{$Duration:1000,x:-1,$Zoom:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2}";

            _SlideshowTransitionC["Zoom- out T"] = {
                $Duration: 1000,
                y: 1,
                $Zoom: 1,
                $SlideOut: true,
                $Easing: {$Top: $Jease$.$InExpo, $Zoom: $Jease$.$InExpo, $Opacity: $Jease$.$Linear},
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom- out T"] = "{$Duration:1000,y:1,$Zoom:1,$SlideOut:true,$Easing:{$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2}";

            _SlideshowTransitionC["Zoom- out B"] = {
                $Duration: 1000,
                y: -1,
                $Zoom: 1,
                $SlideOut: true,
                $Easing: {$Top: $Jease$.$InExpo, $Zoom: $Jease$.$InExpo, $Opacity: $Jease$.$Linear},
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom- out B"] = "{$Duration:1000,y:-1,$Zoom:1,$SlideOut:true,$Easing:{$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2}";

            _SlideshowTransitionC["Zoom- out TL"] = {
                $Duration: 1000,
                x: 1,
                y: 1,
                $Zoom: 1,
                $SlideOut: true,
                $Easing: {
                    $Left: $Jease$.$InExpo,
                    $Top: $Jease$.$InExpo,
                    $Zoom: $Jease$.$InExpo,
                    $Opacity: $Jease$.$Linear
                },
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom- out TL"] = "{$Duration:1000,x:1,y:1,$Zoom:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2}";

            _SlideshowTransitionC["Zoom- out TR"] = {
                $Duration: 1000,
                x: -1,
                y: 1,
                $Zoom: 1,
                $SlideOut: true,
                $Easing: {
                    $Left: $Jease$.$InExpo,
                    $Top: $Jease$.$InExpo,
                    $Zoom: $Jease$.$InExpo,
                    $Opacity: $Jease$.$Linear
                },
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom- out TR"] = "{$Duration:1000,x:-1,y:1,$Zoom:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2}";

            _SlideshowTransitionC["Zoom- out BL"] = {
                $Duration: 1000,
                x: 1,
                y: -1,
                $Zoom: 1,
                $SlideOut: true,
                $Easing: {
                    $Left: $Jease$.$InExpo,
                    $Top: $Jease$.$InExpo,
                    $Zoom: $Jease$.$InExpo,
                    $Opacity: $Jease$.$Linear
                },
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom- out BL"] = "{$Duration:1000,x:1,y:-1,$Zoom:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2}";

            _SlideshowTransitionC["Zoom- out BR"] = {
                $Duration: 1000,
                x: -1,
                y: -1,
                $Zoom: 1,
                $SlideOut: true,
                $Easing: {
                    $Left: $Jease$.$InExpo,
                    $Top: $Jease$.$InExpo,
                    $Zoom: $Jease$.$InExpo,
                    $Opacity: $Jease$.$Linear
                },
                $Opacity: 2
            };
            _SlideshowTransitionCodes["Zoom- out BR"] = "{$Duration:1000,x:-1,y:-1,$Zoom:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2}";
        }

        for (var transitionName in _SlideshowTransitionC) {
            var slideshowTransition = _SlideshowTransitionC[transitionName];
            _SlideshowTransitions.push(slideshowTransition);
        }
    </script>
    <script type="text/javascript">
        jssor_slider1_init = function (containerId) {
            var jssor_slider1 = new $JssorSlider$(containerId, {
                $AutoPlay: 1,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $Idle: 400,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                 //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                }
            });

            function InnerText(elmt, text) {
                if (text == undefined) {
                    return elmt.textContent || elmt.innerText;
                }

                elmt.innerHTML = "";
                elmt.appendChild(document.createTextNode(text));
            }

            PlaySlideshowTransition = function (event) {
                $Jssor$.$StopEvent(event);
                $Jssor$.$CancelEvent(event);

                try {
                    var eventSrcElement = $Jssor$.$EvtSrc(event);
                    var transitionName = InnerText(eventSrcElement);
                    jssor_slider1.$Next();

                    jssor_slider1.$SetSlideshowTransitions([_SlideshowTransitionC[transitionName]]);

                    var effectStr = _SlideshowTransitionCodes[transitionName];

                    if (transitionNameTextBox) {
                        transitionNameTextBox.value = transitionName;
                    }
                    if (transitionCodeTextBox) {
                        transitionCodeTextBox.value = effectStr;
                    }
                }
                catch (e) {
                }
            }

            TransitionTextBoxClickEventHandler = function (event) {
                transitionCodeTextBox.select();

                $Jssor$.$CancelEvent(event);
                $Jssor$.$StopEvent(event);
            }

            var transitionCodeTextBox = document.getElementById("stTransition");
            var transitionNameTextBox = document.getElementById("stTransitionName");
            $Jssor$.$AddEvent(transitionCodeTextBox, "click", TransitionTextBoxClickEventHandler);

            //responsive code begin
            //remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 600));
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);

            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
    </script>
    <script type="text/javascript">
        jssor_slider1_init("slider1_container");
    </script>
@stop