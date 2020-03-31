<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller{
  public function indexPage(){
    $binding = [
      'title' => '首頁'
    ];
    return view('home', $binding);
  }
}
 ?>
