<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="index, follow" />
    <link rel="stylesheet" type="text/css" href="{{ asset('style_checkout/style.css') }}">
	<link rel="shortcut icon" href="{{ asset('style_checkout/favicon.ico') }}">
    <script src="{{ asset("vendor/jquery/jquery-3.6.3.min.js") }}"></script>
    <title>{{__('text.checkout_title')}}</title>
    {!! isset($pixel) ? $pixel : '' !!}
</head>
<body>
    <div class="preloader">
		<div class="preloader__row">
			<div class="preloader__item"></div>
			<div class="preloader__item"></div>
		</div>
	</div>
	<div class="ploader">
		<div class="ploader__row">
			<div class="ploader__item"></div>
			<div class="ploader__item"></div>
			<div class="ploader__item"></div>
			<div class="ploader__item"></div>
			<div class="ploader__item"></div>
		</div>
	</div>
    <div class="wrapper">

	</div>
    <script>
        $(document).ready(function() {
        $(".ploader").hide();
            $.ajax({
            method: 'GET',
            data: { },
                url: "{{ route('checkout.content') }}",
                dataType: 'html',
                success : function(data) {
                    data = JSON.parse(data);
                    $('.wrapper').html(data.html);
                    document.body.classList.add('loaded_hiding');
                    window.setTimeout(function () {
                        document.body.classList.add('loaded');
                        document.body.classList.remove('loaded_hiding');
                    }, 500);
                }
            });
        });
    </script>
    <div id="insur_popup">
		<div class="popup_block_insur">
			<button type="button" class="close_popup">
				<svg width="20" height="20">
					<use xlink:href="/style_checkout/images/icons/icons.svg#svg-close"></use>
				</svg>
			</button>
			<h3 class="popup_head">{{__('text.checkout_notice')}}</h3>
			<div class="popup_text">
				<p>{{__('text.checkout_insurance_popup')}}</p>
			</div>
			<button id="change_insur">
				{{__('text.checkout_ok')}}
			</button>
		</div>
	</div>
</body>
</html>