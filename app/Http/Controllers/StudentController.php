<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        //$data = Students::where('age', '<', 12)->orderBy('first_name', 'asc')->limit(5)->get();
        //wildcard searching laravel
        //$data = DB::table('students')->select(DB::raw('count(*) as gender_count,gender'))->groupBy('gender')->get();
        $data = Students::all();
        return view('students.index', ['students' => $data]);
    }
    public function show($id)
    {
        $data = Students::findOrFail($id);
        @dd($data);
        return view('students.index', ['students' => $data]);
    }
}