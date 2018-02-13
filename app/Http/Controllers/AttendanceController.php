<?php

namespace App\Http\Controllers;
use App\Attendance;
use App\Status;
use App\Employee;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{

     public function __construct()
{
$this->middleware('auth:admin');
}

   public function index(){
   	$atts = Attendance::all(); 
      $employees=Employee::all();

   	$status=Status::all();
   	return view('admin.attendance.create',compact('atts','status','employees'));
   }



   public function store(Request $request){

   		$att= new Attendance;
   		$att->day=$request->day;
   		$att->hour = $request->hour;
   		$att->employee_id=$request->employee;
   		$att->status_id = $request->status;
   		$att->save();

   		return redirect()->back();

   }

   public function destroy($id)
{
Attendance::find($id)->delete();
return redirect()->back();
}

}
