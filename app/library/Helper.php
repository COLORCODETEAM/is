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
use App\RunningNumber;

class Helper {

    //Authentication & Authorization
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

    public static function loginUserAvatar() {

        return asset('store/avatar/' . Auth::user()->avatar);
    }

    public static function canEditDocument($userId) {
        return Helper::checkDisabledElement(Helper::loginUser() == $userId ? false : true);
    }

    public static function canAssignDocument() {
        return Helper::checkDisabledElement(!Helper::isManager());
    }

    public static function canOpenAsssignedDocument($contactPerson) {
        return Helper::checkDisabledElement(!is_null($contactPerson) ? true : false);
    }

    public static function checkDisabledElement($flag) {
        return $flag ? 'disabled' : '';
    }

    //===================================================================================

    public static function add_prefix($length, $value) {
        return str_pad($value, $length, '0', STR_PAD_LEFT);
    }

    public static function get_running_number($documentType, $length) {
        RunningNumber::where('type', '=', $documentType)
                ->increment('number');
        $data = RunningNumber::where('type', '=', $documentType)
                ->first();
        return $documentNumber = Helper::add_prefix($length, $data->number);
    }

    public static function get_selected_user_list($users, $person) {
        $selected = 0;
        foreach ($users as &$tmp) {
            if ($person == $tmp['id']) {
                $tmp['selected'] = 'selected';
                $selected++;
            } else {
                $tmp['selected'] = '';
            }
        }

        if ($selected == 0) {
            $tmp['id'] = '0';
            $tmp['firstname'] = '';
            $tmp['lastname'] = '';
            $tmp['selected'] = 'selected';

            array_unshift($users, $tmp);
        }
        return $users;
    }

    public static function upload_file($file) {
        $destinationPath = base_path() . '/public/store/avatar/'; // upload path
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $fileName = DateTime::getTimestamp() . rand(111111, 999999) . '.' . $extension; // renameing image
        $file->move($destinationPath, $fileName); // uploading file to given path

        return $fileName;
    }

    public static function get_arr_priority() {
        return array("1" => "A little",
            "2" => "Some",
            "3" => "Normal",
            "4" => "High",
            "5" => "Highest");
    }

    public static function get_selected_room_list($rooms, $roomID) {
        foreach ($rooms as &$tmp) {
            if ($roomID == $tmp['id']) {
                $tmp['selected'] = 'selected';
            } else {
                $tmp['selected'] = '';
            }
        }

        return $rooms;
    }

}
