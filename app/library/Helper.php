<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Helper
 *
 * @author dev
 */
use App\UserStock;

class Helper {

    //put your code here
    public static function isAdmin() {
        $fg = false;
        if (Auth::check()) {
            if (Auth::user()->userRole->name == 'admin') {
                $fg = true;
            }
        }
        return $fg;
    }
    
    public static function isManager() {
        $fg = false;
        if (Auth::check()) {
            if (Auth::user()->userRole->name == 'manager') {
                $fg = true;
            }
        }
        return $fg;
    }

    public static function isSupport() {
        $fg = false;
        if (Auth::check()) {
            if (Auth::user()->userRole->name == 'support') {
                $fg = true;
            }
        }
        return $fg;
    }

    public static function isUser() {
        $fg = false;
        if (Auth::check()) {
            if (Auth::user()->userRole->name == 'user') {
                $fg = true;
            }
        }
        return $fg;
    }

    public static function loginUser() {
        $id = 0;
        if (Auth::check()) {
            $id = Auth::user()->id;
        }
        return $id;
    }
    
    public static function loginUserStocks() {
        $stocks = '';
        if (Auth::check()) {
            $stocks = UserStock::where('users_id', '=', Helper::loginUser())
                    ->get(array('stock_id'))
                    ->toArray();
        }
        return $stocks;
    }
}
