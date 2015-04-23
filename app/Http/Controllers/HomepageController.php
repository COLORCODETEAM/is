<?php

namespace App\Http\Controllers;

class HomepageController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | HomePage Controller
      |--------------------------------------------------------------------------
      |
      |
      |
      |
      |
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index() {
        return view('store.app');
    }

}
