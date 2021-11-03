<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class APIController extends Controller
{
    public function testApi(){
        return 'test';

    }
   public function getDepartmentInfo($id){
       $department = Department::find($id)->with('category')->get();
       return response()->json($department);
   }

}
