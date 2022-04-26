<?php

header('Content-Type: application/json');
header('Acess-Control-Allow-Origin: *');

//require "connection.php";
global $connect;


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $post_data = file_get_contents('php://input', true);
//$jsondata = json_decode($post_data);
    
    $jsonobject = json_decode($post_data, true);

    $response['customerdetails'] = $jsonobject['customerdetails'];
    echo json_encode($response);

} else {

    $response['errorcode'] = "600";
    $response['status'] = "unfair";
    echo json_encode($response);
}


// this is response function which we can call where api returns data 
// function response($result)
// {
//     if(result){
//             $response['errorcode'] = "200";
//             $response['status'] = "success";
        
//         echo json_encode($response);
//     } else {
//         $response['errorcode'] = "400";
//         $response['status'] = "no record found";
//         echo json_encode($response);
//     }
// }