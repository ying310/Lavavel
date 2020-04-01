<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Validator;
use Image;
use App\Shop\Entity\Merchandise;

class MerchandiseController extends Controller {
    public function merchandiseCreateProcess(){
      $merchandise_data = [
        'status' => "C",
        'name' => "",
        'name_en' => "",
        'introduction' => "",
        'introduction_en' => "",
        'photo' => null,
        'price' => 0,
        'remain_count' => 0
      ];
      $Merchandise = Merchandise::create($merchandise_data);
      return redirect('/merchandise/'.$Merchandise->id."/edit");
    }
    public function merchandiseEditPage($merchandise_id){
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
    public function merchandiseUpdateProcess($merchandise_id){
      $Merchandise = Merchandise::findOrFail($merchandise_id);
      $input = request()->all();
      $rules = [
	       'status' => ['required', 'in:C,S'],
	       'name' => ['required', 'max:80'],
	       'name_en' => ['required', 'max:80'],
	       'introduction' => ['required', 'max:2000'],
	       'introduction_en' => ['required', 'max:2000'],
	       'photo' => ['file', 'image', 'max:10240'],
	       'price' => ['required', 'integer', 'min:0'],
	       'remain_count' => ['required', 'integer', 'min:0']
	    ];
      $validator = Validator::make($input, $rules);
      if($validator->fails()){
        return redirect('/merchandise/'.$merchandise_id.'/edit')->withErrors($validator)->withInput();
      }
      if(isset($input['photo'])){
		  $photo = $input['photo'];
		  $file_extension = $photo->getClientOriginalExtension();
		  $file_name = uniqid().'.'.$file_extension;
		  $file_relative_path = 'images\\merchandise\\'.$file_name;
		  $file_path = public_path($file_relative_path);
		  $image = Image::make($photo)->fit(450, 300)->save($file_path);
		  $input['photo'] = $file_relative_path;
	    }
	    $Merchandise->update($input);
	    return redirect('/merchandise/'.$Merchandise->id.'/edit');
    }
    public function merchandiseManageListPage(){
	     $row_per_page = 10;
	     $MerchandisePaginate = Merchandise::OrderBy('created_at', 'desc')->paginate($row_per_page);
	     foreach($MerchandisePaginate as $Merchandise){
		   if(!is_null($Merchandise->photo)){
			 $Merchandise->photo = url($Merchandise->photo);
		        }
	     }
	     $binding = [
		      'title' => '管理商品',
		      'MerchandisePaginate' => $MerchandisePaginate
	     ];
	     return view('merchandise.manageMerchandise', $binding);
    }
    public function merchandiseListPage(){
	$row_per_page = 10;
	$MerchandisePaginate = Merchandise::OrderBy('updated_at', 'desc')->where('status', 'S')->paginate($row_per_page);
	foreach($MerchandisePaginate as $Merchandise){
		if(!is_null($Merchandise->photo)){
			$Merchandise->photo = url($Merchandise->photo);
	}
	$binding = [
		'title' => '商品列表',
		'MerchandisePaginate' => $MerchandisePaginate
	];
	return view('merchandise.listMerchandise', $binding);
}
}
}
?>
