<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        $students = DB::table('students')->get();

        return view('students', compact('students'));
    }

    public function delete(Request $request)
    {
        $rollNumber = $request->input('rollNumber');
        DB::table('students')->where('rollNumber', '=', $rollNumber)->delete();
        return redirect('/');
    }
    public function create()
    {
        return view('insert');
    }
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'roll-number' => 'required|unique:students,rollNumber',
            'cgpa' => 'required'
        ]);

        DB::table('students')->insert([
            'id' => $request->input('id'),
            'rollNumber' => $request->input('roll-number'),
            'cgpa' => $request->input('cgpa')
        ]);

        return redirect('/')->with('success', 'Record added successfully.');
    }
}
