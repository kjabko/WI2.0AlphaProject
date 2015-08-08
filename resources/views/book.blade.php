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

    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<div class="container-fluid">
  <div class="caption-2">
    <a class="btn btn-lg btn-primary" href="{{ url('/home') }}" role="button">Add to Itinerary</a>
  </div>

</div>
<div class="container-fluid" id="img-col">
  <div class="row">
    <div class="col-md-6">
        {!! Html::image('uploads/' . $userTile->id . '/' . $userTile->img_bg, $userTile->img_bg, array('class' => 'img-responsive', 'style' => 'height:480px;width:100%;')) !!}
    </div>
        <div class="col-md-3">
              <img src="http://localhost/wi2.0alphaproject/public/uploads/dub1.jpg" class="img-responsive" style="height:240px;width:100%;">
              <img src="http://localhost/wi2.0alphaproject/public/uploads/dub2.jpg" class="img-responsive" style="height:240px;width:100%;">
         </div>
        <div class="col-md-3">  
              <img src="http://localhost/wi2.0alphaproject/public/uploads/dub3.jpg" class="img-responsive" style="height:240px;width:100%;">
              <img src="http://localhost/wi2.0alphaproject/public/uploads/dub4.jpg" class="img-responsive" style="height:240px;width:100%;">
       </div>
</div>
<div class="container">
       <h1>{!! $userTile->title !!}</h1>
       <br>
       <p>{!! $userTile->description !!}</p>
       <br>
      <div id="three-buttons">
          <a class="btn btn-lg btn-primary" href="#" role="button">buttonbutton</a>
          <a class="btn btn-lg btn-primary" href="#" role="button">buttonbutton</a>
          <a class="btn btn-lg btn-primary" href="#" role="button">buttonbutton</a>
        </div>

      <div id="review">
        <div class="divider-1">
              <h1>Review</h1>
              <br>
                <div style="float:left;width:150px;">
                  <img src="http://localhost/wi2.0alphaproject/public/uploads/user.png" style="height:90px;width:90px;">
                </div>
                <div style="float:left; width:85%;margin-top:;">
                    <p>Lorem ipsum dolor sit amet, nibh dicat viris per te, eam illum harum laudem te, scripta detraxit constituam sed ei. Ius brute minim verear cu. Te congue vidisse dolores pro, placerat salutatus maiestatis duo eu. Legere theophrastus an vel. Nam scripta fastidii no, an mei iusto adolescens moderatius.
                    An modo omnes decore his, sed eu aliquip consetetur efficiantur. Nec quot fierent in, at duo quando repudiare, mei simul zril albucius ut. Posse doming omnesque ad sit. Everti facilisis similique per ut, no mea dicat errem elitr. Natum viris detracto sea ut.</p>
                      <div style="float:left;width:60px;">
                        <h4>Rating:</h4>
                      </div>
                      <div style="float:left; width:30%;">
                      <img src="http://localhost/wi2.0alphaproject/public/uploads/stars.png" style="width:150px;height:35px;">
                      5/5
                    </div>
                      <a class="btn btn-lg btn-primary" href="#" role="button">Add Review</a>
                </div>

              <div style="clear:both"></div>
            </div>
      <div>
      <div id="location-head">  
        <h1>Location</h1>
        <br>
       <p>{!! $userTile->place !!}
        <p>Tel: +87 9876 542123</p>
        <p>www.bookyourholiday.com</p>
      </div>

       <div id="map-size">
          <div id="map-canvas"></div>
      </div>

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
       <br><br><br>
</div>
    
   
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
