
@extends($design . '.layouts.main')

@section('title', 'About')

@section('content')
<div class="bonus_block all_padding">
    <div class="bonus1">
        <img src="{{ asset("$design/images/bonus1_1.png") }}">
    </div>
    <div class="bonus2">
        <img src="{{ asset("$design/images/bonus2_2.png") }}">
    </div>
</div>
<main class="default">
    <div class="default__container">
        <div class="default__body">
            <div class="default__content">
                <h1 class="default__title title">{{__('text.about_us_title')}}</h1>
                <div class="default__text">
                    {!!__('text.about_us_text')!!}
                <h2 style="font-weight: bold;">{{__('text.about_us_title1')}}</h2>
                <p>{{__('text.about_us_text1')}}</p>
                <h2 style="font-weight: bold;">{{__('text.about_us_title2')}}</h2>
                <ul>{{__('text.about_us_text2_1')}}</ul>
                    <li>{{__('text.about_us_text2_2')}}</li>
                    <li>{{__('text.about_us_text2_3')}}</li>
                    <p></p>
                <ul>{{__('text.about_us_text2_4')}}</ul>
                    <li>{{__('text.about_us_text2_5')}}</li>
                    <li>{{__('text.about_us_text2_6')}}</li>
                    <p></p>
                <h2 style="font-weight: bold;">{{__('text.about_us_title3')}}</h2>
                <p>{{__('text.about_us_text3_1')}}</p>
                <p>{{__('text.about_us_text3_2')}}</p>
                <ul>{{__('text.about_us_text3_3')}}</ul>
                    <li>{{__('text.about_us_text3_4')}}</li>
                    <li>{{__('text.about_us_text3_5')}}</li>
                    <p></p>
                <p>{{__('text.about_us_text3_6')}}</p>
                <h2 style="font-weight: bold;">{{__('text.about_us_title4')}}</h2>
                <p>{{__('text.about_us_text4')}}</p>
                </div>
            </div>
        </div>
    </div>
</main>
<div class="subscribe_body">
    <div class="left_block">
        <div class="subscribe_img">
            <img src="{{ asset("$design/images/icons/subscribe.svg") }}">
        </div>
        <div class="text_subscribe">
            <span class="top_text">{{__('text.common_subscribe')}}</span>
            <span class="bottom_text">{{__('text.common_spec_offer')}}</span>
        </div>
    </div>
    <div class="right_block">
        <input type="text" placeholder="Email" class="form__input input" id="email_sub">
        <div class="button_sub">
            <img src="{{ asset("$design/images/icons/subscribe_mini.svg") }}" class="sub_mini">
            <span class="button_text">{{__('text.common_subscribe')}}</span>
        </div>
    </div>
</div>

<section class="ship-index">
    <div class="ship-index__container">
        <ul class="ship-index__list">
            <li class="ship-index__item">
                <img src="/images/shipping/usps.svg" alt="">
            </li>
            <li class="ship-index__item">
                <img src="/images/shipping/ems.svg" alt="">
            </li>
            <li class="ship-index__item">
                <img src="/images/shipping/dhl.svg" alt="">
            </li>
            <li class="ship-index__item">
                <img src="/images/shipping/ups.svg" alt="">
            </li>
            <li class="ship-index__item">
                <img src="/images/shipping/fedex.svg" alt="">
            </li>
            <li class="ship-index__item">
                <img src="/images/shipping/tnt.svg" alt="">
            </li>
            <li class="ship-index__item">
                <img src="/images/shipping/postnl.svg" alt="">
            </li>
            <li class="ship-index__item">
                <img src="/images/shipping/deutsche_post.svg" alt="">
            </li>
            <li class="ship-index__item">
                <img src="/images/shipping/dpd.svg" alt="">
            </li>
            <li class="ship-index__item">
                <img src="/images/shipping/gls.svg" alt="">
            </li>
            <li class="ship-index__item">
                <img src="/images/shipping/australia_post.svg" alt="">
            </li>
            <li class="ship-index__item">
                <img src="/images/shipping/colissimo.svg" alt="">
            </li>
            <li class="ship-index__item">
                <img src="/images/shipping/correos.svg" alt="">
            </li>
        </ul>
    </div>
</section>

<div class="reviews_block">
    <div class="review">
        <div class="review_top">
            <div class="person_name">{!!__('text.testimonials_author_t_1')!!}</div>
            <div class="stars">
                <img src="{{ asset("$design/images/icons/stars.svg") }}" height="20" alt="">
            </div>
        </div>
        <div class="review_text">{{__('text.testimonials_t_1')}}</div>
    </div>
    <div class="review">
        <div class="review_top">
            <div class="person_name">{!!__('text.testimonials_author_t_7')!!}</div>
            <div class="stars">
                <img src="{{ asset("$design/images/icons/stars.svg") }}" height="20" alt="">
            </div>
        </div>
        <div class="review_text">{{__('text.testimonials_t_7')}}</div>
    </div>
    <div class="review">
        <div class="review_top">
            <div class="person_name">{!!__('text.testimonials_author_t_13')!!}</div>
            <div class="stars">
                <img src="{{ asset("$design/images/icons/stars.svg") }}" height="20" alt="">
            </div>
        </div>
        <div class="review_text">{{__('text.testimonials_t_13')}}</div>
    </div>
    <div class="review">
        <div class="review_top">
            <div class="person_name">{!!__('text.testimonials_author_t_17')!!}</div>
            <div class="stars">
                <img src="{{ asset("$design/images/icons/stars.svg") }}" height="20" alt="">
            </div>
        </div>
        <div class="review_text">{{__('text.testimonials_t_17')}}</div>
    </div>
</div>

@endsection