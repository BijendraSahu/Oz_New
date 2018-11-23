@extends('web.layouts.e_master')

@section('title', 'Oz Dollars : Product Details')

@section('head')
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
    <style type="text/css">
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            /* background-size: 100%;*/
            /*         width: 18px;
                     height:40px;
                     right: -1px;*/
            /* position: relative;*/
            opacity: 1;
        }

        .qty_edittxt {
            /* position: initial !important;*/
        }

        .long_qty_box {
            max-width: 200px;
        }
    </style>
    <script type="text/javascript">
        function appendimages(dis) {
            var src_no = $(dis).attr('src');
            $('#view_images').attr('src', src_no);
            $('#view_large_bg').css('background-image', 'url("' + src_no + '")');
            Initialize_ProductDetails();
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
//        function checkOffFixed() {
//            if ($('#product_details_containner').offset().top + $('#product_details_containner').height()
//                >= $('#footer').offset().top - 30) {
//                $('#product_details_containner').removeClass('position_fixed_removed');
//                $('#product_details_containner').css('left', 0);
//            }
//            if ($(document).scrollTop() + window.innerHeight < $('#footer').offset().top) {
//                $('#product_details_containner').addClass('position_fixed_removed');
//                $('#product_details_containner').css('left', fixed_leftposition);
//            }
//        }
//        $(document).ready(function () {
//            Initialize_ProductDetails();
//            fixed_leftposition = $('#product_details_containner').offset().left;
//            if ($(document).scrollTop() < 100) {
//                $('#product_details_containner').css('left', fixed_leftposition);
//                $('#product_details_containner').addClass('position_fixed_removed');
//            }
//        });
//        $(document).scroll(function () {
//            checkOffFixed();
//        });
        function Rating_slide() {
            var rating_position = $('#rating_product_row').offset().top;
            $('html, body').animate({scrollTop: rating_position - 95}, 1000);
        }
        function Review_slide() {
            var review_position = $('#review_product_row').offset().top;
            $('html, body').animate({scrollTop: review_position - 95}, 1000);
        }
    </script>
@stop
@section('content')
    <section class="product_viewblock">
        <div class="container-fluid res_pad0">
            <div class="all_data_view">
                <div class="row">
                    <div class="col-sm-5 filter_right_fixed">
                        <div class="product_magnifyimages_box" id="product_details_containner">
                            <div class="magnify">
                                <div class="large" id="view_large_bg"></div>
                                @if(count($item_images)>0 && file_exists("p_img/$item->id/".$item_images[0]->image))
                                    <img class="small" id="view_images"
                                         src="{{url('p_img').'/'.$item->id.'/'.$item_images[0]->image}}">
                                @else
                                    <img class="small" id="view_images" src="{{url('images/default.png')}}">
                                @endif
                            </div>
                            <div class="product_images_thumbbox">
                                @if(count($item_images)>0)
                                    @foreach($item_images as $image)
                                        @if(file_exists("p_img/$item->id/".$image->image))
                                            <img class="product_brics_images"
                                                 src="{{url('p_img').'/'.$item->id.'/'.$image->image}}"
                                                 onclick="appendimages(this);">
                                            {{--@else--}}
                                            {{--<img class="product_brics_images"  src="{{url('images/default.png')}}">--}}
                                        @endif
                                    @endforeach
                                @else
                                    <img class="product_brics_images" id="view_images"
                                         src="{{url('images/default.png')}}"/>
                                @endif

                                {{--<img class="product_brics_images" src="images/grapsh.jpg" onclick="appendimages(this);">--}}
                                {{--<img class="product_brics_images" src="images/potato.jpg" onclick="appendimages(this);">--}}
                                {{--<img class="product_brics_images" src="images/onion.jpg" onclick="appendimages(this);">--}}
                            </div>
                            <div class="availability_boxes">
                                <div class="more_details_txtrow">
                                    <div class="option_txt">Price :</div>
                                    <div class="order_amt"><i class="mdi mdi-currency-usd"></i>{{$item->price}}</div>
                                </div>
                                <div class="more_details_txtrow">
                                    <div class="option_txt">Qty :</div>
                                    <input type="number" min="1" max="10" class="form-control text-center more_details_qty"
                                           value="1"/>
                                </div>

                                <div class="product_btn_box">
                                    <div class="btn btn-warning product_add_tocard" id="{{$item->id}}"
                                          onclick="AddTOcart(this);"
                                         style="margin-right: 4%;">
                                        <i class="mdi mdi-basket"></i>Add To card
                                    </div>
                                    <a href="{{url('checkout')}}" id="{{$item->id}}"
                                       onclick="AddTOcart(this);" class="btn btn-success product_add_tocard"><i
                                                class="mdi mdi-cart"></i>Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="more_productother_details">
                            <div class="more_product_head">
                                {{$item->name}}
                            </div>
                            @php
                                $five = 0;
                                $four = 0;
                                $three = 0;
                                $two = 0;
                                $one = 0;
                                $all = 0;

                            @endphp
                            @foreach($reviews as $review)

                                @if($review->star_rating == 5)
                                    @php $five += 1; $all += 5 @endphp
                                @elseif($review->star_rating == 4)
                                    @php $four += 1; $all += 4  @endphp
                                @elseif($review->star_rating == 3)
                                    @php $three += 1; $all += 3  @endphp
                                @elseif($review->star_rating == 2)
                                    @php $two += 1; $all += 2  @endphp
                                @elseif($review->star_rating == 1)
                                    @php $one += 1; $all += 1  @endphp
                                @endif
                            @endforeach
                            <div class="product_row">
                                <div class="rating_box" onclick="Rating_slide();">
                                    <div class="star_with_txt">
                                        <i class="mdi mdi-star"></i>0.0
                                    </div>
                                    0 Ratings
                                </div>
                                <div class="review_box" onclick="Review_slide();">
                                    <div class="star_with_txt">
                                        <i class="mdi mdi-message-reply-text"></i></div>
                                    0 Reviews
                                </div>
                            </div>
                            {{-- <div class="product_row" style="display: none">
                                 <div class="real_amt">
                                     <i class="mdi mdi-currency-inr"></i>
                                     150.00
                                 </div>
                                 <div class="less_amt">
                                     <i class="mdi mdi-currency-inr"></i>
                                     180.00
                                 </div>
                             </div>--}}
                            {{--<div class="more_product_head product_mainhead">Delivery</div>--}}

                            {{--<div class="option_availability">--}}
                            {{--<div class="option_txt">Delivery</div>--}}
                            {{--<div class="product_right_txt">--}}
                            {{--Usually delivered in 1-2 days.--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="more_product_head product_mainhead">--}}
                                {{--Specifications :--}}
                            {{--</div>--}}
                            {{--<div class="more_product_details">--}}
                                {{--{!! isset($item->specifcation)?$item->specifcation:'-'!!}--}}
                            {{--</div>--}}
                            {{-- <div class="option_availability">
                                 <div class="option_txt">Product Type</div>
                                 <div class="product_right_txt">
                                     Whole Grains
                                 </div>
                             </div>--}}

                            {{--<div class="more_product_head product_mainhead">--}}
                                {{--Ingredients :--}}
                            {{--</div>--}}
                            {{--<div class="more_product_details">--}}
                                {{--{!! isset($item->ingredients)?$item->ingredients:'-'!!}--}}
                            {{--</div>--}}
                            {{--<div class="more_product_head product_mainhead">--}}
                                {{--Available Nutrients :--}}
                            {{--</div>--}}
                            {{--<div class="more_product_details">--}}
                                {{--{!! isset($item->nutrients)?$item->nutrients:'-'!!}--}}
                            {{--</div>--}}
                            <div class="more_product_head product_mainhead">
                                Description :
                            </div>
                            <div class="more_product_details">
                                {!! isset($item->description)?$item->description:'-'!!}
                            </div>
                            {{--<div class="more_product_head product_mainhead">--}}
                                {{--Usage :--}}
                            {{--</div>--}}
                            {{--<div class="more_product_details">--}}
                                {{--{!! isset($item->usage)?$item->usage:'-'!!}--}}
                            {{--</div>--}}

                            <div class="more_product_head product_mainhead" id="rating_product_row">
                                Ratings :
                            </div>

                            <div class="product_row">
                                <div class="well well-sm">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6 text-center">
                                            <h1 class="rating-num">
                                                {{$all/5}}</h1>
                                            {{--                                                {{count($reviews) > 0 ?count($reviews)/$all:'0.0'}}</h1>--}}

                                            <div class="rating">
                                                @for($i = 1; $i<=5; $i++)
                                                    @if($i <= $all/5)
                                                        <span class="glyphicon glyphicon-star"></span>
                                                    @else
                                                        <span class="glyphicon glyphicon-star-empty"></span>
                                                    @endif
                                                @endfor
                                                {{--<span class="glyphicon glyphicon-star">--}}
                                                {{--</span><span class="glyphicon glyphicon-star">--}}

                                                {{--</span><span class="glyphicon glyphicon-star">--}}
                                                {{--</span>--}}
                                            </div>
                                            <span class="glyphicon glyphicon-user basic_icon_margin"></span>{{count($reviews)}}
                                            total

                                        </div>
                                        <div class="col-xs-12 col-md-6">

                                            {{--@php--}}
                                            {{--$five = 0;--}}
                                            {{--$four = 0;--}}
                                            {{--$three = 0;--}}
                                            {{--$two = 0;--}}
                                            {{--$one = 0;--}}

                                            {{--@endphp--}}
                                            {{--@foreach($reviews as $review)--}}

                                            {{--@if($review->star == 5)--}}
                                            {{--@php $five += 1 @endphp--}}
                                            {{--@elseif($review->star == 4)--}}
                                            {{--@php $four += 1 @endphp--}}
                                            {{--@elseif($review->star == 3)--}}
                                            {{--@php $three += 1 @endphp--}}
                                            {{--@elseif($review->star == 2)--}}
                                            {{--@php $two += 1 @endphp--}}
                                            {{--@elseif($review->star == 1)--}}
                                            {{--@php $one += 1 @endphp--}}
                                            {{--@endif--}}

                                            {{--@endforeach--}}
                                            <div class="row rating-desc">
                                                <div class="col-xs-3 col-md-3 text-right">
                                                    <span class="glyphicon glyphicon-star"></span>5
                                                </div>
                                                <div class="col-xs-8 col-md-9">
                                                    <div class="progress progress-striped">
                                                        <div class="progress-bar progress-bar-success"
                                                             role="progressbar"
                                                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                                             style="width: {{count($reviews)>0 ? round($five *100 / count($reviews),2):'0'}}%">
                                                            <span class="sr-only">{{count($reviews)>0 ? round($five *100 / count($reviews),2):'0'}}
                                                                %</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end 5 -->
                                                <div class="col-xs-3 col-md-3 text-right">
                                                    <span class="glyphicon glyphicon-star"></span>4
                                                </div>
                                                <div class="col-xs-8 col-md-9">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-primary"
                                                             role="progressbar"
                                                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                                             style="width: {{count($reviews)>0 ? round($four *100 / count($reviews),2):'0'}}%">
                                                            <span class="sr-only">{{count($reviews)>0 ? round($four *100 / count($reviews),2):'0'}}
                                                                %</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end 4 -->
                                                <div class="col-xs-3 col-md-3 text-right">
                                                    <span class="glyphicon glyphicon-star"></span>3
                                                </div>
                                                <div class="col-xs-8 col-md-9">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-info" role="progressbar"
                                                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                                             style="width: {{count($reviews)>0 ? round($three *100 / count($reviews),2):'0'}}%">
                                                            <span class="sr-only">{{count($reviews)>0 ? round($three *100 / count($reviews),2):'0'}}
                                                                %</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end 3 -->
                                                <div class="col-xs-3 col-md-3 text-right">
                                                    <span class="glyphicon glyphicon-star"></span>2
                                                </div>
                                                <div class="col-xs-8 col-md-9">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-warning"
                                                             role="progressbar"
                                                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                                             style="width: {{count($reviews)>0 ? round($two *100 / count($reviews),2):'0'}}%">
                                                            <span class="sr-only">{{count($reviews)>0 ? round($two *100 / count($reviews),2):'0'}}
                                                                %</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end 2 -->
                                                <div class="col-xs-3 col-md-3 text-right">
                                                    <span class="glyphicon glyphicon-star"></span>1
                                                </div>
                                                <div class="col-xs-8 col-md-9">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-danger" role="progressbar"
                                                             aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                                             style="width:{{count($reviews)>0 ?round($one *100 / count($reviews),2):'0'}}%">
                                                            <span class="sr-only">{{count($reviews)>0 ?round($one *100 / count($reviews),2):'0'}}
                                                                %</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end 1 -->
                                            </div>
                                            <!-- end row -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="more_product_head product_mainhead" id="review_product_row">
                                Reviews :
                            </div>
                            <div class="product_row">
                                <div class="review-block">
                                    @if(count($reviews)>0)
                                        @foreach($reviews as $review)
                                            <div class="row">
                                                <div class="col-sm-4 col-md-3 col-xs-5">
                                                    @if($review->user->profile_img != 'images/Male_default.png' && file_exists($review->user->profile_img))
                                                        <img src="{{url('u_img').'/'.$review->user_id.'/'.$review->user->profile_img}}"/>
                                                    @else
                                                        <img src="{{url('images/Male_default.png')}}"
                                                             class="img-rounded"/>
                                                    @endif
                                                    <div class="review-block-name"><a
                                                                href="#">{{$review->user->name}}</a></div>
                                                    <div class="review-block-date">{{ date_format(date_create($review->created_at), "d-M-Y")}}</div>
                                                </div>
                                                <div class="col-sm-8 col-md-9 col-xs-7 res_pad0">
                                                    <div class="review-block-rate">
                                                        @for($i = 1; $i<=5; $i++)
                                                            @if($i <= $review->star_rating)
                                                                <button type="button" class="btn btn-success btn-xs"
                                                                        aria-label="Left Align">
                                                        <span class="glyphicon glyphicon-star"
                                                              aria-hidden="true"></span>
                                                                </button>
                                                            @else
                                                                <button type="button"
                                                                        class="btn btn-default btn-grey btn-xs"
                                                                        aria-label="Left Align">
                                                        <span class="glyphicon glyphicon-star"
                                                              aria-hidden="true"></span>
                                                                </button>
                                                            @endif
                                                        @endfor
                                                    </div>
                                                    <div class="review-block-title">
                                                        {{$review->review}}
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                        @endforeach
                                    @else
                                        <div class="row">
                                            <span>No Review Available</span>
                                        </div>
                                    @endif

                                    {{--  <div class="row">
                                          <div class="col-sm-3">
                                              <img src="images/testominial_img5.jpg" class="img-rounded">
                                              <div class="review-block-name"><a href="#">Anurag Agrawal</a></div>
                                              <div class="review-block-date">29-jun-2018</div>
                                          </div>
                                          <div class="col-sm-9">
                                              <div class="review-block-rate">
                                                  <button type="button" class="btn btn-success btn-xs"
                                                          aria-label="Left Align">
                                                          <span class="glyphicon glyphicon-star"
                                                                aria-hidden="true"></span>
                                                  </button>
                                                  <button type="button" class="btn btn-success btn-xs"
                                                          aria-label="Left Align">
                                                          <span class="glyphicon glyphicon-star"
                                                                aria-hidden="true"></span>
                                                  </button>
                                                  <button type="button" class="btn btn-success btn-xs"
                                                          aria-label="Left Align">
                                                          <span class="glyphicon glyphicon-star"
                                                                aria-hidden="true"></span>
                                                  </button>
                                                  <button type="button" class="btn btn-success btn-grey btn-xs"
                                                          aria-label="Left Align">
                                                          <span class="glyphicon glyphicon-star"
                                                                aria-hidden="true"></span>
                                                  </button>
                                                  <button type="button" class="btn btn-default btn-grey btn-xs"
                                                          aria-label="Left Align">
                                                          <span class="glyphicon glyphicon-star"
                                                                aria-hidden="true"></span>
                                                  </button>
                                              </div>
                                              <div class="review-block-title">this was nice in buy</div>
                                              <div class="review-block-description">I found this product very
                                                  satisfactory.
                                                  got rid of unwanted scars. A must buy for all dealing with scars and
                                                  marks.
                                              </div>
                                          </div>
                                      </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="similer-product">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="view_similiour_headbox">
                    <div class="viewtype_txt">Similar Products</div>
                    <a href="{{url('product_list')}}" class="btn keep-shoping pull-right"><i
                                class="mdi mdi-briefcase-check basic_icon_margin"></i>View All</a>
                </div>
                <div class="more_productother_details">
                    <div class="product_block">
                        <div class="save_amt">Save Rs. 10</div>

                        <div class="product_amt">
                            <span class="product_amt_less">
        <i class="mdi mdi-currency-inr"></i>40.00</span>
                            <span class="product_amt_real">
        <i class="mdi mdi-currency-inr"></i>50.00</span>
                        </div>
                        <div class="product_img">
                            <img src="{{url('images/teddy-3.png')}}">
                            <div class="hover_center_block">
                                <div class="product_hover_block" onclick="Initialize_ProductDetails();"
                                     data-toggle="modal"
                                     data-target="#Modal_ViewProductDetails">
                                    <div class="mdi mdi-magnify"></div>
                                </div>
                            </div>
                        </div>
                        <div class="product_name">Teddy Bear</div>
                        <div class="product_qty">
                            <select class="form-control product_drop">
                                <option value="5">$ 50</option>
                                <option value="6">Qtv 2 - $ 90</option>
                            </select>
                        </div>

                        <div class="spinner_withbtn">
                            <div class="input-group qty_box">
                                <span class="qty_txt">Qty</span>
                                <input type="number" class="form-control text-center qty_edittxt" min="0" max="10"
                                       value="0">
                            </div>
                            <button class="spinner_addcardbtn btn-primary" type="button" onclick="AddTOcart(this);">
                                <i class="mdi mdi-basket"></i> <span class="button-group_text">Add</span></button>
                        </div>
                    </div>
                    <div class="product_block">
                        <div class="save_amt">Save Rs. 10</div>
                        <div class="product_amt">
                            <span class="product_amt_less">
        <i class="mdi mdi-currency-inr"></i>40.00</span>
                            <span class="product_amt_real">
        <i class="mdi mdi-currency-inr"></i>50.00</span>
                        </div>
                        <div class="product_img">
                            <img src="{{url('images/teddy-1.png')}}">
                            <div class="hover_center_block">
                                <div class="product_hover_block" onclick="Initialize_ProductDetails();"
                                     data-toggle="modal"
                                     data-target="#Modal_ViewProductDetails">
                                    <div class="mdi mdi-magnify"></div>
                                </div>
                            </div>
                        </div>
                        <div class="product_name">Teddy Bear</div>
                        <div class="product_qty">
                            <select class="form-control product_drop">
                                <option value="5">$ 50</option>
                                <option value="6">Qtv 2 - $ 90</option>
                            </select>
                        </div>
                        <div class="spinner_withbtn">
                            <div class="input-group qty_box">
                                <span class="qty_txt">Qty</span>
                                <input type="number" class="form-control text-center qty_edittxt" min="0" max="10"
                                       value="0">
                            </div>
                            <button class="spinner_addcardbtn btn-primary" type="button" onclick="AddTOcart(this);">
                                <i class="mdi mdi-basket"></i> <span class="button-group_text">Add</span></button>
                        </div>
                    </div>
                    <div class="product_block">
                        <div class="save_amt">Save Rs. 10</div>

                        <div class="product_amt">
                            <span class="product_amt_less">
        <i class="mdi mdi-currency-inr"></i>40.00</span>
                            <span class="product_amt_real">
        <i class="mdi mdi-currency-inr"></i>50.00</span>
                        </div>
                        <div class="product_img">
                            <img src="{{url('images/teddy-4.png')}}">
                            <div class="hover_center_block">
                                <div class="product_hover_block" onclick="Initialize_ProductDetails();"
                                     data-toggle="modal"
                                     data-target="#Modal_ViewProductDetails">
                                    <div class="mdi mdi-magnify"></div>
                                </div>
                            </div>
                        </div>
                        <div class="product_name">Teddy Bear</div>
                        <div class="product_qty">
                            <select class="form-control product_drop">
                                <option value="5">$ 50</option>
                                <option value="6">Qtv 2 - $ 90</option>
                            </select>
                        </div>

                        <div class="spinner_withbtn">
                            <div class="input-group qty_box">
                                <span class="qty_txt">Qty</span>
                                <input type="number" class="form-control text-center qty_edittxt" min="0" max="10"
                                       value="0">
                            </div>
                            <button class="spinner_addcardbtn btn-primary" type="button" onclick="AddTOcart(this);">
                                <i class="mdi mdi-basket"></i> <span class="button-group_text">Add</span></button>
                        </div>
                    </div>
                    <div class="product_block">
                        <div class="save_amt">Save Rs. 10</div>

                        <div class="product_amt">
                            <span class="product_amt_less">
        <i class="mdi mdi-currency-inr"></i>40.00</span>
                            <span class="product_amt_real">
        <i class="mdi mdi-currency-inr"></i>50.00</span>
                        </div>
                        <div class="product_img">
                            <img src="{{url('images/teddy-4.png')}}">
                            <div class="hover_center_block">
                                <div class="product_hover_block" onclick="Initialize_ProductDetails();"
                                     data-toggle="modal"
                                     data-target="#Modal_ViewProductDetails">
                                    <div class="mdi mdi-magnify"></div>
                                </div>
                            </div>
                        </div>
                        <div class="product_name">Teddy Bear</div>
                        <div class="product_qty">
                            <select class="form-control product_drop">
                                <option value="5">$ 50</option>
                                <option value="6">Qtv 2 - $ 90</option>
                            </select>
                        </div>

                        <div class="spinner_withbtn">
                            <div class="input-group qty_box">
                                <span class="qty_txt">Qty</span>
                                <input type="number" class="form-control text-center qty_edittxt" min="0" max="10"
                                       value="0">
                            </div>
                            <button class="spinner_addcardbtn btn-primary" type="button" onclick="AddTOcart(this);">
                                <i class="mdi mdi-basket"></i> <span class="button-group_text">Add</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="Modal_ViewProductDetails" class="modal fade-scale" tabindex="-1" aria-labelledby="myModalLabel" role="dialog">
        <div class="modal-dialog product_details_model">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"> Divers Helmet</h4>
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
                                    <img class="brics_images" src="images/1.jpg" onclick="appendimages(this);"/>
                                    <img class="brics_images" src="images/2.jpg" onclick="appendimages(this);"/>
                                    <img class="brics_images" src="images/3.jpg" onclick="appendimages(this);"/>
                                    <img class="brics_images" src="images/4.jpg" onclick="appendimages(this);"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="more_other_details">
                                <div class="more_product_head">
                                    Divers Helmet
                                </div>
                                <div class="more_details_txtrow">
                                    <div class="option_txt">Price :</div>
                                    <div class="order_amt"><i class="mdi mdi-currency-usd"></i>300.00</div>
                                </div>
                                <div class="more_details_txtrow">
                                    <div class="option_txt">Qty :</div>
                                    <input type="number" min="1" max="10" class="form-control text-center more_details_qty"
                                           value="1"/>
                                </div>
                                <div class="more_details_txtrow">
                                    <div class="product_viewmore_btn_box">
                                        <div class="btn btn-warning btn-sm">
                                            <i class="mdi mdi-basket-unfill basic_icon_margin"></i>Add To card
                                        </div>
                                        <a href="checkout.php" class="btn keep-shoping btn-sm pull-right"><i
                                                    class="mdi mdi-cart basic_icon_margin"></i>Buy Now</a>
                                    </div>
                                </div>
                                <div class="more_product_head">
                                    Description :
                                </div>
                                <div class="more_product_details">
                                    Fortune Plus Soya Oil Pouch 1 LT Fortune Plus Soya Oil Pouch 1 LT Fortune Plus Soya Oil
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
    <div id="Modal_NotifyMe" class="modal fade-scale" tabindex="-1" aria-labelledby="myModalLabel" role="dialog">
        <div class="modal-dialog notifyme_model">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Notify Me for Product</h4>
                </div>
                <div class="modal-body">
                    <div class="all_data_view">
                        <div class="model_row">
                            <input type="text" class="form-control" placeholder="Email Id"/>
                        </div>
                        <div class="model_row">
                            <input type="text" class="form-control" placeholder="Mobile No."/>
                        </div>
                        <div class="model_row">
                            <input type="text" class="form-control" placeholder="city"/>
                        </div>
                        <div class="model_row">
                            <textarea class="form-control glo_txtarea" placeholder="Massage for product"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function AddTOcart(dis) {
            var itemid = $(dis).attr('id');
            var rateid = $(dis).attr('data-content');
            var qty = $('#qty_' + itemid).val();
            var size = $(dis).parent().parent().find('.avail_selected').text();
            var carturl = "{{url('addtocart')}}";
            $.ajax({
                type: "get",
                contentType: "application/json; charset=utf-8",
                url: carturl,
                data: {itemid: itemid, rateid: rateid, quantity: qty, size: size},
                success: function (data) {
                    $("#cartload").html(data);
//                    ShowSuccessPopupMsg('Product has been added to cart');
                },
                error: function (xhr, status, error) {
                    $("#cartload").html(xhr.responseText);
//                    alert('Technical Error Occured!');
                }
            });
        }
    </script>
@stop