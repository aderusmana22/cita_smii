<?php

namespace App\Http\Controllers;

use App\Models\Master\Department;
use App\Models\Master\Section;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index()
    {
        $sections = Section::all();
        $departments = Department::all();
        return view('dashboard', compact('sections', 'departments'));
    }
}
