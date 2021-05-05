<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;
if(ENVIRONMENT == 'production' ){

$db['default'] = array(
 'dsn' => '',
 'hostname' => 'localhost',
 'port'=> '3306',
 'username' => 'root',
 'password' => '',
 'database' => 'wwwastha_cdsl',
 'dbdriver' => 'mysqli',
 'dbprefix' => '',
 'pconnect' => FALSE,
 'db_debug' => FALSE,
 'cache_on' => FALSE,
 'cachedir' => '',
 'char_set' => 'utf8',
 'dbcollat' => 'utf8_general_ci',
 'swap_pre' => '',
 'encrypt' => FALSE,
 'compress' => FALSE,
 'stricton' => FALSE,
 'failover' => array(),
 'save_queries' => TRUE
);
}
else{
	$db['default'] = array(
	 'dsn' => '',
 'hostname' => 'localhost',
 'port'=> '3306',
 'username' => 'root',
 'password' => '',
 'database' => 'asthatrade_cdsl',
 'dbdriver' => 'mysqli',
 'dbprefix' => '',
 'pconnect' => FALSE,
 'db_debug' => TRUE,
 'cache_on' => FALSE,
 'cachedir' => '',
 'char_set' => 'utf8',
 'dbcollat' => 'utf8_general_ci',
 'swap_pre' => '',
 'encrypt' => FALSE,
 'compress' => FALSE,
 'stricton' => FALSE,
 'failover' => array(),
 'save_queries' => TRUE
	);
}
if(ENVIRONMENT == 'production' ){
$db['cdsl'] = array(
	'dsn' => '',
	'hostname' => 'localhost',
	'port'=> '3306',
	'username' => 'root',
	'password' => '',
	'database' => 'asthatrade_cdsl',
	 'dbdriver' => 'mysqli',
	 'dbprefix' => '',
	 'pconnect' => FALSE,
	 'db_debug' => TRUE,
	 'cache_on' => FALSE,
	 'cachedir' => '',
	 'char_set' => 'utf8',
	 'dbcollat' => 'utf8_general_ci',
	 'swap_pre' => '',
	 'encrypt' => FALSE,
	 'compress' => FALSE,
	 'stricton' => FALSE,
	 'failover' => array(),
	 'save_queries' => TRUE

	);
}else{
	$db['cdsl'] = array(
	  'dsn' => '',
	  'hostname' => 'wwwastha-replica.cwx3kboqzurw.ap-south-1.rds.amazonaws.com',
	  'port'=> '3306',
	  'username' => 'wwwastha_web',
	  'password' => 'AlphaBeta',
	  'database' => 'asthatrade_all_db',
	  'dbdriver' => 'mysqli',
	  'dbprefix' => '',
	  'pconnect' => FALSE,
	  'db_debug' => (ENVIRONMENT !== 'production'),
	  'cache_on' => FALSE,
	  'cachedir' => '',
	  'char_set' => 'utf8',
	  'dbcollat' => 'utf8_general_ci',
	  'swap_pre' => '',
	  'encrypt' => FALSE,
	  'compress' => FALSE,
	  'stricton' => FALSE,
	  'failover' => array(),
	  'save_queries' => TRUE
	);
}
?>