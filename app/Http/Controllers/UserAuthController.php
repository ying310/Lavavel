<?php
namespace App\Http\Controllers;
use Validator;
use Hash;
use Mail;
use App\Http\Controllers\Controller;
use App\Shop\Entity\User;

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
    $rules = [
      'nickname' => ['required', 'max:50'],
      'email' => ['required', 'max:150', 'email'],
      'password' => ['required', 'same:password_confirmation', 'min:6'],
      'password_confirmation' => ['required', 'min:6'],
      'type' => ['required' ,'in:G,A']
    ];
    $validator = Validator::make($input, $rules);
    if($validator->fails()){
      return redirect('/user/auth/sign-up')->withErrors($validator)->withInput();
    }
    $input['password'] = Hash::make($input['password']);
    $input['password_confirmation'] = "";
    $Users = User::create($input);
    $mail_binding = [
      'title' => '驗證成功',
      'nickname' => $input['nickname']
    ];
    Mail::send('email.signUpEmailNotification', $mail_binding,
    function($mail) use ($input){
        $mail->to($input['email']);
        $mail->from('410411310@gms.ndhu.edu.tw');
        $mail->subject('恭喜註冊Laravel Shop成功');
    });
    return redirect('/user/auth/sign-in');
  }
}
 ?>
