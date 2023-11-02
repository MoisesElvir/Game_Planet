<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employees;
use Illuminate\Http\Request;

class employeesController extends Controller
{
    public function index()
    {
        $employees = Employees::all();
        return view("pages.employees.employees_list",array( "employee"=>$employees));
    }
}
