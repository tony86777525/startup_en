<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
{{--    <meta name="google-site-verification" content="google0298ab1a73a377c5">--}}
    <title>@yield('title')</title>
    <meta name="description" content="Startup Portal Taiwan is provided by the Small and Medium Enterprise and Startup Administration, Ministry of Economic Affairs (MOEA SMESA) to help more international entrepreneurs to start their business in Taiwan.">
    <meta property="og:site_name" content="Startup Portal Taiwan">
    <meta property="og:title" content="Startup Portal Taiwan">
    <meta property="og:description"
          content="Startup Portal Taiwan is provided by the Small and Medium Enterprise and Startup Administration, Ministry of Economic Affairs (MOEA SMESA) to help more international entrepreneurs to start their business in Taiwan.">
    <meta property="og:type" content="website">
    <meta property="og:url" content=" https://startup.sme.gov.tw/en/">
    <meta property="og:image" content="http://127.0.0.1:8000/assets/img/taipei.jpg">

    <link rel="shortcut icon" href="http://127.0.0.1:8000/assets/favicon.ico" type="image/x-icon">

    @include('user.basic.common_css')
    @stack('csrf_token')
</head>
<body>
<div role="dialog" aria-live="polite" aria-label="cookieconsent" aria-describedby="cookieconsent:desc" class="cc-window cc-floating cc-type-info cc-theme-classic cc-bottom cc-left cc-color-override-530831885 " style="">
    <!--googleoff: all-->
    <span id="cookieconsent:desc" class="cc-message">This website uses cookies to ensure you get the best experience on our website. <a aria-label="learn more about cookies" role="button" tabindex="0" class="cc-link" href="https://www.cookiesandyou.com" rel="noopener noreferrer nofollow" target="_blank">Learn more</a></span>
    <div class="cc-compliance">
        <a aria-label="dismiss cookie message" role="button" tabindex="0" class="cc-btn cc-dismiss">Got it!</a>
    </div>
    <!--googleon: all-->
</div>
@include('user.basic.header')

@yield('main')

@include('user.basic.common_js')

@stack('page_script')
</body>
</html>
