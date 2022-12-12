<nav class="navbar navbar-expand-lg shadow" style="background-color:#2c70b1;">
    <img src="{{ asset('images/image17.png') }}" alt="logo" class="img-fluid rounded-circle img-responsive" title="brand logo" style=" background-color:white; padding-left: 2px; padding-right:2px; padding-bottom: 2px; padding-top: 2px; width: 52px; height: 50px; margin-left: 50px; cursor: pointer">
    <a href="#" style="text-decoration: none;"> <h2 class="p-2 text-white" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: 400;font-size:25px;"><span style="color:white;">Cheaptalk.com</h2></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
            <div class="dropdown dropstart text-light">
               Welcome, {{Auth::user()->name}}
                <img style="width: 65px; height: 55px; border-radius: 50%; " src="
                {{(Auth::user()->gender === 'Male') ? asset('images/man.png') : ''}}
                {{(Auth::user()->gender === 'Female') ? asset('images/woman.png') : ''}}
                " title="profile" class="btn text-white shadow-lg"  aria-expanded="false" >
                
            </div>
        </ul>
    </div>
</nav>



<div class="sidebar">

    @role('admin')
                <a class="nav-link mt-2 {{ 'dashboard' == request()->path() ? 'active' : '' }}" href="{{ '/dashboard' }}"><span class="fas fa-tachometer-alt"></span> Dashboard</a>
         
    @endrole
        <a class="nav-link text-white mt-1 {{ 'recent-post' == request()->path() ? 'active' : '' }}" href="{{ '/recent-post' }}"><span class="fas fa-history"></span> Recent Posts</a>
        <a class="nav-link text-white mt-1 {{ 'my-post' == request()->path() ? 'active' : '' }}" href="{{ '/my-post'}}"><span class=" fas fa-thumbs-o-up"></span> My Posts</a>

        @role('admin')
      
            <a class="nav-link text-white mt-1 mb-1 {{ 'log' == request()->path() ? 'active' : '' }}" href="{{ '/log' }}"><span class="fas fa-book"></span> Activity Logs</a>
            <div class="bg-secondary text-white text-center" style="padding-top:10px; padding-bottom: 10px;"><span class="fas fa-gear"></span> SETTINGS</div>
            <a class="nav-link text-white mt-1 {{ 'admin/roles' == request()->path() ? 'active' : '' }}" href="{{ route('admin.roles.index') }}"><span class="fas fa-user-gear"></span> Roles</a>
            <a class="nav-link text-white  mt-1 {{ 'admin/permissions' == request()->path() ? 'active' : '' }}" href="{{ route('admin.permissions.index') }}"><span class="fas fa-user-edit"></span> Permissions</a>
            <a class="nav-link text-white mt-1 {{ 'admin/users' == request()->path() ? 'active' : '' }}" href="{{ route('admin.users.index') }}"><span class="fas fa-users"></span> Users</a>
            @endrole

            <a href="{{ '/logout' }}" class=" mt-1" id="select"><i class="fa-regular fa-right-from-bracket"></i> Logout</a>
  </div>
  


<style>
    #profile-name {
        font-size: 18px;
        border-bottom: 1px solid white;
        padding-bottom: 10px;
    }
    #profile-image {
        margin-left: 15px;
    }
    #buttt {
        border: none;
        background-color: rgba(17, 162, 172, 0.37);
        width: 145px;
        color: rgb(255, 255, 255);
    }
    #buttt:hover {
        background-color: rgb(17, 162, 172);
    }
    #profile-name a {
        text-decoration: none;
        color: rgb(225, 222, 222);
    }
    #profile-name a:hover {
        background-color: rgba(255, 255, 255, 0);
        color: rgb(255, 255, 255);
    }
    .navbar-nav a{
        margin-left: 20px;
        margin-right: 20px;
        border-radius: 5px;
        width: 120px;
        margin: 5px;
        text-align: center;
    }
    .navbar-nav a:hover{
        background-color: rgb(17, 162, 172);
        border-radius: 5px;
    }
   
        #select {
        color: white;
    }
    #select2 {
        background-color: rgb(19, 131, 65);
        width: 300px;
    }
    #select3 {
        background-color: rgb(19, 131, 65);
    }
    #select2 li:hover {
        background-color: rgb(17, 162, 172);
    }


.sidebar {
  margin: 0;
  padding: 0;
  width: 250px;
  background-color: #292b2c;
  position: fixed;
  height: 100%;
 
}

.sidebar a {
  display: block;
  color:  white;
  padding: 16px;
  text-decoration: none;
}

.active{
     color:white;
     background-color: #2c70b1;
}

.sidebar a:hover{
        background-color: #2c70b1;
        color: white;
    }
 

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
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
  background: -webkit-gradient(linear,left top,right top,color-stop(0, black),color-stop(0.4, black),color-stop(0.5,#2c70b1 ),color-stop(0.6, #dbc1c1),color-stop(1, #323232)); 
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  -webkit-animation: slidetounlock 12s ease-in infinite;
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
