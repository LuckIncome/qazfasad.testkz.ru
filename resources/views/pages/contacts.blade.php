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
</section>

<section class="contact-page">
<div class="container">
  <div class="content">
    <div class="title"><h1>{{$page->title}}</h1></div>
    
    <!--<div class="item">-->
    <!--  <div class="icon"><img src="{{ asset('assets/icons/call.svg') }}" alt="call"></div>-->
    <!--  <div class="info">-->
    <!--  	@foreach($allPhones as $allPhone)-->
    <!--      <a href="tel:{{ $allPhone->link }}">{{ $allPhone->value }}</a>-->
    <!--    @endforeach-->
    <!--  </div>-->
    <!--</div>-->
    <!--<div class="item">-->
    <!--  <div class="icon"><img src="{{ asset('assets/icons/location.svg') }}" alt="location"></div>-->
    <!--  <div class="info">-->
    <!--  	@foreach($adresses as $adress)-->
    <!--    	<div class="address">{{ $adress->value }}</div>-->
    <!--    @endforeach-->
    <!--  </div>-->
    <!--</div>-->
    <div class="item-grop">
        
        <div class="item">
            <div class="item-info">
              <div class="icon"><img src="{{ asset('assets/icons/location.svg') }}" alt="location"></div>
              <div class="info">
                	<div class="address">
                	    @foreach($adresses as $adress)
                            @if($adress->sort_id == 2)
                                {{ $adress->value }}
                            @endif
                        @endforeach 
                	</div>
              </div>
            </div>
            <div class="item-info">
              <div class="icon"><img src="{{ asset('assets/icons/call.svg') }}" alt="location"></div>
              <div class="info">
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
            </div>
                
        </div>
        
        <div class="item">
            
            <div class="item-info">
              <div class="icon"><img src="{{ asset('assets/icons/location.svg') }}" alt="location"></div>
              <div class="info">
                	<div class="address">
                	    @foreach($adresses as $adress)
                            @if($adress->sort_id == 1)
                                {{ $adress->value }}
                            @endif
                        @endforeach
                	</div>
              </div>
            </div>
            <div class="item-info">
              <div class="icon"><img src="{{ asset('assets/icons/call.svg') }}" alt="location"></div>
              <div class="info">
                	{{--<a href="tel:+7 771 001 0371">+7 771 001 0371</a>--}}
                	<a href="tel:{{ $phone->link }}">{{ $phone->value }}</a>
              </div>
            </div>
            
        </div>
        
    </div>
    
    <div class="item-grop">
        <div class="item">
        <div class="item-info">
          <div class="icon"><img src="{{ asset('assets/icons/email.svg') }}" alt="email"></div>
          <div class="info">
          	@foreach($emails as $email)
            	<a href="mailto:{{ $email->link }}">{{ $email->value }}</a>
            @endforeach
          </div>
         </div>
    </div>
    </div>
    
  </div> 
  
  <form id="requestFor1" action="{{route('feedback')}}" method="POST">
    @csrf
    <div class="contact-page-title">Получить консультацию</div>
    <div class="d-flex flex-column">
        <input class="input" type="text" name="name" id="name" placeholder="Ваше имя*" required>
        <input class="input" type="tel" name="phone" id="number" placeholder="Номер телефона*" required>
        <input class="input" type="text" name="email" id="email" placeholder="Введите свой E-mail" required>
    </div>
    <input type="hidden" name="page" value="">
    <input type="hidden" name="url" value="{{url()->current()}}">
    <button type="submit" class="my-btn btn-gold-full">Получить консультацию</button>
  </form>

</div>
</section>

<section class="contact-page-maps">
	@foreach($maps as $map)
		{!! $map->value !!}
	@endforeach
</section>
@endsection