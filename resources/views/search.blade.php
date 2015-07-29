@extends ('app')

@section ('content')

<div class="col-md-4"></div>
<div class="col-md-4">
	@foreach ($search as $result)	

    
                {!! Html::image('uploads/' . $result->id . '/' . $result->img_sm, $result->img_sm, array('class' => 'img-responsive', 'style'=>'width:75px; height:75px;')) !!}
            
                    {!! $result->title !!}
                    </h4>
                <div class="pull-right">
                
                </div>
            </div>
        </div>
    </div>

    @endforeach
</div>
<div class="col-md-4"></div>

@stop

