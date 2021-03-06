<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "category";
    protected $fillable = ['category_name','category_description'];
    protected $primaryKey = 'category_id';
    public $timestamps = false;

    public function products() {
        return $this->hasMany('App\Models\Product');
    }
}
