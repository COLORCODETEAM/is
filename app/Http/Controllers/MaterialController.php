<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Request;
use App\Stock;
use App\Material;
use App\MaterialType;
use App\UserStock;
use Illuminate\Support\Facades\DB;
use DateUtils;
use Helper;

class MaterialController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $data = Material::whereIn('stock_id', Helper::loginUserStocks())
                ->where('flag', '=', '1')
                ->orderBy('create_date', 'desc')->get();    
        return view('store.manageMaterial')->with('materials', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $userStocks = UserStock::where('users_id', '=', Helper::loginUser())
                ->get(array('stock_id'))
                ->toArray();
        $stocks = Stock::whereIn('id', $userStocks)
                ->where('flag', '=', '1')->get();
        $materialTypes = MaterialType::all()->toArray();
        
        return view('store.formMaterial')->with('compact', compact('stocks', 'materialTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $input = Request::all();
        $material = new Material ();
        $material->stock_id = $input ['stockId'];
        $material->material_type_id = $input ['materialTypeId'];
        $material->material_no = $input ['materialNo'];
        $material->brand = $input ['brand'];
        $material->model = $input ['model'];
        $material->description = $input ['description'];
        $material->serial_no = $input ['serialNo'];
        $material->amount = $input ['amount'];
        $material->create_user = Helper::loginUser();
        $material->create_date = DateUtils::getDBDateTime();
        $material->update_user = Helper::loginUser();
        $material->update_date = DateUtils::getDBDateTime();
        $material->flag = '1';
        $material->save();
        return redirect('viewManageMaterial');
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
        $data = Material::find($id);
        $userStocks = UserStock::where('users_id', '=', Helper::loginUser())
                ->get(array('stock_id'))
                ->toArray();
        $stocks = Stock::whereIn('id', $userStocks)
                ->where('flag', '=', '1')->get();
        $materialTypes = MaterialType::where('flag', '=', '1')->get();
        
        foreach ( $stocks as &$tmp ) {
            if ($data['stock_id']==$tmp['id']) {
                $tmp['selected'] = 'selected';
            } else {
                $tmp['selected'] = '';
            }
        }
        
        foreach ( $materialTypes as &$tmp ) {
            if ($data['material_type_id']==$tmp['id']) {
                $tmp['selected'] = 'selected';
            } else {
                $tmp['selected'] = '';
            }
        }
        
        return view('store.formEditMaterial')->with('compact', compact('data', 'stocks', 'materialTypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id        	
     * @return Response
     */
    public function update($id) {
        $input = Request::all();
        $material = Material::find($id);
        $material->stock_id = $input ['stockId'];
        $material->material_type_id = $input ['materialTypeId'];
        $material->material_no = $input ['materialNo'];
        $material->brand = $input ['brand'];
        $material->model = $input ['model'];
        $material->description = $input ['description'];
        $material->serial_no = $input ['serialNo'];
        $material->amount = $input ['amount'];
        $material->update_user = Helper::loginUser();
        $material->update_date = DateUtils::getDBDateTime();
        $material->save();
        return redirect('viewManageMaterial');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id        	
     * @return Response
     */
    public function destroy($id) {
        Material::where('id', '=', $id)->update(['flag' => '0']);
        
        return redirect('viewManageMaterial');
    }

    public function listAvailableMaterialItems() {
        $materials = DB::select('SELECT * '
                . 'FROM view_availableMaterial '
                . 'WHERE stock_id IN ('
                . '     SELECT stock_id'
                . '     FROM user_stock'
                . '     WHERE users_id=' .Helper::loginUser(). ')'
                . 'ORDER BY create_date DESC');
        $rows = '';
        
        foreach ($materials as $material) {
            $row['id'] = $material->id;
            $row['stockName'] = $material->stock_name;
            $row['materialNo'] = $material->material_no;
            $row['brand'] = $material->brand;
            $row['model'] = $material->model;
            $row['description'] = $material->description;
            $row['serialNo'] = $material->serial_no;
            $row['amount'] = $material->amount;
            
            $rows[] = $row;
        }
        
        return json_encode($rows);
    }
    
    public function materialInformation($id) {
        $material = Material::find($id);   
        
        $row['stock_name'] = $material->stock->name;
        $row['id'] = $material->id;
        $row['material_type_id'] = $material->material_type_id;
        $row['material_no'] = $material->material_no;
        $row['brand'] = $material->brand;
        $row['model'] = $material->model;
        $row['description'] = $material->description;
        $row['serial_no'] = $material->serial_no;
        $row['amount'] = $material->amount;
        $row['create_user'] = $material->create_user;
        $row['create_date'] = $material->create_date;
        $row['update_user'] = $material->update_user;
        $row['update_date'] = $material->update_date;
        $row['flag'] = $material->flag;
               
        $rows[] = $row;
        
        return json_encode($rows);
    }
}
