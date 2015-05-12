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
class Helper {

    //put your code here
    public static function isManager() {
        $fg = false;
        if (Auth::check()) {
            if (Auth::user()->userRole->name == 'It-manager') {
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

}
