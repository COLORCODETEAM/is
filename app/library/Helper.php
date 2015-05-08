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
//            if (Auth::check())
//            {
//                $user = User::find(Auth::user()->id);
//                if ($user->userRole()->name == 'It-manager') {
//                    $fg = true;
//                }
//            }
            return false;
        }
        
        public function isSupport() {
            
            return true;
        }
        
        public function isUser() {
            
            return true;
        }
}
