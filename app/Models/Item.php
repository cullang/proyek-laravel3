<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    // $fillable melindungi dari "Mass Assignment" (Input berbahaya yang tidak diinginkan)
    protected $fillable = ['category_id', 'name', 'price'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
