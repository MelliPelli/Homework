<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>IP Adresy</title>
<link href="style.css" rel="stylesheet">
</head>

<body>


<h1>Počítání IP Adres</h1>
<p>Vložte IP adresu</p>

<form method="post" action="php.php">

<input type="number" class="input" placeholder="192" id="k1" name="o1" min="0" max="255" value="" required="">
<input type="number" class="input" placeholder="168" id="k2" name="o2" min="0" max="255" value="" required="">
<input type="number" class="input" placeholder="1" id="k3" name="o3" min="0" max="255" value="" required="">
<input type="number" class="input" placeholder="0" id="k4" name="o4" min="0" max="255" value="" required="">
/
<input type="number" id="prefix" placeholder="24" class="input" name="prefix" min="0" max="32" value="" required="">
<input type="submit" name = "spocitej" value = "Vypočítej">

</form>


        <?php
        // ip adresa na binár //
        
        $k1 = filter_input(INPUT_POST, "o1");
        $k2 = filter_input(INPUT_POST, "o2");
        $k3 = filter_input(INPUT_POST, "o3");
        $k4 = filter_input(INPUT_POST, "o4");
        $prefix = filter_input(INPUT_POST, "prefix");
        $bin = str_pad(decbin($k1),8,"0", STR_PAD_LEFT);
        $bin2 = str_pad(decbin($k2),8,"0", STR_PAD_LEFT);
        $bin3 = str_pad(decbin($k3),8,"0", STR_PAD_LEFT);
        $bin4 = str_pad(decbin($k4),8,"0", STR_PAD_LEFT);
        echo "<br>";
        echo "<b>decimal:</b>";
        echo $k1;
        echo ".";
        echo $k2;
        echo ".";
        echo $k3;
        echo ".";   
        echo $k4;
        echo "  /";
        echo $prefix;
        echo "<br>";
        echo "<b>binár:</b>";
        echo $bin;
        echo ".";
        echo $bin2;
        echo ".";
        echo $bin3;
        echo ".";
        echo $bin4;
        
        //Maska v decimalu//
        $maska1;

switch($prefix){
case 1:
$maska1 = "128.0.0.0";
break;
case 2:
$maska1 = "192.0.0.0";
break;
case 3:
$maska1 = "224.0.0.0";
break;
case 4:
$maska1 = "240.0.0.0";
break;
case 5:
$maska1 = "248.0.0.0";
break;
case 6:
$maska1 = "252.0.0.0";
break;
case 7:
$maska1 = "254.0.0.0";
break;
case 8:
$maska1 = "255.0.0.0";
break;
case 9:
$maska1 = "255.128.0.0";
break;
case 10:
$maska1 = "255.192.0.0";
break;
case 11:
$maska1 = "255.224.0.0";
break;
case 12:
$maska1 = "255.240.0.0";
break;
case 13:
$maska1 = "255.248.0.0";
break;
case 14:
$maska1 = "255.252.0.0";
break;
case 15:
$maska1 = "255.254.0.0";
break;
case 16:
$maska1 = "255.255.0.0";
break;
case 17:
$maska1 = "255.255.128.0";
break;
case 18:
$maska1 = "255.255.192.0";
break;
case 19:
$maska1 = "255.255.224.0";
break;
case 20:
$maska1 = "255.255.240.0";
break;
case 21:
$maska1 = "255.255.248.0";
break;
case 22:
$maska1 = "255.255.252.0";
break;
case 23:
$maska1 = "255.255.254.0";
break;
case 24:
$maska1 = "255.255.255.0";
break;
case 25:
$maska1 = "255.255.255.128";
break;
case 26:
$maska1 = "255.255.255.192";
break;
case 27:
$maska1 = "255.255.255.224";
break;
case 28:
$maska1 = "255.255.255.240";
break;
case 29:
$maska1 = "255.255.255.252";
break;
case 30:
$maska1 = "255.255.255.254";
break;
case 31:
$maska1 = "255.255.255.255";
break;
case 32:
$maska1 = "255.255.255.11111111";
break;
}
echo "<br><big><big>Maska:</big></big>";
echo "<br>";
echo "<b>decimal:</b>";
echo $maska1;

