@extends('admin.layouts.main')

@section('title', $title)
@section('page_name', $title)

@section('content')

<div class="statistic" style="margin-top: 2%;">
    <div class="statistic__top-row">
    <div class="payment-details__top-row">
        <div class="payment-details__currency">
            <h3 class="payment-details__caption">{{__('text.admin_products_show_title')}}</h3>
        </div>
    </div>
    </div>
    <div class="statistic__rows" id="available_product">

    </div>
</div>

<script>
    $(document).ready(function() {
        $.ajax({
        method: 'GET',
        data: { },
            url: "{{ route('admin.available_products_content') }}",
            dataType: 'html',
            success : function(data) {
                data = JSON.parse(data);
                $('#available_product').html(data.html);
            }
        });
    });
</script>

@endsection