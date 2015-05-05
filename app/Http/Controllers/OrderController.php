<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Request;
use App\Order;
use App\OrderDetail;
use App\DeviceType;
use DateUtils;

class OrderController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $data = Order::where('flag', '=', '1')->get();
        
        return view('store.manageOrder')->with('orders', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {        
        return view('store.formOrder');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $input = Request::all();
        $order = new Order ();
        $order->order_no = $input ['orderNo'];
        $order->purpose = $input ['purpose'];
        $order->approvement = $input ['approvement'];
        $order->approved_date = DateUtils::getDBDateTimeFromStr($input ['approvedDate']);
        $order->order_by = $input ['orderBy'];  
        $order->order_date = DateUtils::getDBDateTimeFromStr($input ['orderDate']); 
        $order->received_by = $input ['receivedBy'];  
        $order->received_date = DateUtils::getDBDateTimeFromStr($input ['receivedDate']);  
        $order->checked_by = $input ['checkedBy'];  
        $order->checked_date = DateUtils::getDBDateTimeFromStr($input ['checkedDate']);
        $order->create_user = '1';
        $order->create_date = DateUtils::getDBDateTime();
        $order->update_user = '1';
        $order->update_date = DateUtils::getDBDateTime();
        $order->flag = '1';
        $order->save();
        
        // save details
        if (isset($input ['itemNo'])) {
            $items = $input ['itemNo'];
            $i = 0;
            foreach ($items as $item) {
                $detail = new OrderDetail();
                $detail->item_no = $item;
                $detail->description = $input ['description'][$i];
                $detail->amount = $input ['amount'][$i];
                $detail->unit_price = $input ['unitPrice'][$i];
                $detail->remark = $input ['remark'][$i];
                $detail->create_user = '1';
                $detail->create_date = DateUtils::getDBDateTime();
                $detail->update_user = '1';
                $detail->update_date = DateUtils::getDBDateTime();
                $detail->flag = '1';

                $details[] = $detail;
                $i++;
            }
            $order->orderDetail()->saveMany($details);
        }
        
        return redirect('viewManageOrder');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id        	
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id        	
     * @return Response
     */
    public function edit($id) {
        $data = Order::find($id);
        $orderDetails = OrderDetail::where('flag', '=', '1')
                ->where('order_id', '=', $id)
                ->get();
        
        return view('store.formEditOrder')->with('compact', compact('data', 'orderDetails'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id        	
     * @return Response
     */
    public function update($id) {
        $input = Request::all();
        $order = Order::find($id);
        $order->order_no = $input ['orderNo'];
        $order->purpose = $input ['purpose'];
        $order->approvement = $input ['approvement'];
        $order->approved_date = DateUtils::getDBDateTimeFromStr($input ['approvedDate']);
        $order->order_by = $input ['orderBy'];  
        $order->order_date = DateUtils::getDBDateTimeFromStr($input ['orderDate']); 
        $order->received_by = $input ['receivedBy'];  
        $order->received_date = DateUtils::getDBDateTimeFromStr($input ['receivedDate']);  
        $order->checked_by = $input ['checkedBy'];  
        $order->checked_date = DateUtils::getDBDateTimeFromStr($input ['checkedDate']);
        $order->update_user = '1';
        $order->update_date = DateUtils::getDBDateTime();
        $order->save();
        
        // save details
        if (isset($input ['itemNo'])) {
            $items = $input ['itemNo'];
            $i = 0;
            foreach ($items as $item) {
                $detail = new OrderDetail();
                $detail->item_no = $item;
                $detail->description = $input ['description'][$i];
                $detail->amount = $input ['amount'][$i];
                $detail->unit_price = $input ['unitPrice'][$i];
                $detail->remark = $input ['remark'][$i];
                $detail->create_user = '1';
                $detail->create_date = DateUtils::getDBDateTime();
                $detail->update_user = '1';
                $detail->update_date = DateUtils::getDBDateTime();
                $detail->flag = '1';

                $details[] = $detail;
                $i++;
            }
            $order->orderDetail()->saveMany($details);
        }
        
        return redirect('viewManageOrder');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id        	
     * @return Response
     */
    public function destroy($id) {
        Order::where('id', '=', $id)->update(['flag' => '0']);
        OrderDetail::where('order_id', '=', $id)->update(['flag' => '0']);
        
        return redirect('viewManageOrder');
    }

    public function destroyDetail($id) {
        OrderDetail::where('id', '=', $id)->update(['flag' => '0']);
    }
    
}
