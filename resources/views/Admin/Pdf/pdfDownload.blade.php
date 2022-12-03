<!doctype html>
<html lang="en">

<head>
    <title>Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ public_path('css/mystyle.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ public_path('css/style-pdf.css') }}" type="text/css">
    <style>
        table {
            font-size: 12px;
        }
    </style>
</head>

<body>
    <div class="container-fluid head--pdf d-flex justify-content-center align-items-center ">
        <h5 class="text-center font-weight-bold ">AgrupecVentas</h5>
        <h6 class="text-center h7">Contactenos : cleyutp@gmail.com</h6>
        <div class="">

        </div>
        {{-- <h2>s</h2> --}}
    </div>
    <div class="container py-5">
        <h6>fecha :@php
            date_default_timezone_set('America/Lima');
            //$dataHora=date('m-d-Y h:i:s a', time());
            $dataDia = date('d/m/Y ');
            echo $dataDia;
        @endphp</h6>
        <h6>hora: @php
            $dataHora = date('h:i');
            echo $dataHora;
        @endphp</h6>
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Nuevo precio</th>
                    <th>Peso</th>
                    {{--  <th></th>  --}}
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->nombre }}</td>
                        <td>S/ {{ number_format($user->precio, 2, '.', ',') }}</td>
                        <td>{{ $user->cantidad }}</td>
                        <td>S/ {{ number_format($user->newPrecio, 2, '.', ',') }}</td>
                        <td>{{ $user->peso }} g</td>
                        {{--  <td>{{ $user->created_at }}</td>  --}}
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
