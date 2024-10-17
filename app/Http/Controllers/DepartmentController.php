<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DepartmentController extends Controller
{
    public function index()
    {
        Auth::user()->can('admin') ?: abort(403, 'Acesso nao autorizado');

        $departments = Department::all();
        return view('department.departments', compact('departments'));
    }

    public function newDepartment(): View
    { 
        Auth::user()->can('admin') ?: abort(403, 'Acesso nao autorizado');
        return view('department.add-department');
    }

    public function createDepartment(Request $request)
    {
        Auth::user()->can('admin') ?: abort(403, 'Acesso nao autorizado');
        $request->validate([
            'name' => 'required|string|max:50|unique:departments'
        ]);

        Department::create(['name' => $request->name]);

        return redirect()->route('departments');
    }

    public function editDepartment($id)
    {
        Auth::user()->can('admin') ?: abort(403, 'Acesso nao autorizado');
        if (intval($id) === 1){
            return redirect()->route('departments');
        }

        $department = Department::findOrFail($id);     
        return view ('department.edit-department', compact('department'));
    }

    public function updateDepartment(Request $request)
    {
        Auth::user()->can('admin') ?: abort(403, 'Acesso nao autorizado');
        
        $id = $request->id;

        $request->validate([
            'id' => 'required',
            'name' => 'required|string|min:3|max:50|unique:departments,name,' . $id
        ]);

        if (intval($id) === 1){
            return redirect()->route('departments');
        }
        
        $department = Department::findOrFail($id); 

        $department->update([
            'name' => $request->name
        ]);

        return redirect()->route('departments');
    }
}
