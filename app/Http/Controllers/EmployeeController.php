<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use Auth;
use Input;
use Session;
use Carbon;
use Lang;
use Validator;
use URL;
use DB;
use Timezone;
use stdClass;
use Response;
use DateTimeZone;
use DateTime;



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
		echo 'hjhjh';die;
	}
}