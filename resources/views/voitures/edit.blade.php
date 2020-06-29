@extends('layouts.app')

@section('content')

	<div class ="container">
		<div class="jumbotron jumbotron-fluid bd-danger">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h1 class="display-4">Voitures</h1>
						<p class="lead"> Mon application </p>
					</div>
					<div class="col-md-6">
						<img src="img/car1.jpg" alt="car1">
					</div>
				</div>
			</div>
		</div>

	  <div class="row">
		  <div class="col-md-6">
		  	<form action="{{url('voitures/'.$voitures->id)}}" method="post" enctype="multipart/form-data">
		  		 <input type="hidden" name="_method" value="PUT">
		  		<input type="hidden" name="_method" value="PUT">
		  		 
		  		{{ csrf_field() }}
		  		   

		  		<div class="row form-group">
		  			<div class="                                                                                                                                                                                                                                                                                                                              =col-md-12">
		  				<label> Marque:  </label>
		  				<input type="text" name="marque" class="form-control" value="{{$voitures->marque}}">
		  			</div>
		  		</div>
		  		<div class="row form-group">
		  			<div class="=col-md-12">
		  				<label> Modele:  </label>
		  				<input type="text" name="modele" class="form-control" value="{{$voitures->modele}}">
		  			</div>
		  		</div>
		  		<div class="row form-group">
		  			<div class="=col-md-12">
		  				<label> Matricule:  </label>
		  				<input type="text" name="matricule" class="form-control" value="{{$voitures->matricule}}">
		  			</div>
		  		</div>
		  		<div class="row form-group">
		  			<div class="=col-md-12">
		  				<label> Carburant:  </label>
		  				<input type="text" name="carburant" class="form-control" value="{{$voitures->carburant}}"> <br>
		  			</div>
		  			


		  		  
		  		<div class="row form-group">
		  			<div class="=col-md-12">
		  				<label> Type:  </label>
		  				<input type="text" name="type" class="form-control" value="{{$voitures->type}}"> <br>
		  			</div>
		  		</div>
		  		<div class="row form-group">
		  			<div class="=col-md-12">
		  				<label> Kilométrage: </label>
		  				<input type="text" name="kilometrage" class="form-control" value="{{$voitures->kilometrage}}"> <br>
		  			</div>
		  			<div class="row form-group">
		  			<div class="=col-md-12">

		  				<div class="row form-group">
		  			<div class="=col-md-12">
		  				<label> Nombre de places: </label>
		  				<input type="text" name="nombreplaces" class="form-control" value="{{$voitures->nombreplaces}}"> <br>
		  			</div>

		  			<div class="row form-group">
		  			<div class="=col-md-12">
		  				<label> Puissance:  </label> <br>
		  				<input type="text" name="puissance" class="form-control" value="{{$voitures->puissance}}"> <br><br>
		  			</div>


		  			<div class="row form-group">
		  			<div class="=col-md-12">
		  				<label> Image:  </label>
		  				<input type="file" name="photos" class="form-control" required>
		  			</div>

		  		<div class="row form-group">
		  			<div class="=col-md-12">
		  				<button type="submit" class="btn btn-danger "> Modifier  </button> <br> <br>
		  				



		  	</form>
		  </div>
		   

		   </div>
	</div>
@endsection