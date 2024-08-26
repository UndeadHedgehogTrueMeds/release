
@extends($design . '.layouts.main')

@section('title', __('text.affiliate_title'))

@section('content')
<main class="default">
    <div class="default__container">
        <div class="default__body">
            <div class="default__content">
                <h1 class="default__title title">{{__('text.affiliate_title')}}</h1>
                <div class="message_sended hidden">
                    <h2>{{__('text.affiliate_thanks')}}</h2>
                    <br>
                    <p>{{__('text.affiliate_sended')}}</p>
                </div>
                <form class="form" id = "message_send_form" method="post">
                    <div class="form__body">
                        <div class="form__inner">
                            <div class="form__default-rows">
                                <div class="form__row">
                                    <label for="name" class="form__label">{{__('text.affiliate_name')}}</label>
                                    <input data-required id = "name" autocomplete="off" type="text" name="form[]" data-error="" placeholder="{{__('text.affiliate_name')}}" class="form__input input">
                                </div>
                                <div class="form__row">
                                    <label for="email" class="form__label">{{__('text.affiliate_email')}}</label>
                                    <input data-required id = "email" autocomplete="off" type="text" name="form[]" data-error="" placeholder="{{__('text.affiliate_email')}}" class="form__input input">
                                </div>
                                <div class="form__row">
                                    <label for="name" class="form__label">{{__('text.affiliate_jabber')}}{{__('text.affiliate_telegram')}}</label>
                                    <input autocomplete="off" id = "jabber" type="text" name="form[]" data-error="" placeholder="{{__('text.affiliate_jabber')}}{{__('text.affiliate_telegram')}}" class="form__input input">
                                </div>
                                <div class="form__row form__row--top-alignment">
                                    <label for="name" class="form__label">{{__('text.affiliate_message')}}</label>
                                    <textarea autocomplete="off" id="message" type="text" name="form[]" data-error="" placeholder="{{__('text.affiliate_message')}}" class="form__input input"></textarea>
                                </div>
                            </div>
                            <div class="form__row form__row--captcha">
                                <label for="name" class="form__label">{{__('text.affiliate_code')}}</label>
                                <div class="form__input">
                                <picture>
                                <source srcset="/captcha" type="image/webp">
                                <img src="/captcha">
                            </picture>
                            <input autocomplete="off" type="text" id = "captcha" name="form[captcha]" class="form__input input">
                                </div>
                            </div>
                        </div>
                        <div class="form__desrc">
                            <div class="form__text-block">
                                <p>{{__('text.affiliate_contact_message')}}</p>
                            </div>
                        </div>
                    </div>
                    <button onclick="sendAjaxAffiliate()" type="button" class="form__button" id = "message_send_button">
                        <span>{{__('text.affiliate_send')}}</span>
                        <svg width="20" height="20">
                            <use xlink:href="{{ asset("$design/images/icons/icons.svg#svg-arr-next") }}"></use>
                        </svg>
                    </button>
                </form>
            </div>
            <aside class="default__aside">
                <div class="default__offers">
                    <a href="#" class="default__item-offer">
                        <picture><source srcset="{{ asset("$design/images/offers/01.webp") }}" type="image/webp"><img src="{{ asset("$design/images/offers/01.jpg") }}" alt=""></picture>
                    </a>
                    <a href="#" class="default__item-offer">
                        <picture><source srcset="{{ asset("$design/images/offers/02.webp") }}" type="image/webp"><img src="{{ asset("$design/images/offers/02.jpg") }}" alt=""></picture>
                    </a>
                </div>
            </aside>
        </div>
    </div>
</main>

@endsection