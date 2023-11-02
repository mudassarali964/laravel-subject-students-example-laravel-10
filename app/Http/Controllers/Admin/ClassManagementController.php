<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\Student;
use Illuminate\Http\Request;

class ClassManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $classes = Subject::with('students')
            ->orderBy('name')
            ->get();

        return view('admin.class_management.index', compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $class = Subject::find($id);
        if (!$class) {
            return abort('404');
        }

        $students = Student::orderBy('first_name')->get();

        return view('admin.class_management.edit', compact('class', 'students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $class = Subject::find($id);
        if (!$class) {
            return abort('404');
        }

        $class->students()->sync($request->student_ids);

        return redirect()->route('class_management.index')
            ->with('success','Record has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
