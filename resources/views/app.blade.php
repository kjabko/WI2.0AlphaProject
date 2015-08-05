<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alpha Project</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/custom.css') }}" rel="stylesheet">
  
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div id="wrap">
		<div id="back-image">
			<nav class="navbar navbar-default">
					<div class="navbar-header">
						<a class="navbar-brand" href="{{ url('/') }}">Alpha Project</a>
					</div>
						<ul class="nav navbar-nav navbar-right">
							@if (Auth::guest())
								<li><a href="{{ url('/auth/login') }}">Login</a></li>
								<li><a>/</a><li>
								<li><a href="{{ url('/auth/register') }}">Register</a></li>
							@else
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
									</ul>
								</li>
							@endif
							<li class="dropdown">
		            		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-align-justify"></i><b class="caret"></b></a>
		            		<ul class="dropdown-menu">
		              			<li><a href="{{ url('/tiles_pub') }}">Search</a></li>
		            		</ul>
		          			</li>
						</ul>
			</nav>
			<div class="container">
				<div class="panel panel-dafault"  style="background-color: rgba(0,0,0,0.2)">
					<div class="caption-1">
              			<h1>Plan your perfect<br>trip in minutes</h1>
             			 <h4>Find accommodation, transport and activities based<br>around what matters to you the most.</h4>
             			 <a class="btn btn-lg btn-primary" href="#" role="button">Plan</a>
          			</div>
          		</div>
          	</div>
	          		<div id="explore-main-button">
	          			<a class="btn btn-lg btn-default" href="#" role="button">Explore</a>
	          			<h1>V</h1>
	          		</div>
		</div>	
	</div>
		<div class="featurette" id="sec2">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="divider">
								<div style="float:left;width:100px;">
									<img src="http://localhost/wi2.0alphaproject/public/uploads/2compass.png">
								</div>
								<div style="float:left; width:70%;margin-top:-20px;">
								    <h3>Discover</h3>
								    <p>Easily discover new points of interest through<br>exploring by destination, category and keyword</p>
								</div>

							<div style="clear:both"></div>
						</div>
						<div class="divider">
								<div style="float:left;width:100px;">
									<img src="http://localhost/wi2.0alphaproject/public/uploads/rsz_share.png">
								</div>
								<div style="float:left; width70%;margin-top:-20px;">
								    <h3>Share</h3>
								    <p>Share the places you love and the plans you have made<br>with travel companions, friends, or the whole world.</p>
								</div>

							<div style="clear:both"></div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="divider">
								<div style="float:left;width:100px;">
									<img src="http://localhost/wi2.0alphaproject/public/uploads/rsz_create.png">
								</div>
								<div style="float:left; width:70%;margin-top:-20px;">
								    <h3>Create</h3>
								    <p>Create your own travel tiles based around<br>the points of interest you love</p>
								</div>

							<div style="clear:both"></div>
						</div>
							<div class="divider">
								<div style="float:left;width:100px;">
									<img src="http://localhost/wi2.0alphaproject/public/uploads/rsz_yoga.png">
								</div>
								<div style="float:left; width:70%;margin-top:-20px;">
								    <h3>Relax</h3>
								    <p>Our visual experience gives you the confidence to know the<br>travel experience you booked are the right ones for you</p>
								</div>

							<div style="clear:both"></div>
						</div>
					</div>
				</div>
			</div>	

   		</div>

<div id="pics">
	<div class="container-fluid">
	<h1>Explore</h1>
      @foreach ($showTiles as $tile)

        <div class="col-sm-4">
          <a href="{{ url('/book', array('id' => $tile->id)) }}">
            {!! Html::image('uploads/' . $tile->id . '/' . $tile->img_bg, $tile->img_bg, array('class' => 'img-responsive','class' => 'img-height')) !!}</a></li>
          </a>
            <span class="circle-fad"></span>
              <h3>{{ $tile->title }}</h3>
                <p><p>
                 <a href="{{ url('/book', array('id' => $tile->id)) }}">
                  <button class="btn btn-default">View</button>
                 </a>
        </div>
      @endforeach 
  </div>
</div>
<br>

<div id="main-button">
	<a class="btn btn-lg btn-dafault" href="#" role="button">Get started now</a>
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

			<!-- Start of triplofi Zendesk Widget script -->
<script>/*<![CDATA[*/window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement("iframe");window.zEmbed=function(){a.push(arguments)},window.zE=window.zE||window.zEmbed,r.src="javascript:false",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="display: none",d=document.getElementsByTagName("script"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try{o=s}catch(c){n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}o.open()._l=function(){var o=this.createElement("script");n&&(this.domain=n),o.id="js-iframe-async",o.src=e,this.t=+new Date,this.zendeskHost=t,this.zEQueue=a,this.body.appendChild(o)},o.write('<body onload="document._l();">'),o.close()}("//assets.zendesk.com/embeddable_framework/main.js","triplofi.zendesk.com");/*]]>*/</script>
<!-- End of triplofi Zendesk Widget script -->
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
