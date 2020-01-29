<?php
session_start();

require ('../Firembezz.php');

if (isset($_POST["submit"])) {

$userID ="amosmurage56";
$device = $_POST["device"];
$brand = $_POST["brand"];
$model = $_POST["model"];
$number = $_POST["number"];
$problem = $_POST["problem"];
$status="1";
$time=time();

$instance = new Firembezz();

if($instance->insert([
        $_SESSION['uid']=> array(
        'device'=>$device,
        'brand'=>$brand,
        'deviceModel'=>$model,
        'client_Number'=>$number,
        'problem'=>$problem,
        'status'=>$status,
        'time'=>$time
    )
    ])==true){
    $_SESSION['request']=1;
    $_SESSION['requestMessage']="<div class=\"alert alert-success\" role=\"alert\">
                Request sent successfully,you may now track it at the bottom of the page.
</div>";
    header("Location: ../fix.php");
}else{
    $_SESSION['request']=1;
    $_SESSION['requestMessage']="<div class=\"alert alert-danger\" role=\"alert\">
        Request attempt unsuccessful please try again.
</div>";
    header("Location: ../fix.php");
}

}
