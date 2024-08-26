<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Defult')</title>
    <meta name="description" content="Verified Pharmacy Store">
    <meta name="keywords" content="key, words">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

    <link rel="alternate" href="{{ config('app.url') }}/lang=arb" hreflang="ar" />
    <link rel="alternate" href="{{ config('app.url') }}/lang=cs" hreflang="cs" />
    <link rel="alternate" href="{{ config('app.url') }}/lang=da" hreflang="da" />
    <link rel="alternate" href="{{ config('app.url') }}/lang=de" hreflang="de" />
    <link rel="alternate" href="{{ config('app.url') }}/lang=en" hreflang="en" />
    <link rel="alternate" href="{{ config('app.url') }}/lang=es" hreflang="es" />
    <link rel="alternate" href="{{ config('app.url') }}/lang=fi" hreflang="fi" />
    <link rel="alternate" href="{{ config('app.url') }}/lang=fr" hreflang="fr" />
    <link rel="alternate" href="{{ config('app.url') }}/lang=gr" hreflang="gr" />
    <link rel="alternate" href="{{ config('app.url') }}/lang=hans" hreflang="zh-Hans" />
    <link rel="alternate" href="{{ config('app.url') }}/lang=hant" hreflang="zh-Hant" />
    <link rel="alternate" href="{{ config('app.url') }}/lang=hu" hreflang="hu" />
    <link rel="alternate" href="{{ config('app.url') }}/lang=it" hreflang="it" />
    <link rel="alternate" href="{{ config('app.url') }}/lang=ja" hreflang="ja" />
    <link rel="alternate" href="{{ config('app.url') }}/lang=ms" hreflang="ms" />
    <link rel="alternate" href="{{ config('app.url') }}/lang=nl" hreflang="nl" />
    <link rel="alternate" href="{{ config('app.url') }}/lang=no" hreflang="no" />
    <link rel="alternate" href="{{ config('app.url') }}/lang=pl" hreflang="pl" />
    <link rel="alternate" href="{{ config('app.url') }}/lang=pt" hreflang="pt" />
    <link rel="alternate" href="{{ config('app.url') }}/lang=ro" hreflang="ro" />
    <link rel="alternate" href="{{ config('app.url') }}/lang=sk" hreflang="sk" />
    <link rel="alternate" href="{{ config('app.url') }}/lang=sv" hreflang="sv" />

    <link rel="icon" href="{{ asset($design . '/images/favicon/favicon.ico') }}" sizes="any">
    <link rel="icon" href="{{ asset($design . '/images/favicon/favicon.svg') }}" type="image/svg+xml">
    <link rel="apple-touch-icon" href="{{ asset($design . '/images/favicon/apple-touch-icon-180x180.png') }}">
    <link rel="manifest" href="{{ asset($design . '/images/favicon/manifest.webmanifest') }}">
    <link href="{{ asset($design . '/fonts/plus-jakarta-sans-regular.woff2') }}" rel="preload" as="font"
        type="font/woff2" crossorigin="anonymous">
    <link href="{{ asset($design . '/fonts/plus-jakarta-sans-medium.woff2') }}" rel="preload" as="font"
        type="font/woff2" crossorigin="anonymous">
    <link href="{{ asset($design . '/fonts/plus-jakarta-sans-bold.woff2') }}" rel="preload" as="font"
        type="font/woff2" crossorigin="anonymous">
    <link href="{{ asset($design . '/vendor/custom-select/custom-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset($design . '/vendor/intl-tel/css/intlTelInput.min.css') }}" rel="stylesheet">
    <link href="{{ asset($design . '/css/style.css') }}" rel="stylesheet">
    <script defer src="{{ asset($design . '/vendor/custom-select/custom-select.min.js') }}"></script>
    <script defer src="{{ asset($design . '/vendor/intl-tel/js/intlTelInput.min.js') }}"></script>
    <script defer src="{{ asset($design . '/vendor/just-validate.min.js') }}"></script>
    <script defer src="{{ asset($design . '/js/main.50c0b485.js') }}"></script>
    <script src="{{ asset("vendor/jquery/jquery-3.6.3.min.js") }}"></script>
    <script src="{{ asset("vendor/jquery/autocomplete.js") }}"></script>
    <script src="{{ asset("vendor/jquery/init.js") }}"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.js"></script>
</head>
<body class="no-js no-transition webp homepage">
    <script>
        const design = 10;
        const url = "{{ config('app.url') }}/lang=de";
    </script>
    <header class="header">
        <div class="container">
            <div class="header__grid-wrapper"><!-- Phones-->
                <address class="header__phones">
                    <div class="header__phones-caption"><button class="link-button" data-dialog="call">{{ __('text.common_callback') }}</button> <span class="caption-text">{{__('text.common_call_us_top')}}</span></div>
                    <ul class="header__phones-wrapper">
                        <li class="dropdown-item"><a class="header-phone" href="tel:+17185503732">US: +1 718 550
                                3732</a></li>
                        <li class="dropdown-item"><a class="header-phone" href="tel:+17185503732">UK: +1 718 550
                                3732</a></li>
                        <li class="dropdown-item"><a class="header-phone" href="tel:+17185503732">AU: +1 718 550
                                3732</a></li>
                        <li class="dropdown-item"><a class="header-phone" href="tel:+17185503732">DE: +1 718 550
                                3732</a></li>
                        <li class="dropdown-item"><a class="header-phone" href="tel:+17185503732">AU: +1 718 550
                                3732</a></li>
                        <li class="dropdown-item"><a class="header-phone" href="tel:+17185503732">UK: +1 718 550
                                3732</a></li>
                        <li class="dropdown-item"><a class="header-phone" href="tel:+17185503732">AU: +1 718 550
                                3732</a></li>
                    </ul>
                    <div class="dropdown"><button class="dropdown__button" aria-label="Show dropdown"><span
                                class="icon"><svg width="1em" height="1em" fill="currentColor">
                                    <use href="{{ $design }}/svg/icons/sprite.svg#dots-vertical"></use>
                                </svg></span></button>
                        <ul class="dropdown-list"></ul>
                    </div>
                </address><!-- Settings & auth-->
                <div class="header__controls">
                    <div class="header__lang header-select-wrapper">
                        <select class="header-select" onchange="location.href=this.options[this.selectedIndex].value">
                            @foreach ($languages as $language)
                                <option value="/lang={{$language['code']}}" @if (App::currentLocale() == $language['code']) selected @endif>{{$language['name']}}</option>
                            @endforeach
                        </select><span class="icon header-select-wrapper__icon"><svg width="1em" height="1em"
                                fill="currentColor">
                                <use href="{{ $design }}/svg/icons/sprite.svg#world"></use>
                            </svg></span><span class="icon header-select-wrapper__chevron"><svg width="1em"
                                height="1em" fill="currentColor">
                                <use href="{{ $design }}/svg/icons/sprite.svg#chevron-down"></use>
                            </svg></span>
                    </div>
                    <div class="header__currency header-select-wrapper"><select class="header-select">
                            <option value="1">USD</option>
                            <option value="2">RUB</option>
                            <option value="3">EUR</option>
                            <option value="4">KZT</option>
                            <option value="5">CNY</option>
                        </select><span class="icon header-select-wrapper__icon"><svg width="1em" height="1em"
                                fill="currentColor">
                                <use href="{{ $design }}/svg/icons/sprite.svg#money"></use>
                            </svg></span><span class="icon header-select-wrapper__chevron"><svg width="1em"
                                height="1em" fill="currentColor">
                                <use href="{{ $design }}/svg/icons/sprite.svg#chevron-down"></use>
                            </svg></span></div><a class="header__auth" href="#!"><span class="icon"><svg
                                width="1em" height="1em" fill="currentColor">
                                <use href="{{ $design }}/svg/icons/sprite.svg#profile"></use>
                            </svg></span>{{__('text.common_profile')}}</a>
                </div><!-- Logo--><a class="logo" href="{{ route('home.index') }}">
                    <div class="logo__image"><img src="{{ asset("$design/svg/logo.svg") }}" width="40"
                            height="40" alt="Site logo"></div>
                    <div class="logo__title">TrueMeds</div>
                    <div class="logo__text">Discount Store. Since 1998</div>
                </a>
                <div class="header__search-wrapper"><!-- Categories button--><button
                        class="button categories-button"><span class="icon"><svg width="1em" height="1em"
                                fill="currentColor">
                                <use href="{{ asset("$design/svg/icons/sprite.svg") }}#hotdog"></use>
                            </svg></span> <span class="button__text">{{__('text.common_categories_menu')}}</span></button>
                    <!-- Search-->
                    <form class="search-form" action="{{ route('search.search_product') }}" method="post">
                        @csrf
                        <div class="search search-bar" style="width: 100%">
                            <label class="form__label form__label--text">
                                <input class="form__text-input input-text" id="autocomplete" type="text" placeholder="{{__('text.common_search')}}" name="search_text">
                            </label>
                            <button class="search-button" aria-label="Search" type="submit">
                                <span class="icon">
                                    <svg width="1em" height="1em" fill="currentColor">
                                        <use href="{{ asset("$design/svg/icons/sprite.svg") }}#search"></use>
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </form>
                    <!-- Cart-->
                    @php
                        $cart_count = 0;
                        $cart_total = 0;
                        if(!empty(session('cart')))
                        {
                            foreach (session('cart') as $value) {
                                $cart_count += $value['q'];
                                $cart_total += $value['price'] * $value['q'];
                            }
                        }
                    @endphp
                    <a class="cart-button button button--secondary" href="{{ route('cart.index') }}" data-counter="{{ $cart_count }}">
                        <span class="icon">
                            <svg width="1em" height="1em" fill="currentColor">
                                <use href="{{ asset("$design/svg/icons/sprite.svg") }}#cart"></use>
                            </svg>
                        </span>
                        <span class="button__text">{{__('text.common_cart_text_d2')}}</span>
                        <span class="button__total">${{ $cart_total }}</span>
                    </a>
                </div>
            </div>
            <!-- Header info-->
            <div class="header__info">
                <div class="customer-choise">
                    <div class="customer-choise__logo"><img src="{{ asset("$design/svg/ui/choise.svg") }}"
                            width="42" height="42" alt="Site logo">
                    </div>
                    <div class="customer-choise__counter">1 000 000</div>
                    <div class="customer-choise__text">{{__('text.common_customers')}}</div>
                </div>
                <div class="header-brands">
                    <div class="header-brand">
                        <picture>
                            <source type="image/webp" media="(min-width: 43.75em) and (min-width: 700px)"
                                srcset="{{ asset("$design/images/brands/brand-1-md-45w.webp") }} 1x,{{ asset("$design/images/brands/brand-1-md-91w.webp") }} 2x">
                            <source type="image/jpeg" media="(min-width: 43.75em) and (min-width: 700px)"
                                srcset="{{ asset("$design/images/brands/brand-1-md-45w.jpg") }} 1x,{{ asset("$design/images/brands/brand-1-md-91w.jpg") }} 2x">
                            <source type="image/webp"
                                srcset="{{ asset("$design/images/brands/brand-1-31w.webp") }} 1x,{{ asset("$design/images/brands/brand-1-63w.webp") }} 2x">
                            <img src="{{ asset("$design/images/brands/brand-1-31w.jpg") }}"
                                srcset="{{ asset("$design/images/brands/brand-1-31w.jpg") }} 1x,{{ asset("$design/images/brands/brand-1-63w.jpg") }} 2x"
                                width="32" height="21" alt="Brand">
                        </picture>
                    </div>
                    <div class="header-brand">
                        <picture>
                            <source type="image/webp" media="(min-width: 43.75em) and (min-width: 700px)"
                                srcset="{{ asset("$design/images/brands/brand-2-md-40w.webp") }} 1x,{{ asset("$design/images/brands/brand-2-md-80w.webp") }} 2x">
                            <source type="image/jpeg" media="(min-width: 43.75em) and (min-width: 700px)"
                                srcset="{{ asset("$design/images/brands/brand-2-md-40w.jpg") }} 1x,{{ asset("$design/images/brands/brand-2-md-80w.jpg") }} 2x">
                            <source type="image/webp"
                                srcset="{{ asset("$design/images/brands/brand-2-32w.webp") }} 1x,{{ asset("$design/images/brands/brand-2-65w.webp") }} 2x">
                            <img src="{{ asset("$design/images/brands/brand-2-32w.jpg") }}"
                                srcset="{{ asset("$design/images/brands/brand-2-32w.jpg") }} 1x,{{ asset("$design/images/brands/brand-2-65w.jpg") }} 2x"
                                width="33" height="24" alt="Brand">
                        </picture>
                    </div>
                    <div class="header-brand">
                        <picture>
                            <source type="image/webp" media="(min-width: 43.75em) and (min-width: 700px)"
                                srcset="{{ asset("$design/images/brands/brand-3-md-45w.webp") }} 1x,{{ asset("$design/images/brands/brand-3-md-91w.webp") }} 2x">
                            <source type="image/jpeg" media="(min-width: 43.75em) and (min-width: 700px)"
                                srcset="{{ asset("$design/images/brands/brand-3-md-45w.jpg") }} 1x,{{ asset("$design/images/brands/brand-3-md-91w.jpg") }} 2x">
                            <source type="image/webp"
                                srcset="{{ asset("$design/images/brands/brand-3-37w.webp") }} 1x,{{ asset("$design/images/brands/brand-3-75w.webp") }} 2x">
                            <img src="{{ asset("$design/images/brands/brand-3-37w.jpg") }}"
                                srcset="{{ asset("$design/images/brands/brand-3-37w.jpg") }} 1x,{{ asset("$design/images/brands/brand-3-75w.jpg") }} 2x"
                                width="38" height="24" alt="Brand">
                        </picture>
                    </div>
                    <div class="header-brand">
                        <picture>
                            <source type="image/webp" media="(min-width: 43.75em) and (min-width: 700px)"
                                srcset="{{ asset("$design/images/brands/brand-4-md-29w.webp") }} 1x,{{ asset("$design/images/brands/brand-4-md-59w.webp") }} 2x">
                            <source type="image/jpeg" media="(min-width: 43.75em) and (min-width: 700px)"
                                srcset="{{ asset("$design/images/brands/brand-4-md-29w.jpg") }} 1x,{{ asset("$design/images/brands/brand-4-md-59w.jpg") }} 2x">
                            <source type="image/webp"
                                srcset="{{ asset("$design/images/brands/brand-4-24w.webp") }} 1x,{{ asset("$design/images/brands/brand-4-49w.webp") }} 2x">
                            <img src="{{ asset("$design/images/brands/brand-4-24w.jpg") }}"
                                srcset="{{ asset("$design/images/brands/brand-4-24w.jpg") }} 1x,{{ asset("$design/images/brands/brand-4-49w.jpg") }} 2x"
                                width="25" height="24" alt="Brand">
                        </picture>
                    </div>
                    <div class="header-brand">
                        <picture>
                            <source type="image/webp" media="(min-width: 43.75em) and (min-width: 700px)"
                                srcset="{{ asset("$design/images/brands/brand-5-md-53w.webp") }} 1x,{{ asset("$design/images/brands/brand-5-md-106w.webp") }} 2x">
                            <source type="image/jpeg" media="(min-width: 43.75em) and (min-width: 700px)"
                                srcset="{{ asset("$design/images/brands/brand-5-md-53w.jpg") }} 1x,{{ asset("$design/images/brands/brand-5-md-106w.jpg") }} 2x">
                            <source type="image/webp"
                                srcset="{{ asset("$design/images/brands/brand-5-42w.webp") }} 1x,{{ asset("$design/images/brands/brand-5-85w.webp") }} 2x">
                            <img src="{{ asset("$design/images/brands/brand-5-42w.jpg") }}"
                                srcset="{{ asset("$design/images/brands/brand-5-42w.jpg") }} 1x,{{ asset("$design/images/brands/brand-5-85w.jpg") }} 2x"
                                width="43" height="24" alt="Brand">
                        </picture>
                    </div>
                    <div class="header-brand">
                        <picture>
                            <source type="image/webp" media="(min-width: 43.75em) and (min-width: 700px)"
                                srcset="{{ asset("$design/images/brands/brand-6-md-72w.webp") }} 1x,{{ asset("$design/images/brands/brand-6-md-144w.webp") }} 2x">
                            <source type="image/jpeg" media="(min-width: 43.75em) and (min-width: 700px)"
                                srcset="{{ asset("$design/images/brands/brand-6-md-72w.jpg") }} 1x,{{ asset("$design/images/brands/brand-6-md-144w.jpg") }} 2x">
                            <source type="image/webp"
                                srcset="{{ $design }}/images/brands/brand-6-55w.webp 1x,{{ $design }}/images/brands/brand-6-111w.webp 2x">
                            <img src="{{ asset("$design/images/brands/brand-6-55w.jpg") }}"
                                srcset="{{ asset("$design/images/brands/brand-6-55w.jpg") }} 1x,{{ asset("$design/images/brands/brand-6-111w.jpg") }} 2x"
                                width="56" height="22" alt="Brand">
                        </picture>
                    </div>
                </div>
            </div>
            <nav class="nav header-nav">
                <div class="nav-container">
                    <ul class="nav__list">
                        <li class="nav__item"><a class="nav__link is-active"
                                href="{{ route('home.index') }}">{{__('text.common_best_sellers_main_menu_item')}}</a></li>
                        <li class="nav__item"><a class="nav__link" href="{{ route('home.about') }}">{{__('text.common_about_us_main_menu_item')}}</a>
                        </li>
                        <li class="nav__item"><a class="nav__link" href="{{ route('home.help') }}">{{__('text.common_help_main_menu_item')}}</a></li>
                        <li class="nav__item"><a class="nav__link"
                                href="{{ route('home.testimonials') }}">{{__('text.common_testimonials_main_menu_item')}}</a></li>
                        <li class="nav__item"><a class="nav__link" href="{{ route('home.delivery') }}">{{__('text.common_shipping_main_menu_item')}}</a>
                        </li>
                        <li class="nav__item"><a class="nav__link"
                                href="{{ route('home.moneyback') }}">{{__('text.common_moneyback_main_menu_item')}}</a></li>
                        <li class="nav__item"><a class="nav__link" href="{{ route('home.contact_us') }}">{{__('text.common_contact_us_main_menu_item')}}</a></li>
                    </ul>
                </div><button class="greedy-button" aria-label="Show dropdown"><span class="icon"><svg
                            width="1em" height="1em" fill="currentColor">
                            <use href="{{ $design }}/svg/icons/sprite.svg#dots-vertical"></use>
                        </svg></span></button>
                <ul class="hidden-links dropdown-list"></ul>
            </nav>
            <nav class="nav cat-nav">
                <div class="nav-container">
                    <div class="nav__heading">{{__('text.common_categories_menu')}}</div><button class="nav__close-button"
                        aria-label="Close categories"></button>
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a class="nav__link is-active nav__sublist-toggler" href="{{ route('home.index') }}"
                                data-sublist-index="0">{{__('text.common_best_selling_title')}}</a>
                        </li>
                        @foreach ($menu as $category)
                            <li class="nav__item">
                                <a class="nav__link nav__sublist-toggler"
                                    href="{{ route('home.category', $category['url']) }}"
                                    data-sublist-index="{{ $loop->iteration }}">{{ $category['name'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="categories-sublists">
                        <ul class="nav__sublist sublist-4-col" data-sublist-index="0">
                            <li class="nav__item nav__item--return">
                                <button class="nav__mobile-return">{{__('text.common_best_selling_title')}}</button>
                            </li>
                            @foreach ($bestsellers as $bestseller)
                                <li class="nav__item"><a class="nav__link"
                                        href="{{ route('home.product', $bestseller['url']) }}">{{ $bestseller['name'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                        @foreach ($menu as $category)
                            <ul class="nav__sublist sublist-4-col" data-sublist-index="{{ $loop->iteration }}">
                                <li class="nav__item nav__item--return">
                                    <button class="nav__mobile-return">{{ $category['name'] }}</button>
                                </li>
                                @foreach ($category['products'] as $item)
                                    <li class="nav__item"><a class="nav__link"
                                            href="{{ route('home.product', $item['url']) }}">{{ $item['name'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @endforeach
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="container sub-header"><!-- Drug index-->
        <div class="drug-index">
            <div class="drug-index__container">
                <ul class="drug-index__list">
                    @foreach (range('A', 'Z') as $l)
                        <li class="drug-index__item"><a class="drug-index__link"
                                href="{{ route('home.first_letter', $l) }}">{{ $l }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div><!-- Store info-->
        <div class="store-info">
            <div class="store-info-caption">
                <div class="store-info-caption__title">{{__('text.common_verified')}}</div>
                <div class="store-info-caption__text">{{__('text.common_approved_d4')}}</div>
            </div>
            <div class="store-info-blocks">
                <div class="store-info-block store-info-block--1">
                    <div class="store-info-block__title">{{__('text.common_save')}}</div>
                    <div class="store-info-block__text">{{__('text.common_discount')}}</div>
                </div>
                <div class="store-info-block store-info-block--2">
                    <div class="store-info-block__title">{{__('text.common_prescription')}}</div>
                    <div class="store-info-block__text">{{__('text.common_restrictions')}}</div>
                </div>
                <div class="store-info-block store-info-block--3">
                    <div class="store-info-block__title">{{__('text.common_delivery')}}</div>
                    <div class="store-info-block__text">{{__('text.common_receive')}}</div>
                </div>
                <div class="store-info-block store-info-block--4">
                    <div class="store-info-block__title">{{__('text.common_moneyback')}}</div>
                    <div class="store-info-block__text">{{__('text.common_refund')}}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container page-wrapper">


        @yield('content')


        <aside class="aside"><!-- Aside navigation-->
            <nav class="accordion aside-nav">
                <div class="accordion-item">
                    <button class="accordion-button" aria-expanded="true">{{__('text.main_best_selling_title')}}</button>
                    <div class="accordion-panel">
                        <div class="accordion-content">
                            <ul class="aside-nav__list">
                                @foreach ($bestsellers as $bestseller)
                                    <li class="aside-nav__item">
                                        <a class="aside-nav__link"
                                            href="{{ route('home.product', $bestseller['url']) }}">
                                            {{ $bestseller['name'] }} <span
                                                class="aside-nav__price">${{ $bestseller['price'] }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                @foreach ($menu as $category)
                    <div class="accordion-item">
                        <button class="accordion-button" aria-expanded="false">{{ $category['name'] }}</button>
                        <div class="accordion-panel">
                            <div class="accordion-content">
                                <ul class="aside-nav__list">
                                    @foreach ($category['products'] as $item)
                                        <li class="aside-nav__item">
                                            <a class="aside-nav__link"
                                                href="{{ route('home.product', $item['url']) }}">
                                                {{ $item['name'] }}<span
                                                    class="aside-nav__price">${{ $item['price'] }}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </nav><!-- Aside promo block-->
        </aside>
    </div>
    <div class="container sup-footer"><!-- Subscribe block-->
        <div class="subscribe">
            <div class="subscribe__caption">
                <div class="subscribe__title">{{__('text.common_subscribe')}}</div>
                <div class="subscribe__text">{{__('text.common_spec_offer')}}</div>
            </div>
            <form class="form form form--secondary subscribe-form">
                <div class="form__field"><label class="form__label form__label--email"><input
                            class="form__text-input input-email" type="email" placeholder="{{__('text.common_chat_email')}}" required></label>
                </div>
                <div class="form__field"><input class="button form__submit" type="submit" value="{{__('text.common_subscribe')}}"></div>
            </form>
        </div><!-- Testimonials-->
        <div class="footer-testimonials">
            <div class="testimonial card">
                <div class="testimonial__header">
                    <div class="testimonial__author">{!!__('text.testimonials_author_t_1')!!}</div>
                    <div class="testimonial__rating">
                        <div class="rating">
                            <div class="rating__star"></div>
                            <div class="rating__star"></div>
                            <div class="rating__star"></div>
                            <div class="rating__star"></div>
                            <div class="rating__star"></div>
                        </div>
                    </div>
                </div>
                <div class="testimonial__text">{{__('text.testimonials_t_1')}}</div>
            </div>
            <div class="testimonial card">
                <div class="testimonial__header">
                    <div class="testimonial__author">{!!__('text.testimonials_author_t_2')!!}</div>
                    <div class="testimonial__rating">
                        <div class="rating">
                            <div class="rating__star"></div>
                            <div class="rating__star"></div>
                            <div class="rating__star"></div>
                            <div class="rating__star"></div>
                            <div class="rating__star"></div>
                        </div>
                    </div>
                </div>
                <div class="testimonial__text">{{__('text.testimonials_t_2')}}</div>
            </div>
            <div class="testimonial card">
                <div class="testimonial__header">
                    <div class="testimonial__author">{!!__('text.testimonials_author_t_3')!!}</div>
                    <div class="testimonial__rating">
                        <div class="rating">
                            <div class="rating__star"></div>
                            <div class="rating__star"></div>
                            <div class="rating__star"></div>
                            <div class="rating__star"></div>
                            <div class="rating__star"></div>
                        </div>
                    </div>
                </div>
                <div class="testimonial__text">{{__('text.testimonials_t_3')}}</div>
            </div>
            <div class="testimonial card">
                <div class="testimonial__header">
                    <div class="testimonial__author">{!!__('text.testimonials_author_t_4')!!}</div>
                    <div class="testimonial__rating">
                        <div class="rating">
                            <div class="rating__star"></div>
                            <div class="rating__star"></div>
                            <div class="rating__star"></div>
                            <div class="rating__star"></div>
                            <div class="rating__star"></div>
                        </div>
                    </div>
                </div>
                <div class="testimonial__text">{{__('text.testimonials_t_4')}}</div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="footer__wrapper"><!-- Footer logo--><a class="logo logo--footer" href="index.html">
                    <div class="logo__image"><img src="{{ $design }}/svg/logo-footer.svg" width="40"
                            height="40" alt="Site logo"></div>
                    <div class="logo__title">TrueMeds</div>
                    <div class="logo__text">Discount Store. Since 1998</div>
                </a>
                <nav class="nav footer-nav">
                    <div class="nav-container">
                        <ul class="nav__list">
                            <li class="nav__item"><a class="nav__link is-active" href="{{ route('home.index') }}">{{__('text.common_best_sellers_main_menu_item')}}</a></li>
                            <li class="nav__item"><a class="nav__link" href="{{ route('home.about') }}">{{__('text.common_about_us_main_menu_item')}}</a></li>
                            <li class="nav__item"><a class="nav__link" href="{{ route('home.help') }}">{{__('text.common_help_main_menu_item')}}</a></li>
                            <li class="nav__item"><a class="nav__link" href="{{ route('home.testimonials') }}">{{__('text.common_testimonials_main_menu_item')}}</a></li>
                            <li class="nav__item"><a class="nav__link" href="{{ route('home.delivery') }}">{{__('text.common_shipping_main_menu_item')}}</a></li>
                            <li class="nav__item"><a class="nav__link" href="{{ route('home.moneyback') }}">{{__('text.common_moneyback_main_menu_item')}}</a></li>
                            <li class="nav__item"><a class="nav__link" href="{{ route('home.contact_us') }}">{{__('text.common_contact_us_main_menu_item')}}</a></li>
                        </ul>
                    </div>
                </nav><a class="button" href="{{ route('home.affiliate') }}">{{__('text.common_affiliate_main_menu_button')}}</a>
            </div>
            <!-- Copyrights-->
            <div class="footer__copyrights">
                <p>{{__('text.license_text_license1_d2')}} {{__('text.license_text_license2_d10')}}</p>
            </div>
            <!-- Footer controls-->
            <div class="footer-buttons">
                <div class="footer-buttons__container"><a class="footer-button" href="index.html"><span
                            class="icon"><svg width="1em" height="1em" fill="currentColor">
                                <use href="{{ $design }}/svg/icons/sprite.svg#home"></use>
                            </svg></span> <span class="button__text">{{__('text.common_home_main_menu_item')}}</span></a><button
                        class="footer-button footer-button--cat"><span class="icon"><svg width="1em"
                                height="1em" fill="currentColor">
                                <use href="{{ $design }}/svg/icons/sprite.svg#hotdog"></use>
                            </svg></span> <span class="button__text">{{__('text.common_categories_menu')}}</span></button><a
                        class="footer-button" href="#!"><span class="icon"><svg width="1em"
                                height="1em" fill="currentColor">
                                <use href="{{ $design }}/svg/icons/sprite.svg#profile"></use>
                            </svg></span> <span class="button__text">{{__('text.common_profile')}}</span></a><a
                        class="footer-button footer-button--cart" href="cart.html" data-counter="2"><span
                            class="icon"><svg width="1em" height="1em" fill="currentColor">
                                <use href="{{ $design }}/svg/icons/sprite.svg#cart"></use>
                            </svg></span> <span class="button__text">${{ $cart_total }}</span></a></div>
            </div>
        </div>
    </footer>
    <div class="cat-overlay overlay"></div>
    <dialog class="dialog" data-name="call" data-modal="true" data-clickable-backdrop="true">
        <div class="dialog__inner-wrapper">
            <header class="dialog__header">
                <div class="dialog__title">{{__('text.common_callback')}}</div><button
                    class="dialog__close-button close-button">Close</button>
            </header>
            <form class="form callback-form" method="dialog">
                <div class="form__field"><input class="form__text-input input-tel intl-phone" type="tel"
                        id="callback-phone" required><label class="form__label form__label--tel"
                        for="callback-phone">{{__('text.checkout_phone')}}</label></div>
                <div class="form__field"><input class="button form__submit" type="submit" value="Request a call">
                </div>
            </form>
        </div>
    </dialog>
    <dialog class="dialog" data-name="call-push" data-modal="true" data-clickable-backdrop="true">
        <div class="dialog__inner-wrapper">
            <header class="dialog__header">
                <div class="dialog__title">{{__('text.common_callback')}}</div>
                <div class="dialog__note">{{__('text.common_push_text')}}</div>
                <button class="dialog__close-button close-button">Close</button>
            </header>
            <form class="form callback-push-form" method="dialog">
                <div class="form__field"><input class="form__text-input input-tel intl-phone" type="tel"
                        id="callback-push-phone" required><label class="form__label form__label--tel"
                        for="callback-push-phone">{{__('text.checkout_phone')}}</label></div>
                <div class="form__field callback-push-submit"><button class="button button--outline"
                        type="button">{{__('text.common_decline')}}</button><button class="button form__submit"
                        type="submit">{{__('text.common_allow')}}</button></div>
            </form>
        </div>
    </dialog>
    <script src="{{ asset("$design/js/app.js") }}"></script>
</body>

</html>
