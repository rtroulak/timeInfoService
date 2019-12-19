<?php
/**
 * Created by PhpStorm.
 * User: r.troulakis
 * Date: 04/02/2019
 * Time: 4:33 PM
 */
require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');

class timeInfo
{
    var $date='';
    var $clock = '';
    var $timestamp='';
    var $zone='';
    var $day = '';
    var $month = '';
    var $year = '';

    /**
     * @param $email
     */
    function _constructor()
    {
        $this->setData();
    }




    /**
     * @param $date
     */
    function setDate($date){
        $this->date = $date;
    }

    /**
     * @return string
     */
    function getDate(){
        return $this->date;
    }

    /**
     * @param $date
     */
    function setClock($clock){
        $this->clock = $clock;
    }

    /**
     * @return string
     */
    function getClock(){
        return $this->clock;
    }

    /**
     * @param $timestamp
     */
    function setTimestamp($timestamp){
        $this->timestamp = $timestamp;
    }

    /**
     * @return string
     */
    function getTimestamp(){
        return $this->timestamp;
    }

    /**
     * @param $zone
     */
    function setZone($zone){
        $this->zone = $zone;
    }

    /**
     * @return string
     */
    function getZone(){
        return $this->zone;
    }

    /**
     * @param $day
     */
    function setDay($day){
        $this->day = $day;
    }

    /**
     * @return string
     */
    function getDay(){
        return $this->day;
    }

    /**
     * @param $month
     */
    function setMonth($month){
        $this->month = $month;
    }

    /**
     * @return string
     */
    function getMonth(){
        return $this->month;
    }


    /**
     * @param $year
     */
    function setYear($year){
        $this->year = $year;
    }

    /**
     * @return string
     */
    function getYear(){
        return $this->year;
    }



    /**
     */
    function setTimeInfo(){

        $date= date("Y-m-d h:i:sa", mktime());
        $clock = date("h:i:sa", mktime());
        $timestamp= mktime();
        $zone= date_default_timezone_get();;
        $day = date("d", mktime());
        $month = date("m", mktime());
        $year = date("Y", mktime());

        $this->setClock($clock);
        $this->setDate($date);
        $this->setDay($day);
        $this->setMonth($month);
        $this->setYear($year);
        $this->setZone($zone);
        $this->setTimestamp($timestamp);

    }

    /**
     * @return array
     */
    function getTimeInfo(){
        $resp = array("date" => $this->getDate(), "clock" => $this->getClock(), "timestamp" => $this->getTimestamp(), "zone"=> $this->getZone(),"month"=>$this->getMonth(),"day"=>$this->getDay(),"year"=>$this->getYear());
        return $resp;
    }

    /**
     *
     */
    function setData(){
        $this->setTimeInfo();
    }

}