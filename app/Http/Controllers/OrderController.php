<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderStateHistory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request,Order $order)
    {
        $order = Order::find(2);
        $current_state=$order->state;
        $states = Order::getStatesFor('state');

        $history_status=OrderStateHistory::query()
            ->where('order_id','2')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('state.order_state', [
            'order'=>$order,
            'states'=>$states,
            'history_status'=>$history_status,
        ]);
    }
    public function update(Request $request,Order $order)
    {
        $state = $order->state;

        $transition = $state->transitionTo(request('state'));

        if (!$transition) {
            abort(400, 'Invalid status transition');
        }

        OrderStateHistory::create([
            'order_id' => $order->id,
            'from_state' => $state,
            'to_state' => request('state'),
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('orders.index');
    }
}
