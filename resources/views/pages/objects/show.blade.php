@extends('partials.layout')
@section('page_title',(strlen($one_object->title) > 1 ? $one_object->title : ''))
@section('seo_title', (strlen($one_object->seo_title) > 1 ? $one_object->seo_title : ''))
@section('meta_keywords',(strlen($one_object->meta_keywords) > 1 ? $one_object->meta_keywords : ''))
@section('meta_description', (strlen($one_object->meta_description) > 1 ? $one_object->meta_description : ''))
@section('image',$one_object->image)
@section('url',url()->current())
@section('page_class','page')
@section('content')

<section class="navigation">
  @include('partials.breadcrumbs',['title'=>(strlen($page->seo_title) > 1 ? $page->seo_title : ''), 'titleLink' => '/objects', 'subtitle' => $one_object->title])
  <div class="container">
    <div class="title"><h1>{{$one_object->title}}</h1></div>
  </div>
</section>

<section class="object-item">
    <div class="container">
      <div class="object-item__slider">
        <div class="object-item__slider-for">
          @foreach(json_decode($one_object->images) as $img_big)
            <img src="{{ Voyager::image($img_big) }}" alt="{{ $one_object->title }}">
          @endforeach
        </div>
        <div class="object-item__slider-arrows">
          <div class="arrows object-left"><i class="bi bi-chevron-left"></i></div>
          <div class="arrows object-right"><i class="bi bi-chevron-right"></i></div>
        </div>
      </div>
      <div class="object-item__slider-nav">
        @foreach(json_decode($one_object->images) as $img)
          <img src="{{ Voyager::image($img) }}" alt="{{ $one_object->title }}">
        @endforeach
      </div>
      <div class="object-item__info">
        <div class="next-link">
          <!--<a href="object.html?id-1">Следующий объект <i class="bi products-right bi-chevron-right"></i></a>-->
        </div>
        <div class="content">
          <div class="object-item__description">
            <div class="object-item__title">Материал:</div>
            <div class="object-item__text">
              {!! $one_object->description !!}
            </div>
          </div>
          <div class="object-item__specifications">
            <div class="object-item__title">Город:</div>
            <div class="object-item__text-bold">{{ $one_object->city }}</div>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="objects object-page">
    <div class="container">
      <div class="title">ПОхожие объекты</div>
      <div class="objects__slider">
        @foreach($objects as $obj)
          <div class="object">
            <a href="/objects/{{$obj->slug}}" class="object__img">
              <img src="{{ Voyager::image($obj->image) }}" alt="{{ $obj->title }}">
            </a>
            <div class="object__info">
              <!--<div class="object__info-description">{{ $obj->size }}м<sup>2</sup></div>-->
              <div class="object__info-name">{{ $obj->type }}</div>
              <div class="object__info-address">{{ $obj->address }}</div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
</section>

@endsection