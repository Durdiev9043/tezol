<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\User;
use Illuminate\Http\Request;

class CourierController extends BaseController
{
    public function getOrder(){
        $orders=Order::where('status',1)->Where('supplier_id',NULL)->get();
        return $this->sendSuccess($orders,'Buyurtmalar Royxati');
    }
    public function takeOrder(Request $request, $id){
//        $test=count(Order::where('supplier_id',$id)->where('status','!=',3)->get());
//        if ($test){
//            return Order::where('supplier_id',$id)->get();
//
//        }else{
//            $orders=Order::find($request->order_id);
//            $orders->supplier_id = $id;
//            $orders->save();
//            return $this->sendSuccess($orders,'Siz ning yangi qabul qilgan buyurutmangiz');
//        }
        $orders = Order::find($request->order_id);

        if (!$orders) {
            return response()->json(['error' => 'Order not found'], 404);
        }

        // Check if there are any existing orders for the supplier with status != 3
//        $existingOrders = Order::where('supplier_id', $id)->where('status', '!=', 3)->get();

//        if ($existingOrders->count() > 0) {
//            return $existingOrders;
//        } else {
            // Assign supplier_id to the order and save it
        if ($orders->supplier_id == NULL) {
            $orders->supplier_id = $id;
            $orders->save();
            return $this->sendSuccess($orders, 'Sizning yangi qabul qilgan buyurutmangiz');
        }else{
            return response()->json(['error' => 'Order not found'], 404);
        }

//        }
    }
    public function historyOrder($id)
    {
        $orders=Order::where('supplier_id',$id)->get();
        return $this->sendSuccess($orders,'sizning barcha buyurutmalaringiz');
    }
    public function myOrder($id)
    {
        $orders=Order::where('supplier_id',$id)->where('status',1)->orWhere('status',2)->get();
        return $this->sendSuccess($orders,'sizning jarayondagi buyurutmalaringiz');
    }
    public function startOrder(Request $request,$id)
    {
        $orders = Order::find($request->order_id);

        if (!$orders) {
            return response()->json(['error' => 'Order not found'], 404);
        }

        if ($orders->supplier_id == $id) {
            $orders->status = 2;
            $orders->save();
            return $this->sendSuccess($orders, 'Sizning buyurutmangiz boshlandi');
        }else{
            return response()->json(['error' => 'Order not found'], 404);
        }
    }
    public function finishOrder(Request $request,$id)
    {
        $order = Order::find($request->order_id);

        if (!$order) {
            return response()->json(['error' => 'Order not found'], 404);
        }

        if ($order->supplier_id == $id) {
            $order->status = 3;
            $order->save();
            return $this->sendSuccess($order, 'Sizning buyurutmangiz tugatildi');
        }else{
            return response()->json(['error' => 'Order not found'], 404);
        }
    }
    public function orderInfo($id)
    {
        $order=Order::where('id',$id)->first();
        $ammount=OrderProduct::where('order_id',$id)->get();
        $pp=0;
        foreach ($ammount as $item){
            $pp=$pp+$item->total_price;
        }
        $dd=[];
            $dd['client_number']=$order->user->phone;
            $dd['lat']=$order->lat;
            $dd['lang']=$order->lang;
            $dd['pay_type']=$order->pay_type;
            $dd['address_name']=$order->address_name;
            $dd['total_price']=$pp;
            return $this->sendSuccess($dd,'buyurtma');

    }

}
