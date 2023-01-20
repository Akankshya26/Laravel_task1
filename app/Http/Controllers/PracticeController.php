<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Http\Request;

class PracticeController extends Controller
{

    // public function index(Request $request)
    // {
    //     dd($request->getAcceptableContentTypes());
    // }

    // public function index(Request $request)
    // {
    //     if ($request->accepts(['css'])) {
    //         dd('true');
    //     } else {
    //         dd('no');
    //     }
    // }
    // public function index(Request $request)
    // {
    //     dd($request->header());
    // }
    //query(display name what we want to diaplay )
    // public function index(Request $request)
    // {
    //     dd($request->query('name', 'Rahul'));
    // }
    // public function index(Request $request, $id)
    // {
    //     dd($id);
    // }
    public function index1(Request $request)
    {

        if ($request->is('admin/*')) {
            return ('admin area');
        } else {
            dd('d');
        }
    }
    // //name route
    // public function index2(Request $request)
    // {
    //     if ($request->is('admin/*')) {
    //         dd('admin area');
    //     } else {
    //         dd('guest area');
    //     }
    // }
    // public function index(Request $request)
    // {
    //     $input = $request->all();
    // }
}
