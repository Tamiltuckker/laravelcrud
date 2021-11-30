<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Phone;

class EmployeeController extends Controller
{
    public function __construct()
    {
        // dd('hi123');
        $this->middleware('auth');
    }
    /* Display a listing of the resource.*/   
    public function index()
    {
        // $employees = Employee::find(90)->phone;
        // dd($employees);
        // $employees->$employees = Employee::all();
        $employees = Employee::with('phone')->get();
       //   dd($employees);
         return view('employee.index',compact('employees'));      
    }

    /* Show the form for creating a new resource */
    public function create()
    {
        // dd('hellow');
         $model = Employee::get();
        return view('employee.create',compact('model'));
    }

    /* Store a newly created resource in storage. */
    public function store(Request $request)
    {   
        // dd($request);
        $validatedData = $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'skills' => 'required',
            'dob' => 'required',
            'city' => 'required',
            'address' => 'required',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        ], [
            'name.required' => 'Name is required',
            'gender.required' => 'gender is required',
            'skills.required' => 'skills is required',
            'dob.required' => 'dob is required',
            'city.required' => 'city is required',
            'address.required' => 'address is required',
            'phone.required' => 'Phone is required',
        ]);
        $model = new Employee();
        $data = $request->except(['_token']);
        $model->fill($data);
        $model->skills = implode(',', $request->input('skills'));
        $model->save();
        $phone = new Phone;
        $phone->phone= $request->phone;
        $model->phone()->save($phone);
        return redirect()->route('employee.index')->with('success', 'Information has been added');
    }

    /* Display the specified resource. */
    public function show($id)
    {
        $employees = Employee::find($id);
        return view('employee.show',compact('employees'));
    }

    /* Show the form for editing the specified resource.*/
    public function edit($id)
    {
        $getemployees = Employee::find($id);
        $getemployees->skills = explode("," ,$getemployees->skills);
        return view('employee.edit',compact('getemployees'));
    }

    /*Update the specified resource in storage.*/
    public function update(Request $request)
    {   
        
        $update = Employee::find($request->emp_id);
        $update->fill($request->all());
        $update->skills = implode(',', $request->input('skills'));
        // dd($update);
        $update->save(); 
        return redirect('employee')->with('success','Update Successfully');
    }
    
    /* Remove the specified resource from storage.*/   
    public function destroy($id)
    {
        Employee::find($id)->delete();
        return redirect('employee')->with('success','deleted Successfully');
    }
}
