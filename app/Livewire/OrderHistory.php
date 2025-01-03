<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;

class OrderHistory extends Component
{
    public $orders = [];
    public function render()
    {
        $user = Auth::user();
        $this->orders = Transaction::where('user_id', $user->id)->get();
        return view('livewire.order-history');
    }
}
