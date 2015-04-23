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
        $material = new Material ();
        $data = $material->all()->toArray();
        // var_dump($data);
        return view('store.manageMaterial')->with('materials', $data);
        // return "index";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $stock = new Stock();
        $data = $stock->all()->toArray();
        
        return view('store.formMaterial')->with('stocks', $data);
        // return "create";
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
        $material = Material::find($id);
        $data = $material;
        
        $stock = new Stock();
        $stocks = $stock->all()->toArray();
        
        foreach ( $stocks as &$stock ) {
            if ($data['stock_id']==$stock['id']) {
                $stock['selected'] = 'selected';
            } else {
                $stock['selected'] = '';
            }
        }
        
        return view('store.formEditMaterial')->with('compact', compact($data, $stocks));
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
        $material = Material::find($id);
        $material->delete();
        return redirect('viewManageMaterial');
    }

}
