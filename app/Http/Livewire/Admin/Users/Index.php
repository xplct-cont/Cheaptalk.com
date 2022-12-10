<?php

namespace App\Http\Livewire\Admin\Users;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Events\UserLog;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search='';
    public $name, $email, $password, $gender, $password_confirmation;
    public $roles;

    protected $paginationTheme = 'bootstrap';

    public function addUser() {
        $this->validate([
            'name'                       =>          ['required', 'string', 'max:255', 'unique:users'],
            'email'                      =>          ['required', 'email', 'max:255', 'unique:users'],
            'gender'                     =>          ['required', 'string', 'max:255'],
            'password'                   =>          ['required', 'confirmed', 'string', 'max:255', 'min:6']
        ]);

        $token = Str::random(24);

        $users = User::create([
            'name'                       =>          $this->name,
            'email'                      =>          $this->email,
            'gender'                     =>          $this->gender,
            'password'                   =>          bcrypt($this->password),
            'remember_token'             =>          $token
        ]);

        $users->assignRole('writer');

        Mail::send('auth.verification-email', ['user' => $users], function($mail) use($users){
            $mail->to($users->email);
            $mail->subject('Account verification');
        });

        $log_entry = auth()->user()->name . ' added ' . $users->name . ' user';
        event(new UserLog($log_entry));

        return redirect('admin/users')->with('message', ' New user added please verify their email to continue');
    }

    public function editUsers(int $userId) {
        $user = User::find($userId);
        if($user){
            $this->userId = $user->id;
            $this->name = $user->name;
            $this->email = $user->email;
            $this->gender = $user->gender;
        }else{
            return redirect()->to('admin/users');
        }
    }
    public function updateUsers() {
        $this->validate([
            'email'                      =>          ['required', 'string','email', 'max:255', 'unique:users,email,'],
        ]);

        User::where('id', $this->userId)->update([
            'name'             =>      $this->name,
            'email'            =>      $this->email,
            'gender'           =>      $this->gender,
        ]);

        $log_entry =  auth()->user()->name . ' updated a user';
        event(new UserLog($log_entry));

        return redirect('admin/users')->with('message', ' User updated successfully');
    }

    public function delete($userId) {
        $this->userDelete = $userId;
    }

    public function deleteUsers() {

        User::find($this->userDelete)->delete();

        $log_entry =  auth()->user()->name . ' deleted a user';
        event(new UserLog($log_entry));

        return redirect('admin/users')->with('message', 'User has been deleted successfully');
    }
    public function render()
    {
        $users = User::where('name', 'like', '%' . $this->search . '%')->orderBy('id')->paginate(5);
        return view('livewire.admin.users.index', compact('users'));
    }
}
