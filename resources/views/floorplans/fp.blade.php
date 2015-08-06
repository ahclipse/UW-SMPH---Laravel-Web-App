@extends('smphtemplate')

	@section('content')

	<div class="main">

		<div class="panel-group col-sm-6 col-sm-offset-3" id="accordion">
		 <b>Open PDF's of Building Floorplans</b>
		<?php $i=0; ?>
		@foreach ($buildings as $building)
			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $i }}">
			        {{ $building[0] }}</a>
			      </h4>
			    </div>
			    <div id="collapse{{ $i }}" class="panel-collapse collapse">
			      <div class="panel-body">

			      {{-- ********************************************Currently starts at floor 2 and goes up, this needs to be changed************************ --}}	
			      <?php unset($building[0]); 
			      		$x = 2;
			       ?>	
		      		@foreach ($building as $maps)
					<div class="btn-group">
						<a class="btn btn-primary" role="button" href="{{ URL::asset('floorPlans/'.$maps) }}" aria-expanded="false" aria-controls="collapseExample">{{ $x }}</a>
					</div>
					<?php $x++; ?>
	      			@endforeach
			      </div>
			    </div>
			  </div>

			{{-- Increment the counter loop to set the #collapse hrefs uniquely --}}  
			<?php $i++; ?>
	    @endforeach

		</div>
	</div>
	@stop