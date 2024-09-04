<div class="basket__wrapper">
<div class="basket__content">
    <h2 class="basket__title">
        {{__('text.cart_cart_title')}}
    </h2>
    <ul class="basket-benefits">
        <li class="basket-benefits__item basket-benefits__item--regular">
            <span class="basket-benefits__title">
                {{__('text.cart_free_regular')}}
            </span>
            <p class="basket-benefits__text">
                {{__('text.cart_sum_regular')}}
            </p>
        </li>
        <li class="basket-benefits__item basket-benefits__item--express">
            <span class="basket-benefits__title">
                {{__('text.cart_free_express')}}
            </span>
            <p class="basket-benefits__text">
                {{__('text.cart_sum_express')}}
            </p>
        </li>
        <li class="basket-benefits__item basket-benefits__item--secret">
            <span class="basket-benefits__title">
                <span class="basket-benefits__subtitle">
                    {{__('text.cart_secret1')}}
                </span>
                {{__('text.cart_secret2')}}
            </span>
            <p class="basket-benefits__text">
                {{__('text.cart_description_secret')}}
            </p>
        </li>
        <li class="basket-benefits__item basket-benefits__item--moneyback">
            <span class="basket-benefits__title">
                <span class="basket-benefits__subtitle">
                    {{__('text.cart_moneyback1')}}
                </span>
                {{__('text.cart_moneyback2')}}
            </span>
            <p class="basket-benefits__text">
                {{__('text.cart_description_moneyback')}}
            </p>
        </li>
    </ul>
