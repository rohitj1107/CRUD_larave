<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Company;
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
        $employee = Employee::all();
        return view('employee/index',compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list = Company::select('name')->get();
        return view('employee/create',compact('list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = new Employee;
        $employee->name = $request->name;
        $employee->company_name = $request->company_name;
        $employee->profile = $request->profile;
        if ($employee->save()) {
            return redirect(Route('employee.index'));
        } else {
            return redirect(Route('employee.index'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        $employee = Employee::find($employee->id);
        $list = Company::select('name')->get();
        return view('employee/edit',compact('employee','list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $employee->name = $request->name;
        $employee->company_name = $request->company_name;
        $employee->profile = $request->profile;
        if ($employee->save()) {
            return redirect(Route('employee.index'));
        } else {
            return redirect(Route('employee.index'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        if (Employee::delete($employee->id)) {
            return redirect(Route('employee.index'));
        } else {
            return redirect(Route('employee.index'));
        }
    }
}
