<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
<!-- Using precombined bootstrap file -->
	<link rel="stylesheet"  href="{!!asset('/css/bootstrap-grid.css')!!}">
	<link rel="stylesheet"  href="{!!asset('/css/bootstrap-grid.min.css')!!}">
	<link rel="stylesheet"  href="{!!asset('/css/bootstrap-reboot.css')!!}">
	<link rel="stylesheet"  href="{!!asset('/css/bootstrap-reboot.min.css')!!}">
	<link rel="stylesheet"  href="{!!asset('/css/bootstrap.css')!!}">
	<link rel="stylesheet"  href="{!!asset('/css/bootstrap.min.css')!!}">
	<link rel="stylesheet"  href="{!!asset('/fonts/font-awesome.css')!!}">
	<link rel="stylesheet"  href="{!!asset('/fonts/font-awesome.min.css')!!}">
<style >
	.navcolor
	{
		background-color: #007E33;
	}
</style>

</head>
<body class="bg-success">
@include('layout.nav')
@include('layout.carousel')
@yield('content')
<script src="{!!asset('/js/jquery-3.1.1.js')!!}"></script>
<script src="{!!asset('/js/bootstrap.js')!!}"></script>
<script src="{!!asset('/js/bootstrap.min.js')!!}"></script>
<script src="{!!asset('/js/bootstrap.bundle.js')!!}"></script>
<script src="{!!asset('/js/bootstrap.bundle.min.js')!!}"></script>
<script src="{!!asset('/js/tether.min.js')!!}"></script>
</body>
</html>