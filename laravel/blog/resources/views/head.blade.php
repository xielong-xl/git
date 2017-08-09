<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script type="text/javascript" src="js/index.js"></script>
</head>
<body>
	<p>kkkkkkkkkk</p>
	<p>@yield('pp')</p>
	@section('content')
	     <p>这里是head的页面</p>  
	  @show
    @yield('ccc')
</body>
</html>