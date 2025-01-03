<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email;
    public $password;
    
    protected $rules = [
        'email' => 'required|email',
        'password' => 'required'
    ];

    protected $messages = [
        'email.required' => 'Email harus diisi',
        'email.email' => 'Format email tidak valid',
        'password.required' => 'Password harus diisi',
    ];

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->flash('success', 'Berhasil masuk!');
            if(Auth::user()->role == 'admin') {
                return redirect()->intended('/admin');
            }
            return redirect()->intended(route('dashboard'));
        }

        session()->flash('error', 'Email atau password salah!');
        $this->reset('password');
    }

    public function render()
    {
        return view('livewire.login');
    }
}
