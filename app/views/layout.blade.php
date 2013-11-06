<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="custom accounting">
    <meta name="author" content="mindfire">
    <title>Accounting</title>
    {{-- This comment will not be in the rendered HTML
        {{ basset_stylesheets('application') }}
        {{ basset_javascripts('application') }} 
    --}}
    
    <link rel="stylesheet" type="text/css" href="assets/stylesheets/bootstrap.css" /> 
    <link rel="stylesheet" type="text/css"  href="assets/stylesheets/custom.css" >
    <link rel="stylesheet" type="text/css"  href="assets/stylesheets/jquery.dataTables.css" >
    <link rel="stylesheet" type="text/css"  href="assets/stylesheets/jquery.treeview.css" />
 @yield('css-files')
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ route('home') }}">SooHoo Customs</a>
        </div>
         <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{ route('home') }}">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Accounting <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('checklist') }}">Checks Listing</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    
    <div class="container">
        @yield('content')
    </div>

    <script src="assets/javascripts/jslibs/a_jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="assets/javascripts/jslibs/bootstrap.min.js"></script>
    <script src="assets/javascripts/jslibs/jquery.dataTables.js"></script>
    <script src="assets/javascripts/jslibs/jquery.dataTables.js"></script>
    <script src="assets/javascripts/jslibs/typeahead.min.js" type="text/javascript"></script>

    @yield('js-files')
</body>
</html>

