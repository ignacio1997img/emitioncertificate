<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title') | {{ env('APP_NAME', 'SYSALMACEN') }}</title>
    <!-- Favicon -->
    <?php $admin_favicon = Voyager::setting('admin.icon_image', ''); ?>
    @if($admin_favicon == '')
        <link rel="shortcut icon" href="{{ asset('images/icon.png') }}" type="image/png">
    @else
        <link rel="shortcut icon" href="{{ Voyager::image($admin_favicon) }}" type="image/png">
    @endif

    <style>
        body{
            /* margin: 0px auto;
            font-family: Arial, sans-serif;
            font-weight: 100; */

            background: url('{{ asset("image/certificate.jpg") }}')  top center no-repeat;

            
            font-family: "Open Sans", sans-serif;
            color: #fff;
            /* background: url("../img/bg.jpg") top center no-repeat; */
            background-size: cover;
            position: relative;
        }
        
        .btn-print{
            padding: 5px 10px
        }
        #borde {
            /* border-color: rgb(26, 113, 2); */
            /* border-width: 5px;
            border-style: solid; */
            /* margin: 20px;
            padding: 20px; */
            /* width: 100; height: 1000px;  */
            /* background-image: url('/../image/certificate.jpg') */
        }
     
        #watermark img{
            position: relative;
            width: 450px;
        }
        @media print{
            .hide-print{
                display: none
            }
            .content{
                padding: 0px 0px
            }
        }
    </style>
    @yield('css')
</head>
<body>
    <div class="hide-print" style="text-align: right; padding: 10px 0px">
        <button class="btn-print" onclick="window.close()">Cancelar <i class="fa fa-close"></i></button>
        <button class="btn-print" onclick="window.print()"> Imprimir <i class="fa fa-print"></i></button>
    </div>

    
    <div class="content">
        @yield('content')
    </div>

    <script>
        document.body.addEventListener('keypress', function(e) {
            switch (e.key) {
                case 'Enter':
                    window.print();
                    break;
                case 'Escape':
                    window.close();
                default:
                    break;
            }
        });
    </script>

    @yield('script')
</body>
</html>