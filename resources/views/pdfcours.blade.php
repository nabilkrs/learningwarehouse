@extends('layouts.apps')

@section('content')
<title>{{ ('Add PDF Cours') }}</title>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ADD PDF Cours') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('addpdfcours') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">    <strong> {{ __('Name Of Subject :') }}</strong></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->spec }}" autocomplete="name" autofocus disabled>

                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right"><strong>{{ __('Title Of Cours :') }}</strong></label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('email') }}" autocomplete="email">

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                               
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cle" class="col-md-4 col-form-label text-md-right"><strong>{{ __('Class Key :') }}</strong></label>

                            <div class="col-md-6">
                                <input id="cle" type="text" class="form-control @error('cle') is-invalid @enderror" name="cle" value="{{ old('email') }}" autocomplete="cle">

                                @error('cle')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                               
                            </div>
                        </div>
                        <div class="form-group row">
                  <label for="pdf" class="col-md-4 col-form-label text-md-right">    <strong> {{ __('ADD PDF File :') }}</strong></label>

                            <div class="col-md-6">
                                <input  type="file" name="pdf" accept="application/pdf"  class=" form-control @error('pdf') is-invalid @enderror">

                                @error('pdf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-secondary">
                                   ADD
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection