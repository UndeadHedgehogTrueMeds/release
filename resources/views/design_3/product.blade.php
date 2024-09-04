@extends($design . '.layouts.main')

@section('title', $product['name'])

@section('content')
<div class="page__body">
    <div class="page__top-line top-line" data-da=".product__image, 650, last">
        <h1 class="top-line__title">{{ $product['name'] }}</h1>
        <a class="top-line__group">
            @foreach ($product['categories'] as $category)
                <a class="top-line__group" href="{{ route('home.category', $category['url']) }}">{{ $category['name'] }}</a>
            @endforeach
        </a>
    </div>
    <div class="product">
        <aside class="product__aside">
            <div class="product__descr">
                <div class="product__image">
                    <div class="product__image-wrapper">
                        @if ($product['image'] != 'gift-card')
                            <picture>
                                <source srcset="{{ asset('images/' . $product['image'] . '.webp') }}" type="image/webp">
                                <img src="{{ asset('images/' . $product['image'] . '.webp') }}" alt="{{ $product['image'] }}">
                            </picture>
                        @else
                            <img src="{{ asset($design . '/images/gift_card_img.svg') }}" alt="{{ $product['image'] }}">
                        @endif
                    </div>
                </div>
                <div class="product__details details-product">
                    @if ($product['image'] != 'gift-card')
                        @if (count($product['aktiv']) > 0)
                            <p class="details-product__row">{!!__('text.product_active')!!}
                                @foreach ($product['aktiv'] as $aktiv)
                                    <a href="{{ route('home.active', $aktiv) }}">
                                        {{ $aktiv }}
                                    </a>
                                @endforeach
                            </p>
                        @endif

                        <p class="details-product__row">
                            {!!__('text.product_pack1_1')!!}
                            <b style="color: #f2d43a;">{{__('text.product_pack2_1')}}{{ random_int(10, 40) }}{{__('text.product_pack3_1')}}</b>
                        </p>
                    @endif

                    <p class="details-product__descr">{{ $product['desc'] }}</p>

                    @if (count($product['disease']) > 0)
                        <div class="details-product__block-links">
                            <h2 class="details-product__label">{{__('text.product_diseases')}}</h2>
                            <div class="details-product__links">
                                @foreach ($product['disease'] as $disease)
                                    <a href="{{ route('home.disease', str_replace(' ', '-', $disease)) }}">
                                        {{ ucfirst($disease) }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    @if (!empty($product['analog']))
                        @if (count($product['analog']) > 10)
                            <div class="details-product__block-links">
                                <h2 class="details-product__label">{{ $product['name'] }} {!!__('text.product_analogs')!!}</h2>
                                <div class="details-product__links limiter">
                                    @foreach ($product['analog'] as $analog)
                                        <a href="{{ route('home.product', $analog['url']) }}">
                                            {{ $analog['name'] }}
                                        </a>
                                    @endforeach
                                    <div class="bottom"></div>
                                </div>
                                <label for="read-more-checker" class="read-more-button"></label>
                            </div>
                        @else
                            <div class="details-product__block-links">
                                <h2 class="details-product__label">{{ $product['name'] }} {!!__('text.product_analogs')!!}</h2>
                                <div class="details-product__links">
                                    @foreach ($product['analog'] as $analog)
                                        <a href="{{ route('home.product', $analog['url']) }}">
                                            {{ $analog['name'] }}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    @endif

                    @if ($product['image'] != 'gift-card')
                        @if (!empty($product['sinonim']))
                            @if (count($product['sinonim']) > 10)
                                <div class="details-product__block-links">
                                    <h2 class="details-product__label">{{ $product['name'] }} {!!__('text.product_others')!!}</h2>
                                    <div class="details-product__links limiter">
                                        @foreach ($product['sinonim'] as $sinonim)
                                            <a href="">
                                                {{ $sinonim }}
                                            </a>
                                        @endforeach
                                        <div class="bottom"></div>
                                    </div>
                                    <label for="read-more-checker" class="read-more-button"></label>
                                </div>
                            @else
                                <div class="details-product__block-links">
                                    <h2 class="details-product__label">{{ $product['name'] }} {!!__('text.product_others')!!}</h2>
                                    <div class="details-product__links">
                                        @foreach ($product['sinonim'] as $sinonim)
                                            <a href = "">
                                                {{ $sinonim }}
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        @endif
                    @endif
                </div>
            </div>
        </aside>

        <div class="product__content">
            <div class="product__items  item-product-info">
            @foreach ($product['packs'] as $key => $dosage)
                @php
                    $prev_dosage = 0;
                @endphp
                @foreach ($dosage as $item)
                    @if ($loop->last)
                        @continue
                    @endif
                    @if ($loop->iteration != 1 && $key != $prev_dosage)
                        </tbody>
                        </table>
                    @endif
                    @if ($key != $prev_dosage)
                        <div class="product__item">
                        <h3 class="item-product-info__name">{{ "{$product['name']} $key" }}</h3>
                        <table class="item-product-info__table">
                        <thead>
                        <tr class="item-product-info__row item-product-info__row--top">
                            <th class="item-product-info__package">{{__('text.product_package_title')}}</th>
                            <th class="item-product-info__per-pill">{{__('text.product_price_per_pill_title')}}</th>
                            <th class="item-product-info__price">{{__('text.product_price_title')}}</th>
                            <th class="item-product-info__btn"></th>
                        </tr>
                        </thead>
                        @php
                            $prev_dosage = $key;
                        @endphp
                    @endif
                    <tbody>
                    <tr class="item-product-info__row">
                        <th class="item-product-info__package">
                            {{ "{$item['num']} {$product['type']}" }}
                            @if ($product['image'] != 'gift-card')
                                @if ($item['price'] >= 300)
                                    <span class="item-product-info__delivery">{{__('text.cart_free_express')}}</span>
                                @elseif($item['price'] < 300 && $item['price'] >= 200)
                                    <span class="item-product-info__delivery">{{__('text.cart_free_regular')}}</span>
                                @endif
                            @endif
                        </th>
                        <th class="item-product-info__per-pill">{{ $Currency::convert(round($item['price'] / $item['num'], 2)) }}</th>
                        <th class="item-product-info__price">
                            @if ($loop->remaining != 1 && $product['image'] != 'gift-card')
                                <span class="item-product-info__old-price">
                                    <span>{{ $Currency::convert($dosage['max_pill_price'] * $item['num']) }}</span>
                                    <span>-{{ ceil(100 - ($item['price'] / ($dosage['max_pill_price'] * $item['num'])) * 100) }}%</span>
                                </span>
                            @endif
                            <span class="item-product-info__new-price">
                                @if ($product['image'] != 'gift-card')
                                    {!!__('text.product_only')!!}&nbsp;<span>{{ $Currency::convert($item['price']) }}</span>
                                @else
                                    {{ $Currency::convert($item['price']) }}
                                @endif
                            </span>
                        </th>
                        <th class="item-product-info__btn">
                            <form method="POST" action="{{ route('cart.add', $item['id']) }}">
                                @csrf
                                <button type="submit" class="item-product-info__add-to-cart">
                                    <svg width="24" height="24">
                                        <use xlink:href="{{ asset("$design/images/icons/icons.svg#svg-cart") }}"></use>
                                    </svg>
                                    <span>{{__('text.product_add_to_cart_text_d2')}}</span>
                                </button>
                            </form>
                        </th>
                    </tr>
                    </div>
                @endforeach
                </tbody>
                </table>
            @endforeach
            </div>
        </div>

        <div class="product__info info-product">
            @if ($product['full_desc'])
                {!! $product['full_desc'] !!}
            @endif
        </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>

@endsection
