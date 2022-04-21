<?php
include("businessLogic/logic.php");

$param = "";
$function = "";

isset($_GET["function"]) ? $function = $_GET["function"] : false;
isset($_GET["param"]) ? $param = $_GET["param"] : false;

//echo (json_encode($param[0]));

$logic = new Logic();
$result = $logic->handleRequest($function, $param);      // führe mit der function die wir von javascript mit ajax call fordern, einen handleRequest auf (LOGIK)
// schaut dann einfach welche FUnktion wir ausführen müssen von der dataHandler Klasse

if ($result == null) {
    response("GET", 400, null);
} else {
    response("GET", 200, $result);
}

function response($function, $httpStatus, $data)
{
    header('Content-type: application/json');
    switch ($function) {
        case "GET":
            http_response_code($httpStatus);
            echo (json_encode($data));
            break;
        default:
            http_response_code(405);
            echo ("Method not supported yet!");
    }
}
