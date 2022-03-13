<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblCourse;


class CourseController extends Controller
{
    //
    public function index()
    {
        return response()->json(TblCourse::all(),200);
    }

    public function show($id)
    {
        return response()->json(TblCourse::find($id),200);
    }

    public function store(Request $request)
    {
        $course = TblCourse::create($request->all(),201);
        return response($course);
    }
    
    public function update(Request $request,$id)
    {
        $course = TblCourse::find($id);
        if(is_null($course)){
            return response()->json(['message','Course not found'],404);
        }
        $course->update($request->all());
        return response($course,200);
    }
    
    public function destroy($id)
    {
        $course = TblCourse::find($id);
        if(is_null($course)){
            return response()->json(['message','Course not found'],404);
        }
        $course->delete();
        return response()->json(null,204);
    }
}
