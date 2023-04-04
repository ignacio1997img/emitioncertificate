<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Person;


class PeopleController extends Controller
{
    public function store(Request $request)
    {
        // return $request;
        DB::beginTransaction();
        try {
            Person::create([
                'ci'=>$request->ci,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'gender'=>$request->gender,
                'status'=>0,
                'phone'=>$request->phone,
                'institution'=>$request->institution,
                'age'=>$request->age,


            ]);
                // return 1;
            DB::commit();
            toastr()->success('Ha sido registrado con exito' , 'Información' , ["closeButton" => "true","progressBar" => "true" ]);
            return redirect('/');

        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect('/')->with(['message' => 'Error....', 'alert-type' => 'error']);
        }
    }
}
