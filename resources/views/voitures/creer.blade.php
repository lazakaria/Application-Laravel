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
						<h1 class="display-4àçi">Voitures</h1>
						<p class="lead"> Mon application </p>
					</div>
					
				</div>
			</div>
		</div>

	  <div class="row">
		  <div class="col-md-6">
		  	<form action="{{url('voitures')}}" method="post" enctype="multipart/form-data">
		  		{{ csrf_field() }}
		  		   

		  		<div class="row form-group">
		  			<div class="=col-md-12">
		  				<label> Marque:  </label>
		  				<input type="text" name="marque" class="form-control" required value="{{ old('marque') }}">
		  			</div>
		  		</div>
		  		<div class="row form-group">
		  			<div class="=col-md-12">
		  				<label> Modele:  </label>
		  				<input type="text" name="modele" class="form-control" required value="{{ old('modele') }}">
		  			</div>
		  		</div>
		  		<div class="row form-group">
		  			<div class="=col-md-12">
		  				<label> Matricule:  </label>
		  				<input type="text" name="matricule" class="form-control" required value="{{ old('matricule') }}">
		  			</div>
		  		</div>
		  		<div class="row form-group">
		  			<div class="=col-md-12">
		  				<label> Carburant:  </label> <br>
		  				<form>
  <input type="radio" name="carburant" value="Essence" checked> Essence<br>
  <input type="radio" name="carburant" value="Diesel"> Diesel<br>
  <input type="radio" name="carburant" value="Electrique"> Electrique<br>
  <input type="radio" name="carburant" value="Hybride"> Hybride
</form> <br><br>


<div class="row form-group">
		  			<div class="=col-md-12">
		  				<label> Assurances:  </label>
		  				
<select name="assurances">
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
		  				<label> Type:  </label>
		  				
<select name="type">
<option>Berline</option>
<option>Citadines</option>
<option>Coupé</option>
<option>4*4</option>

</select>
		  			</div>
		  		</div>
		  		
		  		<div class="row form-group">
		  			<div class="=col-md-12">
		  				<label> Kilométrage: </label>
		  				<input type="text" name="kilometrage" class="form-control" required value="{{ old('kilometrage') }}"> <br>
		  			</div>
		  			<div class="row form-group">
		  			<div class="=col-md-12">

		  				<div class="row form-group">
		  			<div class="=col-md-12">
		  				<label> Nombre de places:  </label>
		  				<input type="text" name="nombreplaces" class="form-control" required value="{{ old('nombreplaces') }}">
		  			</div>
		  		</div>s
		  			<div class="row form-group">
		  			<div class="=col-md-12">
		  				<label> Puissance:  </label> <br>
		  				<input type="text" name="puissance" class="form-control" required value="{{ old('puissance') }}"> <br><br>
		  			</div>


		  		<div class="row form-group">
		  			<div class="=col-md-12">
		  				<label> Image:  </label>
		  				<input type="file" name="photos" class="form-control" required>
		  			</div>
		  		<div class="row form-group">
		  			<div class="=col-md-12">
		  				<button type="submit" class="btn btn-success "> Créer  </button> <br> <br>
		  				



		  	</form>
		  </div>
		   

		   </div>
	</div>
@endsection