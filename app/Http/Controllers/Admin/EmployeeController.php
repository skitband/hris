<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Yajra\Datatables\Datatables;
use App\Employee;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;

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
                return '<a href="'.route('employee.show', $employee->id) .'" class="btn btn-secondary btn-sm"><i class="nav-icon fa fa-pencil"></i> Update</a>';
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

        return view('admin/create');
    }

    public function count_users(){

        $count = Employee::count();
        return date('y').'-'.sprintf('%04d',$count+1);
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
        $emp_id = $this->count_users();

        // $this->validate($request, [
        //     'first_name'    => 'required|min:1|max:100',
        //     'middle_name'   => 'min:1|max:100',
        //     'last_name'     => 'required|min:1|max:100',
        //     'birthdate'     => 'date|required',
        //     'address'       => 'required|min:5',
        //     'contact'       => 'required|min:2|max:12',
        // ]);

        // upload files
        $path = storage_path('app/public/uploads/files/'.$emp_id);

        if(!file_exists($path)) {

            mkdir($path, 0777, true);

            if($request->hasFile('file')){

                foreach($request->file as $file){

                    $filename = str_random(12). '.' . $file->getClientOriginalExtension();
                    $file->move($path, $filename);
                }
            }
        }

        // move uploaded photo
        if($request->hasFile('photo')){

            $path = storage_path('/app/public/uploads/avatar');
            $filename = time() . '.' . $request->photo->getClientOriginalExtension();
            $request->photo->move($path, $filename);
        
        }
        
        // store to Employee Table
        $employee = new Employee;

        // Personal
        $employee->emp_id       = $emp_id;
        $employee->photo        = $filename;
        $employee->first_name   = $request->first_name;
        $employee->middle_name  = $request->middle_name;
        $employee->last_name    = $request->last_name;
        $employee->birthdate    = $request->birthdate;
        $employee->address      = $request->address;
        $employee->email        = $request->email;
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

        // store to users table
        $user = new User;

        $user->emp_id    = $emp_id;
        $user->username  = substr(strtolower($request->first_name),0,1).strtolower($request->last_name);
        $user->email     = $request->email;
        $user->password  = $request->username;

        $user->save();

        $message = array('message' => 'Employee Successfully Added!');
        return redirect()->back()->with($message);
        //dd($file);
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
        $path = storage_path('/app/public/uploads/avatar');
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

        $emp_id = $employee->emp_id;

        // $directory = storage_path('app/public/uploads/files/'.$id);

        // $files = Storage::files($directory);

        // //return view('admin/profile')->with("employee", $files);

        // dd($files);
        
        $path  = storage_path('app/public/uploads/files/'.$emp_id);

        if(!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $files = scandir($path);
        $files = array_diff(scandir($path), array('.', '..'));

        return view('admin/profile')->with(compact("employee", "files"));

    }

    public function destroy_file($emp_id, $file){

        $path  = storage_path('app/public/uploads/files/'.$emp_id.'/'.$file);

        if(unlink($path)):
            $message = array('message' => 'File Successfully Deleted!');
            return redirect()->back()->with($message);
        endif;
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

        // file upload to existing employee
        $emp_id = $request->emp_id;
        $path  = storage_path('app/public/uploads/files/'.$emp_id);
        
        if($request->hasFile('file')){

            foreach($request->file as $file){

                $filename = str_random(12). '.' . $file->getClientOriginalExtension();
                $file->move($path, $filename);
            }
        }
        // validation
        $this->validate($request, [
            'first_name'    => 'required|min:1|max:100',
            'middle_name'   => 'min:1|max:100',
            'last_name'     => 'required|min:1|max:100',
            'birthdate'     => 'date|required'
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

    public function resetpw(Request $request, $emp_id)
    {

        //$user = User::find($emp_id)->toSql();
        $password  = $request->username;
        DB::table('users')
            ->where('emp_id', $emp_id)
            ->update(['password' => $password]);
        //     ->toSql();
        // Personal
        //$user->password  = $request->username;

        // $user->save();
        $message = array('message' => 'Password Successfully Updated!');
        return redirect()->back()->with($message);
        //echo $user;
    }

    public function deactivate(Request $request, $emp_id)
    {

        //$user = User::find($emp_id)->toSql();
        $password  = $request->username;
        DB::table('users')
            ->where('emp_id', $emp_id)
            ->update(['active' => '0']);

        DB::table('employees')
            ->where('emp_id', $emp_id)
            ->update(['active' => '0']);    
        //     ->toSql();
        // Personal
        //$user->password  = $request->username;

        // $user->save();
        $message = array('message' => 'Employee Successfully Deactivated!');
        return redirect()->back()->with($message);
        //echo $user;
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
