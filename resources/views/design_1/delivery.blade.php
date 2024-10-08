
@extends($design . '.layouts.main')

@section('title', $page_properties->title)
@section('keywords', $page_properties->keyword)
@section('description', $page_properties->description)

@section('content')
<div class="onei">
    <div class="text-block__body ship_list">
        <h3 class="ship_">{{__('text.shipping_title')}}</h3>
        <br>
        <li>{!!__('text.shipping_text_1')!!}</li>
        <li>{!!__('text.shipping_text_2')!!}</li>
        <p></p>
        <p>{{__('text.shipping_text_3')}}</p>
        <h3 class="ship_">{{__('text.shipping_title2')}}</h3>
        <br>
        <p>{{__('text.shipping_text_4')}}</p>
        <p>{{__('text.shipping_text_5')}}</p>
        <li>{{__('text.shipping_text_6')}}</li>
        <li>{{__('text.shipping_text_7')}}</li>
        <li>{{__('text.shipping_text_8')}}</li>
        <li>{{__('text.shipping_text_9')}}</li>
        <p></p>
        <p>{{__('text.shipping_text_10')}}<a class = "shipping_a" href="{{ route('home.contact_us') }}">{{__('text.shipping_contact_us_shipping')}}</a></p>
    </div>
</div>

@endsection