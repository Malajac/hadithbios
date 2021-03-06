<!-- Stored in resources/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Narrator and Transmitter Bios @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ secure_asset('css/global.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src='https://maps.google.com/maps/api/js?sensor=false&libraries=places' type="text/javascript"></script>    
    <script src="{{ secure_asset('js/locationpicker.jquery.js') }}"></script>
</head>
<body>

<div class="page-container"
	<!-- top navbar -->
    <!--
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
       <div class="container">
    	<div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".sidebar-nav">
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           <a class="navbar-brand" href="#">Hadith Bios</a>
    	</div>
       </div>
    </div>
    -->

    <div class="container">
      <div class="row row-offcanvas row-offcanvas-left">
        
        <!-- sidebar -->
        <div class="col-xs-4 col-sm-2 sidebar-offcanvas" id="sidebar" role="navigation">
            <img src="{{ secure_asset('img/hadith2.png') }}" width="100" >            
            <ul class="nav">
              <li class="active"><a href="{{ URL::to('home') }}">Home</a></li>
              <li><a href="{{ URL::to('home') }}">List of Bios</a></li>
              <li><a href="{{ URL::to('home/input') }}">New Bio</a></li>
            </ul>
        </div>
      
        <!-- main area -->
        <div class="col-xs-12 col-sm-6">
            <div class="container ">
                <h2>Narrator and Transmitter Bios @yield('title')</h2>   
            </div>
            <div class="form-group">
                &nbsp;
            </div>       
            <div class="container ">
                @yield('content')
            </div>
          
        </div><!-- /.col-xs-12 main -->
    </div><!--/.row-->
    </div><!--/.container-->
</div>

<script type="text/javascript">
    $(document).ready(function() {
      $('[data-toggle=offcanvas]').click(function() {
        $('.row-offcanvas').toggleClass('active');
      });
    });
</script>
</body>
</html>

