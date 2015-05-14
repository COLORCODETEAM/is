<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Request;
use App\User;
use App\Stock;
use App\UserStock;
use DateUtils;
use Helper;
use Illuminate\Support\Facades\DB;

class UserStockController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $data = UserStock::where('flag', '=', '1')->get();
        return view('store.manageUserStock')->with('userStocks', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $users = DB::select('SELECT * FROM view_availableUsers');
        
        return view('store.formUserStock')->with('users', $users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $input = Request::all();
        $userStock = new UserStock ();
        $userStock->stock_id = $input ['stockId'];
        $userStock->user_id = $input ['userId'];
        $userStock->device_no = $input ['name'];
        $userStock->description = $input ['description'];
        $userStock->flag = '1';
        $userStock->save();
        return redirect('viewManageUserStock');
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
        $data = UserStock::find($id);
        
        return view('store.formEditUserStock')->with('compact', compact('data', 'stocks', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id        	
     * @return Response
     */
    public function update($id) {
        $input = Request::all();
        $userStock = Device::find($id);
        $userStock->stock_id = $input ['stockId'];
        $userStock->user_id = $input ['userId'];
        $userStock->device_no = $input ['name'];
        $userStock->description = $input ['description'];
        $userStock->flag = '1';
        $userStock->save();
        
        return redirect('viewManageUserStock');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id        	
     * @return Response
     */
    public function destroy($id) {
        UserStock::where('id', '=', $id)->update(['flag' => '0']);

        return redirect('viewManageUserStock');
    }

    public function getAvailableStock($id) {
        $stocks = DB::select('SELECT * FROM view_availableStock WHERE user_id='+$id);
        $rows = '';

        foreach ($stocks as $stock) {
            $row['id'] = $stock->id;
            $row['stockNo'] = $stock->stock_no;
            $row['stockName'] = $stock->stock_name;

            $rows[] = $row;
        }

        return json_encode($rows);
    }
}
