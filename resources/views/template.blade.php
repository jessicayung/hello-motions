<!DOCTYPE html>

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>@yield('title')</title>
		<meta name="description" content="@yield('description')">	
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> -->

		<link href= {{ URL::asset('css/bootstrap.min.css') }} rel="stylesheet">

		<link href= {{ URL::asset('css/jumbotron.css') }} rel="stylesheet">

    	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<link href= {{ URL::asset('css/ie10-viewport-bug-workaround.css') }} rel="stylesheet">
		
		<!-- This was here before
		<script src="js/ie-emulation-modes-warning.js"></script> --> 


	</head>

  <body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="/">Debating Motions</a>
	        </div>

	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	              <li class="active"><a href="search">Search<span class="sr-only">(current)</span></a></li>
	              <li><a href="about">About</a></li>
	              <li><a href="random-motion">Random Motion</a></li>
	              <li><a href="wudc-motions">WUDC Motions</a></li>
	              <li><a href="contact">Contact</a></li>
	          </ul>
	          <!-- <form class="navbar-form navbar-right">
	            <div class="form-group">
	              <input type="text" placeholder="Search for Motions" class="form-control">
	            </div>
	            <button type="submit" class="btn btn-success">Search</button>
	          </form>  -->
	        </div><!--/.navbar-collapse -->
	      </div>
	    </nav>
    
    <div class="container">
    
    <div class="container">
    @yield('content')
    </div>

      <hr>

      <footer>
        <p>&copy; 2016 Jessica Yung.</p>
      </footer>

    </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-75266267-1', 'auto');
	  ga('send', 'pageview');
	</script>

  </body>
</html>