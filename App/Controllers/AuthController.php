<?php
namespace App\Controllers;

use App\Models\User;
use Framework\Core\AbsController;
use Framework\Core\AbsView;
use Framework\Helpers\SessionHelpers;

class AuthController extends AbsController
{

	public function login()
    {
		
      AbsView::render('auth/login.php');
    }

   public function registration()
    {
      AbsView::render('auth/registration.php');
	 }


	 public function isAuth()
	 {
		 SessionHelpers::isUserLogin();
	 }
	 
	 
	public function auth()
	{
	//   if ($login == $this->login && $passwors == $this->password) { 
	// 		$_SESSION["isAuth"] = true; 
	// 		$_SESSION["login"] = $login; 
	// 		return true;
	//   }
	//   else { 
	// 		$_SESSION["isAuth"] = false;
	// 		return false; 
	//   }
		

	unset($_SESSION['error']['login']['common']);
	$fields = filter_input_array(INPUT_POST, $_POST, 1);
var_dump($fields);
	$user = new User();

		if ($userData = $user->getUserByEmail($fields['email'])){
	  if(password_verify($fields['pass'], $userData['pass'])){
		SessionHelpers::setUserData('id', $userData['id']);
	
		 AbsView::site_redirect('/templates/home.php');
		
	  } else{
		 $_SESSION['error']['login']['common'] = 'The password is not valid';
	  }
	} else{
	  $_SESSION['error']['login']['common'] = 'The user with email "'. $fields['email'] .'" not exists';
	}

 AbsView::site_redirect('/auth/login.php');


 }
	
	

	public function getLogin()
	{
		SessionHelpers::getUserData($Login);
	}

	public function logOut()
	{
		SessionHelpers::destroyUserData();
        redirect('home');
   
	}
}