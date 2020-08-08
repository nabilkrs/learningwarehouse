@extends('layouts.app')

@section('content')
<title>{{ ('Registre') }}</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST"  action="{{ route('register') }}"  enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                            <label for="photo" class="col-md-4 col-form-label text-md-right">{{ __('Upload Profil Photo') }}</label>

                            <div>
                                <input id="photo" type="file" name="photo" value="C:\xampp\htdocs\projet\public\photo\unknown.jpg">

                               
                                </div>
                            </div>
                           <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                        </div>
                            <div class="form-group row">
                            <label for="classe" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>

                            <div class="col-md-6">
                            <input type="radio" name="option" value="Etudiant" id="etd">
        <span></i>Etudiant</span>
    
   
        <input type="radio" name="option"  value="Enseignant" id="ens">
        <span><i></i>Enseignant</span>
    </label>
   
   
                                @error('class')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                        </div>
                        <div id="add"></div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" id="btn">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
 
$(document).ready(function() {
   
    
    $("#ens").click(function() {
        $('#cle').remove();
           $('#add').after("<div id=\"spec\" class=\"form-group row\"><label for=\"spec\" class=\"col-md-4 col-form-label text-md-right\">{{ __('Specialty') }}</label><div class=\"col-md-6\"><input id=\"spec\" type=\"text\" class=\"form-control @error('spec') is-invalid @enderror\" name=\"spec\"  required autocomplete=\"spec\" autofocus required value=\"NULL\"> @error('spec') <span class=\"invalid-feedback\" role=\"alert\">             <strong>{{ $message }}</strong>    </span>    @enderror  </div></div>");
        


    });
    $("#etd").click(function() {
        
        $('#spec').remove();
        $('#add').after("<div id=\"cle\" class=\"form-group row\"><label for=\"cle\" class=\"col-md-4 col-form-label text-md-right\">{{ __('Class Key') }}</label><div class=\"col-md-6\"><input id=\"cle\" type=\"text\" class=\"form-control @error('spec') is-invalid @enderror\" name=\"cle\"  required autocomplete=\"cle\" autofocus required value=\"NULL\"> @error('cle') <span class=\"invalid-feedback\" role=\"alert\">             <strong>{{ $message }}</strong>    </span>    @enderror  </div></div>");

 });
 $("#btn").click(function() {
        var name= $('#name').val();
        var email=$('#email').val();
        var phone=$('#phone').val();
        var password=$('#password').val();
        var confirm=$('#password-confirm').val();


if(    (name!='')&&(email!='')&&(phone!='')&&(password!='')&&(y!='')&&(confirm!='') )
{
      // disable button
      $(this).css('opacity','0.5');
      // add spinner to button
      $(this).html(
        `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...`
      );
}
    });





});
</script>
@endsection