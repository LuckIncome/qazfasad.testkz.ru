@extends('partials.layout')
@section('page_title',(strlen($page->title) > 1 ? $page->title : ''))
@section('seo_title', (strlen($page->seo_title) > 1 ? $page->seo_title : ''))
@section('meta_keywords',(strlen($page->meta_keywords) > 1 ? $page->meta_keywords : ''))
@section('meta_description', (strlen($page->meta_description) > 1 ? $page->meta_description : ''))
@section('image',$page->thumbic)
@section('url',url()->current())
@section('page_class','page')
@section('content')

<section class="navigation">
	@include('partials.breadcrumbs',['title'=>(strlen($page->seo_title) > 1 ? $page->seo_title : '')])
	<div class="container">
		<div class="title"><h1>{{$page->title}}</h1></div>
	</div>
</section>
	
<section class="products-page">
    <div class="container">
        <div class="nav flex-column nav-pills">
          @foreach($productTypes1 as $productType)
          <div class="tab-link @if($url = URL::current() == route('products.cat', ['category' => $productType->slug])) active @endif" data-bs-toggle="pill" data-bs-target="#v-pills-tab-{{ $productType->sort_id }}">
            <a href="/products-category/{{ $productType->slug }}">{{ $productType->title }}</a>
          </div>
          @endforeach         
        </div>
        <div class="tab-content">
          @foreach($productTypes as $productType)
          <div class="tab-pane fade @if($loop->first) show active @endif" id="v-pills-tab-{{ $productType->sort_id }}">
            @foreach($products as $product)
              @if($productType->id == $product->type_id)
                <div class="product">
                  <div class="product__img"><img src="{{ Voyager::image($product->image) }}" alt="{{ $product->title }}"></div>
                  <div class="product__name">{{ $product->title }}</div>
                  <a href="/products/{{ $product->slug }}" class="product__link">Подробнее</a>
                </div>  
              @endif
            @endforeach   
          </div>
          @endforeach                        
        </div>       
    </div>		
</section>
@endsection