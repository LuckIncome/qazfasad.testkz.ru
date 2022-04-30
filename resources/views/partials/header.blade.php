<header class="header header-home">
  <div class="container">
    <a href="/" class="header__logo">
      <img src="{{ Voyager::image(setting('site.logo')) }}"alt="{{setting('site.title')}}">
    </a>
    <div class="header__menu">
      <a href="{{route('pages.get',$pages['about']->first()->slug)}}">{{$pages['about']->first()->title}}</a>
      <a href="/products-category/fibracemetnye-plity">{{$pages['products']->first()->title}}</a>
      <a href="{{route('pages.get',$pages['documents']->first()->slug)}}">{{$pages['documents']->first()->title}}</a>
      <a href="{{route('pages.get',$pages['instruction']->first()->slug)}}">{{$pages['instruction']->first()->title}}</a>
      <a href="{{route('pages.get',$pages['objects']->first()->slug)}}">{{$pages['objects']->first()->title}}</a>
      <a href="{{route('pages.get',$pages['contacts']->first()->slug)}}">{{$pages['contacts']->first()->title}}</a>
    </div>
   <div class="header__phone-group">
    <div class="btn-group">
        <div>
          {{--@foreach($phone as $ph)
          <a href="tel:{{$ph->link}}" class="header__phone" >
            <span>Нур-Султан</span> <img src="{{ asset('assets/icons/call.svg') }}"alt="call">
            <span>{{$ph->value}}</span> <i class="bi bi-caret-down-fill"></i>
          </a>
          @endforeach--}}
          
          <a href="tel:{{$phone->link}}" class="header__phone" >
           <span>Нур-Султан</span> <img src="{{ asset('assets/icons/call.svg') }}"alt="call">
            <span>{{$phone->value}}</span> <i class="bi bi-caret-down-fill"></i>
          </a>
           </div> 
         
         
        <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuClickableInside">
          @foreach($phones as $pho)
            <a class="dropdown-item" href="tel:{{$pho->link}}">Алматы {{$pho->value}}</a>
          @endforeach
        </div>        
      </div>
    </div>
    
          <!--  <div class="header__phone-group">-->
          <!--  <a href="tel:+7 777 011 0222" class="header__phone">-->
          <!--    <img src="icons/call.svg" alt="">-->
          <!--    <span>Нур-Султан +7 777 011 0222</span>-->
          <!--  </a>-->
          <!--  <div class="btn-group">-->
          <!--    <div class="header__phone" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside">-->
          <!--      <i class="bi bi-caret-down-fill"></i>-->
          <!--    </div>-->
          <!--    <div class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">-->
          <!--      <a class="dropdown-item" href="tel:+7 777 011 0222">+7 777 011 0222</a>-->
          <!--      <a class="dropdown-item" href="tel:+7 777 011 0222">+7 777 011 0222</a>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
    
    
    
    
    
  </div>
</header>

<header class="header header-mobile" :class="{'header-fixed' : isMobile}">
  <div class="container">
    <div class="header__toggle" @click="toggleMobile">
      <transition name="fade" mode="out-in">
        <button key="open" v-if="!isMobile"><i class="bi bi-list"></i></button>
        <button key="close" v-else><i class="bi bi-x"></i></button>
      </transition>
    </div>
    <a href="/" class="header__logo">
      <img src="{{ Voyager::image(setting('site.logo')) }}"alt="{{setting('site.title')}}">
    </a>
    {{--@foreach($phone as $ph)
    <a href="tel:{{$ph->link}}" class="header__phone">
      <img src="{{ asset('assets/icons/call.svg') }}"alt="call">
    </a>
    @endforeach--}}
    
    <a href="tel:{{$phone->link}}" class="header__phone">
      <img src="{{ asset('assets/icons/call.svg') }}"alt="call">
    </a>
    <transition name="fade" mode="out-in">
          <div class="header__trigger" v-if="isMobile">
            @foreach($phones as $pho)
            <a href="tel:{{$pho->link}}" class="header__phone">
              <img src="{{ asset('assets/icons/call.svg') }}"alt="call">
              <span>{{$pho->value}}</span>
            </a>
            @endforeach
            <div class="header__menu">
              <a href="{{route('pages.get',$pages['about']->first()->slug)}}">{{$pages['about']->first()->title}}</a>
              <a href="{{route('pages.get',$pages['products']->first()->slug)}}">{{$pages['products']->first()->title}}</a>
              <a href="{{route('pages.get',$pages['documents']->first()->slug)}}">{{$pages['documents']->first()->title}}</a>
              <a href="{{route('pages.get',$pages['instruction']->first()->slug)}}">{{$pages['instruction']->first()->title}}</a>
              <a href="{{route('pages.get',$pages['objects']->first()->slug)}}">{{$pages['objects']->first()->title}}</a>
              <a href="{{route('pages.get',$pages['contacts']->first()->slug)}}">{{$pages['contacts']->first()->title}}</a>
            </div>
            <div class="network">
              @foreach($socials as $social)
                <a rel="nofollow" href="{{$social->link}}">
                  <img src="{{Voyager::image($social->icon)}}"alt="{{$social->value}}">
                </a>
              @endforeach
            </div>
          </div>
      </transition>
  </div>
</header>