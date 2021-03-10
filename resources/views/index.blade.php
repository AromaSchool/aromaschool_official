<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>禾場國際芳療學苑</title>
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <div id="app">
        <app></app>
    </div>

    @if(env('APP_ENV')=='local')
        <script src="http://localhost:35729/livereload.js"></script>
    @endif
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>