@extends('layouts.app')

@section('content')
@section('style')
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="{!! asset('css/style.css') !!}" rel="stylesheet">
    <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
@endsection
  
  

    <div class="container-fluid">
    <div class="navbar">
		<div class="col-md-12">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="index.html">Home</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a href="gallery.html">Gallery</a>
						</li>
						<li class="active">
							<a href="shop.html">Shop</a>
						</li>
                        <li>
							<a href="customize.html">Customize</a>
						</li>
					</ul>
                    
					<!--<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control">
						</div> 
						<button type="submit" class="btn btn-default">
							Submit
						</button>
					</form>-->
                    
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">Cart</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Action</a>
								</li>
								<li>
									<a href="#">Another action</a>
								</li>
								<li>
									<a href="#">Something else here</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Separated link</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				
			</nav>
			
		</div>
	   </div><!--navbar-->
        <div class="row small-up-2 medium-up-3 large-up-4">
            <div class="column">
                <a href="product.html">
              <img class="thumbnail" src="http://placehold.it/550x550">
                </a>
              <h5>My Site</h5>
            </div>
            <div class="column">
              <img class="thumbnail" src="http://placehold.it/550x550">
              <h5>My Site</h5>
            </div>
            <div class="column">
              <img class="thumbnail" src="http://placehold.it/550x550">
              <h5>My Site</h5>
            </div>
            <div class="column">
              <img class="thumbnail" src="http://placehold.it/550x550">
              <h5>My Site</h5>
            </div>
            <div class="column">
              <img class="thumbnail" src="http://placehold.it/550x550">
              <h5>My Site</h5>
            </div>
            <div class="column">
              <img class="thumbnail" src="http://placehold.it/550x550">
              <h5>My Site</h5>
            </div>
            <div class="column">
              <img class="thumbnail" src="http://placehold.it/550x550">
              <h5>My Site</h5>
            </div>
            <div class="column">
              <img class="thumbnail" src="http://placehold.it/550x550">
              <h5>My Site</h5>
            </div>
            <div class="column">
              <img class="thumbnail" src="http://placehold.it/550x550">
              <h5>My Site</h5>
            </div>
            <div class="column">
              <img class="thumbnail" src="http://placehold.it/550x550">
              <h5>My Site</h5>
            </div>
            <div class="column">
              <img class="thumbnail" src="http://placehold.it/550x550">
              <h5>My Site</h5>
            </div>
            <div class="column">
              <img class="thumbnail" src="http://placehold.it/550x550">
              <h5>My Site</h5>
            </div>
          </div>

          <hr>
    </div><!--container-->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script>
      $(document).foundation();
    </script>
  @endsection