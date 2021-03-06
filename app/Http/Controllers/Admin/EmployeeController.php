<?php

namespace App\Http\Controllers\Admin;

use App\Employee;
use App\Http\Controllers\Controller;
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
        $employees = Employee::all();
        return view('admin.employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|unique:employees|size:16',
            'nama' => 'required',
            'tempatlhr' => 'required',
            'tgllhr' => 'required|date',
            'alamat' => 'required',
            'nohp' => 'required',
            'rekening' => 'required',
            'npwp' => 'required',
        ]);

        Employee::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'tempatlhr' => $request->tempatlhr,
            'tgllhr' => $request->tgllhr,
            'alamat' => $request->alamat,
            'nohp' => $request->nohp,
            'rekening' => $request->rekening,
            'npwp' => $request->npwp,
        ]);

        return redirect('admin/employee')->with('status', 'Data berhasil ditambahkan!');
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

        return view('admin.employee.edit', compact('employee'));
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
        $request->validate([
            'nik' => 'required|size:16',
            'nama' => 'required',
            'tempatlhr' => 'required',
            'tgllhr' => 'required|date',
            'alamat' => 'required',
            'nohp' => 'required',
            'rekening' => 'required',
            'npwp' => 'required',
        ]);

        Employee::where('id', $employee->id)->update([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'tempatlhr' => $request->tempatlhr,
            'tgllhr' => $request->tgllhr,
            'alamat' => $request->alamat,
            'nohp' => $request->nohp,
            'rekening' => $request->rekening,
            'npwp' => $request->npwp,
        ]);

        return redirect('admin/employee')->with('status', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        Employee::destroy($employee->id);

        return redirect('admin/employee')->with('status', 'Data berhasil dihapus!');
    }
}
