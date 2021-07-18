<?php
namespace App\Controllers;
use Framework\Core\AbsController;


class ErrorController extends AbsController
{

    public function error404(){
        echo __CLASS__;
        return;
	 }
	 
	 public function notFound(){
		echo __CLASS__ . 'not found';
		return;
  }
}