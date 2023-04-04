@extends('layouts.layout-prinf')

@section('page_title', 'Certificado')

@section('content')
<div id="borde">
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    
    <table width="100%">
        <tr>   
            <td style="text-align: center;  width:95%">
                <h1 style="margin-bottom: 0px; margin-top: 5px; font-size: 25px; color:rgb(0, 0, 0)">
                    {{$people->first_name}} {{$people->last_name}}
                </h1>
            </td>
        </tr>
    </table>
   
</div>
@endsection