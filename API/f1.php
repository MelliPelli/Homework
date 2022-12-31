<?php
if (@$_GET['kg']) {
    if (@$_GET['m']) {
        $bmi = round($_GET['kg'] / pow($_GET['m'], 2),2);
        $rep = "ok";
    }
    else {
        $rep = "height is missing";
    }
}else{
    $rep = "kg is missing";
}

if (!$_GET['kg'] && !$_GET['m']) {
    $rep = "there's missing height and weight";
}

echo json_encode(array("report "=>$rep,"result "=>@$bmi));
?>
