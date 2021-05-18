<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JF07FGNP0M"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-JF07FGNP0M');
    </script>
    <!-- COMMON TAGS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('services.meta.author') }} | {{ config('services.meta.title') }}</title>
    <link rel="icon" href="favicon.ico" />
    <!-- Search Engine -->
    <meta name="keywords" content="禾場,芳療,精油,認證課程,國際認證,NAHA,IFPA">
    <meta name="description" content="{{ config('services.meta.description')}}" data-vmid="name:description">
    <meta name="image" content="{{ config('app.url') }}/images/og_image.jpg">
    <meta name="author" content="{{ config('services.meta.author') }}">
    <meta name="copyright" content="{{ config('services.meta.author') }}">
    <!-- Schema.org for Google -->
    <meta itemprop="name" content="{{ config('services.meta.author') }} | {{ config('services.meta.title') }}" data-vmid="itemprop:name">
    <meta itemprop="description" content="{{ config('services.meta.description')}}" data-vmid="itemprop:description">
    <meta itemprop="image" content="{{ config('app.url') }}/images/og_image.jpg">
    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta property="og:title" content="{{ config('services.meta.author') }} | {{ config('services.meta.title') }}" data-vmid="og:title">
    <meta property="og:description" content="{{ config('services.meta.description')}}" data-vmid="og:description">
    <meta property="og:image" content="{{ config('app.url') }}/images/og_image.jpg">
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:site_name" content="{{ config('services.meta.author') }} | {{ config('services.meta.title') }}" data-vmid="og:site_name">
    <meta property="og:type" content="website">
    <meta property="fb:app_id" content="363121530631" />
    <meta property="fb:admins" content="363121530631"/>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ mix('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ mix('css/page.css') }}">
</head>
<body>
    <!-- Messenger 洽談外掛程式 Code -->
    <div id="fb-root"></div>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v10.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/zh_TW/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Your 洽談外掛程式 code -->
    <div class="fb-customerchat"
        attribution="biz_inbox"
        page_id="363121530631">
    </div>

    <div id="app"></div>

    @if(env('APP_ENV')=='local')
    <script src="http://localhost:35729/livereload.js"></script>
    @else
    <script rel="preload" src="{{ mix('/js/manifest.js') }}"></script>
    <script rel="preload" src="{{ mix('/js/vendor-vue.js') }}"></script>
    <script rel="preload" src="{{ mix('/js/vendor-net.js') }}"></script>
    <script rel="preload" src="{{ mix('/js/vendor-utils.js') }}"></script>
    @endif
    <script rel="preload" src="{{ mix('/js/app.js') }}"></script>
</body>
</html>