<div>
    <div class="col-md-12 mt-5" style="margin-left: 135px;">
        <h1 class="text-center" style="color: dimgray; font-size: 30px; font-weight: 400;">Users</h1>
        @include('livewire.modals.admin-modal')
        @if (session('message'))
            <div class="alert alert-success text-black text-center" id="messagee">{{ session('message') }}</div>
        @endif
        <div class='btn btn-sm float-end mb-2' style="background-color: #2c70b1; color:white;" data-toggle="modal" data-target="#modal-user"><span class="fas fa-plus-circle"></span> Add User</div>
        <div class="d-flex justify-content-start" style="color: #2c70b1; margin-left: 10px;">Search users here...</div>
        <div class="d-flex justify-content-start">
        <input type="search" class="form-control float-end mx-2 mb-3" style="width: 250px;" placeholder="Search" wire:model.lazy="search">
       </div>
        <div class="card-body">
            <table class="table table-striped shadow table-bordered table-md table-hover text-center">
                <thead class=" text-white" style="background-color: #2c70b1;">
                    <tr>
                        <th>Profile Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody class="bg-light text-dark">
                    @foreach ($users as $user)
                    <tr>
                        <td class="text-center"><img style="border-radius: 50%; width: 40px;"
                            src="{{ $user->gender === 'Male' ? asset('images/man.png') : asset('images/woman.png') }}" 
                            alt="photo"></td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->gender }}</td>
                        <td>
                            <a href="" class="btn " id="ic" title="Edit" data-toggle="modal" data-target="#update-modal-users" wire:click="editUsers({{ $user->id }})"><i class=" fa fa-user-edit text-warning"></i></a>
                           
                        </td>
                        <td>
                            <a href="" class="btn " id="ic" title="Delete" data-toggle="modal" data-target="#delete-modal-users" wire:click="delete({{ $user->id }})"><i class=" fa fa-trash-alt text-danger"></i></a>

                        </td>
                    </tr>
                    @endforeach
                    @if($users->count() == 0)
                        <td colspan="4" class="text-center">
                            No users found!.
                        </td>
                    @endif
                </tbody>
            </table>
        </div>
        <div>
            {{ $users->links() }}
        </div>
    </div>
</div>
<style>
    .close {
        border-radius: 50%;
        width: 25px;
        border: none;
    }
    .close span {
        color: black;
    }
    .close:hover {
        background-color: rgb(214, 211, 211);
    }
    .title3 {
        margin-left: 8%;
    }
    .title1 {
        margin-left: 38%;
    }
    .title2 {
        margin-left: 35%;
    }
</style>
