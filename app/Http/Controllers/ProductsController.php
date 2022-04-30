<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Product;
use App\Models\ProductType;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::select('type_id', 'title', 'image', 'slug')
            ->where('status',true)
            ->orderBy('sort_id')
            ->get();
        $productTypes = ProductType::select('id', 'title', 'slug', 'sort_id')
            ->where('status',true)
            ->orderBy('sort_id')
            ->get();
        $page = Page::select('type', 'id', 'title', 'excerpt', 'body', 'image', 'slug', 'seo_title', 'meta_description', 'meta_keywords', 'status')
            ->where(['type' => 'products', 'status' => Page::STATUS_ACTIVE])
            ->firstOrFail();
        return view('pages.products.index', compact('page', 'products', 'productTypes'));
    }

    public function show($articleSlug)
    {
        $one_product = Product::where('slug', $articleSlug)->where('status',true)->firstOrFail();
        $products = Product::select('title', 'image', 'type', 'model', 'slug')
            ->where('status',true)
            ->orderBy('sort_id')
            ->get();  
        $page = Page::select('type', 'id', 'title', 'excerpt', 'body', 'image', 'slug', 'seo_title', 'meta_description', 'meta_keywords', 'status')
            ->where(['type' => 'products', 'status' => Page::STATUS_ACTIVE])
            ->firstOrFail();
        return view('pages.products.show', compact('page', 'one_product', 'products'));
    }
	
	public function cat($category)
    {
        $products = Product::select('type_id', 'title', 'image', 'slug')
            ->where('status',true)
            ->orderBy('sort_id')
            ->get();
        $productTypes1 = ProductType::select('id', 'title', 'slug', 'sort_id')
            ->where('status',true)
            ->orderBy('sort_id')
            ->get();
        $productTypes = ProductType::where('slug', $category)->select('id', 'title', 'slug', 'sort_id')
            ->where('status',true)
            ->orderBy('sort_id')
            ->get();
        $page = Page::select('type', 'id', 'title', 'excerpt', 'body', 'image', 'slug', 'seo_title', 'meta_description', 'meta_keywords', 'status')
            ->where(['type' => 'products', 'status' => Page::STATUS_ACTIVE])
            ->firstOrFail();
        return view('pages.products.index_cat', compact('page', 'productTypes', 'products', 'productTypes1' ));
    }
}
