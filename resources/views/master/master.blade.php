<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BOX | @yield('title') </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- @include('_scripts.css_scripts') --}}
     @yield('assets')
</head>

<body>
    <header>
        @include('_partials.header')
    </header>
    <main>
        <!--? slider Area Start -->
        @yield('content')
    </main>
    <footer>
        @include('_partials.footer')
    </footer>
    <!--? Search model Begin -->
    <div class="search-model-box">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-btn">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Searching key.....">
            </form>
        </div>
    </div>
    
    @yield('scripts')
</body>

</html>