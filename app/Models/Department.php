<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    public $fillable = ['title','description','category_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
