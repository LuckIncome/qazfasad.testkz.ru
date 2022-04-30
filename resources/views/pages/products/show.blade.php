@extends('partials.layout')
@section('page_title',(strlen($one_product->title) > 1 ? $one_product->title : ''))
@section('seo_title', (strlen($one_product->seo_title) > 1 ? $one_product->seo_title : ''))
@section('meta_keywords',(strlen($one_product->meta_keywords) > 1 ? $one_product->meta_keywords : ''))
@section('meta_description', (strlen($one_product->meta_description) > 1 ? $one_product->meta_description : ''))
@section('image',$one_product->image)
@section('url',url()->current())
@section('page_class','page')
@section('content')

<section class="navigation">
  @include('partials.breadcrumbs',['title'=>(strlen($page->seo_title) > 1 ? $page->seo_title : ''), 'titleLink' => '/products', 'subtitle' => $one_product->title])
  <div class="container">
    <div class="title"></div>
  </div>
</section>

<section class="product-item">
    <div class="container">
      <div class="product-item__main">
        <div class="product-item__img">
          <img src="{{ Voyager::image($one_product->image) }}" alt="{{ $one_product->title }}">
        </div>
        <div class="content">
          <div class="product-item__name">{{ $one_product->title }}</div>
          <div class="product-item__short-description">
            <span>{{ $one_product->type }}</span>
            <span>{{ $one_product->model }}</span>
          </div>
          <div class="product-item__title">Размеры:</div>
          <div class="d-flex">
            <div class="product-item__description-name">Длина, мм:</div>
            <div class="product-item__description">{{ $one_product->length }}</div>
          </div>
          <div class="d-flex">
            <div class="product-item__description-name">Ширина, мм:</div>
            <div class="product-item__description">{{ $one_product->width }}</div>
          </div>
          <div class="d-flex">
            <div class="product-item__description-name">Толщина, мм:</div>
            <div class="product-item__description">{{ $one_product->thickness }}</div>
          </div>
          <button class="my-btn btn-gold-full" data-bs-toggle="modal" data-bs-target="#appModal">Узнать цену</button>
        </div>
      </div>
      <div class="product-item__content">
        <div class="product-item__title">Характеристики:</div>
        @if($one_product->characteristic_one !== NULL)
          {!! $one_product->characteristic_one !!}
        @else
            <div class="d-flex">
              <div class="product-item__description-name">На этом товаре характеристик нет!</div>
            </div>
        @endif
        <!--<div class="d-flex">
            <div class="product-item__description-name">Характеристика 1:</div>
            <div class="product-item__description">материал системы - Алюминий, сплав DIN 6060, DIN 6063.</div>
        </div>
        <div class="d-flex">
            <div class="product-item__description-name">Характеристика 2:</div>
            <div class="product-item__description">тип крепления к стене и в перекрытие.</div>
        </div>
        <div class="d-flex">
            <div class="product-item__description-name">Характеристика 3:</div>
            <div class="product-item__description">скрытое крепление.</div>
        </div>-->
      </div>
      <div class="product-item__content">
        <div class="product-item__title">Описание:</div>
        <div class="product-item__description description-mini">
          {!! $one_product->description !!}
        </div>
      </div>
    </div>
</section>

<section class="products products-recommendations">
	<div class="container">
	  <div class="title">вам также может понравиться</div>
	  <div class="products__slider">
	  	@foreach($products as $product)
	    <div class="product">
	      <a href="/products/{{ $product->slug }}" class="product__img"><img src="{{ Voyager::image($product->image) }}" alt="{{ $product->title }}"></a>
	      <div class="product__name">{{ $product->title }}</div>
	      <div class="product__description">
	        <span>{{ $product->type }}</span>
	        <span>{{ $product->model }}</span>
	      </div>
	    </div>
	    @endforeach 		    
	  </div>
	  <div class="products__slider-arrows">
	    <button><i class="bi products-left bi-chevron-left"></i></button>
	    <div class="products__slider-dots"></div>
	    <button><i class="bi products-right bi-chevron-right"></i></button>
	  </div>
	</div>
</section>
@endsection