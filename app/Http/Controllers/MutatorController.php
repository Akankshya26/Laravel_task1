<?php

namespace App\Http\Controllers;

use App\Enum\RoleEnum;
use App\Models\Mutator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MutatorController extends Controller
{
    //mutator
    function index()
    {
        $mutator = new Mutator;
        $mutator->first_name = "Neha";
        $mutator->last_name = "Vasava";
        $mutator->email = "nv@gmail.com";
        $mutator->address = "bharuch";
        $mutator->created_at = '2023-01-03 01:23:32';
        $mutator->status = 1;
        $mutator->role = 'user';
        $mutator->save();
    }

    //accsesor
    public function show(Request $request)
    {
        $abc = Mutator::all();
        return $abc;
    }

    // public function json()
    // {
    //     $jsonData = '[{"id":2,"first_name":"Akankshya","last_name":"Thakur","city":"baroda","contact":12345555},
    //     {"id":3,"first_name":"Neha","last_name":"Vasava","city":"Bharuch"},
    //     {"id":4,"first_name":"Rakhee","last_name":"singh","city":"Vapi"}]';
    //     $data = json_decode($jsonData, true);
    //     dd($data);
    // }
}
