<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
   public function myTest(){
       $cat = Category::create([
           'name' => 'cate1',
           'description' => 'cate1description',
           'number' => '1',
       ]);
       $cat->fill(['name' => 'Flight 22']);

       return $cat;
   }

}