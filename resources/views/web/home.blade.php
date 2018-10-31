@extends('web.layouts.e_master')

@section('title', 'OZ DOLLARS : Home')

@section('head')
    <link rel="stylesheet" href="{{url('css/bootstrap-touch-slider.css')}}"/>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.min.js"></script>
    <style type="text/css">
        .banner_slider {
            width: 100%;
            height: 500px;
            overflow: hidden;
        }

        .banner_slider .item img {
            height: 100%;
        }

        .banner_arrow {
            top: 50%;
            width: 45px;
            height: 45px;
            background: #fff;
            position: absolute;
            line-height: 45px;
            font-size: 24px;
            text-align: center;
            border-radius: 50%;
            color: #757575;
            transition: .5s all;
            z-index: 10;
        }

        .banner_arrow:hover {
            background: rgba(45, 45, 45, 0.6);
            color: #ffffff;
        }

        .banner_left {
            left: 1%;
        }

        .banner_right {
            right: 1% !important;
        }

        .owl-carousel {
            width: 100%;
            -webkit-tap-highlight-color: transparent;
            /* position relative and z-index fix webkit rendering fonts issue */
            position: relative;
            z-index: 1;
            margin: 10px 0px 0px 0px;
        }

        .owl-dots {
            display: none;
        }

        .owl-carousel .product_block {
            width: 100%;
            text-align: left;
        }

        .owl-carousel .owl-stage {
            position: relative;
            -ms-touch-action: pan-Y;
            touch-action: manipulation;
            -moz-backface-visibility: hidden;
            /* fix firefox animation glitch */
        }

        .owl-carousel .owl-stage:after {
            content: ".";
            display: block;
            clear: both;
            visibility: hidden;
            line-height: 0;
            height: 0;
        }

        .owl-carousel .owl-stage-outer {
            position: relative;
            overflow: hidden;
            /* fix for flashing background */
            -webkit-transform: translate3d(0px, 0px, 0px);
        }

        .owl-carousel .owl-wrapper,
        .owl-carousel .owl-item {
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
        }

        .owl-carousel .owl-item {
            position: relative;
            min-height: 1px;
            float: left;
            -webkit-backface-visibility: hidden;
            -webkit-tap-highlight-color: transparent;
            -webkit-touch-callout: none;
        }

        .owl-carousel .owl-item img {
            display: block;
            width: 100%;
        }

        .owl-carousel .owl-dots.disabled {
            display: none;
        }

        .owl-carousel .owl-nav .owl-prev,
        .owl-carousel .owl-nav .owl-next,
        .owl-carousel .owl-dot {
            cursor: pointer;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .owl-carousel button.owl-dot {
            color: inherit;
            padding: 0 !important;
            font: inherit;
        }

        .owl-carousel.owl-loaded {
            display: block;
        }

        .owl-carousel.owl-loading {
            opacity: 0;
            display: block;
        }

        .owl-carousel.owl-hidden {
            opacity: 0;
        }

        .owl-carousel.owl-refresh .owl-item {
            visibility: hidden;
        }

        .owl-carousel.owl-drag .owl-item {
            -ms-touch-action: pan-y;
            touch-action: pan-y;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .owl-carousel.owl-grab {
            cursor: move;
            cursor: grab;
        }

        .owl-carousel.owl-rtl {
            direction: rtl;
        }

        .owl-carousel.owl-rtl .owl-item {
            float: right;
        }

        .no-js .owl-carousel {
            display: block;
        }

        .owl-carousel .animated {
            animation-duration: 1000ms;
            animation-fill-mode: both;
        }

        .owl-carousel .owl-animated-in {
            z-index: 0;
        }

        .owl-carousel .owl-animated-out {
            z-index: 1;
        }

        .owl-carousel .fadeOut {
            animation-name: fadeOut;
        }

        @keyframes fadeOut {
            0% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }

        /*
         * 	Owl Carousel - Auto Height Plugin
         */
        .owl-height {
            transition: height 500ms ease-in-out;
        }

        .owl-carousel .owl-item .owl-lazy {
            opacity: 0;
            transition: opacity 400ms ease;
        }

        .owl-carousel .owl-item .owl-lazy[src^=""], .owl-carousel .owl-item .owl-lazy:not([src]) {
            max-height: 0;
        }

        .owl-carousel .owl-item img.owl-lazy {
            transform-style: preserve-3d;
        }

        .slider_nav {
            position: absolute;
            right: 80px;
            top: -50px;
        }

        .glo_sliderarrow_btn {
            width: 25px;
            height: 25px;
            background: #ffffff;
            display: inline-block;
            margin-left: 10px;
            line-height: 22px !important;
            color: #c3c0c0;
            transition: .5s all;
            outline: none;
            text-align: center;
            border: solid thin #e4d8d8;
            padding: 0px;
        }

        .glo_sliderarrow_btn i {
            font-size: 18px;
        }

        .glo_sliderarrow_btn:hover {
            background: #e4002b;
            color: #ffffff;
            border-color: #e4002b;
        }

        .slider_headtxt {
            font-size: 18px;
            text-transform: uppercase;
            padding-bottom: 10px;
            line-height: 38px;
        }

        .carousal_head {
            width: 100%;
            display: inline-block;
            border-bottom: solid thin #ccc;
            padding-bottom: 3px;
            margin-bottom: 5px;
            position: relative;
        }

        .slider_headtxt {
            font-size: 18px;
            text-transform: uppercase;
            padding-bottom: 10px;
            line-height: 38px;
            color: #86bc43;
            border-bottom: solid 2px #86bc43;
        }

        .product_carousal_allbox {
            width: 100%;
            display: inline-block;
            padding: 0px 30px;
        }

        .view_all_btn {
            background: #012169;
            padding: 4px 10px 4px 10px;

            position: absolute;
            right: 0px;
            top: 5px;
            color: white;
        }
    </style>
@stop

@section('content')
    <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line "
         data-ride="carousel"
         data-pause="hover" data-interval="3500">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="images/oz-images/oz-banner1.jpg" alt="Oz Doller" class="slide-image"/>
                <div class="bs-slider-overlay"></div>
                <div class="main_banner_txt">
                    <div class="main_txt">
                        Get The Latest Antiques From <span style="color: #dca816;">OZ DOLLARS </span></div>
                    <div class="subhead">Quality you expect at a fair price.
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/oz-images/oz-banner7.jpg" alt="OZ Doller" class="slide-image"/>
                <div class="bs-slider-overlay"></div>
                <div class="main_banner_txt">
                    <div class="main_txt">Antiques <span style="color: #dca816;">Collections</span></div>
                    <div class="subhead"> The world's largest curated marketplace for antiques. The easiest way to
                        collect items of such beauty and authenticity.
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/oz-images/oz-banner5.jpg" alt="OZ Doller" class="slide-image"/>
                <div class="bs-slider-overlay"></div>
                <div class="main_banner_txt">
                    <div class="main_txt">Antiques <span style="color: #dca816;">Marketplace</span></div>
                    <div class="subhead">Antique is one of the best marketplace that allows you to buy the items you
                        love
                        and discover new favorites.
                    </div>
                </div>
            </div>
            <!--        <div class="item">-->
            <!--            <img src="images/bann-03.jpg" alt="Organic Dolchi" class="slide-image"/>-->
            <!--            <div class="bs-slider-overlay"></div>-->
            <!--            <div class="main_banner_txt">-->
            <!--                <div class="main_txt">Enjoy The <span style="color: #e4da89;">OZ DOLLARS </span></div>-->
            <!---->
            <!--                <div class="subhead"><!--Fresh, organic ingredients. Healthy, chef-crafted recipes.-->
            <!--            Right at your doorstep.-->-->
            <!--                    Good For Nature, Good For You-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
        </div>
        <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
            <span class="mdi mdi-arrow-left-bold" aria-hidden="true"></span>
        </a>
        <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
            <span class="mdi mdi-arrow-right-bold" aria-hidden="true"></span>
        </a>
    </div>
    <section class="about_block">
        <div class="container">
            <div class="main_heading">
                <div class="main_head_txt">
                    Welcome To OZ DOLLARS
                </div>

                <div class="about_heading">
                    Quality you expect at a fair price.
                </div>
            </div>
            <div class="col-sm-3 product-section">
                <div class="collection_about_brics">
                    <div class="icons_block">
                        <div class="gamba-circles">
                            <div class="circle"></div>
                            <div class="circle"></div>
                            <div class="circle"></div>
                            <div class="circle"></div>
                        </div>
                        <i class="about_icons mdi mdi-headset"></i>
                    </div>
                    <div class="about_heading">ONLINE SUPPORT</div>
                    <div class="about_basic_txt">To give without any reward, or any notice, has a special quality of its
                        own.
                    </div>
                </div>
                <div class="collection_about_brics">
                    <div class="icons_block">
                        <div class="gamba-circles">
                            <div class="circle"></div>
                            <div class="circle"></div>
                            <div class="circle"></div>
                            <div class="circle"></div>
                        </div>
                        <i class="about_icons mdi mdi-tag"></i>
                    </div>
                    <div class="about_heading">SPECIAL OFFER</div>
                    <div class="about_basic_txt">Don't Miss Out On our special limited tune offers.</div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="center_about_img">
                    <img src="images/oz-images/about-oz-center.png"/>
                </div>
            </div>
            <div class="col-sm-3 product-section">
                <div class="collection_about_brics">
                    <div class="icons_block">
                        <div class="gamba-circles">
                            <div class="circle"></div>
                            <div class="circle"></div>
                            <div class="circle"></div>
                            <div class="circle"></div>
                        </div>
                        <i class="about_icons mdi mdi-account-edit"></i>
                    </div>
                    <div class="about_heading">Wholesales Registration</div>
                    <div class="about_basic_txt">The only e-commerce plugin you need for your wholesale requirements.
                    </div>
                </div>
                <div class="collection_about_brics">
                    <div class="icons_block">
                        <div class="gamba-circles">
                            <div class="circle"></div>
                            <div class="circle"></div>
                            <div class="circle"></div>
                            <div class="circle"></div>
                        </div>
                        <i class="about_icons flaticon-flour"></i>
                    </div>
                    <div class="about_heading">Best Quality</div>
                    <div class="about_basic_txt">One of a Kind Pieces with Historical Value</div>
                </div>
            </div>
        </div>
    </section>
    <section class="product_mainblock">
        <div class="container-fluid">
            <div class="main_heading">
                <div class="main_head_txt">
                    Our Products
                </div>
                <div class="organic_border">
                    <span class="organic_icons"></span>
                </div>
            </div>
            <div class="product_carousal_allbox">
                <div class="carousal_head">
                    <span class="filter_head_txt slider_headtxt">Our Products</span>
                    <a href="{{url('product_list')}}"><span class="view_all_btn">All View</span></a>
                </div>
                <div class="owl-carousel brics_5">
                    @foreach ($items as $item)
                        <div class="item">
                            <div class="product_block">

                                @if(isset($item->special_price))
                                    <div class="save_amt">Save <i class="mdi mdi-currency-usd"></i> {{$item->price-$item->special_price}}</div>

                                    <div class="product_amt"><span class="product_amt_less"><i
                                                    class="mdi mdi-currency-usd"></i>{{number_format($item->price,2)}}</span><span
                                                class="product_amt_real"> <i
                                                    class="mdi mdi-currency-usd"></i>{{number_format($item->special_price,2)}}</span>
                                    </div>
                                @else
                                    <span class="product_amt_real"><i
                                                class="mdi mdi-currency-usd"></i>{{number_format($item->price,2)}}</span>
                                @endif
                                <div class="product_img">
                                    <?php $image = \App\ItemImages::where(['item_master_id' => $item->id])->first(); ?>
                                    @if(isset($image))
                                        <img src="{{url('p_img').'/'.$item->id.'/'.$image->image}}">
                                    @else
                                        <img src="{{url('images/default.png')}}">
                                    @endif
                                    <div class="hover_center_block" data-toggle="modal"
                                         data-target="#Modal_ViewProductDetails"
                                         id="{{$item->id}}" onclick="getItemDetails(this)">
                                        <div class="product_hover_block">
                                            <div class="mdi mdi-magnify"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_name"><a class="product_details_link"
                                                             href="{{url('view_product').'/'.encrypt($item->id)}}">
                                        {{$item->name}}</a></div>
                                <div class="availability_product_container">

                                </div>
                                <div class="spinner_withbtn">
                                    <div class="input-group qty_box">
                                        <span class="qty_txt">Qty</span>
                                        <input type="number" class="form-control text-center qty_edittxt" min="1"
                                               max="10"
                                               value="1" id="qty_{{$item->id}}">
                                    </div>
                                    <button class="spinner_addcardbtn btn-primary" type="button"
                                            onclick="AddTOcart(this);">
                                        <i class="mdi mdi-cart"></i> <span class="button-group_text">Add</span></button>
                                    <button class="spinner_addcardbtn btn-primary" id="{{$item->id}}" type="button"
                                            data-content="{{$item->id}}" {{--$price->id--}} onclick="AddTOcart(this);">
                                        <i id="{{$item->id}}"
                                           class="mdi mdi-basket"></i>
                                        <span class="button-group_text">Add</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="product_carousal_allbox">
                <div class="carousal_head">
                    <span class="filter_head_txt slider_headtxt">Special of the Month</span>
                    <a href="{{url('product_list')}}"><span class="view_all_btn">All View</span></a>
                </div>
                <div class="owl-carousel brics_5">
                    @foreach ($items as $item)
                        @if($item->is_special_month==1)
                            <div class="item">
                                <div class="product_block">

                                    @if(isset($item->special_price))
                                        <div class="save_amt">Save <i class="mdi mdi-currency-usd"></i> {{$item->price-$item->special_price}}</div>

                                        <div class="product_amt"><span class="product_amt_less"><i
                                                        class="mdi mdi-currency-usd"></i>{{number_format($item->price,2)}}</span><span
                                                    class="product_amt_real"> <i
                                                        class="mdi mdi-currency-usd"></i>{{number_format($item->special_price,2)}}</span>
                                        </div>
                                    @else
                                        <span class="product_amt_real"><i
                                                    class="mdi mdi-currency-usd"></i>{{number_format($item->price,2)}}</span>
                                    @endif
                                    <div class="product_img">
                                        <?php $image = \App\ItemImages::where(['item_master_id' => $item->id])->first(); ?>
                                        @if(isset($image))
                                            <img src="{{url('p_img').'/'.$item->id.'/'.$image->image}}">
                                        @else
                                            <img src="{{url('images/default.png')}}">
                                        @endif
                                        <div class="hover_center_block" data-toggle="modal"
                                             data-target="#Modal_ViewProductDetails"
                                             id="{{$item->id}}" onclick="getItemDetails(this)">
                                            <div class="product_hover_block">
                                                <div class="mdi mdi-magnify"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product_name"><a class="product_details_link"
                                                                 href="{{url('view_product').'/'.encrypt($item->id)}}">
                                            {{$item->name}}</a></div>
                                    <div class="availability_product_container">

                                    </div>
                                    <div class="spinner_withbtn">
                                        <div class="input-group qty_box">
                                            <span class="qty_txt">Qty</span>
                                            <input type="number" class="form-control text-center qty_edittxt" min="1"
                                                   max="10"
                                                   value="1" id="qty_{{$item->id}}">
                                        </div>
                                        <button class="spinner_addcardbtn btn-primary" type="button"
                                                onclick="AddTOcart(this);">
                                            <i class="mdi mdi-cart"></i> <span class="button-group_text">Add</span>
                                        </button>
                                        <button class="spinner_addcardbtn btn-primary" id="{{$item->id}}" type="button"
                                                data-content="{{$item->id}}"
                                                {{--$price->id--}} onclick="AddTOcart(this);">
                                            <i id="{{$item->id}}"
                                               class="mdi mdi-basket"></i>
                                            <span class="button-group_text">Add</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="product_carousal_allbox">
                <div class="carousal_head">
                    <span class="filter_head_txt slider_headtxt">Latest Product</span>
                    <a href="{{url('product_list')}}"><span class="view_all_btn">All View</span></a>
                </div>
                <div class="owl-carousel brics_5">
                    @foreach ($items as $item)
                        <div class="item">
                            <div class="product_block">

                                @if(isset($item->special_price))
                                    <div class="save_amt">Save <i class="mdi mdi-currency-usd"></i> {{$item->price-$item->special_price}}</div>

                                    <div class="product_amt"><span class="product_amt_less"><i
                                                    class="mdi mdi-currency-usd"></i>{{number_format($item->price,2)}}</span><span
                                                class="product_amt_real"> <i
                                                    class="mdi mdi-currency-usd"></i>{{number_format($item->special_price,2)}}</span>
                                    </div>
                                @else
                                    <span class="product_amt_real"><i
                                                class="mdi mdi-currency-usd"></i>{{number_format($item->price,2)}}</span>
                                @endif
                                <div class="product_img">
                                    <?php $image = \App\ItemImages::where(['item_master_id' => $item->id])->first(); ?>
                                    @if(isset($image))
                                        <img src="{{url('p_img').'/'.$item->id.'/'.$image->image}}">
                                    @else
                                        <img src="{{url('images/default.png')}}">
                                    @endif
                                    <div class="hover_center_block" data-toggle="modal"
                                         data-target="#Modal_ViewProductDetails"
                                         id="{{$item->id}}" onclick="getItemDetails(this)">
                                        <div class="product_hover_block">
                                            <div class="mdi mdi-magnify"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_name"><a class="product_details_link"
                                                             href="{{url('view_product').'/'.encrypt($item->id)}}">
                                        {{$item->name}}</a></div>
                                <div class="availability_product_container">

                                </div>
                                <div class="spinner_withbtn">
                                    <div class="input-group qty_box">
                                        <span class="qty_txt">Qty</span>
                                        <input type="number" class="form-control text-center qty_edittxt" min="1"
                                               max="10"
                                               value="1" id="qty_{{$item->id}}">
                                    </div>
                                    <button class="spinner_addcardbtn btn-primary" type="button"
                                            onclick="AddTOcart(this);">
                                        <i class="mdi mdi-cart"></i> <span class="button-group_text">Add</span>
                                    </button>
                                    <button class="spinner_addcardbtn btn-primary" id="{{$item->id}}" type="button"
                                            data-content="{{$item->id}}"
                                            {{--$price->id--}} onclick="AddTOcart(this);">
                                        <i id="{{$item->id}}"
                                           class="mdi mdi-basket"></i>
                                        <span class="button-group_text">Add</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
    <div id="Modal_ViewProductDetails" class="modal fade-scale" tabindex="-1" aria-labelledby="myModalLabel"
         role="dialog">
        <div class="modal-dialog product_details_model">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Product Details</h4>
                </div>
                <div class="modal-body">
                    <div class="all_data_view">
                        <div class="col-sm-6">
                            <div class="magnifyimages_box">
                                <div class="magnify">
                                    <div class="large" id="view_large_bg"></div>
                                    <img class="small" id="view_images" src="images/1.jpg"/>
                                </div>
                                <div class="images_thumbbox">
                                    <img class="brics_images" src="images/2.jpg" onclick="appendimages(this);"/>
                                    <img class="brics_images" src="images/4.jpg" onclick="appendimages(this);"/>
                                    <img class="brics_images" src="images/5.jpg" onclick="appendimages(this);"/>
                                    <img class="brics_images" src="images/6.jpg" onclick="appendimages(this);"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="more_other_details">
                                <div class="more_product_head">
                                    Fortune Plus Soya Oil Pouch 1 LT
                                </div>
                                <div class="option_availability">
                                    <div class="option_txt">Option Availibity :</div>
                                    <select class="form-control rate" name="unit" value="" id="unit3">
                                        <option value="7">1 kg -
                                            Rs.20.00
                                        </option>
                                        <option value="8">500 gm -
                                            Rs.10.00
                                        </option>
                                    </select>
                                </div>
                                <div class="option_availability">
                                    <div class="option_txt">Qty :</div>
                                    <input type="number" min="1" max="10" class="form-control text-center" value="1"/>
                                </div>
                                <div class="option_availability">
                                    <button class="more_addToCart btn-primary" type="button">
                                        <i class="mdi mdi-cart"></i> <span class="button-group__text">Add</span>
                                    </button>
                                </div>
                                <div class="more_product_head">
                                    Description :
                                </div>
                                <div class="more_product_details">
                                    Fortune Plus Soya Oil Pouch 1 LT Fortune Plus Soya Oil Pouch 1 LT Fortune Plus Soya
                                    Oil
                                    Pouch 1 LTFortune Plus Soya Oil Pouch 1 LT Fortune Plus Soya Oil Pouch 1 LT
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{url('js/owl.carousel.js')}}"></script>
    <!--<script src="js/bootstrap-touch-slider.js" type="text/javascript"></script>-->
    <script type="text/javascript">
        function appendimages(dis) {
            var src_no = $(dis).attr('src');
            $('#view_images').attr('src', src_no);
            $('#view_large_bg').css('background-image', 'url("' + src_no + '")');
        }
        function Initialize_ProductDetails() {
            var native_width = 0;
            var native_height = 0;
            $(".large").css("background", "url('" + $(".small").attr("src") + "') no-repeat");
            //Now the mousemove function
            $(".magnify").mousemove(function (e) {
                if (!native_width && !native_height) {
                    var image_object = new Image();
                    image_object.src = $(".small").attr("src");
                    native_width = image_object.width;
                    native_height = image_object.height;
                }
                else {
                    var magnify_offset = $(this).offset();
                    var mx = e.pageX - magnify_offset.left;
                    var my = e.pageY - magnify_offset.top;
                    if (mx < $(this).width() && my < $(this).height() && mx > 0 && my > 0) {
                        $(".large").fadeIn(100);
                    }
                    else {
                        $(".large").fadeOut(100);
                    }
                    if ($(".large").is(":visible")) {
                        var rx = Math.round(mx / $(".small").width() * native_width - $(".large").width() / 2) * -1;
                        var ry = Math.round(my / $(".small").height() * native_height - $(".large").height() / 2) * -1;
                        var bgp = rx + "px " + ry + "px";
                        var px = mx - $(".large").width() / 2;
                        var py = my - $(".large").height() / 2;
                        $(".large").css({left: px, top: py, backgroundPosition: bgp});
                    }
                }
            });
        }
        function AddTOcart(dis) {
            var cart = $('#baskit_block');
            var cart_counter = $('#baskit_counter');
            var cart_value = Number($(cart_counter).text());
            cart_value++;
            var imgtodrag = $(dis).parent().parent().find("img").eq(0);
            if (imgtodrag) {
                var imgclone = imgtodrag.clone()
                    .offset({
                        top: imgtodrag.offset().top,
                        left: imgtodrag.offset().left
                    })
                    .css({
                        'opacity': '0.5',
                        'position': 'absolute',
                        'height': '150px',
                        'width': '150px',
                        'z-index': '100'
                    })
                    .appendTo($('body'))
                    .animate({
                        'top': cart.offset().top + 10,
                        'left': cart.offset().left + 10,
                        'width': 50,
                        'height': 50
                    }, 1000, 'easeInOutExpo');

                setTimeout(function () {
                    cart.effect("shake", {
                        times: 1
                    }, 100);
                    cart_counter.text(cart_value);
                }, 1500);

                imgclone.animate({
                    'width': 0,
                    'height': 0
                }, function () {
                    $(this).detach()
                });
            }
        }
        $(document).ready(function () {
            debugger;
            /* $(window).scroll(function () {
             var curr_scroll = $(window).scrollTop();
             var scrollposition=$('#product_all_container').offset().top;
             var footer_position=$('#footer').offset().top;
             var lasthgt = $('#retaurant_height').height()-500;
             if (curr_scroll > footer_position) {
             $('#product_filter_container').addClass('filter_scroll_fixed');
             // $('#right_advertisebox').addClass('right_adverfixed_remove');
             }else {
             $('#product_filter_container').removeClass('filter_scroll_fixed');
             //$('#right_advertisebox').removeClass('right_adverfixed_remove');
             }
             });*/
//        $('#bootstrap-touch-slider').bsTouchSlider();
            var owl = $('.brics_5');
            owl.owlCarousel({
                items: 4,
                loop: true,
                margin: 15,
                autoplay: true,
                autoplayTimeout: 1500,
                autoplayHoverPause: true,
                navigation: true
            });
            var owl_right = $('.brics_5_right');
            owl_right.owlCarousel({
                items: 4,
                loop: true,
                margin: 15,
                autoplay: true,
                autoplayTimeout: 1500,
                autoplayHoverPause: true,
                rtl: true,
                navigation: true
            });
        });
        window.onload = function (e) {
            setTimeout(function () {
                $('#page_loader').fadeOut('slow');
            }, 2000);
        }
        $(window).scroll(function (event) {
            var chk_scroll = $(window).scrollTop();
            if (chk_scroll > 70) {
                $('#top_header_menu').addClass('fixed_menu');
            } else {
                $('#top_header_menu').removeClass('fixed_menu');
            }
        });
    </script>
@stop