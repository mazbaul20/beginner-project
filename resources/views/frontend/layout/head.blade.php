<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>{{ $seo->title }}</title>
    <meta name="description" content="{{ $seo->description }}" />
    <meta name="keywords" content="{{ $seo->keywords }}" />

    <meta name="og:site_name" content="{{ $seo->ogSiteName }}">
    <meta name="og:url" content="{{ $seo->ogUrl }}">
    <meta name="og:title" content="{{ $seo->ogTitle }}">
    <meta name="og:description" content="{{ $seo->ogDescription }}">
    <meta name="og:image" content="{{ $seo->ogImage }}">

    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <script src="{{ asset('js/cdn.jsdelivr.net_npm_axios@1.1.2_dist_axios.min.js') }}"></script>
</head>
