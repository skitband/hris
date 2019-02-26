<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Employee;
use App\Job;
use App\Department;
use App\Http\Controllers\Controller;


class SettingsController extends Controller
{
    public function __construct()
    { 
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        return view('admin/settings');
    }

    public function settings()
    {
        return view('admin/settings');
    }

    public function new_job(Request $request)
    {

        
    }

    public function new_department(Request $request)
    {

        
    }

    public function leads()
    {

        $employee = Employee::select('emp_id','last_name', 'first_name')
                    ->where('rank', 'Junior')
                    ->orWhere('rank', 'Senior')
                    ->get();

        return json_decode($employee);
    }
}
