@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12" >
                @if(session()->has('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
                
                
            </div> 
            @endif <br> <br> <br>

        	<h1> Caractéristiques de la voiture </h1> <br> <br> <br>

        	<div class="pull-right">
        		
        	<table class="table">

        	<head>
        		<tr>
        			
        			<th>Marque</th>
        			<th>Matricule</th>
        			<th>Carburant</th>
        			<th>Type</th>
                    <th>Assurance</th>
                    <th>Numéro assurance</th>

                   
        			<th>Kilométrage</th>
        			<th>Nombre de places</th>
        			<th>Puissance</th>
        			<th>Date de création</th>
        			<th>Action</th>
        		</tr>

        	</head> 
        	<body>
        		  @foreach ($voitures as $voiture)

        		<tr>
        			
        			<td>{{ $voiture->marque}} </td>
        			<td>{{ $voiture->matricule}} </td>
        			<td>{{ $voiture->carburant}} </td>
        			<td>{{ $voiture->type}} </td>
                    <td>{{ $voiture->assurances }} </td>
                    <td>{{ $voiture->numassurances }} </td>
                  
        			<td>{{ $voiture->kilometrage}} </td>
        			<td>{{ $voiture->nombreplaces}} </td>
        			<td>{{ $voiture->puissance}} </td>
        			<td>{{ $voiture->created_at}} </td>
        			<td>
                            <form action="{{ url('voitures/'.$voiture->id)}}" method="post">
                                 {{csrf_field()}}
                        {{method_field('DELETE')}}

                    <a href="{{route('voitures.edit',$voiture->id)}}"class="btn btn-default">Editer  </a>
                    
                        




                    <button href="{{ url('voitures/detail') }} type="submit" class="btn btn-danger">Supprimer </button> 
                </form>


        			</td>
        		</tr>
        		@endforeach
        		</body>
        	</table>
        </div>
    </div>
</div>
</div>

        


       
@endsection