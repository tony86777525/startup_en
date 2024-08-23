<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ url('assets/favicon.ico') }}" type="image/x-icon">

    @stack('meta')

    @include('user.basic.common_css')

    @stack('page_css')

    @stack('csrf_token')
</head>
<body>
{{-- flash message--}}
{{--<p--}}
{{--    data-control="flash-message"--}}
{{--    class="flash-message fade {{ type }}"--}}
{{--    data-interval="5">--}}
{{--    {{ message }}--}}
{{--</p>--}}

@include('user.basic.header')

@yield('main')

@include('user.basic.footer')

@include('user.basic.common_js')

@stack('page_script')

<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
    window.cookieconsent.initialise({
        "palette": {
            "popup": {
                "background": "#252e39"
            },
            "button": {
                "background": "#14a7d0"
            }
        },
        "theme": "classic",
        "position": "bottom-left"
    });
</script>
</body>
</html>
