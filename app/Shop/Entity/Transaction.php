<?php
namespace App\Shop\Entity;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model {
  protected $table = "transaction";
  public function Merchandise(){
    return $this->hasone('App\Shop\Entity\Merchandise','id','merchandise_id');
  }
  protected $primaryKey = "id";
  protected $fillable = [
    'user_id',
    'merchandise_id',
    'price',
    'buy_count',
    'total_price'
  ];
}
 ?>
