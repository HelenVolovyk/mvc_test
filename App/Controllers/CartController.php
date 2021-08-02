<?php
namespace App\Controllers;

use Framework\Core\AbsController;
use Framework\Core\AbsView;


class CartController extends AbsController
{
	public function index()
	{
		
		AbsView::render('templates/cart/index.php');
	}
}