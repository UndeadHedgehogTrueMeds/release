<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Language;
use App\Services\CurrencyServices;
use App\Services\LanguageServices;
use Illuminate\Support\Facades\Redirect;
use App\Services\CacheServices;
use App\Services\GeoIpService;
use Illuminate\View\View;
use App\Services\ProductServices;
use App\Models\PhoneCodes;

class HomeController extends Controller
{
    public function index() : View
    {
        $design = session('design') ? session('design') : config('app.design');
        $phone_codes = PhoneCodes::all()->toArray();

        if (!in_array($design, ['design_7', 'design_8'])) {

            $bestsellers = ProductServices::GetBestsellers($design);
            $menu = ProductServices::GetCategoriesWithProducts($design);
            return view($design . '.index',
            [
                'design' => $design,
                'bestsellers' => $bestsellers,
                'menu' => $menu,
                'phone_codes' => $phone_codes,
                'Language' => Language::class,
                'Currency' => Currency::class
            ]);

        } elseif ($design == 'design_7') {
            $product = ProductServices::GetProductInfoByUrl('rybelsus', $design);
            return view($design . '.index',
            [
                'design' => $design,
                'product' => $product,
                'phone_codes' => $phone_codes,
                'Language' => Language::class,
                'Currency' => Currency::class
            ]);
        } else {
            $products_urls = ['viagra', 'cialis', 'levitra'];

            foreach ($products_urls as $product_url) {
                $products[$product_url] =  ProductServices::GetProductInfoByUrl($product_url, $design);
            }
            return view($design . '.index',
            [
                'design' => $design,
                'products' => $products,
                'phone_codes' => $phone_codes,
                'Language' => Language::class,
                'Currency' => Currency::class
            ]);
        }
    }

    public function first_letter($letter) : View
    {
        $design = session('design') ? session('design') : config('app.design');
        $products = ProductServices::GetProductByFirstLetter($letter, $design);
        $phone_codes = PhoneCodes::all()->toArray();
        $bestsellers = ProductServices::GetBestsellers($design);

        $menu = ProductServices::GetCategoriesWithProducts($design);


        return view($design . '.first_letter',[
            'design' => $design,
            'products' => $products,
            'bestsellers' => $bestsellers,
            'menu' => $menu,
            'letter' => $letter,
            'phone_codes' => $phone_codes,
            'Language' => Language::class,
            'Currency' => Currency::class
        ]);
    }

    public function active($active)
    {
        $design = session('design') ? session('design') : config('app.design');
        $bestsellers = ProductServices::GetBestsellers($design);
        $phone_codes = PhoneCodes::all()->toArray();
        $menu = ProductServices::GetCategoriesWithProducts($design);

        $products = ProductServices::GetProductByActive($active, $design);


        if (count($products) == 1) {
            return redirect(route('home.product', $products[0]['url']));
        }

        return view($design . '.active',[
            'design' => $design,
            'products' => $products,
            'bestsellers' => $bestsellers,
            'menu' => $menu,
            'active' => $active,
            'phone_codes' => $phone_codes,
            'Language' => Language::class,
            'Currency' => Currency::class
        ]);
    }

    public function category($category) : View
    {
        $design = session('design') ? session('design') : config('app.design');
        $bestsellers = ProductServices::GetBestsellers($design);
        $phone_codes = PhoneCodes::all()->toArray();
        $menu = ProductServices::GetCategoriesWithProducts($design);

        $products = ProductServices::GetCategoriesWithProducts($design, $category);

        return view($design . '.category',[
            'design' => $design,
            'bestsellers' => $bestsellers,
            'menu' => $menu,
            'products' => $products,
            'phone_codes' => $phone_codes,
            'Language' => Language::class,
            'Currency' => Currency::class
        ]);
    }

    public function disease($disease) : View
    {
        $design = session('design') ? session('design') : config('app.design');
        $bestsellers = ProductServices::GetBestsellers($design);
        $phone_codes = PhoneCodes::all()->toArray();
        $menu = ProductServices::GetCategoriesWithProducts($design);

        $products = ProductServices::GetProductByDisease($disease, $design);

        return view($design . '.disease',[
            'design' => $design,
            'bestsellers' => $bestsellers,
            'menu' => $menu,
            'products' => $products,
            'disease' => $disease,
            'phone_codes' => $phone_codes,
            'Language' => Language::class,
            'Currency' => Currency::class
        ]);
    }

