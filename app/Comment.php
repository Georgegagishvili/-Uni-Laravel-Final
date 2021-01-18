<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
    	'user_id',
    	'title',
    	'comment',
    	'product_id'
    ];
    public function product(){
    	$this->belongsTo(Product::class);
    }
}
