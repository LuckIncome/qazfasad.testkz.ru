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
    <table class="table">
    <tbody>
        @foreach($instructions as $instruction)		
			@foreach(json_decode($instruction->file, false, 512, JSON_UNESCAPED_UNICODE) as $item)
                <tr>
                    <td class="text-start" style="padding-top:25px;"><p>{{$instruction->title}}</p></td>
                    <td class="text-end"><a class="btn btn-dark" href="/storage/{{$item->download_link}}" style="padding-right:70px;padding-left:70px;" >Скачать</a></td>
                </tr>
            @endforeach
		@endforeach
    </tbody>
    </table>
    </div>
</section>
@endsection