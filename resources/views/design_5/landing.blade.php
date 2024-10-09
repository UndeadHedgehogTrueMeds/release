var land_prod = '<style type="text/css"> @import url("https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto+Flex:wght@400;600;700;1000&display=swap"); * { box-sizing: border-box; } :root { --black-pure: #000; --white-pure: #fff; --black-main: #2e2e2e; --white-darker: #f4f4f4; --white-gradient: linear-gradient(180deg, #f4f4f4 0%, #fdfbfb 29.17%, #e3e3e3 100%); --gray: #808080; --gray-light: #ececec; --primary: #54a8c2; --primary-gradient: linear-gradient(180deg, #72bad0 0%, #76c8e1 28.13%, #54a8c2 100%); --red: #ed4c54; --main-color: var(--black-main); --main-offsize: 0.8125rem; --add-offsize: 1rem; --title-offsize: 1.25rem; } h4 { color: #262D38; } .content { padding-bottom: 50px; font-family: "Roboto Flex"; } .container { padding-left: 15px; padding-right: 15px; max-width: 1200px !important; width: 100%; margin: 0 auto; } @media only screen and (min-width: 1230px) { .container { padding-left: 0 !important; padding-right: 0 !important; } } a { color: #589465; text-decoration: none; } a:hover { text-decoration: none; color: #262D38; } a.more { color: #262D38; text-decoration: underline; } a.more:hover { color: #589465; text-decoration: none; } .product-box { padding: 30px 30px 30px 10px; background: #F2F5F9; border-radius: 20px; margin-bottom: 10px; display: flex; align-items: center; justify-content: space-between; } @media only screen and (max-width: 991px) { .product-box { flex-direction: column; } } @media only screen and (max-width: 767px) { .product-box { padding: 20px 10px; } } .product-box .holder-info { display: flex; align-items: center; width: 61.7%; } @media only screen and (max-width: 991px) { .product-box .holder-info { width: 100%; margin-bottom: 10px; } } @media only screen and (max-width: 369px) { .product-box .holder-info { flex-direction: column; } } .product-box .holder-info .img { width: 200px; } @media only screen and (max-width: 767px) { .product-box .holder-info .img { width: 150px; } } .product-box .holder-info .img img { display: block; max-width: 100%; height: auto; } .product-box .holder-info .product { padding: 0 20px; width: calc(100% - 200px); font-size: 14px; line-height: 19px; color: #262D38; } @media only screen and (max-width: 767px) { .product-box .holder-info .product { width: calc(100% - 150px); padding: 0 0 0 20px; } } @media only screen and (max-width: 369px) { .product-box .holder-info .product { width: 100%; padding: 20px 0; } } .product-box .holder-info .product h2 { font-weight: 700; font-size: 30px; line-height: 35px; color: #262D38; margin-bottom: 10px; } .product-box .holder-info .product .info { margin-bottom: 10px; } .product-box .holder-info .product .info span { padding-right: 5px; } .product-box .holder-info .product p { margin: 0; } .product-box .holder-info .product p+p { margin-top: 10px; } .product-box .links-box { width: 38.3%; color: #589465; font-size: 14px; line-height: 19px; } @media only screen and (max-width: 991px) { .product-box .links-box { width: 100%; } } .product-box .links-box p { margin: 0; } .product-box .links-box .text-box .text { display: inline-block; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis; } .product-box .links-box .text-box .text.active { -webkit-line-clamp: initial; } .product-box .links-box .text-box .text.active .analog { margin-right: 5px; } .package-box { border: 1px solid #E3EBFA; border-radius: 20px; margin-bottom: 50px; overflow: hidden; } .package-box h2 { font-weight: 700; font-size: 24px; line-height: 28px; color: #262D38; padding: 20px 30px; } @media only screen and (max-width: 991px) { .package-box h2 { padding: 10px 15px; font-size: 18px; line-height: 21px; } } .package-box .package-table { border-top: 1px solid #F2F5F9; } .package-box .package-table .head { padding: 10px; } @media only screen and (max-width: 991px) { .package-box .package-table .head { padding: 5px; } } .package-box .package-table .head .item { background: #F4F7FB; border-radius: 10px; padding: 17px 20px; display: flex; align-items: center; justify-content: space-between; font-weight: 700; font-size: 14px; line-height: 16px; text-transform: uppercase; color: #262D38; text-align: center; } @media only screen and (max-width: 991px) { .package-box .package-table .head .item { padding: 10px; font-size: 12px; line-height: 14px; } } .package-box .package-table .head .item span { display: block; } .package-box .package-table .head .item span:first-child { width: 300px; text-align: left; } @media only screen and (max-width: 991px) { .package-box .package-table .head .item span:first-child { width: 150px; } } @media only screen and (max-width: 640px) { .package-box .package-table .head .item span:first-child { width: 110px; } } .package-box .package-table .head .item span:nth-child(2) { width: 60px; } @media only screen and (max-width: 640px) { .package-box .package-table .head .item span:nth-child(2) { width: calc(100% / 2 - 150px); min-width: 60px; } } .package-box .package-table .head .item span:nth-child(3) { width: 185px; } @media only screen and (max-width: 640px) { .package-box .package-table .head .item span:nth-child(3) { width: calc(100% / 2 - 150px); min-width: 95px; } } .package-box .package-table .head .item span:nth-child(4) { width: 104px; } @media only screen and (max-width: 767px) { .package-box .package-table .head .item span:nth-child(4) { width: 40px; } } .package-box .package-table .body .item { border-top: 1px solid #F2F5F9; padding: 5px 30px; display: flex; align-items: center; justify-content: space-between; font-weight: 400; font-size: 16px; line-height: 19px; text-align: center; color: #262D38; } @media only screen and (max-width: 991px) { .package-box .package-table .body .item { padding: 5px 15px; font-size: 14px; line-height: 16px; } } .package-box .package-table .body .item .red { color: #ED4C54; } .package-box .package-table .body .item .item-info-delivery { font-size: 14px; line-height: 1.25; color: var(--primary); } .package-box .package-table .body .item .col:first-child { width: 300px; text-align: left; } @media only screen and (max-width: 991px) { .package-box .package-table .body .item .col:first-child { width: 150px; } } @media only screen and (max-width: 640px) { .package-box .package-table .body .item .col:first-child { width: 110px; } } .package-box .package-table .body .item .col:nth-child(2) { width: 60px; } @media only screen and (max-width: 640px) { .package-box .package-table .body .item .col:nth-child(2) { width: calc(100% / 2 - 150px); min-width: 60px; } } .package-box .package-table .body .item .col:nth-child(3) { width: 185px; } @media only screen and (max-width: 640px) { .package-box .package-table .body .item .col:nth-child(3) { width: calc(100% / 2 - 150px); min-width: 95px; } } .package-box .package-table .body .item .col:nth-child(4) { width: 140px; } @media only screen and (max-width: 767px) { .package-box .package-table .body .item .col:nth-child(4) { width: 40px; } } @media only screen and (max-width: 767px) { .package-box .package-table .body .item .btn { padding: 0; width: 40px; min-height: 40px; height: 40px; } .package-box .package-table .body .item .btn span { display: none; } .package-box .package-table .body .item .btn img { margin: 0; } } .btn.btn-primary, .app .btn.btn-primary { background: #4FAFCD; color: #FFFFFF; position: relative; z-index: 1; } .btn.btn-primary[disabled], .app .btn.btn-primary[disabled] { cursor: initial; background: rgba(79, 175, 205, 0.25); position: relative; } .btn.btn-primary:hover, .app .btn.btn-primary:hover { background: #3D94AF; } @media only screen and (max-width: 767px) { .table-box .table .body .line .btn.btn-primary { padding: 0; width: 40px; min-height: 40px; height: 40px; } .table-box .table .body .line .btn.btn-primary span { display: none; } .table-box .table .body .line .btn.btn-primary img { margin: 0; } } body .btn, .app .btn { display: flex; align-items: center; justify-content: center; text-align: center; cursor: pointer; box-sizing: border-box; border: none; background: transparent; font-weight: 700; font-size: 14px; line-height: 16px; text-transform: uppercase; color: #FFFFFF; outline: none !important; transition: all linear 0.5s; padding: 0 10px; min-height: 50px; border-radius: 10px; } @media only screen and (max-width: 480px) { .btn, .app .btn { width: initial; padding: 0px 10px; min-height: 40px; } } .btn span, .app .btn span { transition: all linear 0.5s; } .btn:focus, .app .btn:focus { outline: none !important; box-shadow: none !important; } .btn svg, .app .btn svg { display: block; margin-right: 10px; } .btn svg path, .app .btn svg path { transition: all linear 0.5s; } .btn img, .app .btn img { display: block; margin-right: 10px; } .btn.btn-primary, .app .btn.btn-primary { background: #4FAFCD; color: #FFFFFF; position: relative; z-index: 1; } .btn.btn-primary[disabled] { cursor: initial; background: rgba(79, 175, 205, 0.25); position: relative; } .btn.btn-primary:hover, .app .btn.btn-primary:hover { background: #3D94AF; } </style> <main class="content"> <div class="container"> <div class="product-box"> <div class="holder-info"> <div class="img"> @if ($product['image'] == 'gift-card') <img src="{{ asset($design . '/images/gift_card_img.svg') }}" alt="{{ $product['image'] }}"> @else <picture> <source srcset="{{ route('home.set_images', $product['image']) }}" type="image/webp"> <img src="{{ route('home.set_images', $product['image']) }}" alt="{{ $product['image'] }}"> </picture> @endif </div> <div class="product"> <h2>{{ $product['name'] }}</h2> @if ($product['image'] != 'gift-card') <div class="info"> @if (count($product['aktiv']) > 0) <span>{!! __('text.product_active') !!}</span> @foreach ($product['aktiv'] as $aktiv) <strong><a href="{{ route('home.active', $aktiv) }}">{{ $aktiv }}</a></strong> @endforeach @endif </div> <div class="info"> <span>{!! __('text.product_pack1_1') !!}</span> <strong><b style="color: #f2d43a;">{{ __('text.product_pack2_1') }}{{ random_int(10, 40) }}{{ __('text.product_pack3_1') }}</b></strong> </div> @endif <div class="info"> <p>{{ $product['desc'] }}</p> </div> @if (count($product['disease']) > 0) <div class="info"> <span>{{ __('text.product_diseases') }}</span> @foreach ($product['disease'] as $disease) <strong><a href="{{ route('home.disease', str_replace(' ', '-', $disease)) }}">{{ ucfirst($disease) }}</a></strong> @endforeach </div> @endif @if (!empty($product['sinonim'])) <div class="info"> <span>{{ $product['name'] }} {!! __('text.product_others') !!}</span> @foreach ($product['sinonim'] as $sinonim) <strong> <a href = "{{ route('home.product', $sinonim['url']) }}"> {{ $sinonim['name'] }} </a> </strong> @endforeach </div> @endif </div> </div> <div class="links-box"> @if (!empty($product['analog'])) <h4>{{ $product['name'] }} {!! __('text.product_analogs') !!}</h4> <div class="text-box"> <span class="text"> @foreach ($product['analog'] as $analog) <a href="{{ route('home.product', $analog['url']) }}" class="analog">{{ $analog['name'] }}</a> @endforeach </span> @if (count($product['analog']) > 10) <a class="more" id="more">view all</a> @endif </div> @endif </div> </div> @foreach ($product['packs'] as $key => $dosage) @php $prev_dosage = 0; @endphp @foreach ($dosage as $item) @if ($loop->last) @continue @endif @if ($loop->iteration != 1 && $key != $prev_dosage) </div> </div> @endif @if ($key != $prev_dosage) <div class="package-box"> <h2> @if ($product['image'] != 'gift-card') {{ "{$product['name']} $key" }}@if ($loop->parent->iteration == 1 && $product['rec_name'] != 'none') <span style="font-weight:lighter;">, {{ __('text.product_need_more') }}</span> <span class="details-page-product"><a href="{{ route('home.product', $product['rec_url']) }}" style="font-weight: normal;">{{ $product['rec_name'] }}</a></span> @endif @else {{ $product['name'] }} @endif </h2> <div class="package-table"> <div class="head"> <div class="item"> <span>{{ __('text.product_package_title') }}</span> <span>{{ __('text.product_price_per_pill_title') }}</span> <span>{{ __('text.product_price_title') }}</span> <span></span> </div> </div> @php $prev_dosage = $key; @endphp @endif <div class="body"> <div class="item"> <div class="col"> <span>{{ "{$item['num']} {$product['type']}" }}</span> @if ($item['price'] >= 300) <span class="item-info-delivery">{{ __('text.cart_free_express') }}</span> @elseif($item['price'] < 300 && $item['price'] >= 200) <span class="item-info-delivery">{{ __('text.cart_free_regular') }}</span> @endif </div> <div class="col"> <span>{{ $Currency::convert(round($item['price'] / $item['num'], 2), false, true) }}</span> </div> @if ($loop->remaining != 1 && $product['image'] != 'gift-card') <div class="col"><span><span class="red">{{ $Currency::convert($dosage['max_pill_price'] * $item['num']) }} -{{ ceil(100 - ($item['price'] / ($dosage['max_pill_price'] * $item['num'])) * 100) }}%</span> {!! __('text.product_only') !!} {{ $Currency::convert($item['price']) }}</span></div> @else <div class="col"><span>{{ $Currency::convert($item['price']) }}</span></div> @endif <div class="col"> <form method="POST" action="{{ route('cart.add', $item['id']) }}"> @csrf <button type="submit" class="btn btn-primary"> <img src="{{ asset("$design/images/icon/ico-basket.svg") }}" alt=""> <span>{{ __('text.product_add_to_cart_text_d2') }}</span> </button> </form> </div> </div> </div> @endforeach </div> </div> @endforeach <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <script> $("#more").on("click", function(e) { e.preventDefault(); $(this).parents(".text-box").find(".text").toggleClass("active"); if ($(this).text() == "view all") { $(this).html("hide"); } else { $(this).html("view all"); } }); </script> </div> </main>'; document.write(land_prod);