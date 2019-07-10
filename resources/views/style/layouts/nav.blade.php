<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Refugee Egypt<span>.</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="{{URL('/home')}}" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="{{URL('/about')}}" class="nav-link">About</a></li>
				{{-- {{Auth::user()->level}} --}}
	        	<li class="nav-item"><a href="{{URL('/services')}}" class="nav-link">ٍServices</a></li>
	        	<li class="nav-item"><a href="{{URL('/community')}}" class="nav-link">Community</a></li>
	        	<li class="nav-item"><a href="{{URL('/donation')}}" class="nav-link">Donation</a></li>
	        	<ul class="nav navbar-nav navbar-right">
	        	@if (Auth::guest())
                            <li class="nav-item"><a href="{{URL('/login')}}" class="nav-link">Login</a></li>
                            <li class="nav-item"><a href="{{URL('/register')}}" class="nav-link">Register</a></li>
                        @else
                          
                            <div class="dropdown">
                            	<button class="btn dropdown-toggle" style="color: #ffb400;margin-top: 26px; font-weight: 700;font-size: 19px;" type="button" data-toggle="dropdown"> {{ Auth::user()->name }}
                            		<span class="caret"></span>
                            	</button>
                            	<ul class="dropdown-menu">
                            		<li class="divider"><a style="font-size: large;padding: 40px;" href="{{URL('/logout')}}">Logout</a></li>
                            	</ul>
                            </div>
							  
                                     
                        @endif
        			</ul>
	        	
	          	<!-- <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li> -->
	        	<!-- <li class="nav-item"><a href="about.html" class="nav-link">Who we are</a></li> -->
	        	<!-- <li class="nav-item"><a href="causes.html" class="nav-link">Causes</a></li> -->
	        	<!-- <li class="nav-item"><a href="blog.html" class="nav-link">Stories</a></li> -->
	        </ul> 
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->