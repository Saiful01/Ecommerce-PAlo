<?php

namespace App\Http\Controllers;

use App\ParentCategory;
use App\Product;
use App\ProductCategory;
use App\PromotionalSlider;
use App\Shop;
use App\Slider;
use App\SubCategory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
    {

        $new_products = Product::orderBy('products.product_id', 'DESC')->where('products.is_active', true)/*->limit(6)*/ ->get();
        $featured_products = Product::orderBy('products.product_id', 'DESC')
            ->where('products.is_active', true)
            ->where('products.is_featured', true)
            ->limit(5)->get();
        $best_deals = Product::orderBy('products.product_id', 'DESC')->where('products.is_active', true)->where('products.product_type', 3)->get();

        $popular_categories = ParentCategory::limit(9)->get();
        foreach ($popular_categories as $item) {
            $sub_categories = $item->categories = ProductCategory::where('parent_category_id', $item->parent_category_id)->get();
            foreach ($sub_categories as $sub_category) {
                $sub_category->sub_categories = SubCategory::where('category_id', $sub_category->category_id)->get();
            }
        }

        //return $popular_categories;

        $promotions = PromotionalSlider::limit(2)->orderBy('created_at', 'DESC')->get();
        $sliders = Slider::orderBy('created_at', 'DESC')->orderBy('created_at', 'DESC')->get();
        $section_one_promotions = PromotionalSlider::where('section_id', 1)->orderBy('created_at', 'DESC')->get();
        $full_banner = PromotionalSlider::where('section_id', 2)->orderBy('created_at', 'DESC')->first();
        $half_banner = PromotionalSlider::where('section_id', 3)->limit(2)->orderBy('created_at', 'DESC')->get();

        $shops=Shop::get();
        $news=[];


        return view('common.home.index')
            ->with('sliders', $sliders)
            ->with('shops', $shops)
            ->with('news', $news)
            ->with('new_products', $new_products);

    }


    public function details($id, $name)
    {
        $product = Product::where('product_id', $id)->first();
        $images = [];
        $related_products = Product::limit(10)->get();
        return view('common.product.details')
            ->with('product', $product)
            ->with('images', $images)
            ->with('related_products', $related_products);
    }

    public function parentaCategoryProduct($id, $name)
    {
        $title = $name;
        $products = Product::where('parent_category_id', $id)->limit(50)->get();
        return view('common.category.index')
            ->with('products', $products)
            ->with('title', $title);

    }

    public function categoryProduct($id, $name)
    {
        $title = $name;
        $products = Product::where('category_id', $id)->limit(50)->get();
        return view('common.category.index')
            ->with('products', $products)
            ->with('title', $title);
    }

    public function subCategoryProduct($id, $name)
    {
        $title = $name;
        $products = Product::where('sub_category_id', $id)->limit(50)->get();
        return view('common.category.index')
            ->with('products', $products)
            ->with('title', $title);
    }


    public function privacy_policy()
    {
        return view('common.privacy_policy.index');

    }

    public function failed()
    {
        return view('common.404');
    }

    public function cart()
    {
        return view('common.cart.index');

    }

    public function checkout()
    {
        return view('common.checkout.index');

    }

    public function OrderSuccess()
    {
        return view('common.order.success');
    }

    public function about()
    {
        return view('common.404');
    }
    public function shopProducts()
    {
        return view('common.categories.index');
    }

}
