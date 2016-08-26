@extends('layouts.app')

@section('content')



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
						<li>
							<a href="shop.html">Shop</a>
						</li>
                        <li class="active">
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
        <div class="naslov"> 
            <h3>
				Lorem ipsum dolor sit amet.  Etiam porta sem malesuada magna mollis euismod.
			</h3>
        </div>
        <div class="centar">
		<div class="col-md-3">
            <img alt="Skica" src="img/cipelica.jpg" width="300" height="200" />
		</div><!--skica-->
		<div class="col-md-5">
            <img alt="Model" src="img/shoe.jpg" />
		</div><!--model-->
		<div class="col-md-4">
            <div class="panel-group" id="panel-491163">
				<div class="panel panel-default">
					<div class="panel-heading">
						 <a class="panel-title" data-toggle="collapse" data-parent="#panel-491163" href="#panel-element-955023">Part #1</a>
					</div>
					<div id="panel-element-955023" class="panel-collapse collapse in">
						<div class="panel-body">
							<div class="btn-group">
						 
						        <button class="btn btn-default" type="button" id="crvena">
                                </button> 
						         <button class="btn btn-default" type="button" id="plava">
						         </button> 
						       <button class="btn btn-default" type="button" id="zuta">
                                </button> 
						          <button class="btn btn-default" type="button" id="zelena">
						          </button>
                                
					           </div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						 <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-491163" href="#panel-element-460706">Part #2</a>
					</div>
					<div id="panel-element-460706" class="panel-collapse collapse">
						<div class="panel-body">
							<div class="btn-group">
						 
						        <button class="btn btn-default" type="button" id="crvena">
                                </button> 
						         <button class="btn btn-default" type="button" id="plava">
						         </button> 
						       <button class="btn btn-default" type="button" id="zuta">
                                </button> 
						          <button class="btn btn-default" type="button" id="zelena">
						          </button>
                                
					           </div>
						</div>
					</div>
                    
                    
				</div>
                <div class="panel panel-default">
					<div class="panel-heading">
						 <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-491163" href="#panel-element-460703">Part #3</a>
					</div>
					<div id="panel-element-460703" class="panel-collapse collapse">
						<div class="panel-body">
							<div class="btn-group">
						 
						        <button class="btn btn-default" type="button" id="crvena">
                                </button> 
						         <button class="btn btn-default" type="button" id="plava">
						         </button> 
						       <button class="btn btn-default" type="button" id="zuta">
                                </button> 
						          <button class="btn btn-default" type="button" id="zelena">
						          </button>
                                
					           </div>
						</div>
					</div>
                    
                    
				</div>
                <div class="panel panel-default">
					<div class="panel-heading">
						 <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-491163" href="#panel-element-460702">Part #4</a>
					</div>
					<div id="panel-element-460702" class="panel-collapse collapse">
						<div class="panel-body">
							<div class="btn-group">
						 
						        <button class="btn btn-default" type="button" id="crvena">
                                </button> 
						         <button class="btn btn-default" type="button" id="plava">
						         </button> 
						       <button class="btn btn-default" type="button" id="zuta">
                                </button> 
						          <button class="btn btn-default" type="button" id="zelena">
						          </button>
                                
					           </div>
						</div>
					</div>
				</div>
			 </div>
            
	       </div><!--biranje boja-->
            
        </div><!--centralni deo-->
        
      </div>
        </div>
    </div><!--container-->
      
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>

@endsection