@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="mystyle.css">
<div class="col-md-100">
                        <img src="img/logo3.jpg" alt="logo3" style="display: block; margin: 0 auto">
                        
                    </div>
<div class="container" >
    <div class="row">
        <div class="col-md-12"  >
        	<h1> Mes entretiens   </h1>     <br><br><br>

        	<div class="pull-left">
        		<a href="{{url('entretiens/create')}}" class="btn btn-success" > Nouveau entretien </a> <br><br>
        	<table class="table">

        	<head>
        		<tr>
        			
        			<th>Description</th>
        			<th>Date </th>
        			
        			
        		</tr>

        	</head> 
        	<body>
        		  @foreach ($entretiens as $entretien)

        		<tr>
        			
        			<td>{{ $entretien->description}} </td>
        			<td>{{ $entretien->date}} </td>
        		
        			
        			
        			<td>
                            <form action="{{ url('entretiens/'.$entretien->id)}}" method="post">
                                 {{csrf_field()}}
                        {{method_field('DELETE')}}

        			<a href=""class="btn btn-primary">Details  </a>
        			<a href="{{route('entretiens.edit',$entretien->id)}}"class="btn btn-default">Editer  </a>
                    
                        




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