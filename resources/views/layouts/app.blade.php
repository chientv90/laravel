<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>
<div class="side-bar">
    @section('sidebar')
        This is the master sidebar.
    @show
</div>

<div class="container">
    @yield('content')
</div>
</body>
</html>
