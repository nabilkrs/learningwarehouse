@extends('layouts.apps')

@section('content')

<head>
<title>{{ ('Show Cours') }}</title>
<head>
<h1>{{$req->titredecours}}</h1>

<div>{{$req->maincours}}</div>
@endsection
