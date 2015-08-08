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
    <link href="{{ asset('/css/metro-bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKiwbzaIqNL3VwcuoSU_wOtwvsOXwHJMA&libraries=places"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  
    
    
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<div id="wrap" style="background:transparent;">
  <div id="search-back" style="height:140px;">
  
  <!-- Fixed navbar -->
  <div class="navbar" style="height:140px;">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#"><img src="http://localhost/wi2.0alphaproject/public/uploads/logo.png"></a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="http://localhost/wi2.0alphaproject/public/uploads/menu.png" style="height:30px;width:30px;"><b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="{{ url('/home') }}">Home</a></li>
                <li><a href="{{ url('/tiles') }}">Delete Tile</a></li>
                  <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
<!--################################################################################################################################
  ################################################################################################################################-->
<div class="jumbotron">
  <div class="row">
    <div class="col-md-1"></div>
     <div class="col-md-5">
            <h2>Create Tile</h2>
               {!! Form::open(['url' => 'upload', 'method' => 'post', 'id' => 'upload-image', 'enctype' => 'multipart/form-data', 'files' => true]) !!}
            <div class="form-group">
              {!! Form::text('title', null, ['placeholder'=>'Tile name', 'class'=>'form-control']) !!}
            </div>
            <div class="form-group">
              {!! Form::file('file[]', ['multiple' => 'multiple', 'id' => 'multiple-files', 'accept' => 'image/*']) !!}
              <div id="files"></div>
                <div class="form-group" id="form-buttons">
                  <!-- <div class="checkbox" id="checkbox_1">
                   <label>
                     {!! Form::hidden('private', 0) !!}
                     {!! Form::checkbox('private', 1) !!} Check image(s) as private
                    </label>-->
                  </div>
                </div>
              <div class="form-group">
               {!! Form::text('place', null, ['placeholder'=>'Add place', 'id' => 'searchmap', 'class'=>'form-control']) !!}
              </div>
              <div class="form-group">
               {!! Form::textarea('description', null, ['placeholder'=>'Description', 'class'=>'form-control']) !!}
              </div>
      </div>
      <div class="col-md-5">
                  <div id="map-canvas" style="margin-top:62px;"></div>
                    <span class="tile_form">
                    <div class="form-group">
                     {!! Form::label('lat','Lat:') !!}
                     {!! Form::text('lat', null, ['placeholder'=>'Latitude', 'class'=>'form-control', 'style'=>"margin-top:15px;"]) !!}
                    </div>
                    <div class="form-group">
                     {!! Form::label('lng', 'Lng:') !!}
                     {!! Form::text('lng', null, ['placeholder'=>'Longitude', 'class'=>'form-control']) !!}
                    </div>
                    </span>
       
            {!! Form::submit('Create tile', ['class' => 'btn btn-primary btn-lg btn-block', 'style' => 'background-color:#69A95F;border-color:transparent;border-radius:0;']) !!}
    {!! Form::close() !!}

    @if ($errors->any())
      <ul class="alert alert-danger">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
      </ul>
    @endif
   </div>
    </div>
  </div>

     
    <script>
    
        var map = new google.maps.Map(document.getElementById('map-canvas'),{
          center: {
            lat: 53.34,
            lng: -6.26
          },
          zoom: 15
        });

        var marker = new google.maps.Marker({
          position: {
            lat: 53.34,
            lng: -6.26
          },
          map: map,
          draggable: true
        });

        var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));
        google.maps.event.addListener(searchBox, 'places_changed', function(){
          var places = searchBox.getPlaces();
          var bounds = new google.maps.LatLngBounds();
          var i, place;

          for (var i = 0; place=places[i]; i++) {
            bounds.extend(place.geometry.location);
            marker.setPosition(place.geometry.location);
          }

          map.fitBounds(bounds);
          map.setZoom(15);
        });

        google.maps.event.addListener(marker,'position_changed',function(){
          var lat = marker.getPosition().lat();
          var lng = marker.getPosition().lng();

          $('#lat').val(lat);
          $('#lng').val(lng);
        });
  </script>
      <div class="col-md-1">
    </div>
  </div>
</div>
  <div id="footer">
      <div class="container-fluid">
        <ul>
          <li><a href="#">About Us</a></li>
          <li><a href="#">User Agreement</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Help</a></li>
        </ul>
      </div>
</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
