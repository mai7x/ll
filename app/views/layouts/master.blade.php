<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('title','名無し')</title>
		<link type="text/css" rel="stylesheet" href="http://153.121.56.186/cards/public/assets/css/bootstrap.css?1402204909" />
	<style>
		body { margin: 40px; }
	</style>
</head>
  <body>
    <nav class="navigation">
      @section('navigation')
	<a class="btn btn-small" href="../../companies"><i class="icon-eye-open"></i> CompanyIndex</a>
      @show
    </nav>
 
    <div class="container">
       @yield('content')
    </div>
     
    <div class="sidebar">
       @yield('sidebar')
    </div>
  </body>
</html>