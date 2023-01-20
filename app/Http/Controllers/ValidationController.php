<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Rules\Uppercase;
use Illuminate\Http\Request;

class ValidationController extends Controller
{
    function showform()
    {
        return view('Register');
    }

    function signup(Request $request)
    {
        //single rule
        // $validate = $request->validate([
        //     'email' => 'required',
        //     'password' => 'required'
        // ]);
        //multiple rule(Array)
        // $validate = $request->validate([
        //     'email' => ['required', 'min:20'],
        //     'password' => ['required']
        // ]);
        //multiple rules with pipe symbol
        $validate = $request->validate([
            //'name' => ['required', new Uppercase],
            //using clouser
            'name' => [
                'required',
                function ($attribute, $value, $fail) {
                    if ($value === 'sonam') {
                        $fail('The ' . $attribute . ' is invalid');
                    }
                }
            ],
            'email' => 'required|min:10',
            'password' => 'required'
        ]);

        $image = $request->image;
        $data = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $data);
        File::create($request->only('name', 'email', 'password', 'file'));
        dd($request->all());
        // return redirect('/')->with('status', 'Data Inserted');
        // dd($validate);
        // print_r('form validated');
        // $input = $request->except('_token');
        // return view('Register', ['data' => $input]);
    }
}
