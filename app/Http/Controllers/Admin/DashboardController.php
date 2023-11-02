<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $subjectCount = Subject::count();
        $studentCount = Student::count();
        $userCount = User::count();

        return view('admin.index', compact('subjectCount', 'studentCount', 'userCount'));
    }
}
