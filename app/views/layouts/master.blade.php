<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('title','名無し')</title>
		<link type="text/css" rel="stylesheet" href="http://153.121.56.186/ll/public/assets/css/bootstrap.css?1402204909" />
	<style>
		body { margin: 40px; }
	</style>
</head>
  <body>
      @section('navigation')
    <nav class="navbar navbar-default" role="navigation">
     
     <div class="container-fluid">
        <div class="navbar-header">
         <a class="navbar-brand" href="#">@yield('h1_title','名無し')</a>
        </div>
        <div class="collapse navbar-collapse">
         <ul class="nav navbar-nav">
	    <li><a href="/ll/public/companies">登録会社一覧</a></li>
	    <li><a href="/ll/public/cards">登録名刺一覧</a></li>
         </ul>
	<ul class="nav navbar-nav navbar-right">
            <li><a href="logout">ログアウト</a></li>
	</ul>
        </div><!-- /.navbar-collapse -->
        
     </div><!-- /.container-fluid -->
    </nav>

      @show


 
    <div class="container">
       @yield('content')
    </div>
     
    <div class="sidebar">
       @yield('sidebar')
    </div>
  </body>
</html>
