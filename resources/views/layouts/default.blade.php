<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">

    <header class="row">
        @include('includes.header')
    </header>

    <div class="container">
        <div class="content">
            <div class="title">@yield('content')</div>
        </div>
    </div>



    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>