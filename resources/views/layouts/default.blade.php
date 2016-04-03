<!doctype html>
<html>
<head>

    @include('includes.head')

</head>

<body @yield('body')>


<div class="container">

    @include('includes.header')


    @yield('content')


    @include('includes.footer')

</div>


<!-- jQuery -->
<script src="twitter-bootstrap-v2/docs/assets/js/jquery.js"></script>

<!-- Bootstrap JavaScript -->
<script src="twitter-bootstrap-v2/docs/assets/js/bootstrap-dropdown.js"></script>

</body>
</html>