@extends('smphtemplate')

	@section('content')
		<div class="main">
<!-- 		    <h1>REPORTS</h1>
		    <p>Testing</p>
		    <p style="min-height: 25px;"></p> -->

		    {!! Form::open() !!}
		    <fieldset class ="field_set">


		    	<legend>Generate a Spacial Report</legend>

		    	<div class="form-group">
	    			{!! Form::label('building_', 'Building:') !!}
		    		{!! Form::select('building', $buildings, null, ['class' => 'form-control'])!!}
		    	</div>

		    	<div class="form-group">
	    			{!! Form::label('department_', 'Owner Department:') !!}
		    		{!! Form::select('function', $owner, null, ['class' => 'form-control'])!!}
		    	</div>

		    	<div class="form-group">
	    			{!! Form::label('function_', 'Room Function:') !!}
		    		{!! Form::select('function', $func, null, ['class' => 'form-control'])!!}
		    	</div>

		    	<div class="form-group">
	    			{!! Form::label('use_', 'Room Use:') !!}
		    		{!! Form::select('use[]', $use, null, ['class' => 'form-control', 'multiple' => 'true'])!!}
		    	</div>

		    	<div class="form-group">
	    			{!! Form::submit('Submit') !!}
		    	</div>

		    </fieldset>
	    	{!! Form::close() !!}

	   
		</div>
	@stop
