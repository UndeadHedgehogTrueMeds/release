<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Language;
use App\Services\CacheServices;
use App\Services\GeoIpService;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Services\ProductServices;
use App\Services\StatisticService;

class HomeController extends Controller
{
    public function index() : View
    {
        StatisticService::SendStatistic('index');

        $bestsellers = ProductServices::GetBestsellers();

        $menu = ProductServices::GetCategoriesWithProducts();

        $design = config('app.design');
        return view($design . '.index', [
            'design' => $design,
            'bestsellers' => $bestsellers,
            'menu' => $menu,
            'Currency' => Currency::class,
            'Language' => Language::class,
        ]);
    }

    public function first_letter($letter) : View
    {
        StatisticService::SendStatistic('first_letter');

        $products = ProductServices::GetProductByFirstLetter($letter);

        $bestsellers = ProductServices::GetBestsellers();

        $menu = ProductServices::GetCategoriesWithProducts();

        $design = config('app.design');
        return view($design . '.first_letter',[
            'design' => $design,
            'products' => $products,
            'bestsellers' => $bestsellers,
            'menu' => $menu,
            'letter' => $letter,
            'Currency' => Currency::class,
            'Language' => Language::class,
        ]);
    }

    public function active($active) : View
    {
        StatisticService::SendStatistic('active');

        $bestsellers = ProductServices::GetBestsellers();

        $menu = ProductServices::GetCategoriesWithProducts();

        $products = ProductServices::GetProductByActive($active);

        $design = config('app.design');
        return view($design . '.active',[
            'design' => $design,
            'products' => $products,
            'bestsellers' => $bestsellers,
            'menu' => $menu,
            'active' => $active,
            'Currency' => Currency::class,
            'Language' => Language::class,
        ]);
    }

    public function category($category) : View
    {
        StatisticService::SendStatistic('category');

        $bestsellers = ProductServices::GetBestsellers();

        $menu = ProductServices::GetCategoriesWithProducts();

        $products = ProductServices::GetCategoriesWithProducts($category);

        $design = config('app.design');
        return view($design . '.category',[
            'design' => $design,
            'bestsellers' => $bestsellers,
            'menu' => $menu,
            'products' => $products,
            'Currency' => Currency::class,
            'Language' => Language::class,
        ]);
    }

    public function disease($disease) : View
    {
        StatisticService::SendStatistic('disease');

        $bestsellers = ProductServices::GetBestsellers();

        $menu = ProductServices::GetCategoriesWithProducts();

        $products = ProductServices::GetProductByDisease($disease);

        $design = config('app.design');
        return view($design . '.disease',[
            'design' => $design,
            'bestsellers' => $bestsellers,
            'menu' => $menu,
            'products' => $products,
            'Currency' => Currency::class,
            'Language' => Language::class,
            'disease' => $disease
        ]);
    }

    public function product($product) : View
    {
        StatisticService::SendStatistic($product);

        $design = config('app.design');
        $bestsellers = ProductServices::GetBestsellers();
        $menu = ProductServices::GetCategoriesWithProducts();

        $product = ProductServices::GetProductInfoByUrl($product);

        return view($design . '.product', [
            'design' => $design,
            'bestsellers' => $bestsellers,
            'menu' => $menu,
            'Currency' => Currency::class,
            'Language' => Language::class,
            'product' => $product
        ]);
    }

    public function about() : View
    {
        StatisticService::SendStatistic('about_us');

        $bestsellers = ProductServices::GetBestsellers();

        $menu = ProductServices::GetCategoriesWithProducts();

        $design = config('app.design');
        return view($design . '.about', [
            'design' => $design,
            'bestsellers' => $bestsellers,
            'menu' => $menu,
            'Currency' => Currency::class,
            'Language' => Language::class,
        ]);
    }

    public function help() : View
    {
        StatisticService::SendStatistic('faq');

        $bestsellers = ProductServices::GetBestsellers();

        $menu = ProductServices::GetCategoriesWithProducts();

        $design = config('app.design');
        return view($design . '.help', [
           'design' => $design,
           'bestsellers' => $bestsellers,
           'menu' => $menu,
           'Currency' => Currency::class,
           'Language' => Language::class,
        ]);
    }

    public function testimonials() : View
    {
        StatisticService::SendStatistic('testimonials');

        $bestsellers = ProductServices::GetBestsellers();

        $menu = ProductServices::GetCategoriesWithProducts();

        $design = config('app.design');
        return view($design . '.testimonials', [
           'design' => $design,
           'bestsellers' => $bestsellers,
           'menu' => $menu,
           'Currency' => Currency::class,
           'Language' => Language::class,
        ]);
    }

    public function delivery() : View
    {
        StatisticService::SendStatistic('shipping');

        $bestsellers = ProductServices::GetBestsellers();

        $menu = ProductServices::GetCategoriesWithProducts();

        $design = config('app.design');
        return view($design . '.delivery', [
           'design' => $design,
           'bestsellers' => $bestsellers,
           'menu' => $menu,
           'Currency' => Currency::class,
           'Language' => Language::class,
        ]);
    }

    public function moneyback() : View
    {
        StatisticService::SendStatistic('moneyback');

        $bestsellers = ProductServices::GetBestsellers();

        $menu = ProductServices::GetCategoriesWithProducts();

        $design = config('app.design');
        return view($design . '.moneyback', [
           'design' => $design,
           'bestsellers' => $bestsellers,
           'menu' => $menu,
           'Currency' => Currency::class,
           'Language' => Language::class,
        ]);
    }

    public function language($locale)
    {
        session(['locale' => $locale]);
        return Redirect::back();
    }

    public function currency($currency)
    {
        $coef = Currency::GetCoef($currency);
        session(['currency' => $currency]);
        session(['currency_c' => $coef]);
        return Redirect::back();
    }

}
