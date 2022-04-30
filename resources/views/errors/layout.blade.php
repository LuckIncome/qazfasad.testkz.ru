<!DOCTYPE html>
<html lang="ru">
  @include('partials.head')
<body>
  <main id="app" ref="infoBox">
      <div class="dark-wrapper"  :class="{'dark-wrapper-active': isDarkWrapper}"></div>
      @yield('content')
  </main>
  @include('partials.scripts')
  @yield('scripts')
</body>
</html>