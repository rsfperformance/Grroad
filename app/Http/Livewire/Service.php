<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;

class Service extends Component
{
    public $category = 1, $display = 'none', $display2 = 'none', $item, $service=1, $display3;
    public $status_first = 'active', $status_second, $status_third, $status_fourth;
    public $display_first = 'stages__container-active', $display_second, $display_third, $display_fourth;
    public $price;
    public $name, $phone, $message;

    public function render()
    {
        return view('livewire.service');
    }
    public function select_type($id)
    {
        $this->category = $id;
        $this->display = 'block';
    }
    public function select_service($id)
    {
        $this->service = $id;
        $this->status_first = '';
        $this->display_first = '';

        $this->status_second = 'active';
        $this->display_second = 'stages__container-active';

        $this->display = 'block';
    }
    public function check($id)
    {
        $this->price = $id;
        $this->display = 'block';
    }
    public function application()
    {
        $this->status_second = '';
        $this->display_second = '';

        $this->status_third = 'active';
        $this->display_third = 'stages__container-active';
    }

    public function save()
    {
        if($this->name != null){
            Order::create([
                'name' => $this->name,
                'phone' => $this->phone,
                'message' => $this->message,
                'service' => $this->service,
                'price_type' => $this->price,
            ]);}
        $this->name = '';
        $this->phone = '';
        $this->message = '';

        $this->status_first = 'active';
        $this->display_first = 'stages__container-active';

        $this->status_third = '';
        $this->display_third = '';

        $this->display3 = 'none';
        $this->display2 = 'block';
    }

    public function success()
    {
        $this->display = 'none';
        $this->display3 = 'block';
        $this->display2 = 'none';
    }
}
