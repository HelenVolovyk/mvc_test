<?php
namespace Framework\Core;

use Config;
use PDO;


class AbsModel
{
   //  protected $tableName = '';
   //  protected $db = null;

   //  protected function getDB(){
   //      if ($this->db === null){
   //          $dsn = 'mysql:host=' . Config::DB_HOST . ';dbname=' . Config::DB_NAME . ';charset=utf8';
   //          $this->db = new PDO($dsn, Config::DB_USER, Config::DB_PASS);
   //          $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   //      }
	//  }
	protected static $viewPath2 =  '/Framework/Database/';
	
	public function getArg($file)
	{

	 
			$file = ROOT_PATH . static::$viewPath2 . $arg;
		 
		 
			if (file_exists($file)){
			  
			 require $file;
			 }	else {
				 throw new \Exception("$file not found.");
			}
		  
	  }
	}