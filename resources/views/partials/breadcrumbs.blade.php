<div class="container">
  <a href="/">Главная</a> 
  <i class="bi bi-chevron-right"></i>
  @if(isset($subtitle))
    @if(isset($titleLink))
      <a href="{{$titleLink}}">{{$title}}</a> 
    @else
      <span>{{$title}}</span>
    @endif
    @if(isset($childTitle))
      <a href="{{$subtitleLink}}">{{$subtitle}}</a> 
      @if(isset($subChildTitle))
        <a href="{{$childLink}}">{{$childTitle}}</a> 
        <i class="bi bi-chevron-right"></i> 
        <span>{{$childTitle}}</span>
      @else 
        <span>{{$subChildTitle}}</span>
      @endif
    @else
      <i class="bi bi-chevron-right"></i>
      <span>{{$subtitle}}</span>
    @endif
  @else
    <span>{{$title}}</span>
  @endif
</div>
 