</div>
<div class="order">
    <div class="order__content">
        <span class="order__title"  id = "scroll">
            {{__('text.cart_order_title_1')}}
        </span>
        <p style="text-align: center; padding-bottom:2%; margin-top:-1%;">{{__('text.cart_order_title_text')}}</p>
        <div class="order__top">
            <span class="order__top-name">
                {{__('text.cart_package')}}
            </span>
            <span class="order__top-name">
                {{__('text.cart_qty')}}
            </span>
            <span class="order__top-name">
                {{__('text.cart_per_pack')}}
            </span>
            <span class="order__top-name">
                {{__('text.cart_price')}}
            </span>
        </div>
        <form method="POST">
        <ul class="order__items">
            @foreach ($products as $product)
                @if ($product['product_id'] == 616)
                    <li class="order__item">
                        <div class="order__product" id = "{{ $product['product_id'] }}">
                        <span class="order__name">
                            {{-- <a href="{$path.page}/{$cur_product_in_cart_info.url}" class="product-about__characteristic-meaning--link">{{ $product['pack_name'] }}</a> --}}
                            {{ $product['name'] }}
                        </span>
                            <div class="quantity" data-quantity>
                                <button class="quantity__button quantity__button_plus" data-quantity-plus type="button" onclick="up({{ $product['pack_id'] }})">
                                    <span class="sr-only">Plus</span>
                                </button>
                                <div class="quantity__input">
                                    <input data-quantity-value class = "data-quantite" id = "{{ $product['pack_id'] }}" autocomplete="off" type="text" name="{{ $product['pack_id'] }}" value="{{ $product['q'] }}">
                                </div>
                                <button class="quantity__button quantity__button_minus" data-quantity-minus type="button" onclick="down({{ $product['pack_id'] }})">
                                    <span class="sr-only">Minus</span>
                                </button>
                            </div>
                            <div class="order__pack">
                                <span class="order__only">{{ $Currency::convert($product['price']) }}</span>
                            </div>
                            <div class="order__price">
                                <span class="order__only">{{ $Currency::convert($product['price']) }}</span>
                            </div>
                            <button type="button" data-remove class="remove-button" onclick="remove({{ $product['pack_id'] }})">
                                x
                            </button>
                        </div>
                    </li>
                @else
                    <li class="order__item">
                        <div class="order__product" id = "{{ $product['product_id'] }}">
                        <span class="order__name">
                            {{-- <a href="{$path.page}/{$cur_product_in_cart_info.url}" class="product-about__characteristic-meaning--link">{{ $product['pack_name'] }}</a> --}}
                            {{ $product['pack_name'] }}
                        </span>
                            <div class="quantity" data-quantity>
                                <button class="quantity__button quantity__button_plus" data-quantity-plus type="button" onclick="up({{ $product['pack_id'] }})">
                                    <span class="sr-only">Plus</span>
                                </button>
                                <div class="quantity__input">
                                    <input data-quantity-value class = "data-quantite" id = "{{ $product['pack_id'] }}" autocomplete="off" type="text" name="{{ $product['pack_id'] }}" value="{{ $product['q'] }}">
                                </div>
                                <button class="quantity__button quantity__button_minus" data-quantity-minus type="button" onclick="down({{ $product['pack_id'] }})">
                                    <span class="sr-only">Minus</span>
                                </button>
                            </div>
                            <div class="order__pack">
                                <div class="order__pack-top">
                                    <span class="order__price line-through">{{ $Currency::convert($product['max_pill_price'] * $product['num'], true) }}</span>
                                    <span class="order__discount">-{{ ceil(100 - ($product['price'] / ($product['max_pill_price'] * $product['num'])) * 100) }}%</span>
                                </div>
                                <span class="order_only">{{__('text.cart_only')}} {{ $Currency::convert($product['price'],true) }}</span>
                            </div>
                            <div class="order__price">
                                <div class="order__price-top">
                                    <span class="order__price line-through">{{ $Currency::convert($product['max_pill_price'] * $product['num'] * $product['q'], true) }}</span>
                                    <span class="order__discount">-{{ ceil(100 - ($product['price'] / ($product['max_pill_price'] * $product['num'])) * 100) }}%</span>
                                </div>
                                <span class="order__only">{{__('text.cart_only')}} {{ $Currency::convert($product['price'] * $product['q'], true) }}</span>
                            </div>
                            <button type="button" data-remove class="remove-button" onclick="remove({{ $product['pack_id'] }})">
                                x
                            </button>
                        </div>
                        @if (!empty($product['upgrade_pack']))
                            <p onclick="upgrade({{ $product['pack_id'] }})" class="order__text" data-upgrade>
                                {{__('text.cart_upgrade')}}<span class="order__text-accent"> {{ $product['upgrade_pack']['num'] }} {{ $product['type_name'] }} {{__('text.cart_for_only')}} {{ $Currency::convert($product['upgrade_pack']['price'] - $product['price'], true) }} </span>
                                {{__('text.cart_savei')}} {{ $Currency::convert($product['max_pill_price'] * $product['upgrade_pack']['num'] - $product['upgrade_pack']['price'], true) }}
                                @if ($product_total + ($product['upgrade_pack']['price'] - $product['price']) >= 200 &&
                                                                $product_total + ($product['upgrade_pack']['price'] - $product['price']) < 300)
                                    {{__('text.cart_get_regular')}}
                                @elseif ($product_total + ($product['upgrade_pack']['price'] - $product['price']) >= 300)
                                    {{__('text.cart_get_ems')}}
                                @endif
                            </p>
                        @endif
                    </li>
                @endif
            @endforeach
        </ul>
        </form>

        @if (!$is_only_card)
            <form class="order-delivery" action="#">
                @csrf
                <div class="order-delivery__item">
                    <input class="hidden" id="delivery-1" data-delivery type="radio" name="delivery" value="ems" @if (session('cart_option')['shipping'] == 'ems') checked @endif
                    onchange="change_shipping('ems', {{ $product_total >= 300 ? 0 : $shipping['ems'] }})">
                    <label class="visible" for="delivery-1">
                        <span class="sr-only">delivery-1</span>
                    </label>
                    <div class="order-delivery__content">
                        <div class="order-delivery__top">
                            <span class="order-delivery__name">
                                {{__('text.checkout_express')}}
                            </span>
                            <span>
                                @if ($is_only_card)
                                    {{ $Currency::convert($shipping['ems']) }}
                                @elseif ($is_only_card_with_bonus)
                                    {{ $Currency::convert($shipping['ems']) }}
                                @else
                                    @if ($product_total >= 300)
                                        {{__('text.cart_free')}} <span style="text-decoration: line-through;">{{ $Currency::convert($shipping['ems']) }}</span>
                                    @else
                                        {{ $Currency::convert($shipping['ems']) }}
                                    @endif
                                @endif
                            </span>
                        </div>
                        <p class="order-delivery__text">
                            {{__('text.checkout_express_text')}}
                        </p>
                    </div>
                </div>
                <div class="order-delivery__item">
                    <input class="hidden" id="delivery-2" data-delivery type="radio" name="delivery" value="regular" @if (session('cart_option')['shipping'] == 'regular') checked @endif
                    onchange="change_shipping('regular', {{ $product_total >= 200 ? 0 : $shipping['regular'] }})">
                    <label class="visible" for="delivery-2">
                        <span class="sr-only">delivery-2</span>
                    </label>
                    <div class="order-delivery__content">
                        <div class="order-delivery__top">
                            <span class="order-delivery__name">
                                {{__('text.checkout_regular')}}
                            </span>
                            <span>
                                @if ($is_only_card)
                                    {{ $Currency::convert($shipping['regular']) }}
                                @elseif ($is_only_card_with_bonus)
                                    {{ $Currency::convert($shipping['regular']) }}
                                @else
                                    @if ($product_total >= 200)
                                        {{__('text.cart_free')}} <span style="text-decoration: line-through;">{{ $Currency::convert($shipping['regular']) }}</span>
                                    @else
                                        {{ $Currency::convert($shipping['regular']) }}
                                    @endif
                                @endif
                            </span>
                        </div>
                        <p class="order-delivery__text">
                            {{__('text.checkout_regular_text')}}
                        </p>
                    </div>
                </div>
            </form>
        @endif

        <form class="order-bonus" action="#">
            @csrf
            <div class="order-bonus__items">
                @foreach ($bonus as $product)
                    <label class="order-bonus__item">
                        <input data-bonus class="hidden" id="pack-{{ $loop->iteration + 1 }}" type="radio" name="bonus" value="{{ $product->pack_id }}" @checked(session('cart_option')['bonus_id'] == $product->pack_id)
                        onchange="change_bonus({{ $product->pack_id }}, {{ $product->price }})">
                        <span class="visible"></span>
                        <div class="order-bonus__content">
                            <span class="order-bonus__name">
                                <span class="bonus_name">{{ $product->name }}</span>
                                <span class="bonus_price">
                                    @if ($product->pack_id > 0)
                                        {{ $product->price == 0 ? 'Free' : $Currency::convert($product->price) }}
                                    @endif
                                </span>
                            </span>
                            <span class="order-bonus__package">{{ $product->desc }}</span>
                        </div>
                    </label>
                @endforeach
            </div>
        </form>

        @if (env('APP_GIFT_CARD') == 1)
            @if (!$has_card)
                <form class="gift_card" action="#" method="POST">
                    @csrf
                    <div class="gift_block">
                        <div class="gift_top_block__item">
                            <span class="visible gift"></span>
                            <div class="top_left_text">{{__('text.cart_add_gift')}}</div>
                        </div>
                        <div class="gift_bottom_block">
                            <div class="bottom_left_text">{{__('text.common_gift_card')}}</div>
                            <div>
                                <div class="select_gift">
                                    <div class="select_header_gift">
                                        <span class="select_current_gift" curr_packaging_id = "{{ $cards[0]->pack_id }}">{{ $Currency::convert($cards[0]->price) }}</span>
                                        <div class="select_icon">
                                            <img src="{{ asset("$design/images/icons/arrow_down_black.svg") }}">
                                        </div>
                                    </div>
                                    <div class="select_body_gifts">
                                        @foreach ($cards as $card)
                                            <div class="select_item_gift" packaging_id = "{{ $card->pack_id }}">
                                                {{ $Currency::convert($card->price) }}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="button_add_gift" onclick="addCard()">{{__('text.common_add_to_cart_text_d2')}}</div>
                        </div>
                    </div>
                </form>
            @endif
        @endif
        @php
            $total_discount = 0;

            foreach ($products as $product) {
                if($product['dosage'] != '1card')
                {
                    $total_discount += $product['max_pill_price'] * $product['num'] * $product['q'];
                }
                else {
                    $total_discount += $product['price'];
                }
            }

            $total_discount += session('cart_option')['bonus_price'];
            if (!$is_only_card) {
                $total_discount += $shipping[session('cart_option')['shipping']];
            }

            $discount = ceil(100 - (session('total')['all'] / $total_discount) * 100);

            if ($is_only_card_with_bonus) {
                $saving = 0;
                $discount = 0;
            } else {
                $saving = $total_discount - session('total')['all'];
            }

        @endphp
        <div class="order-total">
            <span class="order-total__title">{{__('text.cart_total_price_text')}}</span>
            <div class="order-total__content">
                @if (!$is_only_card && $discount != 0)
                    <div class="order-total__price">
                        <span class="order-total__old line-through">{{ $Currency::convert($total_discount) }}</span>
                        <span class="order-total__discount">{{ $discount }}%</span>
                    </div>
                    <span class="order-total__saving">{{__('text.cart_saving')}} {{ $Currency::convert($saving) }}</span>
                    <span class="order-total__only">{{__('text.cart_only')}} {{ session('total')['all_in_currency'] }}</span>
                @endif
                @if ($discount == 0 || $is_only_card)
                    <div class="order-total__only">{{ session('total')['all_in_currency'] }}</div>
                @endif
            </div>
        </div>

        <a href="{{ route('checkout.index') }}" class="order__pay">{{__('text.cart_pay_button')}}<span>→</span></a>
    </div>
    <a class="order__continue" href="{{ route('home.index') }}">{{__('text.cart_back_to_shop')}}
    </a>

</div>
</div>