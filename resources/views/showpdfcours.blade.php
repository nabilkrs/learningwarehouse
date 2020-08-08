@extends('layouts.apps')

@section('content')
<title>{{ ('Show Cours') }}</title>

<div class="container">
	<table class="table table-bordered">
		<thead>
			<tr>
              
				<th>Subject Name</th>
				<th>Title Of Subject</th>
				<th>Description</th>
				<th>Action</th>
			
			</tr>
		</thead>
@foreach ($record as $row)
		<tbody>
			<tr>
				
          <td>{{$row->nommatiere}}</td>
          <td>{{$row->titredecours}}</td>
		  <td>added at {{$row->created_at}}</td>
     
		  <td><a href="\docs\{{$row->document}}" target="_blank" download><button class="btn btn-success">Download</button></a></td>
			</tr>
           
			
		</tbody>
@endforeach
	</table>
</div>

@endsection