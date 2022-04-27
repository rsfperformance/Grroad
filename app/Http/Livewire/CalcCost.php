<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Calculate_cost;

class CalcCost extends Component
{
    public $name, $email, $display = "none";
    public function render()
    {
        return view('livewire.calc-cost');
    }
    public function save()
    {
        Calculate_cost::create([
            'name' => $this->name,
            'email' => $this->email
        ]);
        $this->name = '';
        $this->email = '';
        $this->display = 'block';
    }
}
