<?php
session_start();
require('../users.php');

if(isset($_POST["submit"])){
    $email=$_POST["email"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];
    $name=$_POST["name"];

    if($password=$cpassword){
        $instance=new users();
       if( $instance->register([
                'email' => $email,
                'emailVerified' => false,
                'password' => $cpassword,
                'disabled' => false,
                   'displayName'=>$name
            ]

        )==true){
           $_SESSION['register']=1;
           $_SESSION['registerMessage']="<div class=\"alert alert-success\" role=\"alert\">
        You have been successfully registered.Please log in.
</div>";
           header("Location: ../login.php");

       }else{
           $_SESSION['register']=1;
           $_SESSION['registerMessage']="<div class=\"alert alert-danger\" role=\"alert\">
        Registration attempt unsuccessful,try again.
    </div>";
           header("Location: ../register.php");
       }

    }else{
        $_SESSION['register']=1;
        $_SESSION['registerMessage']="<div class=\"alert alert-danger\" role=\"alert\">
        Passwords did not match try again.
</div>";
        header("Location: ../register.php");
    }
}







