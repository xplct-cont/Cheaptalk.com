@extends('base')

@extends('navbar')

@section('title', 'Dashboard')

@section('content')
    <div class="container ">
        <h1 class="text-center" style="font-weight: 400; color:dimgray; font-size: 30px;">Dashboard</h1>
        <div class="content " style="position: relative; margin-left: 100px;">
            <div class="row mt-5 text-center">
                <div class="col-md-3 mb-2">
                    <div class="card shadow">
                        <a href="/recent-post" id="dash-link">
                            <div class="card-body rounded " style="background-color:#2c70b1; height: 130px;">
                                <div class="row">
                                    <div class="col">
                                        <i class="fa fa-history text-white mt-2" id="dash-icon"></i>
                                    </div>
                                    <div class="col mt-4">
                                        <span class="text-white float-right" id="text" style="font-size:17px;">Recent Posts</span><br>
                                        <span class="text-white" id="text2">{{ $allPosts }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                @role('admin')
                @php
                $users_count = DB::table('users')->count();
                @endphp
                
                <div class="col-md-3 mb-2">
                    <div class="card shadow">
                        <a href="/recent-post" id="dash-link">
                            <div class="card-body rounded " style="background-color:#2c70b1; height: 130px;">
                                <div class="row">
                                    <div class="col">
                                        <i class="fa fa-users text-white mt-2" id="dash-icon"></i>
                                    </div>
                                    <div class="col mt-4">
                                        <span class="text-white float-right" id="text" style="font-size:17px;">Users</span><br>
                                        <span class="text-white" id="text2">{{ $users_count }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endrole
                @role('admin')
                <div class="col-md-3 mb-2">
                    <div class="card shadow">
                        <a href="/log" id="dash-link">
                            <div class="card-body rounded" style="background-color:#2c70b1;  height: 130px;">
                                <div class="row">
                                    <div class="col">
                                        <i class="fa fa-book text-white mt-2" id="dash-icon"></i>
                                    </div>
                                    <div class="col mt-4">
                                        <span class="text-white float-right" id="text" style="font-size:17px;">Total Logs</span><br>
                                        <span class="text-white" id="text2">{{ $logs }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endrole

             

                <div class="col-md-3">
                    <div class="card shadow">
                        <a href="/my-post" id="dash-link">
                            <div class="card-body rounded" style="background-color:#2c70b1;  height: 130px;">
                                <div class="row">
                                    <div class="col">
                                        <i class="fa fa-thumbs-o-up text-white mt-2" id="dash-icon"></i>
                                    </div>
                                    <div class="col mt-4">
                                        <span class="text-white float-right" id="text" style="font-size:17px;">Your Posts</span><br>
                                        <span class="text-white" id="text2">{{ $posts }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        @role('admin')
        <section style="position:relative; top: -750px; margin-left: 80px;">
            <div class="row">
                <div class="card col-sm-12 bg-light">
                    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
                    fonr-weight: 400; font-size: 22px; ">Users</h5>
                    <div class="recent-only">
                        <livewire:users.users/>
                    </div>
                </div>
            </div>
        </section>
        @endrole
    </div>
@endsection

<style>
    .card {
        width: 250px;
      
    }
    .card:hover {
        transform: scale(1.02);
        transition: transform 0.1s ease;
    }
   
    #dash-icon {
        font-size: 30px;
        opacity: 0.5;
    }
    #dash-link {
        text-decoration: none;
    }
   
   
    .time {
        opacity: 0.8;
    }
    .recent-only {
        border: 1px solid rgba(0, 0, 0, 0.23);
        border-radius: 10px;
        box-shadow: 3px 3px 1px 0px rgba(0, 0, 0, 0.2);
    }
</style>