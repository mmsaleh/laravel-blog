<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Mayada's Blog</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="/frontend/styles.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
<div class="wrapper">
    <div class="box">
        <div class="row">
            <!-- sidebar -->
            <div class="column col-sm-3" id="sidebar">
                <a class="logo" href="/">MS</a>
                <ul class="nav">
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="#">About Me</a></li>
                    <li><a href="#">Contact Me</a></li>
                </ul>
                <ul class="nav hidden-xs" id="sidebar-footer">
                    <li>
                      <a href="/"><h3>Mayada Saleh</h3>Powered with <i class="fa fa-coffee" aria-hidden="true"></i> Built on Laravel <img src="/img/laravel.png"> </a>
                    </li>
                </ul>
            </div>
            <!-- /sidebar -->
          
            <!-- main -->
            <div class="column col-sm-9" id="main">
                <div class="padding">
                    <div class="full col-sm-9">
                      
                        @yield('content')
                      
                        <div class="col-sm-12">
                          <div class="page-header text-muted divider">
                            Connect with Me
                          </div>
                        </div>
                      
                        <div class="row">
                          <div class="col-sm-6">
                            <a href="#">Twitter</a> <small class="text-muted">|</small> <a href="#">Linkedin</a> <small class="text-muted">|</small> <a href="#">Google+</a>
                          </div>
                        </div>
                        
                        <hr>
                      
                        <div class="row" id="footer">    
                          <div class="col-sm-6">
                          </div>
                          <div class="col-sm-6">
                            <p>
                            @if (Auth::check())
                              <a href="{{ route('posts.index') }}" class="text-muted"><i class="fa fa-cog" aria-hidden="true"></i></a>
                              <a href="{{ route('logout') }}" class="text-muted">Logout</a>
                              @else
                              <a href="{{ route('login') }}" class="text-muted">Login</a>
                            @endif
                            <a href="#" class="text-muted">| ©2016 - Mayada Saleh</a>
                            </p>
                          </div>
                        </div>
                      
                      <hr>
                                            
                    </div><!-- /col-9 -->
                </div><!-- /padding -->
            </div>
            <!-- /main -->
        </div>
    </div>
</div>
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
	</body>
</html>