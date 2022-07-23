@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>

    {{--  <!doctype html>
<html lang="en">
  <head>
    <title>Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
  <body>  --}}
      <div class="container py-5">
          <div class="row">
              <div class="col-xl-12 text-right">
                  <a href="{{ route('download.admin.pdf') }}" class="btn btn-success btn-sm">Export to PDF</a>
              </div>
          </div>

          <div class="card mt-4">
              <div class="card-header">
                    <h5 class="card-title font-weight-bold">DOMPDF Tutorial</h4>
              </div>

              <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($viewPdf as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->nombre }}</td>
                                    <td>{{ $user->precio }}</td>
                                </tr>
                            @empty

                            @endforelse
                        </tbody>
                    </table>
              </div>
          </div>
      </div>
  {{--  </body>
</html>  --}}


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
