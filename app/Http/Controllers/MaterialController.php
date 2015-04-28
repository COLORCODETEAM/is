<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Request;
use App\Stock;
use App\Material;

class MaterialController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $data = Material::where('flag', '=', '1')->get();
        
        return view('store.manageMaterial')->with('materials', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $data = Stock::where('flag', '=', '1')->get();
        
        return view('store.formMaterial')->with('stocks', $data);
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
        $material->material_no = $input ['materialNo'];
        $material->brand = $input ['brand'];
        $material->model = $input ['model'];
        $material->description = $input ['description'];
        $material->amount = $input ['amount'];
        $material->create_user = '1';
        $material->create_date = DateUtils::getDBDateTime();
        $material->update_user = '1';
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
        $stocks = Stock::where('flag', '=', '1')->get();
        
        foreach ( $stocks as &$tmp ) {
            if ($data['stock_id']==$tmp['id']) {
                $tmp['selected'] = 'selected';
            } else {
                $tmp['selected'] = '';
            }
        }
                            
        return view('store.formEditMaterial')->with('compact', compact('data', 'stocks'));
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
        $material->material_no = $input ['materialNo'];
        $material->brand = $input ['brand'];
        $material->model = $input ['model'];
        $material->description = $input ['description'];
        $material->amount = $input ['amount'];
        $material->update_user = '1';
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

}
