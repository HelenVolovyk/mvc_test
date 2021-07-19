<?php
namespace App\Controllers;


use Framework\Core\AbsController;
use Framework\Core\View;

class ProductController extends AbsController{
	
	public function index(){
      
		//View::render('home/index.php');
		echo 'hi, product';
	}
}
  