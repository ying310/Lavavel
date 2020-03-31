<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Validator;
use App\Shop\Entity\Merchandise;

class MerchandiseController extends Contoller {
    public function merchandiseCreateProcess(){
      $merchandise_data = [
        'status' => "C",
        'name' => "",
        'name_en' => "";
        'introduction' => "",
        'introduction_en' => "",
        'photo' => null;
        'price' => 0;
        'remain_count' => 0
      ];
      $Merchandise = Merchandise::create($merchandise_data);
      return redirect('/merchandise/'.$Merchandise->id."/edit");
    }
    public function merchandiseItemEditPage($merchandise_id){
      $Merchandise = Merchandise::findOrFail($merchandise_id);
      if(!is_null($Merchandise->photo)){
        $Merchandise->photo = url($Merchandise->photo);
      }
      $binding = [
        'title' => '編輯商品',
        'Merchandise' => $Merchandise
      ];
      return view('merchandise.editMerchandise', $binding);
    }
}
?>
