@extends('partials.layout')
@section('page_title',(strlen($page->title) > 1 ? $page->title : ''))
@section('seo_title', (strlen($page->seo_title) > 1 ? $page->seo_title : ''))
@section('meta_keywords',(strlen($page->meta_keywords) > 1 ? $page->meta_keywords : ''))
@section('meta_description', (strlen($page->meta_description) > 1 ? $page->meta_description : ''))
@section('image',$page->thumbic)
@section('url',url()->current())
@section('page_class','page')
@section('content')

<section class="banner">
<img class="banner__logo" src="{{ asset('assets/img/text.svg') }}" alt="лого">
<div class="container">
  <div class="content">
    <h1 class="banner__title">
      {{ setting('site.description') }}
    </h1>
    <button class="my-btn btn-white" data-bs-toggle="modal" data-bs-target="#appModal">Оставить заявку</button><br>
    <!-- <a href="objects.html">
      <span>267</span>
      <span>объектов</span>
    </a> -->
  </div>
</div>
</section>

<section class="banner-box">
<div class="banner-slider__dots"></div>
<div class="banner-slider">
  @foreach($first_sliders as $first_slider)
    <div class="banner-slider__item">
      <img src="{{ Voyager::image($first_slider->image) }}" alt="{{ $first_slider->title }}">
    </div>
  @endforeach
</div>
</section>

<section class="about">
<div class="container">
  <div class="d-flex">
    <div class="about__info">
      <div class="title">О компании</div>
      <div class="small-text">
        {{ $text->description }}
      </div>
      <a href="/about">Узнать подробнее <i class="bi bi-arrow-right"></i></a>
    </div>
    <div class="about__box">
      <div class="about__slider">
        @foreach($second_sliders as $second_slider)
        <div class="about__img">
          <img src="{{ Voyager::image($second_slider->image) }}" alt="{{ $second_slider->title }}">
        </div>
        @endforeach
      </div>
      <div class="about__slider-arrows">
        <button><i class="bi about-left bi-chevron-left"></i></button>
        <div class="about__slider-dots"></div>
        <button><i class="bi about-right bi-chevron-right"></i></button>
      </div>
    </div>
  </div>
</div>
</section>

<section class="products">
<div class="container">
  <div class="products__title">Наша продукция</div>
  <div class="products__slider">
    @foreach($products as $product)
    <div class="product">
      <a href="/products/{{ $product->slug }}" class="product__img"><img src="{{ Voyager::image($product->image) }}" alt="{{ $product->title }}"></a>
      <div class="product__name">{{ $product->title }}</div>
    </div>
    @endforeach  
  </div>
  <div class="products__slider-arrows products__slider-main">
    <button><i class="bi products-left bi-chevron-left"></i></button>
    <div class="products__slider-dots"></div>
    <button><i class="bi products-right bi-chevron-right"></i></button>
    <a href="/products">Смотреть все</a>
  </div>
</div>
</section>

<div class="container">
<div class="advantage__title">Наши преимущества</div>
</div>
<section class="advantage">
<div class="container">
  <div class="advantage__items">
    @foreach($icontexts as $icontext)
    <div class="advantage__item">
      <div class="num"><img src="{{ Voyager::image($icontext->icon) }}" alt="{{ $icontext->title }}"></div>
      <div class="text">{!! $icontext->title !!}</div>
    </div>
    @endforeach
  </div>
</div>
</section>

<section class="objects">
<div class="container">
  <div class="title">наши объекты</div>
  <div class="objects__items">
    @foreach($objects as $obj)
      <div class="object">
        <a href="/objects/{{$obj->slug}}" class="object__img">
          <img src="{{ Voyager::image($obj->image) }}" alt="{{ $obj->title }}">
        </a>
        <div class="object__info">
          <!--<div class="object__info-description">{{ $obj->size }}м<sup>2</div>-->
          <div class="object__info-name">{{ $obj->type }}</div>
          <div class="object__info-address">{{ $obj->address }}</div>
        </div>
      </div>
    @endforeach   
  </div>
  <a href="/objects" class="my-btn btn-gold">все объекты</a>
</div>
</section>

<section class="contact">
<div class="container">
    <div class="contact__info">
        
        <div class="title">Контакты</div> 
        <div class="address">
            @foreach($adresses as $adress)
                @if($adress->sort_id == 2)
                    {{ $adress->value }}
                @endif
            @endforeach
        </div> 
        
        <div class="contact_link">
            @foreach($allPhones as $allPhone)
                @if($allPhone->sort_id == 2)
                <a href="tel:{{ $allPhone->link }}">{{ $allPhone->value }}</a>
                @endif
                @if($allPhone->sort_id == 3)
                <a href="tel:{{ $allPhone->link }}">{{ $allPhone->value }}</a>
                @endif
            @endforeach
            {{--<a href="tel:+7 705 444 5554">+7 705 444 5554</a> 
            <a href="tel:+7 778 082 2281">+7 771 001 0370</a>--}}
        </div>
        
        <div class="address">
            @foreach($adresses as $adress)
                @if($adress->sort_id == 1)
                    {{ $adress->value }}
                @endif
            @endforeach
        </div> 
        
        <div class="contact_link">
            {{--<a href="tel:+7 771 001 0371">+7 771 001 0371</a>--}}
            <a href="tel:{{ $phone->link }}">{{ $phone->value }}</a> 
        </div>
        @foreach($emails as $email)
        <a href="mailto:{{ $email->link }}">{{ $email->value }}</a>
        @endforeach
    </div>
  <!--<div class="contact__info">-->
  <!--  <div class="title">Контакты</div>-->
  <!--  @foreach($allPhones as $allPhone)-->
  <!--    <a href="tel:{{ $allPhone->link }}">{{ $allPhone->value }}</a>-->
  <!--  @endforeach-->
  <!--  @foreach($adresses as $adress)-->
  <!--    <div class="address">{{ $adress->value }}</div>-->
  <!--  @endforeach-->
  <!--  @foreach($emails as $email)-->
  <!--    <a href="mailto:{{ $email->link }}">{{ $email->value }}</a>-->
  <!--  @endforeach-->
  <!--</div>-->
</div>
<div class="contact__maps">
  @foreach($maps as $map)
    {!! $map->value !!}
  @endforeach
</div>
</section>
@endsection