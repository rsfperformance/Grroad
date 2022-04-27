<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Feedback;

class Feedcall extends Component
{
    public $name, $phone, $style='none', $second_style='block', $first_style='none';
    public function render()
    {
        return view('livewire.feedcall');
    }
    public function event()
    {
        $this->style = 'block';
    }

    public function save()
    {
        Feedback::create([
            'name' => $this->name,
            'phone' => $this->phone
        ]);
        $this->name = null;
        $this->phone = null;
        $this->second_style='none';
        $this->first_style = 'block';
    }
    public function close()
    {
        $this->second_style='block';
        $this->first_style = 'none';
    }
}
