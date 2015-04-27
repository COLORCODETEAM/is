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
        return date('d/m/Y', strtotime(str_replace('/', '-', $date)));
    }
    
    static function getTimeFromStr($date) {
        return date('h:i A', strtotime(str_replace('/', '-', $date)));
    }
    
    static function getDBDateTime() {
        return date('Y-m-d H:i');
    }
    
    static function getDBDateTimeFromStr($date) {
        return date('Y-m-d H:i', strtotime(str_replace('/', '-', $date)));
        
    }
    
    static function getConcatDBDateTime($date, $time) {
        return date('Y-m-d H:i', strtotime(str_replace('/', '-', $date. " " .$time)));
    }
}
