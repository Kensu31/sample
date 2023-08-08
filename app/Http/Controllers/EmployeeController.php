<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class EmployeeController extends Controller
{
    public function show()
    {
        $employee = Employee::all();
        return view('user.viewemployee', ['employee' => $employee]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            "first_name" => ['required', 'min:4'],
            "last_name" => ['required', 'min:4'],
            "email" => ['required', 'email', Rule::unique('employees', 'email')],
            "age" => 'required|numeric',
            "gender" => ['required', 'min:4'],
            "position" => 'required',
        ]);

        $employees = Employee::create($validated);
        return redirect('/viewemployee');
    }
    public function search(Request $request)
    {
        $results = Employee::where('first_name', $request)->first();

        echo ($results);

    }
}