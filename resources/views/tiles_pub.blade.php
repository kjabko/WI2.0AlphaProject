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
    
    
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <div id="search-back">
  
  <!-- Fixed navbar -->
  <div class="navbar">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Project name</a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="http://localhost/wi2.0alphaproject/public/uploads/menu.png" style="height:40px;width:40px;"><b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="{{ url('/') }}">Home</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
  
  <!-- Begin page content -->
  <div class="container">
        <div class="page-header">
              <div class="row">
                  <div id="search-bar">
                            {!! Form::open(['url' => 'search']) !!}
                            <div class="input-group">
                            {!! Form::text('keyword', null, array('class' => 'form-control', 'placeholder' => 'Search...', 'required' => 'required')) !!}
                                <span class="input-group-btn">
                                <button type="submit" class="btn btn-info" type="button"><i class="glyphicon glyphicon-search"></i></button> 
                                </span> 
                            </div>           
                    {!! Form::close() !!}
                  </div>
              </div>
        </div>
  </div>
      
</div>

<div id="tiles-links">
  <div class="row">
      <div class="col-md-3">
        <div class="thumbnail tile tile-wide-1">
        <a href="#" ><img src="http://localhost/wi2.0alphaproject/public/uploads/plane.png" style="height:60px;width:60px;"></a>
        </div>
      </div>
      <div class="col-md-3">
          <div class="thumbnail tile tile-wide-2">
            <a href="#" ><img src="http://localhost/wi2.0alphaproject/public/uploads/accomodation.png" style="height:60px;width:60px;"></a>
          </div>
      </div>
        <div class="col-md-3">
            <div class="thumbnail tile tile-wide-3">
              <a href="#" ><img src="http://localhost/wi2.0alphaproject/public/uploads/list.png" style="height:60px;width:60px;"></a>
            </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail tile tile-wide-4">
            <a href="#" ><img src="http://localhost/wi2.0alphaproject/public/uploads/services.png" style="height:60px;width:60px;"></a>
          </div>
        </div>
  </div>
</div>

<div class="container-fluid">
        <div id="pics">

          @foreach ($showTiles as $tile)

            <div class="col-sm-4">
               <a href="{{ url('/book', array('id' => $tile->id)) }}">
                {!! Html::image('uploads/' . $tile->id . '/' . $tile->img_bg, $tile->img_bg, array('class' => 'img-responsive', 'class' => 'img-height')) !!}</a></li>
              </a>
                <span class="circle-fad"></span>
                 <h3>{!!$tile->title!!}</h3>

                 <?php 
                 //$splitWords = $tile->title;
                 //$splitWords = explode(" ", $splitWords);
                  //for($i = 0; $i < count($splitWords); $i++){echo '<h3>'. $splitWords[$i]. "<br></h3>";} ?>
                    <p><p>
                     <a href="{{ url('/book', array('id' => $tile->id)) }}">
                      <button class="btn btn-default">View</button>
                     </a>
            </div>
          @endforeach 
        </div>
</div>
<div id="footer" style="margin-top:50px;background-color:#0489B1;">
      <div class="container-fluid">
        <ul>
          <li><a href="#">About Us</a></li>
          <li><a href="#">User Agreement</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Help</a></li>
        </ul>
      </div>
</div>
 <script>
        $('.pager').hide();
        $('#pics').infinitescroll({
            navSelector     : ".pager",
            nextSelector    : ".pager a:last",
            itemSelector    : ".col-sm-4",
            debug           : false,
            dataType        : 'html',
            path: function(index) {
                return "?page=" + index;
            },
            loading: {
                finishedMsg: ""
            }
        }, function(newElements, data, url){

            var $newElems = $( newElements );
            $('#pics').masonry( 'appended', $newElems, true);

        });
    </script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('/js/infinitescroll.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
