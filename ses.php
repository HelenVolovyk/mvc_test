<?php

//var_dump( $_SERVER);
//

//session_start();
//var_dump(session_name());
// var_dump(session_id());
//var_dump(session_save_path());


// session_start();
// if(!isset($_SESSION['time'])){
// 	$_SESSION['time'] = date("H:i:s");
// }
// echo $_SESSION['time'];



// session_start();
// if(!isset($_SESSION['time'])){
// 	$_SESSION['ua'] = $_SERVER["HTTP_USER_AGENT"];
// 	$_SESSION['time'] = date("H:i:s");
// }

// if($_SESSION['ua'] !=
// $_SERVER["HTTP_USER_AGENT"]){
// 	die('wrong brouser');
// }

//echo $_SESSION['time'];

//session_start();

// $_SESSION['test'] = 'car';
// $_SESSION['goo'] = 'bmv';



 //$_SESSION = [];
//  unset($_SESSION['goo']);
//  echo $_SESSION['test'];

// session_destroy();

//*** задать путь хранения сессии */
//  session_save_path('/var/www/shop.com/Framework/Session');
//  session_start();
// var_dump(session_save_path());
//***
// var_dump(session_get_cookie_params());
// var_dump(session_save_path());



// $lifeTime = 1;
// session_set_cookie_params(
// 	$lifeTime,
// 	null,
// 	null,
// 	false,
// 	false
// );
// session_start();

// var_dump(session_get_cookie_params());


// $maxlifetime = ini_get("session.gc_maxlifetime");
// $cookielifetime = ini_get("session.cookie_lifetime");

// echo $maxlifetime;
// echo '<br>';
// echo $cookielifetime;