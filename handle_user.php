<?php


if(isset($_GET['submit'])){

    $result =  calc($_GET['num1'] , $_GET['num2']  , $_GET['op']);
    header("location:req.php?result=$result");


}else{
    header("location: req.php");
}


function calc(int|float $x , int|float $y , string $op) :int|float{
    switch($op){
        case 'add':
            return $x + $y;
        case 'sub':
            return $x - $y;
        case 'div':
            return $x / $y;
        case 'multi':
            return $x * $y;
        default:
            'operation is invalid';
    }


}




?>