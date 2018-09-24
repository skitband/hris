<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
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
     * Change Photo
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_photo(Request $request, $id)
    {
        $this->validate($request, [
            'photo'  => 'required|image'
        ]);

        $employee = Employee::find($id);

        $employee->photo = $request->file('photo');
        $path = storage_path('/uploads/');
        $filename = time() . '.' . $employee->photo->getClientOriginalExtension();
        $employee->photo->move($path, $filename);
        $employee->photo = $filename;

        $employee->save();
        $message = array('message' => 'Photo Successfully Updated!');
        return redirect()->back()->with($message);
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
            'first_name'    => 'required|min:1|max:100',
            'middle_name'   => 'min:1|max:100',
            'last_name'     => 'required|min:1|max:100',
            'birthdate'     => 'date|required',
            'address'       => 'required|min:5',
            'contact'       => 'required|min:6|max:12',
        ]);

        $employee = Employee::find($id);

        // Personal
        $employee->first_name   = $request->first_name;
        $employee->middle_name  = $request->middle_name;
        $employee->last_name    = $request->last_name;
        $employee->birthdate    = $request->birthdate;
        $employee->address      = $request->address;
        $employee->contact      = $request->contact;
        $employee->fathers_name = $request->fathers_name;
        $employee->mothers_name = $request->mothers_name;
        $employee->height       = $request->height;
        $employee->weight       = $request->weight;
        $employee->blood_type   = $request->blood_type;

        // Work
        $employee->job          = $request->job;
        $employee->department   = $request->department;
        $employee->rank         = $request->rank;
        $employee->level        = $request->level;

        // Others
        $employee->school         = $request->school;
        $employee->course         = $request->course;
        $employee->year_graduated = $request->year_graduated;
        $employee->skills         = $request->skills;
        $employee->hobbies        = $request->hobbies;

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
