@extends('smphtemplate')

	@section('content')
		<div class="main">
<!-- 		    <h1>REPORTS</h1>
		    <p>Testing</p>
		    <p style="min-height: 25px;"></p> -->

		    {!! Form::open() !!}
		    <div class="well col-sm-6 col-sm-offset-3">


		    	<legend>Spacial Report</legend>

		    	<div class="form-group">
	    			{!! Form::label('building_', 'Building:') !!}
		    		{!! Form::select('building', $buildings, null, ['class' => 'form-control'])!!}
		    	</div>

		    	<div class="form-group">
	    			{!! Form::label('department_', 'Owner Department:') !!}
		    		{!! Form::select('department', $owner, null, ['class' => 'form-control'])!!}
		    	</div>

		    	<div class="form-group">
	    			{!! Form::label('function_', 'Room Function:') !!}
		    		{!! Form::select('function', $func, null, ['class' => 'form-control'])!!}
		    	</div>

		    	<div class="form-group">
	    			{!! Form::label('use_', 'Room Use:') !!}
		    		{!! Form::select('use', $use, null, ['class' => 'form-control', 'multiple' => 'true'])!!}
		    	</div>

		    	<div class="form-group">
	    			{!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
		    	</div>

		    </div>
	    	{!! Form::close() !!}

	   
		</div>
	@stop