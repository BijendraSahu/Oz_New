@extends('web.layouts.e_master')

@section('title', 'Taj Tailors : About')
{{--<style>--}}
{{--.main_div{--}}
{{--margin-bottom: 170px;--}}
{{--margin-top: 60px;--}}
{{--background: white;--}}
{{--}--}}
{{--.bottom_div {--}}
{{--box-shadow: 0px 0px 20px 0px #ccccccb5;--}}
{{--/* border: 5px solid #ccc; */--}}
{{--height: 100px;--}}
{{--width: 100%;--}}
{{--}--}}
{{--.img_div{--}}
{{--height: 400px;--}}
{{--width: 370px;--}}
{{--}--}}
{{--.p_txt {--}}
{{--font-family: initial;--}}
{{--text-align: center;--}}
{{--/* padding: 7px; */--}}
{{--padding-top: 15px;--}}
{{--font-size: 40px;--}}
{{--}--}}
{{--.about{--}}
{{--background: blanchedalmond;--}}
{{--/*margin-top: 40px;*/--}}
{{--text-align: center;--}}
{{--/* color: white; */--}}
{{--margin-bottom: 40px;--}}
{{--padding: 10px 0px 0px 0px;--}}
{{--height:100px;--}}
{{--border: 4px solid grey;--}}
{{--}--}}
{{--.story_img {--}}
{{--position: relative;--}}
{{--height: 400px;--}}
{{--width: 50%;--}}
{{--box-shadow: -3px 3px 20px #bcb8b8;--}}
{{--/* margin-bottom: 50px; */--}}
{{--/* margin-top: 50px; */--}}
{{--}--}}
{{--.story_img1 {--}}
{{--box-shadow: 3px 3px 20px #bcb8b8;--}}
{{--position: absolute;--}}
{{--height: 400px;--}}
{{--width: 50%;--}}
{{--margin-left: -90px;--}}
{{--/* margin-bottom: 50px; */--}}
{{--margin-top: 100px;--}}
{{--}--}}
{{--.div_style{--}}
{{--margin-top: 40px;--}}
{{--padding: 0px;--}}
{{--border-left: 10px solid white;--}}
{{--}--}}
{{--.style_img{--}}
{{--border-radius: 230px;--}}
{{--width: 70%;--}}
{{--height: 270px;--}}
{{--box-shadow: 7px 4px 20px #ccccccb8;--}}
{{--}--}}
{{--.story_style_img{--}}
{{--width: 100%;--}}
{{--height: 400px;--}}
{{--}--}}
{{--.h1_heading{--}}
{{--font-family: -webkit-body;--}}
{{--text-transform: uppercase;--}}
{{--font-weight: bold;--}}
{{--margin-left: 20px;--}}
{{--margin-top: 30px;--}}
{{--}--}}
{{--.para_div{--}}
{{--line-height: 25px;--}}
{{--font-size: 16px;--}}
{{--font-family: inherit;--}}
{{--}--}}
{{--.h2_heading{--}}
{{--font-size: 54px;--}}
{{--font-family: initial;--}}
{{--color: #2265a7;--}}
{{--}--}}
{{--.about_btn{--}}
{{--text-transform: uppercase;--}}
{{--font-size: 13px;--}}
{{--color: white;--}}
{{--background: #b6cde2;--}}
{{--padding: 15px;--}}
{{--text-decoration: none;--}}
{{--}--}}
{{--a.about_btn {--}}
{{--text-decoration: none;--}}
{{--color: white;--}}
{{--}--}}
{{--.h2_style{--}}
{{--font-family: initial;--}}
{{--color: brown;--}}
{{--}--}}
{{--.banner_about{--}}
{{--width: 100%;--}}
{{--font-size: 50px;--}}
{{--height: 300px;--}}
{{--}--}}
{{--.centered {--}}
{{--position: absolute;--}}
{{--top: 50%;--}}
{{--left: 50%;--}}
{{--color: white;--}}
{{--font-size: 50px;--}}
{{--transform: translate(-50%, -50%);--}}
{{--}--}}
{{--</style>--}}
<style type="text/css">
    .about_bannerbox {
        position: relative;
        width: 100%;
        display: inline;
    }

    .banner_about {
        width: 100%;
    }

    .banner_txt {
        position: absolute;
        top: 50%;
        left: 50%;
        color: #ffffff;
        font-size: 60px;
        transform: translate(-50%, -50%);
        text-transform: uppercase;
        text-shadow: 2px 3px #232323;
        z-index: 10;
    }

    .about_div {
        margin-bottom: 170px;
        margin-top: 60px;
    }

    .story_img {
        height: 400px;
        width: 50%;
        box-shadow: -3px 3px 20px #bcb8b8;
    }

    .story_img1 {
        box-shadow: 3px 3px 20px #cccccc;
        position: absolute;
        height: 100%;
        width: 50%;
        margin-left: -90px;
        margin-top: 100px;
    }

    .story_div h2 {
        font-size: 54px;
        font-family: initial;
        color: #005a3c;
        text-transform: uppercase;
    }

    .story_div p {
        line-height: 25px;
        font-size: 16px;
        font-family: inherit;
        color: #666666;
    }

    .our_workblock {
        width: 100%;
        background: #f5f5f5;
        padding: 30px 0px;
        margin: 30px 0px;
    }

    .main_heading {
        text-align: center;
        display: inline-block;
        width: 100%;
        font-family: Playfair Display;
    }

    .main_offer_box {
        margin: 20px 0px;
        display: inline-block;
        width: 100%;
    }

    .offer_box {
        width: 100%;
        text-align: center;
        margin: 30px 0px;
        box-shadow: 0px 0px 20px 0px #cccccce0;
    }

    .offer_box img {
        width: 100%;
        height: 400px;
    }

    .bottom_div {
        width: 100%;
        padding: 15px 0px;
    }

    .p_txt {
        font-size: 30px;
        text-transform: uppercase;
        margin: 0px;
        text-shadow: 1px 1px #cecece;
        color: #666666;
    }
    .service-star-svg {
        display: block;
        width: 291px;
        height: 291px;
        margin-left: auto;
        margin-right: auto;
        /*clip-path: url(#star-clip-path);*/
    }
    .service-star-clip-path, .service-star-svg-image {
        -webkit-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        -webkit-transition: all .6s;
        transition: all .6s;
    }
    .service-star-clip-path, .service-star-svg-image {
        -webkit-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        -webkit-transition: all .6s;
        transition: all .6s;
    }
    .service-star-svg:hover .service-star-clip-path {
        -webkit-transform: rotate(10deg);
        transform: rotate(10deg);
    }
    .service-star-svg:hover .service-star-svg-image {
        -webkit-transform: rotate(-10deg) scale(1.08);
        transform: rotate(-10deg) scale(1.08);
    }
</style>
@section('head')
    <section id="top-offerts" class="feedback_block" style="display: none">
        <div class="container">
            <div class="row">
                <div class="col-md-12 effect-5 effects">
                    <div class="main_heading">
                        <div class="main_head_txt">
                            About Us
                        </div>
                        <div class="border_bottom main_border line"></div>
                    </div>
                    <div class="img-office col-md-7"><img src="images/febric_banner_img.png" alt="office"></div>
                    <div class="desc-office1 about col-md-7">
                        <h3>Tailor experience the best!</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo
                            consequt. </p>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                            anim
                            id est laborum.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                            anim
                            id est laborum.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo
                            consequat. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about_bannerbox">
        <img src="images/coustom_images/about_us.jpg" class="banner_about"/>
        <div class="banner_txt">About Us</div>
    </section>
    <section class="about_div">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 ">
                    <img src="images/coustom_images/pant.jpg" class="story_img"/>
                    <img src="images/coustom_images/shirt3.jpg" class="story_img1"/>
                </div>
                <div class="col-sm-5 story_div">
                    <h2>Discover true Quality</h2>
                    <p>
                        We provide you with great suits that befit you and your lifestyle.
                        Our suits are made from the highest quality fabrics and guaranteed to
                        give you functionality, durability and comfort. Our skilled master tailors
                        handle all of our cutting and sewing, ensuring precision in all production
                        processes and paying attention to the details. Come to us and choose the best
                        suit for your lifestyle.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="our_workblock" style="display: none;">
        <div class="container">
            <div class="main_heading">
                <div class="main_head_txt">
                    Our Services
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <svg class="service-star-svg">
                        <g class="service-star-clip-path" clip-path="url(#star-clip-path)">
                            <image class="service-star-svg-image" width="100%" height="100%"
                                   xlink:href="images/coustom_images/style_img4.jpg"
                                   preserveAspectRatio="xMidYMid slice"></image>
                        </g>
                    </svg>
                </div>
                <div class="col-sm-4">
                    <svg class="service-star-svg">
                        <g class="service-star-clip-path" clip-path="url(#star-clip-path)">
                            <image class="service-star-svg-image" width="100%" height="100%"
                                   xlink:href="images/coustom_images/style_img5.jpg"
                                   preserveAspectRatio="xMidYMid slice"></image>
                        </g>
                    </svg>
                </div>
                <div class="col-sm-4">
                    <svg class="service-star-svg">
                        <g class="service-star-clip-path" clip-path="url(#star-clip-path)">
                            <image class="service-star-svg-image" width="100%" height="100%"
                                   xlink:href="images/coustom_images/style_img3.jpg"
                                   preserveAspectRatio="xMidYMid slice"></image>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <section class="main_offer_box">
        <div class="container">
            <div class="main_heading">
                <div class="main_head_txt">
                    WHAT WE OFFER
                </div>
            </div>
            <div class="row">

                <div class="col-sm-4">
                    <div class="offer_box">
                        <img src="images/coustom_images/suit2.jpg"/>
                        <div class="bottom_div">
                            <p class="p_txt">Suits</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="offer_box">
                        <img src="images/coustom_images/shirt3.jpg"/>
                        <div class="bottom_div">
                            <p class="p_txt">Shirts</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="offer_box">
                        <img src="images/coustom_images/pant.jpg"/>
                        <div class="bottom_div">
                            <p class="p_txt">Pants</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <svg style="position:absolute; width:0; height:0; overflow:hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <defs> <clipPath id="star-clip-path"> <path d="M143.3 2.7C145.1 1.1 147.9 1.1 149.7 2.7L156.8 8.7C158.4 10 160.6 10.2 162.5 9.2L170.6 4.7C172.7 3.5 175.3 4 176.9 5.9L182.7 13.1C184 14.7 186.2 15.3 188.2 14.7L197 11.8C199.3 11 201.8 12.1 202.9 14.2L207.3 22.4C208.3 24.2 210.3 25.2 212.3 25L221.5 23.8C223.9 23.5 226.2 24.9 226.9 27.3L229.7 36.1C230.3 38.1 232.1 39.5 234.2 39.6L243.4 40.2C245.8 40.4 247.8 42.2 248.1 44.6L249.1 53.9C249.3 55.9 250.8 57.6 252.8 58.1L261.8 60.5C264.1 61.1 265.7 63.3 265.5 65.7L264.8 74.9C264.6 77 265.7 79 267.6 79.9L276 83.8C278.2 84.9 279.3 87.3 278.6 89.7L276.2 98.6C275.6 100.6 276.4 102.8 278 104L285.5 109.5C287.4 110.9 288.1 113.5 287 115.7L282.9 124C282 125.9 282.3 128.1 283.7 129.6L290 136.4C291.6 138.2 291.8 140.9 290.3 142.9L284.7 150.2C283.4 151.9 283.3 154.1 284.4 155.9L289.3 163.8C290.6 165.8 290.2 168.5 288.4 170.1L281.5 176.3C279.9 177.7 279.4 179.9 280.1 181.8L283.4 190.5C284.3 192.8 283.4 195.3 281.3 196.6L273.4 201.3C271.6 202.4 270.7 204.4 271 206.5L272.6 215.6C273.1 218 271.7 220.4 269.4 221.2L260.7 224.4C258.8 225.1 257.5 226.9 257.4 229L257.3 238.2C257.2 240.7 255.5 242.7 253.1 243.1L243.9 244.6C241.9 244.9 240.2 246.4 239.8 248.5L237.9 257.5C237.4 259.9 235.3 261.6 232.9 261.5L223.6 261.2C221.5 261.2 219.6 262.4 218.8 264.3L215.3 272.8C214.3 275.1 211.9 276.3 209.5 275.8L200.5 273.7C198.5 273.3 196.4 274.1 195.2 275.9L190.1 283.6C188.8 285.6 186.2 286.4 183.9 285.4L175.4 281.7C173.5 280.8 171.3 281.3 169.9 282.7L163.4 289.3C161.7 291.1 159 291.3 157 290L149.3 284.7C147.6 283.5 145.4 283.5 143.7 284.7L136 290C134 291.3 131.3 291.1 129.6 289.3L123.1 282.7C121.7 281.3 119.5 280.8 117.6 281.7L109.1 285.4C106.8 286.4 104.2 285.6 102.9 283.6L97.8 275.9C96.6 274.1 94.5 273.3 92.5 273.7L83.5 275.8C81.1 276.3 78.7 275.1 77.7 272.8L74.2 264.3C73.4 262.4 71.5 261.2 69.4 261.2L60.1 261.5C57.7 261.6 55.6 259.9 55.1 257.5L53.2 248.5C52.8 246.4 51.1 244.9 49.1 244.6L39.9 243.1C37.5 242.7 35.8 240.7 35.7 238.2L35.6 229C35.5 226.9 34.2 225.1 32.3 224.4L23.6 221.2C21.3 220.4 19.9 218 20.4 215.6L22 206.5C22.3 204.4 21.4 202.4 19.6 201.3L11.7 196.6C9.6 195.3 8.7 192.8 9.6 190.5L12.9 181.8C13.6 179.9 13.1 177.7 11.5 176.3L4.6 170.1C2.8 168.5 2.4 165.8 3.7 163.8L8.6 155.9C9.7 154.1 9.6 151.9 8.3 150.2L2.7 142.9C1.2 140.9 1.4 138.2 3 136.4L9.3 129.6C10.7 128.1 11 125.9 10.1 124L6 115.7C4.9 113.5 5.6 110.9 7.5 109.5L15 104C16.6 102.8 17.4 100.6 16.8 98.6L14.4 89.7C13.7 87.3 14.8 84.9 17 83.8L25.4 79.9C27.3 79 28.4 77 28.2 74.9L27.5 65.7C27.3 63.3 28.9 61.1 31.2 60.5L40.2 58.1C42.2 57.6 43.7 55.9 43.9 53.9L44.9 44.6C45.2 42.2 47.2 40.4 49.6 40.2L58.8 39.6C60.9 39.5 62.7 38.1 63.3 36.1L66.1 27.3C66.8 24.9 69.1 23.5 71.5 23.8L80.7 25C82.7 25.2 84.7 24.2 85.7 22.4L90.1 14.2C91.2 12.1 93.7 11 96 11.8L104.8 14.7C106.8 15.3 109 14.7 110.3 13.1L116.1 5.9C117.7 4 120.3 3.5 122.4 4.7L130.5 9.2C132.4 10.2 134.6 10 136.2 8.7L143.3 2.7Z"/> </clipPath> </defs>
    </svg>
@stop
