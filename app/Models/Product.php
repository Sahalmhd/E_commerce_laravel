<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function catogary(){
        return $this->hasOne(Category::class,'id','category_id');
    }




    public function getStatusTextAttribute()
    {
        return $this->status == 1 ? "Active" : "Inactive"; 
    }
    public function getisfavoriteTextAttribute()
    {
        return $this->is_favorite == 1 ? "YES" : "NO"; 
    }

    protected $appends = ['status_text','is_favorite_text'];
}
