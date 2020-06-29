@extends('layouts.app')

@section('content')

@if(count($errors))
<div class="alert alert-danger" role="alert">
  <ul>
  @foreach($errors->all() as $message)
  <li>{{ $message }} </li>
  @endforeach
</ul>
</div>
@endif
	<div class ="container">
		<div class="jumbotron jumbotron-fluid bd-danger">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h1 class="display-4" >ASSURANCE</h1>
						<p class="lead"> Mon application </p>

					</div>
					
				</div>
			</div>
		</div>

	  <div class="row">
		  <div class="col-md-6">
		  	<form action="{{url('assurances')}}" method="post">
		  		{{ csrf_field() }}


<div class="row form-group">
 		  			<div class="=col-md-12">
		  				<label> Agence assurance:  </label>
		  				
<select name="agence_assurances">
<option>AXA</option>
<option>SAHAM</option>
<option>RMA</option>
<option>ATLANTA</option>

</select>
		  			</div>
		  		</div>
		  		   

		  		<div class="row form-group">
		  			<div class="=col-md-12">
		  				<label> Numéro assurance:  </label>
		  				<input type="text" name="numassurances" class="form-control" required value="{{ old('numassurances') }}">
		  			</div>
		  		</div>
		  		
		  		<div class="row form-group">
		  			<div class="=col-md-12">
		  				<label> Contact:  </label>
		  				<input type="text" name="contact" class="form-control" required value="{{ old('contact') }}">
		  			</div>
		  		</div>
		  		<div class="row form-group">
		  			<div class="=col-md-12">
		  				<label> Tél:  </label>
		  				<input type="text" name="tel" class="form-control" required value="{{ old('tel') }}">
		  			</div>
		  		</div>
		  		<div class="row form-group">
		  			<div class="=col-md-12">
		  				<label> Date début:  </label>
		  				<input type="text" name="date_debut" class="form-control" required value="{{ old('date_dabut') }}">
		  			</div>
		  		</div>
		  		<div class="row form-group">
		  			<div class="=col-md-12">
		  				<label> Date fin:  </label>
		  				<input type="text" name="date_fin" class="form-control" required value="{{ old('date_fin') }}">
		  			</div>
		  		</div>

		  		  
		  		<div class="row form-group">
		  			<div class="=col-md-12">
		  				<label> Type:  </label>
		  				
<select name="type">
<option>Collision</option>
<option>Risques spécifiés</option>
<option>Accidents sans collision ni versement</option>
<option>Tous risques</option>

</select>
		  			</div>
		  		</div>
		  		<div class="row form-group">
		  			<div class="=col-md-12">
		  				<button type="submit" class="btn btn-success "> Créer  </button> <br> <br>
		  		


		  	</form>
		  </div>
		   

		   </div>
	</div>
@endsection