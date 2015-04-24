<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DateUtils
 *
 * @author dev
 */
class DateUtils {
    //put your code here
    static function getDate() {
        return date('d/m/Y');
    }
    
    static function getDateFromStr($date) {
        return date('d/m/Y', strtotime($date));
    }
    
    static function getDBDateTime() {
        return date('Y-m-d H:i:s');
    }
    
    static function getDBDateTimeFromStr($date) {
        return date('Y-m-d H:i:s', strtotime($date));
    }
    
    static function getTimeFromStr($time) {
        // TODO
        return date('H:i');
    }
    
    static function getSplitDate($date) {
        // TODO
        return date('d/m/Y');
    }
    
    static function getSplitTime($date) {
        // TODO
        return date('H:i');
    }
    
    static function getConcatDateTime($date, $time) {
        return date('Y-m-d H:i:s', strtotime($date. " " .$time));
    }
}
