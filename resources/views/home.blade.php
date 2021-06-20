@extends('layouts.app')

@section('content')

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<title>{{ ('Home') }}</title>
</head>
<body>

<div class="container">
@if(Auth::user()->photo == 'Unknown.jpg')
<div align="left">
<div class="container" style="	height: 100%;
       	align-content: center;">
		<div class="d-flex justify-content-center h-100">
			<div class="image_outer_container" style="margin-top: auto;
       	margin-bottom: auto;
       	border-radius: 50%;
       	position: relative;">
				<div class="green_icon" style="background-color: #4cd137;
         position: absolute;
         right: 30px;
         bottom: 10px;
         height: 30px;
         width: 30px;
         border:5px solid white;
         border-radius: 50%;"></div>
				<div class="image_inner_container" style="border-radius: 50%;
       	padding: 5px;
        background: #833ab4; 
        background: -webkit-linear-gradient(to bottom, #fcb045, #fd1d1d, #833ab4); 
        background: linear-gradient(to bottom, #fcb045, #fd1d1d, #833ab4);">
					<img src="\photo\unknown.jpg" style="height: 200px;
       	width: 200px;
       	border-radius: 50%;
       	border: 5px solid white;">
				</div>
			</div>
		</div>
	</div>
    <div>
  <center>                  <strong>{{Auth::user()->name}}</strong></center><br>
  <center>                  <strong>Add a profil picture in order to let people find you easly</strong></center><br><br>

@else
<div align="left">
<div class="container" style="	height: 100%;
       	align-content: center;">
		<div class="d-flex justify-content-center h-100">
			<div class="image_outer_container" style="margin-top: auto;
       	margin-bottom: auto;
       	border-radius: 50%;
       	position: relative;">
				<div class="green_icon" style="background-color: #4cd137;
         position: absolute;
         right: 30px;
         bottom: 10px;
         height: 30px;
         width: 30px;
         border:5px solid white;
         border-radius: 50%;"></div>
				<div class="image_inner_container" style="border-radius: 50%;
       	padding: 5px;
        background: #833ab4; 
        background: -webkit-linear-gradient(to bottom, #fcb045, #fd1d1d, #833ab4); 
        background: linear-gradient(to bottom, #fcb045, #fd1d1d, #833ab4);">
					<img src="\photo\{{Auth::user()->photo}}" style="height: 200px;
       	width: 200px;
       	border-radius: 50%;
       	border: 5px solid white;">
				</div>
			</div>
		</div>
	</div>
    <div>
    <center>                  <strong style="font-size:30px">{{Auth::user()->name}}</strong></center><br>  @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
                <div  id="menu" class="card-header" style="background-color:#e5eecc"><div><center>Menu</center></div></div>

<div id="options" style="background-color:#e5eecc">
                <div class="card-body">
            
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (Auth::user()->type == 'Etudiant')
                    <a  href="{{route('showstcours')}}"  ><button style="
                     background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
  background-color: white; 
  color: black; 
  border: 2px solid #FF4B2B;
  width:100%;
                    " onmouseover="this.style.background='#FF4B2B';this.style.color='white'" onmouseout="this.style.background='';this.style.color='black'" >Show Normal Cours</button></a>
<a  href="{{route('showpdfcours')}}"  ><button style="
                     background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
  background-color: white; 
  color: black; 
  border: 2px solid #FF4B2B;
  width:100%;
                    " onmouseover="this.style.background='#FF4B2B';this.style.color='white'" onmouseout="this.style.background='';this.style.color='black'" >Show PDF Cours</button></a>      
                    @else
                     <a href="{{route('addcours')}}"   ><button style="
                     background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
  background-color: white;
  color: black;
  border: 2px solid #555555;
                    " onmouseover="this.style.background=' #555555';this.style.color='white'" onmouseout="this.style.background='';this.style.color='black'" > Add Normal Cours</button></a>
                   
                   <a  href="{{route('showcours')}}" ><button style="
                     background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
  background-color: white;
  color: black;
  border: 2px solid #555555;
                    " onmouseover="this.style.background=' #555555';this.style.color='white'" onmouseout="this.style.background='';this.style.color='black'" >Show My Courses</button></a>
                 <a  href="/addpdfcours"  ><button style="
                     background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
  background-color: white;
  color: black;
  border: 2px solid #555555;
                    " onmouseover="this.style.background=' #555555';this.style.color='white'" onmouseout="this.style.background='';this.style.color='black'" >Add PDF Cours</button></a>
                   
                    @endif
                 <br>   
                 </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script> 
$("#options").hide();
$(document).ready(function(){
  $("#menu").click(function(){
    $("#options").slideToggle("slow");
  });
});
</script>
</body>
@endsection
