<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use App\Models\category;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function index()
    {
        
        
        $categories = DB::table('teachers')
            ->join('categories','categories.teacher_id', '=', 'teachers.id')
            ->select('categories.*')
                ->get();
        $teachers = Teacher::all();
       
                return view('peli', compact('teachers','categories'));
                
                
    }
    

}