//Maska v binaru//

    $maska;
        switch($prefix){
            case 1:
                $maska = "10000000.00000000.00000000.00000000";
            break;
            case 2:
                $maska = "11000000.00000000.00000000.00000000";
            break;
            case 3:
                $maska = "11100000.00000000.00000000.00000000";
            break;
            case 4:
                $maska = "11110000.00000000.00000000.00000000";
            break;
            case 5:
                $maska = "11111000.00000000.00000000.00000000";
            break;
            case 6:
                $maska = "11111100.00000000.00000000.00000000";
            break;
            case 7:
                $maska = "11111110.00000000.00000000.00000000";
            break;
            case 8:
                $maska = "11111111.00000000.00000000.00000000";
            break;
            case 9:
                $maska = "11111111.10000000.00000000.00000000";
            break;
            case 10:
                $maska = "11111111.11000000.00000000.00000000";
            break;
            case 11:
                $maska = "11111111.11100000.00000000.00000000";
            break;
            case 12:
                $maska = "11111111.11110000.00000000.00000000";
            break;
            case 13:
                $maska = "11111111.11111000.00000000.00000000";
            break;
            case 14:
                $maska = "11111111.11111100.00000000.00000000";
            break;
            case 15:
                $maska = "11111111.11111110.00000000.00000000";
            break;
            case 16:
                $maska = "11111111.11111111.00000000.00000000";
            break;
            case 17:
                $maska = "11111111.11111111.10000000.00000000";
            break;
            case 18:
                $maska = "11111111.11111111.11000000.00000000";
            break;
            case 19:
                $maska = "11111111.11111111.11100000.00000000";
            break;
            case 20:
                $maska = "11111111.11111111.11110000.00000000";
            break;
            case 21:
                $maska = "11111111.11111111.11111000.00000000";
            break;
            case 22:
                $maska = "11111111.11111111.11111100.00000000";
            break;
            case 23:
                $maska = "11111111.11111111.11111110.00000000";
            break;
            case 24:
                $maska = "11111111.11111111.11111111.00000000";
            break;
            case 25:
                $maska = "11111111.11111111.11111111.10000000";
            break;
            case 26:
                $maska = "11111111.11111111.11111111.11000000";
            break;
            case 27:
                $maska = "11111111.11111111.11111111.11100000";
            break;
            case 28:
                $maska = "11111111.11111111.11111111.11110000";
            break;
            case 29:
                $maska = "11111111.11111111.11111111.11111000";
            break;
            case 30:
                $maska = "11111111.11111111.11111111.11111100";
            break;
            case 31:
                $maska = "11111111.11111111.11111111.11111110";
            break;
            case 32:
                $maska = "11111111.11111111.11111111.11111111";
            break;
        }
       
        echo "<b>binár:</b>";
        echo $maska;

        //Host v decimalu//
   $host;
    switch($prefix){
        case 24:
            $host = "254";
        break;
        case 25:
            $host = "126";
        break;
        case 26:
            $host = "62";
        break;
        case 27:
            $host = "30";
        break;
        case 28:
            $host = "14";
        break;
        case 29:
            $host = "6";
        break;
        case 30:
            $host = "2";
        break;
        case 31:
            $host = "0";
        break;
        case 32:
            $host = "0";
        break;
    } 

    //Host v binaru//
    $host1;
    switch($prefix){
        case 24:
            $host1 = "11111110";
        break;
        case 25:
            $host1 = "01111110";
        break;
        case 26:
            $host1 = "00111110";
        break;
        case 27:
            $host1 = "00011110";
        break;
        case 28:
            $host1 = "00001110";
        break;
        case 29:
            $host1 = "00000110";
        break;
        case 30:
            $host1 = "00000100";
        break;
        case 31:
            $host1 = "00000000";
        break;
        case 32:
            $host1 = "00000000";
        break;
    }

    //Broadcast v binaru//
    $host3;
    switch($prefix){
        case 24:
            $host3 = "11111111";
        break;
        case 25:
            $host3 = "01111111";
        break;
        case 26:
            $host3 = "00111111";
        break;
        case 27:
            $host3 = "00011110";
        break;
        case 28:
            $host3 = "00001111";
        break;
        case 29:
            $host3 = "00000111";
        break;
        case 30:
            $host3 = "00000011";
        break;
        case 31:
            $host3 = "00000010";
        break;
        case 32:
            $host3 = "00000000";
        break;
    }

    echo "<br>";
    echo "<big><big>First host:</big></big>";
    echo "<br>";
    echo "<b>decimal:</b>";
    echo $k1;
    echo ".";
    echo $k2;
    echo ".";
    echo $k3;
    echo ".";   
    echo "001";
    echo "<br>";
    echo "<b>binár:</b>";
        echo $bin;
        echo ".";
        echo $bin2;
        echo ".";
        echo $bin3;
        echo ".";
        echo "00000001";
        

    echo "<br>";
    echo "<big><big>Last host:</big></big>";
    
    echo "<br>";
    echo "<b>decimal:</b>";
    echo $k1;
    echo ".";
    echo $k2;
    echo ".";
    echo $k3;
    echo ".";   
    echo $host;
    echo "<br>";
    echo "<b>binár:</b>";
        echo $bin;
        echo ".";
        echo $bin2;
        echo ".";
        echo $bin3;
        echo ".";
        echo $host1;


    echo "<br>";
    echo "<big><big>Broadcast:</big></big>";
    echo "<br>";
    echo "<b>decimal:</b>";
    echo $k1;
    echo ".";
    echo $k2;
    echo ".";
    echo $k3;
    echo ".";   
    echo $host+1;
    echo "<br>";
    echo "<b>binár:</b>";
        echo $bin;
        echo ".";
        echo $bin2;
        echo ".";
        echo $bin3;
        echo ".";
        echo $host3; 
    
    echo "<br>";
    echo "<big><big>Host:</big></big>";
    echo $host;



    $maska3;

