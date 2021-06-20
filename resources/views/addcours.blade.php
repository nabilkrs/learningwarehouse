@extends('layouts.apps')

@section('content')
<title>{{ ('Add Cours') }}</title>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ADD Cours') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('storecours')}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">    <strong> {{ __('Name Of Subject :') }}</strong></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->spec}}" autocomplete="name" autofocus disabled>

                              
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right"><strong>{{ __('Title Of Course :') }}</strong></label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('email') }}" autocomplete="title">

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                               
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="key" class="col-md-4 col-form-label text-md-right"><strong>{{ __('Class Key :') }}</strong></label>

                            <div class="col-md-6">
                                <input id="key" type="text" class="form-control @error('key') is-invalid @enderror" name="key" value="{{ old('email') }}" autocomplete="key">

                                @error('key')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                               
                            </div>
                        </div>


                        <div class="form-group row">
                       
                        <strong>Main Cours : </strong><br><br>

<textarea rows="10" cols="80" name="cours" class="form-control @error('cours') is-invalid @enderror"></textarea>
@error('cours')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group row">
                       
                        <button type="submit" class="btn btn-secondary" style="width:100%">
                                   ADD
                                </button>
  
 
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection