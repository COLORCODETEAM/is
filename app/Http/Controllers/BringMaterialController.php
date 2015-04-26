<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Request;
use App\Material;
use App\BringMaterial;
use App\BringMaterialDetail;
use DateUtils;

class BringMaterialController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $bringMaterial = new BringMaterial ();
        $data = $bringMaterial->all()->toArray();
        
        return view('store.manageBringMaterial')->with('bringMaterials', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return view('store.formBringMaterial');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $input = Request::all();
        $bringMaterial = new BringMaterial ();
        $bringMaterial->bring_no = $input ['bringNo'];
        $bringMaterial->purpose = $input ['purpose'];
        $bringMaterial->description = $input ['description'];
        $bringMaterial->withdraw_person = $input ['withdrawPerson'];
        $bringMaterial->email = $input ['email'];
        $bringMaterial->approvement = $input ['approvement'];
        $bringMaterial->remark = $input ['remark'];
        $bringMaterial->create_user = '1';
        $bringMaterial->create_date = DateUtils::getDBDateTime();
        $bringMaterial->update_user = '1';
        $bringMaterial->update_date = DateUtils::getDBDateTime();
        $bringMaterial->save();
        return redirect('viewManageBringMaterial');
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
        $bringMaterial = BringMaterial::find($id);
        $data = $bringMaterial;
        return view('store.formEditBringMaterial')->with('bringMaterial', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id        	
     * @return Response
     */
    public function update($id) {
        $input = Request::all();
        $bringMaterial = BringMaterial::find($id);
        $bringMaterial->bring_no = $input ['bringNo'];
        $bringMaterial->purpose = $input ['purpose'];
        $bringMaterial->description = $input ['description'];
        $bringMaterial->withdraw_person = $input ['withdrawPerson'];
        $bringMaterial->email = $input ['email'];
        $bringMaterial->approvement = $input ['approvement'];
        $bringMaterial->remark = $input ['remark'];
        $bringMaterial->update_user = '1';
        $bringMaterial->update_date = DateUtils::getDBDateTime();
        $bringMaterial->save();
        return redirect('viewManageBringMaterial');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id        	
     * @return Response
     */
    public function destroy($id) {
        $bringMaterial = BringMaterial::find($id);
        $bringMaterial->delete();
        return redirect('viewManageBringMaterial');
    }

}
