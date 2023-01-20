<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Mail\TestEmail;
use App\Mail\OrderShipped;
use App\Mail\SendDemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FileController extends Controller
{
    public function form()
    {
        return view('file');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'file_name' => 'required'
        ]);
        $image = $request->file_name;
        $name = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('image'), $name);
        $request['file_name'] = $name;

        $files =   File::create($request->only('name', 'email', 'password', 'file_name'));
        // return redirect()->back()->with('success', 'image uploaded');
        return response()->json([
            'mes' => 'done',
            'data' =>  $files
        ]);
    }

    public function mail()
    {
        // $email = "abc@gmail.com";
        // $mailData = [
        //     "name" => "TEST NAME",
        //     "dob" => "26/06/2000"
        // ];
        // // dd($email);
        // Mail::to($email)->send(new TestEmail($mailData));
        // dd("Email is successfully send ");


        //     $email = 'positronx@gmail.com';

        //     $maildata = [
        //         'title' => 'Laravel Mail Sending Example with Markdown',
        //         'url' => 'https://www.positronx.io'
        //     ];

        //     Mail::to($email)->send(new SendDemoMail($maildata));

        //     dd("Mail has been sent successfully");
        // }

        $email = 'positronx@gmail.com';

        $order = [
            'name' => 'Akankshya',
            'email' => 'ak@gmail.com',
            'city' => 'odisha'
        ];

        Mail::to($email)->send(new OrderShipped($order));

        dd("Mail has been sent successfully");
    }
}
