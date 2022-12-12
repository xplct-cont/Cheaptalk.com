<div>
    <div class="col-md-12 mt-5" style="margin-left: 135px;">
        <h1 class="text-center" style="color:dimgray; font-weight: 400; font-size: 30px;">Roles</h1>
        @include('livewire.modals.admin-modal')
        @if (session('message'))
            <div class="alert alert-success text-black text-center" id="messagee">{{ session('message') }}</div>
        @endif
        <div class='btn btn-sm float-end mb-2' style="background-color: #2c70b1; color:white;" data-toggle="modal" data-target="#modal-roles"><span class="fas fa-plus-circle"></span> Add Role</div>
        <div class="d-flex justify-content-start" style="color: #2c70b1; margin-left: 10px;">Search roles here...</div>
        <div class="d-flex justify-content-start">
        <input type="search" class="form-control float-end mx-2 mb-3" style="width: 250px;" placeholder="Search" wire:model.lazy="search">
       </div>
        <div class="">
            <table class="col-md-12 table table-striped shadow  table-xl">
                <thead class="text-white text-center" style="background-color: #2c70b1">
                    <tr>
                        <th>Edit</th>
                        <th>Role</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody class="text-center bg-light text-dark">
                    @foreach ($roles as $role)
                    <tr>
                        <td>
                            <a href="" class="btn" id="ic" title="Edit" data-toggle="modal" data-target="#update-modal-roles" wire:click="editRoles({{ $role->id }})"><i class=" fa fa-user-edit text-warning"></i></a>
                        </td>

                        <td>{{ $role->name }}</td>
                        
                        <td>
                            <a href="" class="btn" id="ic" title="Delete" data-toggle="modal" data-target="#delete-modal-roles" wire:click="delete({{ $role->id }})"><i class=" fa fa-trash-alt text-danger"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    @if($roles->count() == 0)
                        <td colspan="2" class="text-center">
                            No roles found!.
                        </td>
                    @endif
                </tbody>
            </table>
        </div>
        <div>
            {{ $roles->links() }}
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
