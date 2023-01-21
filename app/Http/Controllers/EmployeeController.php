<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Company;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees=Employee::all();
        return view('employee.inedx',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $employee = Employee::with('catogary')->get();
        $company=Company::all();
        return view('employee.create',compact('company'));
       // return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* $pizza=new Pizza;
        $pizza->name=$request->name;
        $pizza->price=$request->price;
        $pizza->details=$request->details;
        $pizza->save();
        return redirect()->back(); */
        $company =Company::findOrFail($request->company_id);
        $company->Employees()->create([
            'name'=>$request->name,
            'nick'=>$request->nick,
            'email'=>$request->email,
            'telephone'=>$request->telephone,
            'position'=>$request->position,
        ]);
        return redirect('employee');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee=Employee::find($id);
        return view('employee.edit')->with('employee',$employee);
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
        $employee=Employee::find($id);
        $input=$request->all();
        $employee->update($input);
        return redirect('employee')->with('flash_message','employee updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Employee::destroy($id);
        return redirect('employee')->with('flash_message','employee deleted!!');
    }
}
