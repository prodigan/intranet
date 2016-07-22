<?php 

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Redirect;
use App\User;
use App\Employee;

Class EmployeeController extends Controller {

	Public function getIndex()
	{
		return view('employee.employee_add');
	}
	Public function getAddEmployee()
	{
		return view('employee.employee_add');
	}
	Public function postAddEmployee()
	{
		$input = Input::all();
		$user = New User();
		$user->email = $input['email_id'];
		$user->password = $input['password'];
		$user->created_at = time();
		$user->updated_at = time();
		$user->last_login = time();
		$user->save();

		$employee = New Employee();
		$employee->first_name = $input['first_name'];
		$employee->last_name = $input['last_name'];
		$employee->contact_number = $input['contact_number'];
		$employee->designation = $input['designation'];
		$employee->save;

		return Redirect::back();
		
	}
}