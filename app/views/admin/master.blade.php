<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="{{ asset('assets/js/vendor/modernizr.js') }}"></script>
  </head>
  <body>
    <nav class="top-bar" data-topbar role="navigation">
	  <ul class="title-area">
	    <li class="name">
	      <h1><a href="#">LaraCommerce</a></h1>
	    </li>
	    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
	  </ul>

	  <section class="top-bar-section">
	    <ul class="right">
	      <li class="active"><a href="#">Welcome, admin!</a></li>
	    </ul>
	  </section>
	</nav>

	<div class="row wrapper">

      @include('admin.sidebar')

      <div id="main" class="large-10 columns">

        @if(Session::has('message'))
        <div class="row">
          <div data-alert class="alert-box success radius large-11 columns large-centered">
            {{ Session::get('message') }}
            <a href="#" class="close">&times;</a>
          </div>
        </div>
        @endif

  	     @yield('content')

      </div>

     </div>
    
    <script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/foundation.min.js') }}"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
