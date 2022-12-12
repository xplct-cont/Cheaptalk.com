<div class="container col-md-12">
    @include('livewire.modals.modal')
   
    <div class="post-body col-md-12 mt-2">
        <div class="offset-3">
            @if (session('message'))
                <div id="messagee" class="alert text-black text-center text-black">{{ session('message') }}</div>
            @endif
           
            <div class="d-flex justify-content-center" style="color:#2c70b1; font-weight: 450"> Search posts here...</div>
            <div class=" d-flex justify-content-center p-3  rounded mb-5" id="write">
                <input type="text" class="write-2 form-control" style="width: 300px;" placeholder="Search" wire:model.lazy="search">
               
            </div>
            <select class="form-select mb-1" style="background-color:#2c70b1; width: 300px;" id="searchh" wire:model.lazy="title">
                <option value="All" class="text-center">---Select Category---</option>
                <option value="Business">Business</option>
                <option value="Education">Education</option>
                <option value="Comedy">Comedy</option>
                <option value="Drama">Drama</option>
                <option value="Horror">Horror</option>
                <option value="Politics">Politics</option>
                <option value="Religion">Religion</option>
                <option value="Romance">Romance</option>
                
            </select>
            <div class="profile d-flex justify-content-end">
                <h2 class="mt-1 mb-3" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-size: 25px; font-weight: 500;">Recent Posts</h2>
            </div>

            <div class="row">
                @foreach ($recents as $recent)
                    <div class="col-md-4 mt-1" >
                        <div class="card shadow-lg" >
                            <div class="card-header" style="background-color: #2c70b1;" id="cardd">
                                @role('admin')
                                <span id="dot-icon" class="float-end dropdown dropstart" style="background-color:#2c70b1">
                                    <span class="fas fa-user-edit text-light" type="button" data-bs-toggle="dropdown" aria-expanded="false"></span>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" data-toggle="modal" data-target="#click-delete-recent" wire:click="delete({{ $recent->id }})">Delete</a></li>
                                        <li><a class="dropdown-item" data-toggle="modal" data-target="#click-edit-recent" wire:click="editPosts({{ $recent->id }})">Edit</a></li>
                                    </ul>
                                </span>
                                @endrole
            
                                    <span class="float-start" >{{ $recent->title }}</span>
                                </div>
                              
                                <div class="card-footer {{ $recent->user->gender === 'Female' ? 'f1' : 'm1' }}">
                            
                                    <div class="float-center d-flex justify-content-center">
                                    <img class="card " style="border-radius: 50%; width: 80px;"
                                    src="{{ $recent->user->gender === 'Male' ? asset('images/man.png') : asset('images/woman.png') }}" 
                                    alt="photo">
                              
                                    </div>
                                    <p class="text-center text-dark">{{ $recent->user->name }}</p>
                                    
                                </div>
                                <div class="card-body bg-light rounded shadow-lg">
                                    <div class="contentt " style="height: 100px;"><span class="text-dark">{{ $recent->content }}</span></div>
                                </div>
                            </div>
            

                    </div>
                @endforeach
            </div>
            


          
          
            </div>
        </div>
    @if($recents->isEmpty())
        <div class="text-gray-500">
            <h1 class="text-center" style="font-weight: 400; font-size:30px;"><span class="fas fa-exclamation text-danger"></span> No posts.</h1>
        </div>
    @endif
    <button onclick="topFunction()" id="myBtn" title="Back to top"><i class="fa-solid fa-arrow-up"></i></button>
</div>

