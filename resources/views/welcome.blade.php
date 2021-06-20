<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Learning WareHouse</title>
        <link rel="icon" href="data:image/png;base64,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">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin :0;
                padding : 0;
            }
            .banner{
                width : 100;
height: 100vh;
overflow:hidden;
display:flex;
justify-content:center;
align-items:center;
            }   
            .banner video{
                position : absolute;
top:0;
left:0;
object-fit:cover;
width:100%;
height:100;
pointer-events:none;
            }
.banner .content strong{
    margin:0;
padding:0;
text-transform:uppercase;

}

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
   
body{
    background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
a:link, a:visited {
  background-color: #DCDCDC;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: #708090;
  -webkit-transition-duration: 0.8s; /* Safari */
  transition-duration: 0.8s;
}
html,
body {
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100vh;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    background: #000;
}

.glow-on-hover {
    width: 220px;
    height: 50px;
    border: none;
    outline: none;
    color: #fff;
    background: #111;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 10px;
}

.glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.glow-on-hover:active {
    color: #000
}

.glow-on-hover:active:after {
    background: transparent;
}

.glow-on-hover:hover:before {
    opacity: 1;
}

.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #111;
    left: 0;
    top: 0;
    border-radius: 10px;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}
        </style>
        <title>Welcome</title>
    </head>
    

    <body>
    <div class="banner">
    <video style="width:100%"  autoplay muted controls loop>
  <source src="/photo/videoback.mp4" type="video/mp4">
</video>
<div class="content">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <button class="glow-on-hover" type="button"><a style="background-color: transparent;" href="{{ route('register') }}">
                          Home
                          </a></button>

                    @else

                        @if (Route::has('register'))

                        <button class="glow-on-hover" type="button"><a style="background-color: transparent;" href="{{ route('register') }}">
                          Get Started
                          </a></button>


                          
                          
                        @endif
                    @endauth
                
                </div>
            @endif
         
          
            <div class="content">
                <div class="title m-b-md"><br>
                 <div style="color:black"><strong style="font-family:verdana">Get Your Courses<br>Easily Over Here</strong> </div>
          
                </div>


               
            </div>
           
       </div>
       </div>
        
    </body>
</html>
