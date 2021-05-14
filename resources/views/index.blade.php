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
    <title>{{ env('META_TAG_AUTHOR')}} | {{ env('META_TAG_TITLE') }}</title>
    <link rel="icon" href="favicon.ico" />
    <!-- Search Engine -->
    <meta name="keywords" content="禾場,芳療,精油,認證課程,國際認證,NAHA,IFPA">
    <meta name="description" content="{{ env('META_TAG_DESCRIPTION')}}">
    <meta name="image" content="{{ env('APP_URL') }}/images/og_image.jpg">
    <meta name="author" content="{{ env('META_TAG_AUTHOR') }}">
    <meta name="copyright" content="{{ env('META_TAG_AUTHOR') }}">
    <!-- Schema.org for Google -->
    <meta itemprop="name" content="{{ env('META_TAG_AUTHOR')}} | {{ env('META_TAG_TITLE') }}">
    <meta itemprop="description" content="{{ env('META_TAG_DESCRIPTION')}}">
    <meta itemprop="image" content="{{ env('APP_URL') }}/images/og_image.jpg">
    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta property="og:title" content="{{ env('META_TAG_AUTHOR')}} | {{ env('META_TAG_TITLE') }}">
    <meta property="og:description" content="{{ env('META_TAG_DESCRIPTION')}}">
    <meta property="og:image" content="{{ env('APP_URL') }}/images/og_image.jpg">
    <meta property="og:url" content="{{ env('APP_URL') }}">
    <meta property="og:site_name" content="{{ env('META_TAG_AUTHOR')}} | {{ env('META_TAG_TITLE') }}">
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

    <div id="app">
        <app></app>
    </div>

    @if(env('APP_ENV')=='local')
    <script src="http://localhost:35729/livereload.js"></script>
    @endif

    <script src="{{ mix('js/manifest.js') }}"></script>
    <script src="{{ mix('js/vendor.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>