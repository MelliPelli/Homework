<html>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">Enter height(kg) and weight(m) like this(kg,m): <input type="text" name="bmi">
<input type="submit">
</form>
</body>
</html>
<?php
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url = explode("/",(parse_url($url)["path"]));
$bmi = (@$url[3]);

#date&time
$dt = getdate(date("U"));
$dt = "$dt[year]-$dt[mon]-$dt[mday] $dt[hours]:$dt[minutes]:$dt[seconds]";

if ($bmi != "bmi") {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rep = "don't know what to calculate";
        $bmi = null;
        echo json_encode(array("report"=>$rep,"result"=>$bmi));
        exit;
    }
}

if ($bmi == "bmi"){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bmi = explode(",",$_POST['bmi']);
        $jsonBMI = json_encode(array("bmi"=>$bmi, "dttm"=>$dt));
        if (empty($bmi)) {
            $rep = "BMI is empty";
            echo json_encode(array("report"=>$rep,"result"=>$bmi));
            exit;
        }else{
            if($bmi[0]<=20){
                $rep = "too low kg's";
                $bmi = null;
                echo json_encode(array("report"=>$rep,"result"=>$bmi));
                exit;
            }
            $bmi = round($bmi[0]/pow($bmi[1],2),2);
            $rep = "ok";
            echo json_encode(array("report"=>$rep,"result"=>$bmi));
            exit;
        }
    }
}else{
    $rep = "this isn't bmi";
    $bmi = null;
    echo json_encode(array("report"=>$rep,"result"=>$bmi));
    exit;
}
?>
