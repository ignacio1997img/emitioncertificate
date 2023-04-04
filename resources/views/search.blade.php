@if ($data)
    <i class="fa-brands fa-square-whatsapp" style="color: #52ce5f; font-size: 2em;"></i>
    <p style="color: black">Enviar enlace de descarga a +591-XXXX{{substr($data->phone, -4)}}</p>
    <a href="#" id="label-link" style="display:block" onclick="codeVerification({{$data->id}}, {{$data->phone}})"><i class="fa-solid fa-download"></i> Enviar</a>    
@else
    {{-- <small style="color: brown">Datos no encontrado</small> --}}
    <b class="text-danger" style="display:block; color: brown">Datos no encontrado..</b>

@endif