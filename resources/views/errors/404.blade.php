@extends('errors.layout')
@section('page_title', __('general.pageNotFound'))
@section('seo_title',  __('general.pageNotFound'))
@section('meta_keywords', __('general.pageNotFound'))
@section('meta_description',  __('general.pageNotFound'))
@section('image',env('APP_URL').'/images/og.jpg')
@section('url',url()->current())
@section('page_class','page')
@section('content')

<div class="d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <span class="display-1 d-block">404</span>
                <div class="mb-4 lead">Уважаемый посетитель сайта!</div>
                <div class="mb-4 lead">Запрашиваемая вами страница не существует либо произошла ошибка.</div>
                <div class="mb-4 lead">Если вы уверены в правильности указанного адреса, то данная страница уже не существует на сервере или была переименована.</div>
                <a href="/" class="btn btn-link">Вернуться на главную</a>
            </div>
        </div>
    </div>
</div>

@endsection