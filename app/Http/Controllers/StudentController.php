<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    //Read
    public function index()
    {
        $students = Student::all();
        return view('index', compact('students'));
    }

    //Create

    public function create()
    {
        return view('create');
    }


    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request ['name'];
        $student->class = $request ['class'];
        $student->rollNo = $request ['rollNo'];
        $student->save();

        return redirect()->to('students');
    }


    public function show($id)
    {
        $student = Student::find($id);
        return $student;
    }


    public function edit($id)
    {
        $student = Student::find($id);
        return view('edit',compact('student'));
    }

    //Update


    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request ['name'];
        $student->class = $request ['class'];
        $student->rollNo = $request ['rollNo'];
        $student->save();

        return redirect()->to('students');
    }

    //Delete

    public function destroy($id)
    {

        $student = Student::find($id);
        $student-> delete();
        return redirect()->to('students');

    }
}
