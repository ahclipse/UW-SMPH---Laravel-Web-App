@extends('smphtemplate')

	@section('content')
		<div class="main">
		    <h1>REPORTS</h1>
		    <p>Testing</p>
		    <p style="min-height: 25px;"></p>
		    {!! Form::open() !!}
		    	<div class="form-group">
	    			{!! Form::label('type', 'Type of Report:') !!}
		    		{!! Form::select('type', array('default' => '', 'S' => 'Space', 'F' => 'Financial', 'O' => 'Occupancy'), null, ['class' => 'form-control'])!!}
		    	</div>
	    	{!! Form::close() !!}
		</div>
	@stop