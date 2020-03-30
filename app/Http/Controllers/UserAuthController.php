<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UserAuthController extends Controller{
  public function signInPage(){
    $binding = ['title' => '登入'];
    return view('auth.signIn', $binding);
  }
  public function signInProcess(){

  }
  public function signUpPage(){
    $binding = ['title' => '註冊'];
    return view('auth.signUp', $binding);
  }
  public function signUpProcess(){
    $input = request()->all();
    var_dump($input);
    exit;
  }
}
 ?>
