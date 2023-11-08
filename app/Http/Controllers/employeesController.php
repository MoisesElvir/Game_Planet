<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employees;
use App\Models\Branch;
use Illuminate\Http\Request;

class employeesController extends Controller
{
    public function index()
    {
        $employees = Employees::all();
        // consulta correcta
        //$employees = Employees::join('branch', 'employees.id_branch', '=', 'branch.id')->where('employees.id_status', '=', 1)->select('employees.*', 'branch.name as branch')->get();
        $branchs = Branch::all();
        return view("pages.employees.employees_list",array( "employee"=>$employees), array("branch" => $branchs));
    }
    
    public function getForm(){
        $branchs = Branch::all();
        return view('pages.employees.add_employee', array("branch" => $branchs));
    }

    public function addEmployee(Request $request){
        $employee = new Employees();
        $employee->name = $request->post('name');
        $employee->lastname = $request->post('lastname');
        $employee->phone = $request->post('phone');
        $employee->gender = $request->post('gender');
        $employee->email = $request->post('email');
        $employee->password = $request->post('password');
        $employee->id_branch = $request->post('id_branch');
        $employee->id_status = 1;

        $employee->save();

        return redirect('/Employees_List');
    }

    public function update(Request $request, $id){

        $employee = Employees::find($id);
        $employee->name = $request->post('name');
        $employee->lastname = $request->post('lastname');
        $employee->phone = $request->post('phone');
        $employee->gender = $request->post('gender');
        $employee->email = $request->post('email');
        $employee->password = $request->post('password');
        $employee->id_branch = $request->post('id_branch');

        $employee->update();

        return redirect('/Employees_List');

    }

    public function destroy($id){
        $employee = Employees::find($id);
        $employee->id_status = 2;
        $employee->update();

        return redirect('/Employees_List');
    }
}