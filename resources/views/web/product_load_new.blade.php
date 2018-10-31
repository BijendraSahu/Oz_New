<input type="hidden" id="products_count" value="{{$items_count}}"/>
@foreach ($items as $item)
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
            @php $image = \App\ItemImages::where(['item_master_id' => $item->id])->first(); @endphp
            @if(isset($image))
                <img src="{{url('p_img').'/'.$item->id.'/'.$image->image}}">
            @else
                <img src="{{url('images/default.png')}}">
            @endif
            <div class="hover_center_block" data-toggle="modal" data-target="#Modal_ViewProductDetails"
                 id="{{$item->id}}" onclick="getItemDetails(this)">
                <div class="product_hover_block">
                    <div class="mdi mdi-magnify"></div>
                </div>
            </div>
        </div>
        <div class="product_name"><a class="product_details_link" href="{{url('view_product').'/'.encrypt($item->id)}}">
                {{$item->name}}</a></div>
        <div class="availability_product_container">

        </div>
        <div class="spinner_withbtn">
            <div class="input-group qty_box">
                <span class="qty_txt">Qty</span>
                <input type="number" class="form-control text-center qty_edittxt" min="1" max="10"
                       value="1" id="qty_{{$item->id}}">
            </div>
            <button class="spinner_addcardbtn btn-primary" type="button" onclick="AddTOcart(this);">
                <i class="mdi mdi-cart"></i> <span class="button-group_text">Add</span></button>
            <button class="spinner_addcardbtn btn-primary" id="{{$item->id}}" type="button"
                    data-content="{{$item->id}}" {{--$price->id--}} onclick="AddTOcart(this);"><i id="{{$item->id}}"
                                                                                                  class="mdi mdi-basket"></i>
                <span class="button-group_text">Add</span>
            </button>
        </div>
    </div>
@endforeach


