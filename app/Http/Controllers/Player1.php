<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employer;

class Player1 extends Controller
{
    public function welcome()
    {
        $data = array(
            'info' => Employer::all(),
        );
        return view('welcome', $data);
    }

    
    public function store(Request $request)
    {
        $record = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'age' => $request->input('age'),
            'birthdate' => $request->input('birthdate'),
            'gender' => $request->input('gender'),
            'civil_status' => $request->input('civil_status'),
            'municipality' => $request->input('municipality'),
            'address' => $request->input('address'),
            'contact_number' => $request->input('contact_number'),
        ];
    
        Employer::create($record);
    
        return redirect('/')->with('success', 'Employee added successfully.');
    }

    public function update_records(Request $request)
    {
        $record = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'age' => $request->input('age'),
            'birthdate' => $request->input('birthdate'),
            'gender' => $request->input('gender'),
            'civil_status' => $request->input('civil_status'),
            'municipality' => $request->input('municipality'),
            'address' => $request->input('address'),
            'contact_number' => $request->input('contact_number'),
        ];

        Employer::where('id', $request->input('id'))->update($record);

        return redirect('/');

    }

    public function edit_form($id)
    { 
        $data  = array(           
            'info' => Employer::where('id', $id)->first(),
        );
        return view('/', $data);
    }
    

    
    public function delete($id)
    {       
        Employer::find('id',$id)->delete();

        return redirect('/')->with('success', 'Employee deleted successfully.');
    }
}
