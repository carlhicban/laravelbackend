<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblStudentCourse;

class StudentCourseController extends Controller
{
    //
    public function index()
    {
        $data = TblStudentCourse::join('tbl_courses','tbl_student_courses.tbl_course_id','=','tbl_courses.id')
                ->join('tbl_students','tbl_student_courses.tbl_student_id','=','tbl_students.id')
                ->get(['tbl_student_courses.id','tbl_student_courses.tbl_student_id','tbl_student_courses.tbl_course_id','tbl_courses.cl_course_name','tbl_students.cl_firstname','tbl_students.cl_lastname']);
         
        return response()->json($data,200);
    }

    public function show($id)
    {
        return response()->json(TblStudentCourse::find($id),200);
    }

    public function store(Request $request)
    {
        $studentCourse = TblStudentCourse::create($request->all(),201);
        return response($studentCourse);
    }
    
    public function update(Request $request,$id)
    {
        $studentCourse = TblStudentCourse::find($id);
        if(is_null($studentCourse)){
            return response()->json(['message','Student Course not found'],404);
        }
        $studentCourse->update($request->all());
        return response($studentCourse,200);
    }
    
    public function destroy($id)
    {
        $studentCourse = TblStudentCourse::find($id);
        if(is_null($studentCourse)){
            return response()->json(['message','Student Course not found'],404);
        }
        $studentCourse->delete();
        return response()->json(null,204);
    }
}
