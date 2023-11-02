<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;

class branchController extends Controller
{
    public function index()
    {
        $branchs = Branch::all();
        return view("pages.branch.branch_list",array( "branch"=>$branchs));
    }
}
