<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class Register extends Component
{
    public $username;
    public $email;
    public $password;

    protected $rules = [
        'username' => 'required|min:3|max:50|unique:users,name',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8'
    ];

    protected $messages = [
        'username.required' => 'Username harus diisi',
        'username.min' => 'Username minimal 3 karakter',
        'username.max' => 'Username maksimal 50 karakter',
        'username.unique' => 'Username sudah digunakan',
        'email.required' => 'Email harus diisi',
        'email.email' => 'Format email tidak valid',
        'email.unique' => 'Email sudah terdaftar',
        'password.required' => 'Password harus diisi',
        'password.min' => 'Password minimal 8 karakter'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function register()
    {
        $validatedData = $this->validate();
        
        $user = User::create([
            'name' => $this->username,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);

        Auth::login($user);

        session()->flash('success', 'Registrasi berhasil!');
        return redirect()->route('dashboard');
    }
    public function render()
    {
        return view('livewire.register');
    }
}
