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
       $department = Department::with('category')->find($id);//->get();
       return response()->json($department);
   }
    public function addDepartmentInfo(Request $request){

        $department = new  Department;
        $department->title = $request->title;
        $department->description = $request->description;
        $department->category_id = $request->category_id;
         $result =  $department->save();
        if($result){
            return ["result" => "add successfully "];
        }
        else{
            ["result" => "add fail "];
        }

    }
}
