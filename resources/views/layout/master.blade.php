<!doctype html>
<html lang="en">
<head>
    @include('layout.style')
</head>
<body>

@include('layout.header')
<div class="inner-wrapper">
    <!-- start: sidebar -->
@include('layout.left-menu')
<!-- end: sidebar -->

    @yield('content')

</div>
@include('layout.script')
</body>
</html>
