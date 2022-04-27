<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Message;
use App\Models\Calculate_cost;
use function PHPSTORM_META\type;

class FeedbackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('create', 'calculate_cost');
    }

    public function create()
    {
        Message::create([
            'name' => \request()->get('name', null),
            'phone' => \request()->get('phone', null),
            'message' => \request()->get('message', null),
        ]);
    }
    public function calculate_cost()
    {
        Calculate_cost::create([
            'name' => \request()->get('name', null),
            'email' => \request()->get('email', null),
        ]);
    }

    public function index()
    {
        Feedback::where('type', null)->update([
            'view' => 1
        ]);
        return view('feedback.data');
    }

    public function show($id)
    {
//        Обратная сязь
        if($id == 1){
            $message = Message::orderBy('id', 'desc')->get();
            Message::where('view', 0)->update([
            'view' => 1
            ]);
        return view('feedback.message', compact('message'));
        }
//        Обратный звонок
        if($id == 2){
            $feedback = Feedback::orderBy('id', 'desc')->get();
            Feedback::where('view', 0)->update([
                'view' => 1
            ]);
            return view('feedback.feedback', compact('feedback'));
        }
//        Заявки с калькулятора
        if($id == 3){
            $order = Order::orderBy('id', 'desc')->get();
            Order::where('view', 0)->update([
                'view' => 1
            ]);
            Order::where('name', '')->delete();
            return view('feedback.order', compact('order'));
        }
//             Заявки с калькулятора
        if($id == 4){
            $calc_cost = Calculate_cost::orderBy('id', 'desc')->get();
            Calculate_cost::where('view', 0)->update([
                'view' => 1
            ]);
            return view('feedback.calculate_cost', compact('calc_cost'));
        }

    }

    public function destroy($id)
    {
        Feedback::find($id)->delete();
        return back();
    }

    public function message_destroy($id)
    {
        Message::find($id)->delete();
        return back();
    }

    public function order_destroy($id)
    {
        Order::find($id)->delete();
        return back();
    }

    public function calc_cost_destroy($id)
    {
        Calculate_cost::find($id)->delete();
        return back();
    }
}
