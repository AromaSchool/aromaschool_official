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
    <title>{{ $title }} | {{ $author }}</title>
    <link rel="icon" href="favicon.ico" />
    <!-- Search Engine -->
    <meta name="keywords" content="禾場,芳療,精油,認證課程,國際認證,NAHA,IFPA">
    @if ($description)
      <meta name="description" content="{{ $description }}" data-vmid="name:description">
    @endif
    <meta name="image" content="{{ $image }}">
    <meta name="author" content="{{ $author }}">
    <meta name="copyright" content="{{ $author }}">
    <!-- Schema.org for Google -->
    <meta itemprop="name" content="{{ $title }} | {{ $author }}" data-vmid="itemprop:name">
    @if ($description)
      <meta itemprop="description" content="{{ $description }}" data-vmid="itemprop:description">
    @endif
    <meta itemprop="image" content="{{ $image }}">
    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta property="og:title" content="{{ $title }} | {{ $author }}" data-vmid="og:title">
    @if ($description)
      <meta property="og:description" content="{{ $description }}" data-vmid="og:description">
    @endif
    <meta property="og:image" content="{{ $image }}">
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:site_name" content="{{ $title }} | {{ $author }}" data-vmid="og:site_name">
    <meta property="og:type" content="website">
    <meta property="fb:app_id" content="363121530631" />
    <meta property="fb:admins" content="363121530631"/>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ mix('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ mix('css/page.css') }}">
    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2373975565977473');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=2373975565977473&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
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

    <!-- Structured Data -->
    @if ($jsonld)
    <script type="application/ld+json">
      {!! \json_encode($jsonld, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES) !!}
    </script>
    @endif

    @if( config('app.env') == 'local')
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