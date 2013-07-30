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

  private var $mysqli_conn;

  public function __construct()
  {
   $mysqli_conn = null;
  }

  public function connect($server,$user,$pwd,$db)
  {
   bool $conn=false;

   $mysqli_conn = new mysqli($server,$user,$pwd,$db);

   return $conn;
  }
  public function disconnect()
  {
   $mysqli_conn->close();
   unset($mysqli_conn);
   $mysqli_conn=null;
  }
  public function ExecQuery($sql)
  {
   $mysqli_conn->query($mysqli->real_escape_string($sql));
  }

  public function ExecQuery($sql,string $types, mixed &$var1 [, mixed &$... ])
  {
   $stmt = $mysqli_conn->prepare($sql);
   $stmt->bind_param($types, $var1);

   $stmt->execute();

   return $stmt->get_result();
  }
　public function isConnected()
  {
   return ($mysqli_conn!=null);
  }
 }

 class LoginMgr
 {
  public static $SESSION_NAME = "SESSION_LoginMgr";
  private static $_self = null;

  var $column_names = array(
   "__DB_USERTABLE__" => "User",
  );
  var $column_names = array(

   "__COL_USERNAME__" => "username",
   "__COL_PWD__" => "pwd",
  );
  var $sql_queries = array(
   'find_user_by_pwd'     => 'SELECT * FROM __DB_USERTABLE__ WHREE __COL_USERNAME__=? AND __COL_PWD__=?',
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