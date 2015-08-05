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
              <li><a href="{{ url('/home') }}">Home</a></li>
    <li><a href="{{ url('/create_tile') }}">New Tile</a></li>
                  <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>

  <div id="pics">

  @foreach ($showTiles as $tile)

    <div class="col-sm-2">
      <a href="{{ url('/book', array('id' => $tile->id)) }}">
        <h4 style="margin-top:80px;margin-bottom:-30px;color:#000;">{{ $tile->title }}</h4>
          {!! Html::image('uploads/' . $tile->id . '/' . $tile->img_sm, $tile->img_sm, array('class' => 'img-responsive img-thumbnail', 'style' => 'margin-top:40px;')) !!}</a></li>
      </a>
      {!! Form::open(['url' => 'delete/'. $tile->id, 'method' => 'delete']) !!}
      {!! Form::submit('Delete', ['class' => 'delete-button btn btn-danger btn-sm btn-block', 'style' => 'margin: 10px 0']) !!}
      {!! Form::close() !!}
    </div>

  @endforeach   
</div>

   <script src="{{ asset('/js/infinitescroll.js') }}"></script>

 <script>
        $('.pager').hide();
        $('#pics').infinitescroll({
            navSelector     : ".pager",
            nextSelector    : ".pager a:last",
            itemSelector    : ".col-sm-2",
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
