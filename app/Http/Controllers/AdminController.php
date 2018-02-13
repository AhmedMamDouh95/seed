<?php
namespace App\Http\Controllers;
use App\Admin;
use App\Employee;

use Illuminate\Http\Request;
class AdminController extends Controller
{
    public function __construct()
{
$this->middleware('auth:admin');
}


public function index(){
         $employees = Employee::all()->count();

		
		return view('admin.index',compact('employees'));
}

}