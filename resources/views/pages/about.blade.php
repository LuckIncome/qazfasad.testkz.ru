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
		<div class="title" ><h1>{{$page->title}}</h1></div>
	</div>
</section>

<section class="company-info">
	<div class="container">
	  <div class="big-text">
      {{ $text->description }}	    
	  </div>
	  <div class="content">
	    <div class="small-text">
	      {{ $text->excerpt }}
	    </div>
	    <button class="my-btn btn-gold-full" data-bs-toggle="modal" data-bs-target="#appModal">Оставить заявку</button>
	  </div>
	</div>
</section>

<section class="company-advantage">
<div class="container">
  <div class="company-advantage__items">
      @foreach($icontexts as $icontext)
  	    <div class="company-advantage__item">
  	      <div class="num"><img src="{{ Voyager::image($icontext->icon) }}" alt="{{ $icontext->title }}"></div>
  	      <div class="text">{!! $icontext->title !!}</div>
  	    </div>
      @endforeach
	</div>
</div>
</section>

<section class="company-content">
<div class="container">
  <div class="big-text">
    {!! $text->content !!}
  </div>
</div>
</section>

<section class="company-certificates">
<div class="container">
  <div class="certificate__title">Наши партнеры</div>
  <div class="company-certificates__slider">
    @foreach($certificates as $certificate)
    <div class="certificate">
      <img src="{{ Voyager::image($certificate->icon) }}" alt="{{ $certificate->title }}">
      <div class="text">
        {{ substr("$certificate->text", 0, 55) }}
      </div>
    </div>
    @endforeach   
  </div>
  <div class="company-certificates__slider-arrows">
    <button><i class="bi company-certificates-left bi-chevron-left"></i></button>
    <div class="company-certificates__slider-dots"></div>
    <button><i class="bi company-certificates-right bi-chevron-right"></i></button>
  </div>
</div>
</section>
@endsection