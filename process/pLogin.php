<?php
session_start();

require ('../users.php');

if(isset($_POST["submit"])){
    $email=$_POST["email"];
    $password=$_POST["password"];

  $instance=new users();

  if($instance->authenticate($email,$password)==true){

      $users=$instance->userInfo($email);
      $_SESSION['login']=1;
      $_SESSION['loggedMail']=$users->email;
      $_SESSION['displayName']=$users->displayName;
      $_SESSION['uid']=$users->uid;
      header("Location: ../index.php");

  }else{
       $_SESSION['login']=0;
      $_SESSION['loginMessage']="<div class=\"alert alert-danger\" role=\"alert\">
       Incorrect credentials,try again or <a href=\"register.php\">register</a> if you are not a member.
</div>";
      header("Location: ../login.php");

  }


}