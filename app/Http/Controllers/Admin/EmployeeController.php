<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\Employee;

class EmployeeController extends Controller
{

    public function __construct()
    { 
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Auth::check()){
           return redirect()->route('index');
        }
        
       // $employee = Employee::paginate(10);
       // return view('admin/manage')->with("employees", $employee);

        return view('admin/dashboard');
        
    }

    public function manage()
    {
        return view('admin/manage');
    }

    public function getEmployees()
    {
       
       $employee = Employee::query()->select('id', 'emp_id', 'first_name', 'last_name', 'middle_name', 'address', 'birthdate', 'job', 'created_at')->where('active', '=', '1');

        return Datatables::of($employee)
            ->addColumn('fullname', function ($employee) {
                return $employee->last_name .", ". $employee->first_name ." ". substr($employee->middle_name, 0,1).".";
            })
            ->addColumn('action', function ($employee) {
                return '<a href="'.route('employee.show', $employee->id) .'" class="btn btn-secondary btn-sm"><i class="nav-icon fa fa-pencil"></i> Edit</a> 
                <button data-remote="'.route('employee.destroy', $employee->id) .'" class="btn btn-danger btn-sm btn-delete"><i class="nav-icon fa fa-trash"></i> Delete</button>';
            })
            ->editColumn('birthdate', function ($employee) {
                return date('m-d-Y', strtotime($employee->birthdate));
            })
            ->make(true);
        
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $employee = Employee::find($id);
        if(!$employee){
            return view('404');
        }

        return view('admin/profile')->with("employee", $employee);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'emp_fname' => 'required|min:1|max:100',
            'emp_mname' => 'min:1|max:100',
            'emp_lname' => 'required|min:1|max:100'
        ]);

        $employee = Employee::find($id);
        $employee->emp_fname = $request->emp_fname;
        $employee->emp_mname = $request->emp_mname;
        $employee->emp_lname = $request->emp_lname;
        $employee->save();

        $message = array('message' => 'Profile Successfully Updated!');
        return redirect()->back()->with($message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
