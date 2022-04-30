<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@if(strlen($__env->yieldContent('seo_title')) > 2) @yield('seo_title') @else @yield('page_title') @endif</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keywords')">
    <meta name="title" content="@yield('seo_title')"/>
    <!--<link rel="canonical" href="{{url()->current()}}">-->
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta property="og:title" content="@yield('seo_title')"/>
    <meta property="og:type" content="{{strlen($__env->yieldContent('ogType')) > 2 ? $__env->yieldContent('ogType') : 'website' }}" />
    <meta property="og:description" content="@yield('meta_description')"/>
    <meta property="og:url" content="{{url()->current()}}"/>
    <meta property="og:image" content="@yield('image')"/>
    <meta property="og:image:type" content="image/jpeg"/>
    <meta property="og:image:width" content="300"/>
    <meta property="og:image:height" content="300"/>        

    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/logo.svg') }}"/>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script async src="https://cdn.jsdelivr.net/npm/vue2-touch-events@3.2.2/index.js"></script>
    <script async src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-211787799-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-211787799-1');
</script>

<script type="application/ld+json">[{"@context" : "http://schema.org","@type" : "Organization","name" : "ТОО ТД Qaz Fiber cement","description" : "Строительные материалы высокого качества","url" : "https://qaz-fasad.testkz.ru","telephone" : [" +7(771) 001-03-71"],"email" : "td_qfc@mail.ru"},{"@context" : "http://schema.org","@type" : "Product","@id" : "https://qaz-fasad.testkz.ru","name" : "ТОО ТД Qaz Fiber cement","category" : [{"@type" : "PropertyValue","name" : "О компании"},{"@type" : "PropertyValue","name" : "Продукция"},{"@type" : "PropertyValue","name" : "Документы"},{"@type" : "PropertyValue","name" : "Инструкции"},{"@type" : "PropertyValue","name" : "Наши объекты"},{"@type" : "PropertyValue","name" : "Контакты"}]}]</script>
    
</head>