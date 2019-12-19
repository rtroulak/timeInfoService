<?php
/**
 * Created by PhpStorm.
 * User: r.troulakis
 * Date: 04/02/2019
 * Time: 4:33 PM
 */

require_once("timeInfoService.php");

$token = "";
if(isset($_GET["token"]) && $_GET['token']=='')
    $token = $_GET["token"];


/*
controls the RESTful services
URL mapping
*/
switch($token){

    case "":
        $customerRestHandler = new timeInfoRestHandler();
        $customerRestHandler->getInfo();
        break;
    case "1" :
        //404 - not found;
        $customerRestHandler = new timeInfoRestHandler();
        $customerRestHandler->getErrorMsg();
        break;
}