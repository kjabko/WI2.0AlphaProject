@extends ('app')

@section ('content')

<div class="col-md-4"></div>
<div class="col-md-4">
	@foreach ($search as $result)	

    
                {!! Html::image('uploads/' . $result->id . '/' . $result->img_sm, $result->img_sm, array('class' => 'img-responsive', 'style'=>'width:75px; height:75px;')) !!}
            
                    <h4>{!! $result->title !!}
                    </h4>
               

    @endforeach
</div>
<div class="col-md-4"></div>

@stop

