@extends('base')

@section('content')

@section('title', 'Log in')

<body>
    
    <div class="container col-md-4">
        @if (session('message'))
        <div id="messagee" class="alert alert-success text-center">{{ session('message') }}</div>
        @endif
        @if (session('error'))
        <div id="messagee" class="alert alert-danger text-center">{{ session('error') }}</div>
        @endif
        <div class="card shadow mb-5 rounded border border-light bg-dark" style="position: relative; top: 200px;">
        <div class="d-flex justify-content-center mt-3">
            <img src="images/image17.png" alt="" style="height: 70px; width: 71px;">
        </div>
            <div class="card-body" id="card-bodyy">
                <h2 class="text-center mb-4" style="">Cheaptalk.com</h2>
                <form action="{{ '/' }}" method="POST">
                    {{ csrf_field() }}

                    <h3 class="text-light" style="font-weight: 400; margin-left: 50px; font-size:20px;">Login</h3>
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
                            <a href="{{ '/register' }}" class="" style=" text-decoration:none; color: #2c70b1; margin-left: 160px; position:relative; top:50px;">Dont have an account? <span class="text-light">Sign Up</span></a>
                        </div>
                        <button class="btn  px-5" style="background-color: #2c70b1; color:white;" type="submit"><span class="fas fa-sign-out"></span>Login</button>
                    </div>
                    </form>
            </div>
        </div>
    </div>
</body>

<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>

@endsection

<style>
#basic-addon1 {
    width: 40px;
    text-align: center;
}


#card-bodyy {
    
    height: 350px;
}
#eye:active {
    color: blue;
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

html {
  height:100%;
}

body {
  margin:0;
}

.bg {
  animation:slide 3s ease-in-out infinite alternate;
  background-image: linear-gradient(-60deg, #2c70b1 50%, white 50%);
  bottom:0;
  left:-50%;
  opacity:.5;
  position:fixed;
  right:-50%;
  top:0;
  z-index:-1;
}

.bg2 {
  animation-direction:alternate-reverse;
  animation-duration:4s;
}

.bg3 {
  animation-duration:5s;
}



@keyframes slide {
  0% {
    transform:translateX(-25%);
  }
  100% {
    transform:translateX(25%);
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
