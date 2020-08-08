@extends('layouts.apps')

@section('content')
<title>{{ ('Show Cours') }}</title>

<div class="container">
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
		
    @endif
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Subject Name</th>
				<th>Title Of Subject</th>
				
				<th colspan=3>Actions</th>
				<th>Class Key</th>
			
			</tr>
		</thead>
@foreach ($record as $row)
		<tbody>
			<tr>
				
          <td>{{$row->nommatiere}}</td>
          <td>{{$row->titredecours}}</td>
          
		  <td><a href="{{url('/editcourse',$row->id)}}"><button  class="btn btn-success btn-block">Edit</button></a></td>
		  <td><a href="{{url('/delete',$row->id)}}"><button  class="btn btn-danger btn-block">Delete</button></a></td>
		  @if ($row->document != '')
		  <td><a href="\docs\{{$row->document}}" target="_blank" download><button class="btn btn-primary btn-block">Download</button></a></td>
		  @else
		  <td><a href="{{url('/showonecours',$row->id)}}"><button  class="btn btn-primary btn-block">Show</button></a></td>

		  @endif
		  <td>{{$row->cle}}</td>
			</tr>
			
			
		</tbody>
@endforeach
	</table>
</div>
@endsection