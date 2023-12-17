<?php
$s1=$_POST["t1"];
$s2=$_POST["t2"];
$s3=$_POST["t3"];
$ch=$_POST["r1"];
switch($ch)
    {
        case '1':
        if(preg_match("/^$s2/",$s1))//if(preg_match("/^$s2/", $s1))
        echo("<br> Present String At 1st Position : ".$s2);
        else
        echo("<br> Not Present At 1 st Position :".$s2);
        break;

        case '2':
            $s=explode(' ',$s1);
            print_r($s);
            break;
        case '3':
            $d = preg_replace("/$s2/", $s3, $s1);
            print_r($d);    
    }

?>