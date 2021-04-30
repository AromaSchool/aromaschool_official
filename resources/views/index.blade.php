<html lang="en">
<head>
    <!-- COMMON TAGS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>禾場國際芳療學苑 | 提供完整專業的芳療精油知識養成</title>
    <!-- Search Engine -->
    <meta name="description" content="禾場國際芳療學苑提供台灣最完整專業的IFPA﹑NAHA國際芳療認證教育及履歷認證精油，倡導以專業的芳療知識為根基，每個人都可以成為好朋友的療癒顧問！">
    <meta name="image" content="http://aromaschool.com.tw/images/og_image.jpg">
    <!-- Schema.org for Google -->
    <meta itemprop="name" content="禾場國際芳療學苑 | 提供完整專業的芳療精油知識養成">
    <meta itemprop="description" content="禾場國際芳療學苑提供台灣最完整專業的IFPA﹑NAHA國際芳療認證教育及履歷認證精油，倡導以專業的芳療知識為根基，每個人都可以成為好朋友的療癒顧問！">
    <meta itemprop="image" content="http://aromaschool.com.tw/images/og_image.jpg">
    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta name="og:title" content="禾場國際芳療學苑 | 提供完整專業的芳療精油知識養成">
    <meta name="og:description" content="禾場國際芳療學苑提供台灣最完整專業的IFPA﹑NAHA國際芳療認證教育及履歷認證精油，倡導以專業的芳療知識為根基，每個人都可以成為好朋友的療癒顧問！">
    <meta name="og:image" content="http://aromaschool.com.tw/images/og_image.jpg">
    <meta name="og:url" content="http://aromaschool.com.tw">
    <meta name="og:site_name" content="禾場國際芳療學苑 | 提供完整專業的芳療精油知識養成">
    <meta name="og:type" content="website">
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