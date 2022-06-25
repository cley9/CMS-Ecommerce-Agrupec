@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <h4>dfadfafd</h4>

    
    <div class="col-md-3 col-sm-6 col-12">
    <a href="{{route('list.admin.list')}}">
      <div class="info-box bg-teal">
            <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>
            <div class="info-box-content">
                  <span class="info-box-text-">Agregar nuevos productos</span>
                  <span class="info-box-number">41,410</span>
                  <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                  </div>
                  <span class="progress-description">
                        70% Increase in 30 Days
                  </span>
            </div>
      </div>
</a>
</div>



      <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box bg-warning">
      <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
      <div class="info-box-content">
      <span class="info-box-text">Events</span>
      <span class="info-box-number">41,410</span>
      <div class="progress">
      <div class="progress-bar" style="width: 70%"></div>
      </div>
      <span class="progress-description">
      70% Increase in 30 Days
      </span>
      </div>
      
      </div>
      
      </div>




      {{--    --}}

      <h5 class="mb-2 mt-4">Small Box</h5>
<div class="row">
<div class="col-lg-3 col-6">

<div class="small-box bg-info">
<div class="inner">
<h3>150</h3>
<p>New Orders</p>
</div>
<div class="icon">
<i class="fas fa-shopping-cart"></i>
</div>
<a href="#" class="small-box-footer">
More info <i class="fas fa-arrow-circle-right"></i>
</a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-success">
<div class="inner">
<h3>53<sup style="font-size: 20px">%</sup></h3>
<p>Bounce Rate</p>
</div>
<div class="icon">
<i class="ion ion-stats-bars"></i>
</div>
<a href="#" class="small-box-footer">
More info <i class="fas fa-arrow-circle-right"></i>
</a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-warning">
<div class="inner">
<h3>44</h3>
<p>User Registrations</p>
</div>
<div class="icon">
<i class="fas fa-user-plus"></i>
</div>
<a href="#" class="small-box-footer">
More info <i class="fas fa-arrow-circle-right"></i>
</a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-danger">
<div class="inner">
<h3>65</h3>
<p>Unique Visitors</p>
</div>
<div class="icon">
<i class="fas fa-chart-pie"></i>
</div>
<a href="#" class="small-box-footer">
More info <i class="fas fa-arrow-circle-right"></i>
</a>
</div>
</div>

</div>


<div class="row">
<div class="col-lg-3 col-6">

<div class="small-box bg-info">

<div class="overlay">
<i class="fas fa-3x fa-sync-alt"></i>
</div>

<div class="inner">
<h3>150</h3>
<p>New Orders</p>
</div>
<div class="icon">
<i class="fas fa-shopping-cart"></i>
</div>
<a href="#" class="small-box-footer">
More info <i class="fas fa-arrow-circle-right"></i>
</a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-success">

<div class="overlay dark">
<i class="fas fa-3x fa-sync-alt"></i>
</div>

<div class="inner">
<h3>53<sup style="font-size: 20px">%</sup></h3>
<p>Bounce Rate</p>
</div>
<div class="icon">
<i class="ion ion-stats-bars"></i>
</div>
<a href="#" class="small-box-footer">
More info <i class="fas fa-arrow-circle-right"></i>
</a>
</div>
</div>

</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop