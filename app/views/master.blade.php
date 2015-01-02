<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="{{ asset('assets/js/vendor/modernizr.js') }}"></script>
  </head>
  <body>

   <div class="row" style="background-color:#fff;">

      @include('navigation')

      <div id="slideshow" class="row">
        <div class="large-12 columns">
          <div class="hide-for-small">
            <div id="featured">
              <img src="http://placehold.it/1000x300&text=Slide Image" alt="slide image">    
            </div>
          </div>

        <div class="row">
          <div class="small-12 show-for-small"><br>
            <img src="http://placehold.it/1000x600&text=For Small Screens"/>
          </div>
        </div>
        </div>
      </div><br>

      <div class="large-12 columns">
        @yield('content')
      </div>

      @include('footer')

    </div>

    <script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/foundation.min.js') }}"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
