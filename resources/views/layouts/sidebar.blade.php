<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body @yield('body')>
<div class="container">


        @include('includes.header')

    <!-- main content -->

        @yield('content')



    <div class="navbar navbar-fixed-bottom">
        @include('includes.footer')
    </div>

</div>


@yield('JQ')

</body>
</html>