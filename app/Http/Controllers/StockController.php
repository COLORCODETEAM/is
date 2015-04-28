<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Request;
use App\Stock;
use DateUtils;

class StockController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $data = Stock::where('flag', '=', '1')->get();
        
        return view('store.manageStock')->with('stocks', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return view('store.formStock');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $input = Request::all();
        $stock = new Stock ();
        $stock->stock_no = $input ['stockNo'];
        $stock->name = $input ['stockName'];
        $stock->description = $input ['description'];
        $stock->create_user = '1';
        $stock->create_date = DateUtils::getDBDateTime();
        $stock->update_user = '1';
        $stock->update_date = DateUtils::getDBDateTime();
        $stock->flag = '1';
        $stock->save();
        return redirect('viewManageStock');
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
        $data = Stock::find($id);
        
        return view('store.formEditStock')->with('stock', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id        	
     * @return Response
     */
    public function update($id) {
        $input = Request::all();
        $stock = Stock::find($id);
        $stock->stock_no = $input ['stockNo'];
        $stock->name = $input ['stockName'];
        $stock->description = $input ['description'];
        $stock->update_user = '1';
        $stock->update_date = DateUtils::getDBDateTime();
        $stock->save();
        return redirect('viewManageStock');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id        	
     * @return Response
     */
    public function destroy($id) {
        Stock::where('id', '=', $id)->update(['flag' => '0']);
        
        return redirect('viewManageStock');
    }

}
