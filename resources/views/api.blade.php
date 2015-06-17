@extends ('app')

@section ('content')

		
	<!--	@foreach ($airlines as $flight) 
			<div class="container">
    		 <p>Originating flight: <strong>{{ $flightName = $flight['name'] }}</strong></h1>
    		 <p>{{ $flightLongName = $flight['url'] }}</p>
    		 <img src="http://www.rome2rio.com{{ $flightIconPath  = $flight['iconPath'] }}" alt="flights"></img></p>
    		 
    	@endforeach -->
    	<div class="container">
    	@foreach ($airlines as $flight) 
    	<?php $flightName = $flight['name'] ?>
    	<?php $flightLongName = $flight['url'] ?>
    	<?php $flightIconPath  = $flight['iconPath'] ?>
			
    		 <p>Originating flight: <strong>{{ $flightName }}</strong></h1>
    		 <p>{{ $flightLongName }}</p>
    		 <img src="http://www.rome2rio.com{{ $flightIconPath }}" alt="flights"></img></p>

    		 
    	@endforeach

@stop

