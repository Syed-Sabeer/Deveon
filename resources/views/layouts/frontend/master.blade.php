<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.frontend.meta')
    @include('layouts.frontend.css')
    @yield('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
</head>

<body>

    @include('layouts.frontend.preheader')
    @include('layouts.frontend.header')

    <div class="page-wrapper">
    @yield('content')
    @include('layouts.frontend.footer')
    </div>

    @include('layouts.frontend.postfooter')
    @include('layouts.frontend.script')
    @yield('script')
    @yield('js')

</body>

</html>
