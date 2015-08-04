@extends('smphtemplate')

	@section('content')

	<div class="main">

		<div class="panel-group col-sm-6 col-sm-offset-3" id="accordion">
		 <b>Open PDF's of Floorplans</b>
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
			      <?php unset($building[0]); 
			      		$x = 2;
			       ?>	
		      		@foreach ($building as $maps)
						<div class="btn-group">
							<a class="btn btn-primary" role="button" href="{{ URL::asset('floorPlans/'.$maps) }}" aria-expanded="false" aria-controls="collapseExample">
					 			{{ $x }}
							</a>
						</div>
						<?php $x++; ?>
	      			@endforeach
			      </div>
			    </div>
			  </div>

			{{-- Increment the counter loop to set the #collapse hrefs uniquely --}}  
			<?php $i++; ?>
	    @endforeach

<!-- 		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
		        Biochem</a>
		      </h4>
		    </div>
		    <div id="collapse1" class="panel-collapse collapse">
		      <div class="panel-body">

		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
		        CSC - Clinical Science Center</a>
		      </h4>
		    </div>
		    <div id="collapse2" class="panel-collapse collapse">
		      <div class="panel-body">

		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
		        Genetics (Biotech)</a>
		      </h4>
		    </div>
		    <div id="collapse3" class="panel-collapse collapse">
		      <div class="panel-body">

		      </div>
		    </div>
		  </div>

		  		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
		        HSLC - Health Sciences Learning Center</a>
		      </h4>
		    </div>
		    <div id="collapse4" class="panel-collapse collapse">
		      <div class="panel-body">

		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
		        MCA</a>
		      </h4>
		    </div>
		    <div id="collapse5" class="panel-collapse collapse">
		      <div class="panel-body">

		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
		        MFCB</a>
		      </h4>
		    </div>
		    <div id="collapse6" class="panel-collapse collapse">
		      <div class="panel-body">

		      </div>
		    </div>
		  </div>

  		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
		        MSB</a>
		      </h4>
		    </div>
		    <div id="collapse7" class="panel-collapse collapse">
		      <div class="panel-body">

		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
		        MSC</a>
		      </h4>
		    </div>
		    <div id="collapse8" class="panel-collapse collapse">
		      <div class="panel-body">

		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">
		        WARF - Wisconsin Alumni Research Foundation</a>
		      </h4>
		    </div>
		    <div id="collapse9" class="panel-collapse collapse">

		      	<div class="btn-group">
					<a class="btn btn-primary" role="button" href="{{ URL::asset('floorPlans/WARF 02 11x17.pdf') }}" aria-expanded="false" aria-controls="collapseExample">
					  2
					</a>
					      	</div>
					<div class="btn-group">
					<a class="btn btn-primary" role="button" href="{{ URL::asset('floorPlans/WARF 03 11x17.pdf') }}" aria-expanded="false" aria-controls="collapseExample">
					  3
					</a>
				</div>
		
		      	<div class="btn-group">
					<a class="btn btn-primary" role="button" href="{{ URL::asset('floorPlans/WARF 04 11x17.pdf') }}" aria-expanded="false" aria-controls="collapseExample">
					  4
					</a>
						</div>
					<div class="btn-group">
					<a class="btn btn-primary" role="button" href="{{ URL::asset('floorPlans/WARF 05 11x17.pdf') }}" aria-expanded="false" aria-controls="collapseExample">
					  5
					</a>
</div>
		      
		      	<div class="btn-group">
					<a class="btn btn-primary" role="button" href="{{ URL::asset('floorPlans/WARF 06 11x17.pdf') }}" aria-expanded="false" aria-controls="collapseExample">
					  6
					</a>
		      	</div>
					<div class="btn-group">
					<a class="btn btn-primary" role="button" href="{{ URL::asset('floorPlans/WARF 07 11x17.pdf') }}" aria-expanded="false" aria-controls="collapseExample">
					  7
					</a>
					</div>
	
		      	<div class="btn-group">
					<a class="btn btn-primary" role="button" href="{{ URL::asset('floorPlans/WARF 08 11x17.pdf') }}" aria-expanded="false" aria-controls="collapseExample">
					  8
					</a>
					</div>
					<div class="btn-group">
						<a class="btn btn-primary" role="button" href="{{ URL::asset('floorPlans/WARF 09 11x17.pdf') }}" aria-expanded="false" aria-controls="collapseExample">
						  9
						</a>
					</div>
		      	

		      						<div class="btn-group">
					<a class="btn btn-primary" role="button" href="{{ URL::asset('floorPlans/WARF 10 11x17.pdf') }}" aria-expanded="false" aria-controls="collapseExample">
					  10
					</a>
</div>
		      
		      	<div class="btn-group">
					<a class="btn btn-primary" role="button" href="{{ URL::asset('floorPlans/WARF 11 11x17.pdf') }}" aria-expanded="false" aria-controls="collapseExample">
					  11
					</a>
		      	</div>
					<div class="btn-group">
					<a class="btn btn-primary" role="button" href="{{ URL::asset('floorPlans/WARF 12 11x17.pdf') }}" aria-expanded="false" aria-controls="collapseExample">
					  12
					</a>
					</div>
	
		      	<div class="btn-group">
					<a class="btn btn-primary" role="button" href="{{ URL::asset('floorPlans/WARF 13 11x17.pdf') }}" aria-expanded="false" aria-controls="collapseExample">
					  13
					</a>
					</div>
					<div class="btn-group">
						<a class="btn btn-primary" role="button" href="{{ URL::asset('floorPlans/WARF 14 11x17.pdf') }}" aria-expanded="false" aria-controls="collapseExample">
						  14
						</a>
					</div>

		    </div>
		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">
		        WIMR</a>
		      </h4>
		    </div>
		    <div id="collapse10" class="panel-collapse collapse">
		      <div class="panel-body">

		      </div>
		    </div>
		  </div>

  		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse11">
		        WISPIC</a>
		      </h4>
		    </div>
		    <div id="collapse11" class="panel-collapse collapse">
		      <div class="panel-body">

		      </div>
		    </div>
		  </div>


		  <br><br><br> -->



		</div>
	</div>
	@stop