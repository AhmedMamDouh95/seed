<?php
use App\Status;
use App\Employee;
namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
  
	public function employee(){

		return $this->belongsTo(Employee::class);
	}


	public function status(){

		return $this->belongsTo(Status::class);
	}

   
}
