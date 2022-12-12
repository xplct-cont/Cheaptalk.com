
<div class="container shadow-lg" >
    <div class="post-body">
        <div class="" style="">
        @role('admin')
        
<table class="table table-striped text-center">
    <thead class="text-center " style="background-color:#2c70b1; color:white;">
        <tr>
            <th>Profile Image</th>
            <th>Name</th>
            <th>Email Verification Status</th>
            <th>Date Registered</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td class="text-center"><img style="border-radius: 50%; width: 40px;"
                    src="{{ $user->gender === 'Male' ? asset('images/man.png') : asset('images/woman.png') }}" 
                    alt="photo"></td>
                <td class="text-center">{{$user->name}}</td>
                <td class="text-center">{{$user->email_verified_at === null ? 'Not Verified ' : 'Verified'}}</td>
                <td class="text-center">{{$user->created_at->format('l, d F Y g:i A')}}</td>
            </tr>
            @endforeach
    </tbody>
</table>
@endrole
       
        </div>
    </div>
</div>

<style>
    
</style>
