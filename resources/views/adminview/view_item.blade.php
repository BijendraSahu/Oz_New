<div align="center"><h4>{{ucfirst($all_items->name)}}</h4></div>


<h5 class="pro_title"><b>Selected Categories:</b></h5>
@foreach($all_items_cat as $objmycat)
    <p>{{$objmycat->cat_name->name}}</p>
@endforeach



{{--<h5 class="pro_title"><b>Delivery :</b></h5>--}}
{{--<p>{{ucfirst($all_items->delivery)}}</p>--}}


<h5 class="pro_title"><b>Specifications :</b></h5>
<p>{{ucfirst($all_items->specifcation)}}</p>


<h5 class="pro_title"><b>Ingredients :</b></h5>
<p>{{ucfirst($all_items->ingredients)}}</p>


<h5 class="pro_title"><b>Available Nutrients :</b></h5>
<p>{{ucfirst($all_items->nutrients)}}</p>


<h5 class="pro_title"><b>Description :</b></h5>
<p>{!! $all_items->description  !!}</p>


<h5 class="pro_title"><b>Usage :</b></h5>
<p>{{ucfirst($all_items->usage)}}</p>


<h5 class="pro_title"><b>Images :</b></h5>
<div>
    @foreach($all_items_image as $imgobj)
        <img style="height: 125px;" src="p_img\{{$imgobj->item_master_id}}\{{$imgobj->image}}">
    @endforeach
</div>
<style type="text/css">
    .pro_title {
        border-bottom: 1px solid #353a351c;
        font-size: 20px;
        padding-bottom: 12px;
    }

</style>
