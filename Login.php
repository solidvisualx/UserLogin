<?php

 set_include_path("../");

 class LoginMgr
 {
  public static $SESSION_NAME = "SESSION_LoginMgr";

  private var $user_name;
  
  public function login($user,$pwd)
  {
   var $loggedin=false;

   if($loggedin==true)
   {
    $_SESSION[self::$SESSION_NAME]=$this;
   }

   return loggedin;
  }

  public function logout()
  {
   $user_name="";
  }

  public function isLoggedin()
  {
   return (strlen($user_name)>0);
  }

  public static function Inst()
  {
   if(isset($_SESSION[self::$SESSION_NAME]))
    return $_SESSION[self::$SESSION_NAME];

   return null;
  }
 };