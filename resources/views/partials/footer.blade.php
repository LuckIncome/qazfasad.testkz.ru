<footer class="footer" ><!--:class="{'footer-fixed':ifFooterFixed}"-->
  <div class="footer__top">
    <div class="container">
      <div class="content">
        <label>Оставьте заявку для сотрудничества</label>
        <form id="subscription" action="{{route('subscribe')}}" method="POST">
          @csrf
          <input type="email" name="email" placeholder="Введите свой E-mail" required>
          <button type="submit"><img src="{{ asset('assets/icons/arrow.svg') }}" alt="arrow"></button>
        </form>
      </div>
      <div class="content">
        <a href="{{route('pages.get',$pages['about']->first()->slug)}}">{{$pages['about']->first()->title}}</a>
        <a href="/products-category/fibracemetnye-plity">{{$pages['products']->first()->title}}</a>
        <a href="{{route('pages.get',$pages['documents']->first()->slug)}}">{{$pages['documents']->first()->title}}</a>
      </div>
      <div class="content">     
        <a href="{{route('pages.get',$pages['instruction']->first()->slug)}}">{{$pages['instruction']->first()->title}}</a>
        <a href="{{route('pages.get',$pages['objects']->first()->slug)}}">{{$pages['objects']->first()->title}}</a>
        <a href="{{route('pages.get',$pages['contacts']->first()->slug)}}">{{$pages['contacts']->first()->title}}</a>
      </div>
      <div class="content">
        <a class="phone" href="tel:{{ setting('site.footer_phone') }}"><img src="{{ asset('assets/icons/call.svg') }}" alt="call">{{ setting('site.footer_phone') }}</a>
        <a class="email" href="mailto:{{ setting('site.footer_email') }}">{{ setting('site.footer_email') }}</a>
        <div class="network">
          @foreach($socials as $social)
          <a rel="nofollow" href="{{$social->link}}">
            <img src="{{Voyager::image($social->icon)}}" alt="{{$social->value}}">
          </a>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <div class="footer__bottom">
    <div class="container">
      {!! setting('site.copyrights') !!}
      <a rel="nofollow" href="https://i-marketing.kz/"><img src="{{ asset('assets/img/logo-im.svg') }}" alt="i-marketing.kz"></a>
    </div>
  </div>
</footer>

   <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(86226588, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/86226588" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->