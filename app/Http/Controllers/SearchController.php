<?php

namespace App\Http\Controllers;

use App\Models\ProductSearch;
use App\Services\ProductServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use App\Services\CurrencyServices;
use App\Services\LanguageServices;
use App\Models\Currency;
use App\Models\Language;
use App\Models\PhoneCodes;
use Illuminate\Support\Facades\App;

class SearchController extends Controller
{

    public function search_product()
    {
        $search_text = $_POST['search_text'];
        return redirect(route('search.search_result', [$search_text]));
    }

    public static function search_result($search_text) : View
    {
        $design = session('design') ? session('design') : config('app.design');
        $bestsellers = ProductServices::GetBestsellers($design);
        $menu = ProductServices::GetCategoriesWithProducts($design);
        $products = ProductServices::SearchProduct($search_text, false, $design);
        $phone_codes = PhoneCodes::all()->toArray();

        return view($design . '.search_result', [
            'design' => $design,
            'search_text' => $search_text,
            'bestsellers' => $bestsellers,
            'menu' => $menu,
            'products' => $products,
            'Language' => Language::class,
            'Currency' => Currency::class,
            'phone_codes' => $phone_codes,
        ]);
    }

    public function search_autocomplete(Request $request)
    {
        $search_text = $request->query('q');
        $design = session('design') ? session('design') : config('app.design');
        $products = ProductServices::SearchProduct($search_text, true, $design);

        $tips = '';
        foreach($products as $product)
        {
            $tips .= $product['name'] . '||' . $product['url'] . "\n";
        }

        if (!$tips) {
            $tips = __('text.search_nothing') . "||search/" . $search_text;
        }

        return $tips;
    }

}
