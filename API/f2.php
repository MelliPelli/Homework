<?php
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url = explode("/",(parse_url($url)["path"]));
$kg = floatval(@$url[3]);
$m = floatval(@$url[4]);

if ($kg) {
    if ($m) {
        $bmi = round($kg/pow($m,2),2);
        $rep = "ok";
    }
    else {
        $rep = "height is missing";
    }
}
else {
    $rep = "kg is missing";
}

if (!$kg && !$m) {
    $rep = "there's missing height and weight";
}

echo json_encode(array("report "=>$rep,"result "=>@$bmi));
?>
