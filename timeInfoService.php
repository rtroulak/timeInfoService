<?php
/**
 * Created by PhpStorm.
 * User: r.troulakis
 * Date: 04/02/2019
 * Time: 4:33 PM
 */
require_once("SimpleRest.php");
include "timeInfo.php";

class timeInfoRestHandler extends SimpleRest
{


    function getInfo(){


        $customer_info = new timeInfo();
        $customer_info->setTimeInfo();
        $rawData = $customer_info->getTimeInfo();


        if(empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'File with Logs Not Found!');
        } else {
            $statusCode = 200;
        }

        $requestContentType = "application/json";
        $this ->setHttpHeaders($requestContentType, $statusCode);

        $response1 = $this->encodeJson($rawData);
        $response = "[".$response1."]";

        echo $response;

    }

    function getErrorMsg(){
        $statusCode = 404;
        $rawData = array('error' => 'Invalid Token!');
        $requestContentType = "text/json";
        $this ->setHttpHeaders($requestContentType, $statusCode);
        $response = $this->encodeJson($rawData);
        echo $response;
    }

    public function encodeJson($responseData) {
        $jsonResponse = json_encode($responseData);
        return $jsonResponse;
    }



}