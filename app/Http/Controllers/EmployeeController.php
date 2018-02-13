<?php

namespace App\Http\Controllers;
use App\Employee;
use App\Attendance;
use DB;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function __construct()
{
$this->middleware('auth:admin');
}

    public function index(){
    	$employees = Employee::all();
    	return view('admin.employees.show',compact('employees'));
    }


    public function create(){

    	return view('admin.employees.create');
    }



// store employees data into database
	public function store(Request $request){


 		$this->validate($request,[
  		'name' => 'required',
  		'email'=>'required',
 		'mobile' => 'required',
 		'hiredate'=>'required'
 		]);


  		$employee = new Employee;

 		$employee->name= $request->name;
 		$employee->email = $request->email;
 		$employee->mobile = $request->mobile;
 		$employee->hiredate = $request->hiredate;


 		$employee->save();

 		return redirect(route('employee.index'));
 		}

 		public function edit($id){
 			$employee=Employee::where('id',$id)->first();
 			return view('admin.employees.edit',compact('employee'));
 		}




// Update Movie 
    public function update(Request $request,$id){

    

 		$this->validate($request,[
  		'name' => 'required',
  		'email'=>'required',
 		'mobile' => 'required',
 		'hiredate'=>'required'
 		]);


    	$employee=Employee::find($id);

 		$employee->name= $request->name;
 		$employee->email = $request->email;
 		$employee->mobile = $request->mobile;
 		$employee->hiredate = $request->hiredate;




 		$employee->save();

 		return redirect(route('employee.index'));	
    }



public function destroy($id)
{
Employee::find($id)->delete();
return redirect()->back();
}

 public function employee($id){

  $attends=Attendance::all();
  $employee=Employee::where('id',$id)->first();
  return view('admin.attendance.employee',compact('employee','attends'));


    }





public function report($id){
  $atts = DB::table('attendances')
                ->whereMonth('day', '1')
                ->where('employee_id',$id)
                ->get();

                return $atts;

}


}
