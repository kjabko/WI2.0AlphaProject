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

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Triplofi</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="{{ url('/home') }}">Home</a></li>
                </ul>
              </nav>
            </div>
            <br>
    {!! Form::open(array('url' => 'upload', 'method' => 'post', 'id' => 'upload-image', 'enctype' => 'multipart/form-data', 'files' => true)) !!}
            <div class="form-group">
              {!! Form::label('title', 'Title:') !!}
              {!! Form::text('title', null, array('placeholder'=>'Tile name', 'class'=>'form-control')) !!}
              </div>
            <div class="form-group">
              {!! Form::file('file[]', array('multiple' => 'multiple', 'id' => 'multiple-files', 'accept' => 'image/*')) !!}

            <div id="files"></div>
            <div class="form-group" id="form-buttons">
            <div class="checkbox">
                <label>
                    {!! Form::hidden('private', 0) !!}
                    {!! Form::checkbox('private', 1) !!} Check image(s) as private
                </label>
            </div>
          </div>
            <div class="form-group">
               {!! Form::label('place', 'Map:') !!}
               {!! Form::text('place', null, array('placeholder'=>'Add place', 'id' => 'searchmap', 'class'=>'form-control')) !!}
             <br>
           <div id="map-canvas"></div>
           </div>
            <div class="form-group">
               {!! Form::label('lat', 'Latitude:') !!}
               {!! Form::text('lat', null, array('placeholder'=>'Latitude', 'class'=>'form-control')) !!}
           </div>
           <div class="form-group">
               {!! Form::label('lng', 'Longitude:') !!}
               {!! Form::text('lng', null, array('placeholder'=>'Longitude', 'class'=>'form-control')) !!}
           </div>
            {!! Form::submit('Create tile', array('class' => 'btn btn-primary btn-lg btn-block')) !!}

            {!! Form::reset('Reset', array('class' => 'btn btn-warning btn-block', 'id' => 'reset')) !!}
        </div>

    {!! Form::close() !!}

          </div>
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
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
