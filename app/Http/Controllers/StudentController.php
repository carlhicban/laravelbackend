<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblStudent;


class StudentController extends Controller
{
    //Retrieve all Student
    public function index()
    {
        return response()->json(TblStudent::all(),200);
    }

    public function show($id)
    {
        return response()->json(TblStudent::find($id),200);
    }
    public function store(Request $request)
    {
        $student = TblStudent::create($request->all(),201);
        return response($student);
    }

    public function update(Request $request,$id)
    {
        $student = TblStudent::find($id);

        if(is_null($student)){
            return response()->json(['message'=>'Student not found!'],404);
        }

        $student->update($request->all());
        return response($student,200);
    }

    public function destroy($id)
    {
        $student = TblStudent::find($id);

        if(is_null($student)){
            return response()->json(['message'=>'Student not found!'],404);
        }

        $student->delete();
        return response()->json(null,204);
    }
}
