@extends('layouts.app')

@section('content')



    <!--<div class="container-fluid">-->
	
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
						<li>
							<a href="shop.html">Shop</a>
						</li>
                        <li >
							<a href="customize.html">Customize</a>
						</li>
					</ul>                    
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
        
      <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
      <ul class="orbit-container">
        <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
        <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
        <li class="orbit-slide is-active">
          <img src="http://placehold.it/2000x750">
        </li>
        <li class="orbit-slide">
          <img src="http://placehold.it/2000x750">
        </li>
        <li class="orbit-slide">
          <img src="http://placehold.it/2000x750">
        </li>
        <li class="orbit-slide">
          <img src="http://placehold.it/2000x750">
        </li>
      </ul>
    </div>

    <div class="row column text-center">
      <h1>Changing the World Through Design</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>
      <a href="#" class="button large">Learn More</a>
      <a href="#" class="button large hollow">Learn Less</a>
    </div>

    <hr>
    
    <div class="row">
      <div class="medium-4 large-4 columns">
        <h3>Lorum</h3>
        <p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna.</p>
      </div>
      <div class="medium-4 large-4 columns">
        <h3>Ipsum</h3>
        <p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna.</p>
      </div>
      <div class="medium-4 large-4 columns">
        <h3>Dolor</h3>
        <p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna.</p>
      </div>
      
    </div>
    
    <hr>

    <div class="row column">
      <div class="callout primary text-center">
        <h3>Really Great Deals</h3>
        <p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam porttitor.</p>
      </div>
    </div>

    <hr>

    <div class="row column text-center">
      <h2>Some Other Neat Products</h2>
      <hr>
    </div>

    <div class="row small-up-3 medium-up-3 large-up-3">
      <div class="column">
        <a href="product.html">
        <img class="thumbnail" src="http://placehold.it/300x400">
        
        <h5>Nulla At Nulla Justo, Eget</h5>
        </a>
        <p>$400</p>
          
        <div class="row medium-up-2 large-up-1 column">
        <a href="#" class="button expanded hollow">Buy</a>
        </div>
          
        <div class="medium-up-2 large-up-1 column">
        <a href="#" class="button expanded">Customize</a>
        </div>
          
      </div>
      <div class="column">
        <img class="thumbnail" src="http://placehold.it/300x400">
        <h5>Nulla At Nulla Justo, Eget</h5>
        <p>$400</p>
        <div class="row medium-up-2 large-up-1 column">
        <a href="#" class="button expanded hollow">Buy</a>
        </div>
          
        <div class="medium-up-2 large-up-1 column">
        <a href="#" class="button expanded">Customize</a>
        </div>
      </div>
      <div class="column">
        <img class="thumbnail" src="http://placehold.it/300x400">
        <h5>Nulla At Nulla Justo, Eget</h5>
        <p>$400</p>
        <div class="row medium-up-2 large-up-1 column">
        <a href="#" class="button expanded hollow">Buy</a>
        </div>
          
        <div class="medium-up-2 large-up-1 column">
        <a href="#" class="button expanded">Customize</a>
        </div>
      </div>
      
    </div>

    <hr>
    <div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
				</div>
			</div><!--futer-->
    <!--</div>--> <!--container-->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
      
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script>
      $(document).foundation();
    </script>

@endsection