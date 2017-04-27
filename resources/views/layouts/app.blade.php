<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', app_name())</title>

    <!-- Meta -->
    <meta name="description" content="@yield('meta_description', 'Laravel Boilerplate CMS')">
    <meta name="author" content="@yield('meta_author', 'Nauris Linde')">
@yield('meta')

<!-- Styles -->
@yield('before-styles')
{{ Html::style(mix('css/frontend.css')) }}
@yield('after-styles')
<!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body id="app-layout">
    <div id="app">
        @include('includes.nav')
        <div class="container">
            @include('includes.partials.messages')
            @yield('content')
        </div><!-- container -->
    </div>

    <!-- Scripts -->
    @yield('before-scripts')
    {!! Html::script(mix('js/frontend.js')) !!}
    @yield('after-scripts')

    @include('includes.partials.ga')
</body>
</html>
