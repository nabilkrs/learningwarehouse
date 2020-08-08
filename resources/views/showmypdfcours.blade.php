@extends('layouts.apps')

@section('content')
<title>{{ ('Show PDf Cours') }}</title>

<div class="container">
	<table class="table table-bordered">
		<thead>
			<tr>
              
				<th>Subject Name</th>
				<th>Title Of Cours</th>
			
				<th>Action</th>
			
			</tr>
		</thead>
@foreach ($record as $row)
		<tbody>
			<tr>
				
          <td>{{$row->nommatiere}}</td>
          <td>{{$row->titredecours}}</td>
     
		  <td><a href="\docs\{{$row->document}}" target="_blank" download><button class="btn btn-success">Download</button></a></td>
			</tr>
           
			
		</tbody>
@endforeach
	</table>
</div>

@endsection