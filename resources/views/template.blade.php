<!DOCTYPE html>

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>@yield('title')</title>
		<meta name="description" content="">	
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

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
	          <a class="navbar-brand" href="index.php">Debating Motions</a>
	        </div>

	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	              <li class="active"><a href="search.php">Search<span class="sr-only">(current)</span></a></li>
	              <li><a href="about">About</a></li>
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
    
    @yield('content')

      <hr>

      <footer>
        <p>&copy; 2015 Jessica Yung.</p>
      </footer>

    </div>

  </body>
</html>