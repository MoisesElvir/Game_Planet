<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employees;
use Illuminate\Http\Request;

class employeesController extends Controller
{
    public function index()
    {
        $employees = Employees::select('*')->where('id_status', '=', 1)->get();
        return view("pages.employees.employees_list",array( "employee"=>$employees));
    }
}
