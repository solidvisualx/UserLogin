<?php

 //set_include_path("../");

 class DBMgr
 {
  public static function Inst()
  {
   static $inst = null;
   if($inst === null) {
    $inst = new DBMgr();
   }
   return $inst;
  }

  private var $mysqli = null;

  public function __construct()
  {
   $mysqli = null;
  }

  public function connect($server,$user,$pwd,$db)
  {
   bool conn=false;

   $mysqli = new mysqli($server,$user,$pwd,$db);

   return conn;
  }
  public function disconnect()
  {
   $mysqli->close();
   unset($mysqli);
   $mysqli=null;
  }
  public function ExecQuery($sql)
  {
   $mysqli->query($mysqli->real_escape_string($sql));
  }
　public function isConnected()
  {
   return ($mysqli!=null);
  }
 }

 class LoginMgr
 {
  public static $SESSION_NAME = "SESSION_LoginMgr";
  private static $_self = null;

  var $sql_queries = array(
   'find_user'     => 'SELECT in %s where %s="%s"',
  );

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
   unset($_SESSION[self::$SESSION_NAME]);
  }

  public function isLoggedin()
  {
   return isset($_SESSION[self::$SESSION_NAME]);
  }

  public static function Inst()
  {
   static $inst = null;
   if($inst === null) {
    $inst = new LoginMgr();
   }
   return $inst;
  }
 }