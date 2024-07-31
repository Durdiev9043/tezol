<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=['category_id','hash_id','name','more','price','img','img2','img3','img4','img5','count','status','miqdori','type','code','shop_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function hash(){
        return $this->belongsTo(Category::class);
    }
    public function shop(){
        return $this->belongsTo(Shop::class);
    }

    public $aksiya=[ 0=>'Aksiyada emas',1=>'Aksiyada'];
}
