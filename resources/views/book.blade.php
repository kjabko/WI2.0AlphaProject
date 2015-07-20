<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Tile Create</title>

    <!-- Bootstrap core CSS -->
    
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKiwbzaIqNL3VwcuoSU_wOtwvsOXwHJMA&libraries=places"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  
    
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">

    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
      <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Triplofi</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="{{ url('/home') }}">Home</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ url('/create_tile') }}">Create Another Tile</a></li>
            <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
{!! Html::image('uploads/' . $userTile->id . '/' . $userTile->img_bg, $userTile->img_bg, array('class' => 'img-responsive', 'style'=>'width:500px; height:400px;')) !!}
 
 {!! $userTile->title !!}
 {!! $userTile->description !!}


 <div id="map-canvas"></div>

 <script>
 var lat = {!! $userTile->lat !!};
 var lng = {!! $userTile->lng !!};

 var map = new google.maps.Map(document.getElementById('map-canvas'),{
  center:{
    lat: lat,
    lng: lng
  },
    zoom: 15
 });

 var marker = new google.maps.Marker({
  position:{
    lat:lat,
    lng:lng
  },
  map:map
 });
 </script>

   
   
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