    public function product($product) : View
    {
        $design = session('design') ? session('design') : config('app.design');
        $bestsellers = ProductServices::GetBestsellers($design);
        $menu = ProductServices::GetCategoriesWithProducts($design);
        $phone_codes = PhoneCodes::all()->toArray();
        $product = ProductServices::GetProductInfoByUrl($product, $design);
        // $packs = ProductServices::GetPacksById()

        return view($design . '.product', [
            'design' => $design,
            'bestsellers' => $bestsellers,
            'menu' => $menu,
            'product' => $product,
            'phone_codes' => $phone_codes,
            'Language' => Language::class,
            'Currency' => Currency::class
        ]);
    }

    public function about() : View
    {
        $design = session('design') ? session('design') : config('app.design');
        $bestsellers = ProductServices::GetBestsellers($design);
        $phone_codes = PhoneCodes::all()->toArray();
        $menu = ProductServices::GetCategoriesWithProducts($design);

        return view($design . '.about', [
            'design' => $design,
            'bestsellers' => $bestsellers,
            'menu' => $menu,
            'phone_codes' => $phone_codes,
            'Language' => Language::class,
            'Currency' => Currency::class
        ]);
    }

    public function help() : View
    {
        $design = session('design') ? session('design') : config('app.design');
        $bestsellers = ProductServices::GetBestsellers($design);
        $phone_codes = PhoneCodes::all()->toArray();
        $menu = ProductServices::GetCategoriesWithProducts($design);

        return view($design . '.help', [
           'design' => $design,
           'bestsellers' => $bestsellers,
           'menu' => $menu,
           'phone_codes' => $phone_codes,
           'Language' => Language::class,
           'Currency' => Currency::class
        ]);
    }

    public function testimonials() : View
    {
        $design = session('design') ? session('design') : config('app.design');
        $bestsellers = ProductServices::GetBestsellers($design);
        $phone_codes = PhoneCodes::all()->toArray();
        $menu = ProductServices::GetCategoriesWithProducts($design);

        return view($design . '.testimonials', [
           'design' => $design,
           'bestsellers' => $bestsellers,
           'menu' => $menu,
           'phone_codes' => $phone_codes,
           'Language' => Language::class,
           'Currency' => Currency::class
        ]);
    }

    public function delivery() : View
    {
        $design = session('design') ? session('design') : config('app.design');
        $bestsellers = ProductServices::GetBestsellers($design);
        $phone_codes = PhoneCodes::all()->toArray();
        $menu = ProductServices::GetCategoriesWithProducts($design);

        return view($design . '.delivery', [
           'design' => $design,
           'bestsellers' => $bestsellers,
           'menu' => $menu,
           'phone_codes' => $phone_codes,
           'Language' => Language::class,
           'Currency' => Currency::class
        ]);
    }

    public function moneyback() : View
    {
        $design = session('design') ? session('design') : config('app.design');
        $bestsellers = ProductServices::GetBestsellers($design);
        $phone_codes = PhoneCodes::all()->toArray();
        $menu = ProductServices::GetCategoriesWithProducts($design);

        return view($design . '.moneyback', [
           'design' => $design,
           'bestsellers' => $bestsellers,
           'menu' => $menu,
           'phone_codes' => $phone_codes,
           'Language' => Language::class,
           'Currency' => Currency::class
        ]);
    }

    public function contact_us() : View
    {
        $design = session('design') ? session('design') : config('app.design');
        $bestsellers = ProductServices::GetBestsellers($design);
        $phone_codes = PhoneCodes::all()->toArray();
        $menu = ProductServices::GetCategoriesWithProducts($design);

        return view($design . '.contact_us', [
            'design' => $design,
            'bestsellers' => $bestsellers,
            'menu' => $menu,
            'phone_codes' => $phone_codes,
            'Language' => Language::class,
            'Currency' => Currency::class
        ]);
    }

    public function affiliate() : View
    {
        $design = session('design') ? session('design') : config('app.design');
        $bestsellers = ProductServices::GetBestsellers($design);
        $phone_codes = PhoneCodes::all()->toArray();
        $menu = ProductServices::GetCategoriesWithProducts($design);

        return view($design . '.affiliate', [
            'design' => $design,
            'bestsellers' => $bestsellers,
            'menu' => $menu,
            'phone_codes' => $phone_codes,
            'Language' => Language::class,
            'Currency' => Currency::class
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

    public function design($design)
    {
        session(['design' => 'design_' . $design]);
        return Redirect::back();
    }

}
