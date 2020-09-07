<html>
<head>
    <title>App Name - @yield('title')</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
<div class="side-bar">
    @section('sidebar')
        This is the master sidebar.
    @show
</div>

<div class="container" id="app">
    @yield('content')
</div>
</body>
</html>