switch($prefix){
case 1:
case 24:
    $maska3 = "255.255.255.128";
    break;
    case 25:
    $maska3 = "255.255.255.192";
    break;
    case 26:
    $maska3 = "255.255.255.224";
    break;
    case 27:
    $maska3 = "255.255.255.240";
    break;
    case 28:
    $maska3 = "255.255.255.248";
    break;
    case 29:
    $maska3 = "255.255.255.252";
    break;
    case 30:
    $maska3 = "255.255.255.252";
    break;
    case 31:
    $maska3 = "255.255.254.";
    break;
    case 32:
    $maska3 = "255.255.255.255";
    break;
    }

echo "<h2>1.podsíť </h2>";

echo "<b>maska </b>";
echo "<br>";
echo "$maska3";
echo "<br>";



echo "<b>first host </b>";
echo "<br>";
echo $d1;
echo ".";
echo $d2;
echo ".";
echo $d3;
echo ".";   
echo "001";
echo "<br>";


$lasthost;
switch($prefix){
    case 1:
    case 24:
        $lasthost = "$k1.$k2.$k3.126";
        break;
        case 25:
        $lasthost = "$k1.$k2.$k3.062";
        break;
        case 26:
        $lasthost = "$k1.$k2.$k3.030";
        break;
        case 27:
        $lasthost = "$k1.$k2.$k3.014";
        break;
        case 28:
        $lasthost = "$k1.$k2.$k3.006";
        break;
        case 29:
        $lasthost = "$k1.$k2.$k3.002";
        break;
        case 30:
        $lasthost = "nelze vytvořit";
        break;
        case 31:
        $lasthost = "nelze vytvořit";
        break;
        case 32:
        $lasthost = "nelze vytvořit";
        break;
        }
    
        echo "<b>Last host  </b>";
        echo "<br>";
        echo "$lasthost";
      
        
        $broadcast;
        switch($prefix){
            case 1:
            case 24:
                $broadcast = "$k1.$k2.$k3.127";
                break;
                case 25:
                $broadcast = "$k1.$k2.$k3.063";
                break;
                case 26:
                $broadcast = "$k1.$k2.$k3.031";
                break;
                case 27:
                $broadcast = "$k1.$k2.$k3.015";
                break;
                case 28:
                $broadcast = "$k1.$k2.$k3.007";
                break;
                case 29:
                $broadcast = "$k1.$k2.$k3.003";
                break;
                case 30:
                $broadcast = "nelze vytvořit";
                break;
                case 31:
                $broadcast = "nelze vytvořit";
                break;
                case 32:
                $broadcast = "nelze vytvořit";
                break;
                }

                echo "<br>";
                echo "<b>broadcast  </b>";
                echo "<br>";
                echo "$broadcast";
              
                $host4;
                switch($prefix){
                    case 1:
                    case 24:
                        $host4 = "126";
                        break;
                        case 25:
                            $host4 = "62";
                        break;
                        case 26:
                            $host4 = "30";
                        break;
                        case 27:
                            $host4 = "14";
                        break;
                        case 28:
                            $host4 = "6";
                        break;
                        case 29:
                            $host4 = "2";
                        break;
                        case 30:
                            $host4 = "nelze vytvořit";
                        break;
                        case 31:
                            $host4 = "nelze vytvořit";
                        break;
                        case 32:
                            $host4 = "nelze vytvořit";
                        break;
                        }

                        echo "<br>";
                        echo "<b>host  </b>";
                        echo "<br>";
                        echo "$host4";




                        $maska4;

