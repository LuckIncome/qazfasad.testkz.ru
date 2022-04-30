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

<section class="objects objects-page">
    <div class="container">
      <div class="objects__items">
        @foreach($objects as $object)
          <div class="object">
            <a href="objects/{{$object->slug}}" class="object__img">
              <img src="{{ Voyager::image($object->image) }}" alt="{{ $object->title }}">
            </a>
            <div class="object__info">
              <!--<div class="object__info-description">{{ $object->size }}м<sup>2</div>-->
              <div class="object__info-name">{{ $object->type }}</div>
              <div class="object__info-address">{{ $object->address }}</div>
            </div>
          </div>
        @endforeach       
      </div>
    </div>
</section>

@endsection