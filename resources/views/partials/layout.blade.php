<!DOCTYPE html>
<html lang="ru">
  @include('partials.head')
<body>
  <main id="app" ref="infoBox">
      <div class="dark-wrapper"  :class="{'dark-wrapper-active': isDarkWrapper}"></div>
      @if($page->type == 'home')
        @include('partials.header')
      @else
        @include('partials.header_with_bg')
      @endif
      @yield('content')
      @include('partials.footer')
      @include('partials.modals')
  </main>
  @include('partials.scripts')
  @yield('scripts')
</body>
</html>