@extends ('app')

@section ('content')

		<?php $i = 0; ?>
		 {{ $places }}

		@foreach ($places as $city) 
			<div class="container">
				<?php if ($i == 0)  { ?>
    		 <p>Originating City: <strong>{{ $cityName = $city['name'] }}</strong></h1>
    		 <p>{{ $cityLongName = $city['longName'] }}</p>
    		 <p>{{ $cityCountryCode  = $city['countryCode'] }}</p>
    		 <p>{{ $cityRegionCode = $city['regionCode'] }}</p>

    		 	<?php } else if ($i == 1) { ?>
    		 <p>Destination City: <strong>{{ $cityName = $city['name'] }}</strong></h1>
    		 <p>{{ $cityLongName = $city['longName'] }}</p>
    		 <p>{{ $cityCountryCode  = $city['countryCode'] }}</p>
    		 <p>{{ $cityRegionCode = $city['regionCode'] }}</p>
    		</div>
    			<?php } ?>
    	@endforeach

@stop

$i = 0;
$len = count($array);
foreach ($array as $item) {
    if ($i == 0) {
        // first
    } else if ($i == $len - 1) {
        // last
    }
    // …
    $i++;
}