switch($prefix){
case 1:
case 24:
    $maska4 = "255.255.255.128";
    break;
    case 25:
    $maska4 = "255.255.255.192";
    break;
    case 26:
    $maska4 = "255.255.255.224";
    break;
    case 27:
    $maska4 = "255.255.255.240";
    break;
    case 28:
    $maska4 = "255.255.255.248";
    break;
    case 29:
    $maska4 = "255.255.255.252";
    break;
    case 30:
    $maska4 = "nelze vytvořit";
    break;
    case 31:
    $maska4 = "nelze vytvořit";
    break;
    case 32:
    $maska4 = "nelze vytvořit";
    break;
    }

echo "<h2>2.podsíť </h2>";

echo "<b>maska </b>";
echo "<br>";
echo "$maska4";
echo "<br>";


$firsthost1;
switch($prefix){
    case 1:
    case 24:
        $firsthost1 = "$k1.$k2.$k3.129";
        break;
        case 25:
            $firsthost1 = "$k1.$k2.$k3.065";
        break;
        case 26:
            $firsthost1 = "$k1.$k2.$k3.033";
        break;
        case 27:
            $firsthost1 = "$k1.$k2.$k3.017";
        break;
        case 28:
            $firsthost1 = "$k1.$k2.$k3.009";
        break;
        case 29:
            $firsthost1 = "$k1.$k2.$k3.005";
        break;
        case 30:
            $firsthost1 = "nelze vytvořit";
        break;
        case 31:
            $firsthost1 = "nelze vytvořit";
        break;
        case 32:
            $firsthost1 = "nelze vytvořit";
        break;
        }

        echo "<b>first host </b>";
        echo "<br>";
        echo "$firsthost1";
        echo "<br>";

$lasthost1;
switch($prefix){
    case 1:
    case 24:
        $lasthost1 = "$k1.$k2.$k3.254";
        break;
        case 25:
        $lasthost1 = "$k1.$k2.$k3.126";
        break;
        case 26:
        $lasthost1 = "$k1.$k2.$k3.062";
        break;
        case 27:
        $lasthost1 = "$k1.$k2.$k3.030";
        break;
        case 28:
        $lasthost1 = "$k1.$k2.$k3.014";
        break;
        case 29:
        $lasthost1 = "$k1.$k2.$k3.006";
        break;
        case 30:
        $lasthost1 = "nelze vytvořit";
        break;
        case 31:
        $lasthost1 = "nelze vytvořit";
        break;
        case 32:
        $lasthost1 = "nelze vytvořit";
        break;
        }
    
        echo "<b>Last host  </b>";
        echo "<br>";
        echo "$lasthost1";
      
        
        $broadcast1;
        switch($prefix){
            case 1:
            case 24:
                $broadcast1 = "$k1.$k2.$k3.255";
                break;
                case 25:
                $broadcast1 = "$k1.$k2.$k3.127";
                break;
                case 26:
                $broadcast1 = "$k1.$k2.$k3.063";
                break;
                case 27:
                $broadcast1 = "$k1.$k2.$k3.031";
                break;
                case 28:
                $broadcast1 = "$k1.$k2.$k3.015";
                break;
                case 29:
                $broadcast1 = "$k1.$k2.$k3.007";
                break;
                case 30:
                $broadcast1 = "nelze vytvořit";
                break;
                case 31:
                $broadcast1 = "nelze vytvořit";
                break;
                case 32:
                $broadcast1 = "nelze vytvořit";
                break;
                }

                echo "<br>";
                echo "<b>broadcast  </b>";
                echo "<br>";
                echo "$broadcast1";
              
                $host5;
                switch($prefix){
                    case 1:
                    case 24:
                        $host5 = "126";
                        break;
                        case 25:
                            $host5 = "62";
                        break;
                        case 26:
                            $host5 = "30";
                        break;
                        case 27:
                            $host5 = "14";
                        break;
                        case 28:
                            $host5 = "6";
                        break;
                        case 29:
                            $host5 = "2";
                        break;
                        case 30:
                            $host5 = "nelze vytvořit";
                        break;
                        case 31:
                            $host5 = "nelze vytvořit";
                        break;
                        case 32:
                            $host5 = "nelze vytvořit";
                        break;
                        }

                        echo "<br>";
                        echo "<b>host  </b>";
                        echo "<br>";
                        echo "$host5";

        ?>


</body>
</html>
