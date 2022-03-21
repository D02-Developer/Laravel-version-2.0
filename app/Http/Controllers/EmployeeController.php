<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class EmployeeController extends Controller
{
    public function login(Request $request)
    {
        $employee = Register::where(['email' => $request->email])->get();
        if (Crypt::decrypt($employee[0]->password) == $request->input('password')) {
            $request->session()->put('emp', $employee[0]->name);
            return redirect('/home')->with('message', 'Employee Login Successfully.');
        } else {
            return redirect('login')->with('message', 'Invalid Email or Password.');
        }

        // validator(request()->all(), [
        //     'email' => ['required', 'email'],
        //     'password'=> ['required']
        // ])->validate();

    }

    public function register(Request $request)
    {
        $input = new Register;
        $input->name = $request->input('name');
        $input->email = $request->input('email');
        $input->password = Crypt::encrypt($request->input('password'));
        // $input = $request->all();
        // Register::create($input);    
        $input->save();
        return redirect('login')->with('message', 'Employee Register Successfully.');
    }

    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees', 'employees'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|min:4',
            'last_name' => 'required|min:4',
            'email' => 'required',
            'address' => 'min:50|nullable',
            'mobile' => 'required',
            'gender' => 'required',
            'role' => 'required',
            'dateofbirth' => 'required|date'
        ], [
            'first_name.required' => 'First Name is required.',
            'first_name.min' => 'First Name should be more than 4 charater.',
            'last_name.required' => 'Last Name is required.',
            'last_name.min' => 'Last Name should be more than 4 charater.',
            'email.required' => 'Email is required.',
            'address.min' => 'Address should be more than 50 charater.',
            'mobile.required' => 'Phone is required.',
            'gender.required' => 'Gender is required.',
            'role.required' => 'Role is required.',
            'dateofbirth.required' => 'Date of Birth is required.'
        ]);

        Employee::create($validatedData);
        return redirect('home')->with('message', 'Employee Added Successfully.');
    }

    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('employees.edit')->with('employees', $employee);
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);

        $validatedData = $request->validate([
            'first_name' => 'required|min:4',
            'last_name' => 'required|min:4',
            'email' => 'required',
            'address' => 'min:50|nullable',
            'mobile' => 'required',
            'gender' => 'required',
            'role' => 'required',
            'dateofbirth' => 'required|date'
        ], [
            'first_name.required' => 'First Name is required.',
            'first_name.min' => 'First Name should be more than 4 charater.',
            'last_name.required' => 'Last Name is required.',
            'last_name.min' => 'Last Name should be more than 4 charater.',
            'email.required' => 'Email is required.',
            'address.min' => 'Address should be more than 50 charater.',
            'mobile.required' => 'Phone is required.',
            'gender.required' => 'Gender is required.',
            'role.required' => 'Role is required.',
            'dateofbirth.required' => 'Date of Birth is required.'
        ]);

        // $input = $request->all();
        $employee->update($validatedData);
        return redirect('home')->with('message', 'Employee Updated Successfully.');
    }

    public function destroy($id)
    {
        Employee::find($id)->delete();
        return redirect('home')->with('message', 'Employee Deleted Successfully.');
    }
}
