@extends($design . '.layouts.main')

@section('title', __('text.common_contact_us_main_menu_item'))

@section('content')
<main class="default">
    <div class="default__container">
        <div class="default__body">
            <div class="default__content">
                <h1 class="default__title title">{{__('text.contact_us_title')}}</h1>
                <div class="message_sended hidden">
                    <h2>{{__('text.contact_us_thanks')}}</h2>
                    <br>
                    <p>{{__('text.contact_us_sended')}}</p>
                </div>
                <form class="form" id = "message_send_form" method="post">
                    <div class="form__body">
                        <div class="form__inner">
                            <div class="form__default-rows">
                                <div class="form_rows_top">
                                    <div class="form__row">
                                        <label for="name" class="form__label">{{__('text.contact_us_name')}}</label>
                                        <input data-required id = "name" autocomplete="off" type="text" name="form[name]" data-error="" placeholder="{{__('text.contact_us_name')}}" class="form__input input">
                                    </div>
                                    <div class="form__row">
                                        <label for="email_form" class="form__label">{{__('text.contact_us_email')}}</label>
                                        <input data-required id="email_form" autocomplete="off" type="text" name="form[email_form]" data-error="" placeholder="{{__('text.contact_us_email')}}" class="form__input input">
                                    </div>
                                    <div class="form__row">
                                        <label for="subject" class="form__label">{{__('text.contact_us_subject')}}</label>
                                        <input autocomplete="off" id = "subject" type="text" name="form[subject]" data-error="" placeholder="{{__('text.contact_us_subject')}}" class="form__input input">
                                    </div>
                                </div>
                                <div class="form__row form__row--top-alignment">
                                    <label for="message" class="form__label">{{__('text.contact_us_message')}}</label>
                                    <textarea autocomplete="off" id = "message" type="text" name="form[message]" data-error="" placeholder="{{__('text.contact_us_message')}}" class="form__input input"></textarea>
                                </div>
                            </div>
                            <div class="form__row form__row--captcha">
                                <label for="name" class="form__label">{{__('text.contact_us_code')}}</label>
                                <div class="form__input">
                                    <picture>
                                        <source srcset="/captcha" type="image/webp">
                                        <img src="/captcha">
                                    </picture>
                                    <input autocomplete="off" type="text" id = "captcha" name="form[captcha]" data-error="" placeholder="{{__('text.contact_us_code')}}" class="form__input input" style="width: auto">
                                </div>
                            </div>
                            <input onclick="sendAjaxContact()" type="button" name="form[submit]" value="{{__('text.contact_us_send')}}"  id="message_send_button" class="form__button">
                        </div>
                        <div class="form__desrc">
                            <div class="form__text-block">
                                <p>{{__('text.contact_us_describe1')}}</p>
                            </div>
                            <div class="form__text-block">
                                <p>{{__('text.contact_us_describe2')}}</p>
                            </div>
                            <div class="form__text-block">
                                <p>{{__('text.contact_us_describe3')}}</p>
                            </div>
                        </div>
                    </div>
                </form>
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