<style>

       .f1 {
            background-color: lightpink;
        }
        .m1 {
            background-color: lightblue;
        }
    .name {
        color: whitesmoke;
        font-size: 20px;
        text-decoration: none;
        cursor: pointer;
    }
    .name:hover {
        color: rgb(204, 202, 202);
    }
    #searchh {
        background-color: rgba(116, 115, 115, 0.661);
        color: whitesmoke;
    }
    #cardd {
        background-color: rgba(116, 115, 115, 0.661);
        color: whitesmoke;
    }
    .time {
        font-size: 13px;
        margin-left: 45px;
        opacity: 0.8;
    }
    .contentt span {
        font-size: 19px;
    }
    #titlee {
        color: rgb(21, 21, 103);
        font-weight: bold;
        font-style: italic;
        font-size: 14px;
        opacity: 0.8;
    }
    #titleee {
        margin-right: 15px;
        margin-top: 5px;
    }
    #genderr {
        color: rgb(21, 21, 103);
        font-weight: bold;
        font-style: italic;
        font-size: 13px;
        opacity: 0.8;
    }
    .alert {
        background-color: rgba(0, 0, 0, 0.12);
    }
    #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 40px;
        z-index: 99;
        font-size: 25px;
        border: none;
        outline: none;
        background-color: rgb(3, 126, 138);
        color: rgb(255, 255, 255);
        cursor: pointer;
        border-radius: 4px;
        padding: 5px 10px 5px 10px;
    }
    #myBtn:hover {
        background-color: rgb(12, 142, 154);
    }
   
    .write-2 {
        border-radius: 20px;
    }
    #lc {
        padding: 5px 50px 5px 50px;
        border-radius: 5px;
        cursor: pointer;
    }
    #lc:hover {
        background-color: rgba(89, 88, 88, 0.593);
    }
    .male {
        background-color: rgb(5, 5, 147);
        padding: 3px;
        border-radius: 3px;
    }
    .female {
        background-color: rgb(243, 27, 239);
        padding: 3px;
        border-radius: 3px;
    }
    .bisexual {
        background-image: linear-gradient(to left, violet, indigo, blue, green, rgba(255, 255, 0, 0.275), rgba(255, 166, 0, 0.407), red);
        padding: 3px;
        color: rgb(229, 220, 229);
        border-radius: 3px;
    }
    .transgender {
        background-image: linear-gradient(to left, rgb(42, 162, 242), rgb(206, 115, 189),rgb(245, 229, 246), rgb(206, 115, 189), rgb(42, 162, 242));
        padding: 3px;
        color: rgb(23, 17, 84);
        border-radius: 3px;
    }
    .font-icon {
        font-size: 30px;
        border-radius: 50%;
        padding: 2px;
        opacity: 0.8;
        color: rgb(241, 241, 33);
    }
    .font-icon-heart {
        font-size: 30px;
        border-radius: 50%;
        padding: 2px;
        color: red;
        opacity: 0.8;
    }
    #dot-icon {
        padding: 5px 12px 5px 12px;
        background-color: rgb(206, 204, 204);
        border-radius: 50%;
        cursor: pointer;
    }
    #dot-icon:hover {
        background-color: rgb(230, 224, 224);;
    }
    .profile2 {
        width: 40px;
        border: 1px solid rgb(66, 65, 65);
        padding: 4px;
        height: 40px;
        border-radius: 50%;
    }
   
    .write-2 {
        border-radius: 20px;
    }
    .write-2:hover {
        background-color: rgba(255, 255, 255, 0.789);
    }
    
    .title1 {
        margin-left: 38%;
    }
    .title2 {
        margin-left: 35%;
    }
    .title3 {
        margin-left: 8%;
    }
    .close {
        border-radius: 50%;
        background-color: rgb(65, 64, 64);
        border: 1px solid rgb(65, 64, 64);
        width: 30px;
    }
    .close span {
        color: whitesmoke;
    }
    .close:hover {
        background-color: rgb(125, 121, 121);
    }
   
    #text-area {
        border: none;
        background-color: transparent;
        resize: none;
        outline: none;
        color: black;
    }
</style>


<script>
    // Get the button
    let mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }

    setTimeout(function() {
        var msg = document.getElementById("messagee");
        msg.parentNode.removeChild(msg);
    }, 1500);
</script>
