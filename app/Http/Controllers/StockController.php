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
        $stock = new Stock ();
        $data = $stock->all()->toArray();
        // var_dump($data);
        return view('store.manageStock')->with('stocks', $data);
        // return "index";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return view('store.formStock');
        // return "create";
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
        $stock = Stock::find($id);
        $data = $stock;
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
        $stock = Stock::find($id);
        $stock->delete();
        return redirect('viewManageStock');
    }

}
