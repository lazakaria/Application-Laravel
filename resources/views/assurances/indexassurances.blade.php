@extends('layouts.app')

@section('content')




           <div class="container"> 
    <div class="row">  
     <div class="col-xs-8 col-xs-offset-2"> 
      <div class="input-group"> 
       <input type="text" class="form-control" name="x" placeholder="Rechercher assurance..."> 
       <span class="input-group-btn"> 
        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button> 
       </span> 
      </div> 
     </div> 
    </div> 
</div> 
<div class="col-md-6">
                        <img src="img/assurance.png" alt="assurance" style="display: block; margin: 0 auto">
                        
                    </div>
<div class="container">
    <div class="row">
        <div class="col-md-12" >
        	<h1> ....</h1>

        	<div class="pull-right">
        		<a href="{{url('assurances/create')}}" class="btn btn-success"> Nouvelle assurance </a> <br><br>
        	<table class="table">

        	<head>
        		<tr>
        			
        			<th>Numéro assurance</th>
        			<th>Agence assurance</th>
        			<th>Contact</th>
        			<th>Type</th>
        			<th>Télephone</th>
                    <th>Date début</th>
                    <th>Date fin</th>
        			
        		</tr>

        	</head> 
        	<body>
        		  @foreach ($assurances as $assurance)

        		<tr>
        			
        			<td>{{ $assurance->numassurances}} </td>
        			<td>{{ $assurance->agence_assurances}} </td>
        			<td>{{ $assurance->contact}} </td>
        			<td>{{ $assurance->Type}} </td>
        			<td>{{ $assurance->tel}} </td>
                    <td>{{ $assurance->date_debut}} </td>
                    <td>{{ $assurance->date_fin}} </td>
        			
        			<td>
                            <form action="{{ url('assurances/'.$assurance->id)}}" method="post">
                                 {{csrf_field()}}
                        {{method_field('DELETE')}}

        			<a href=""class="btn btn-primary">Details  </a>
        			<a href="{{route('assurances.edit',$assurance->id)}}"class="btn btn-default">Editer  </a>
                    
                        




        			<button type="submit" class="btn btn-danger">Supprimer </button>
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