<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Person;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Barryvdh\DomPDF\Facade\Pdf;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function register()
    {
        // return 1;
        return view('register');
    }

    public function search(Request $request)
    {
        $data = Person::where('ci', $request->ci)->where('deleted_at', null)->first();       
        return view('search', compact('data'));
    }

    public function codePhone(Request $request){
        Certificate::where('people_id', $request->id)->update(['deleted_at'=>Carbon::now()]);

        $data = Certificate::create([
            'people_id'=>$request->id
        ]);
        $people = Person::where('id', $data->people_id)->first();


        Http::get('http://whatsapp.tecnologiaweb.org//?number=591'.$request->phone.'&message=Hola *'.$people->first_name.' '.$people->last_name.'*.%0A%0A*GADBENI* %0A%0APara poder descargar su certificado has clic en el enlace de abajo.%0A👇👇%0Acertificado.capresi.net/certificate/download/'.$people->id);

        return true;
    }


    public function download($id)
    {
        // return 1;

        $people = Person::where('id', $id)->where('deleted_at', null)->first();

        return PDF::loadView('certificate.print', compact('people') )
        ->setPaper('A4', 'landscape')
        ->stream('CERTIFICADO.pdf');

        // $people = Person::where('id', $id)->where('deleted_at', null)->first();

        // return view('certificate.print', compact('people'));
    }


}
