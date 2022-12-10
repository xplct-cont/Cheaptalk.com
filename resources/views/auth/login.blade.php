@extends('base')

@section('content')

@section('title', 'Log in')

<body>
    
    {{-- <div class="container">
        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" width="236" height="44"><style>.st0{fill:#DB3236;}</style><g id="XMLID_2_"><path id="XMLID_62_"></svg>
        <div id="running-text">
          <h2>WELCOME TO CHEAPTALK.COM</h2>
        </div>
        </div>
    </div> --}}


    <div class="container col-md-4">
        @if (session('message'))
        <div id="messagee" class="alert alert-success text-center">{{ session('message') }}</div>
        @endif
        @if (session('error'))
        <div id="messagee" class="alert alert-danger text-center">{{ session('error') }}</div>
        @endif
        <div class="card shadow mb-5 rounded border border-light" style="position: relative; top: 200px;">
        <div class="d-flex justify-content-center mt-3">
            <img src="images/image17.png" alt="" style="height: 70px; width: 71px;">
        </div>
            <div class="card-body" id="card-bodyy">
                <h2 class="text-center mb-4" style="color:#2c70b1;">Cheaptalk.com</h2>
                <form action="{{ '/' }}" method="POST">
                    {{ csrf_field() }}

                    <h3 style="font-weight: 400; margin-left: 50px; color:#2c70b1; font-size:20px;">Login</h3>
                    <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" ><i class="fa fa-envelope"  style="color:#2c70b1"></i></span>
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control" required="">
                        </div>
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-5 mt-1 col-sm-10 offset-sm-1">
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa fa-lock" style="color:#2c70b1"></i></span>
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control" required="">
                       
                        </div>
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <a href="{{ '/register' }}" class="" style="color: #2c70b1; margin-left: 160px; position:relative; top:50px;">Dont have an account? Sign Up</a>
                        </div>
                        <button class="btn  px-5" style="background-color: #2c70b1; color:white;" type="submit"><span class="fas fa-sign-out"></span> Login</button>
                    </div>
                    </form>
            </div>
        </div>
    </div>
</body>

<div class="content">
   
</div>

<div class="boxx">
    <ul>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      
    </ul>
</div>

@endsection

<style>
#basic-addon1 {
    width: 40px;
    text-align: center;
}
body{
  
  
}
#card-bodyy {
    
    height: 350px;
}
#eye:active {
    color: blue;
}


.boxx ul li {
	position: absolute;
	width: 35px;
	height: 35px;
	list-style: none;
	opacity: 0;
	background: radial-gradient(#2c70b1, #2c70b1, transparent);
	bottom: 0;
	left: 10vw;
	animation: animate 15s linear infinite;
}
.boxx ul li:nth-child(2) {
	left: 25vw;
	animation-delay: 4s;
}
.boxx ul li:nth-child(3) {
	left: 22vw;
	animation-delay: 9s;
}
.boxx ul li:nth-child(4) {
	left: 71vw;
	animation-delay: 6s;
}
.boxx ul li:nth-child(5) {
	left: 79vw;
	animation-delay: 3s;
}
.boxx ul li:nth-child(6) {
	left: 82vw;
	animation-delay: 8s;
}
.boxx ul li:nth-child(7) {
	left: 80vw;
	animation-delay: 13s;
}

@keyframes animate {
	0% {
		transform: scale(0);
		opacity: 1;
		bottom: 0;
	}
	100% {
		transform: scale(10);
		opacity: 0;
		bottom: 100vh;
	}
}


#running-text{
  width: 848px;
  //background: -webkit-gradient(linear,left top,left bottom,color-stop(0, #ffffff),color-stop(1, #ffffff)); 
  overflow: hidden;
  margin: 0 auto;
}

h2 {
  //text-align: center;
  font-size: 56px;
  background: -webkit-gradient(linear,left top,right top,color-stop(0, #2c70b1),color-stop(0.4, #dbc1c1),color-stop(0.5,#2c70b1 ),color-stop(0.6, #dbc1c1),color-stop(1, #323232)); 
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  -webkit-animation: slidetounlock 7s ease-in infinite;
  font-family: "Source Sans Pro", sans-serif;
  font-weight: 300;
  padding: 0;
  letter-spacing: 1px;
  word-spacing: 8px;
  //width: 200%;
}

@-webkit-keyframes slidetounlock {
  0% {
    background-position: -820px 0;
  }
  100% {
    background-position: 820px 0;
  }
}

.cta{
  margin-top: 48px;
  background: #323232;
  border: none;
  height: 48px;
  width: 240px;
  color: #fff;
  border-radius: 4px;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  animation-name: fadeInUp;
  animation-delay: 8s;
}

@-webkit-keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}



</style>

<script>
    function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
