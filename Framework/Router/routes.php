<?php
namespace Router;


return array(
   
    
	'' 		 		=> 'home/index', 	
	'products'  	=> 'product/list',
	'product/show/([0-9]+)' => 'product/show/$1',

	'categories'   => 'category/index',
	'cart'      	=> "cart/index",
	 
	'category/show/([0-9]+)' => 'category/show/$1', 

	 'about'   		=> 'page/about',
	 'news'   		=> 'page/news',
	 'contact'   	=> 'page/contact',
	 'payment'   	=> 'page/payment',
	
	 //auth
	'login' 			=> 'auth/login',
	'registration' => 'auth/registration',
	'auth' 			=> 'auth/auth',
	'logout' 		=> 'auth/logout',
	
	//user
	'user/store'	=> 'user/store',
	'user/index'	=> 'user/index',
	'user/edit'		=> 'user/edit'
);