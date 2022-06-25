@extends('layout.layout')

@section('header')
      <div class="container pt-4 mb-4">
{{--  <div class="row">  --}}
      <div class="row row-cols-12 row-cols-md-3 g-4 d-flex justify-content-center justify-content-lg-start">
            <div class="col-lg-3 col-10  ">
              <div class="card h-80">
                    <div class="text-center pt-4">
                <img src="{{ session()->get('avatar')}}" class="card-img-top icons--perfil--user " alt="...">
            </div>
            <div class="card-body">
                  <h5 class="card-title fw-normal h3">{{session()->get('name');}}</h5>
                  <h5 class="card-title fw-normal h6">{{session()->get('email');}}</h5>
                  {{--  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>  --}}
                 
                <hr>

              {{--  <div class="card card-body col-4 me-md-4 mb-3 me-2 shadow rounded-2  ">
                    <iframe  class="card-img-top" src="https://www.youtube.com/embed/" frameborder="0" allowfullscreen>  </iframe>
                    <hr>
              <h4 class="fw-normal h6 "><?php echo $itemRow->snippet->title;  ?></h4>  --}}
               {{--  <div class="d-flex justify-content-end  align-items-center">
                 <a href="#" class="me-4 text-success " style="hover:red;">
                 <span class=" text-success " ><i class="i bi-cloud-arrow-down text-success "style="font-size:18px;" ></i> <?php echo rand(8, 234); ?></span>
               </a>
               <a href="#" class=" text-danger">
                 <span class="text-danger"><i class="bi bi-heart text-danger"  style="font-size:18px;"></i> <?php echo rand(8, 234); ?> </span>
               </a>
                  </div>
              </div>  --}}
              <a href="#" class="me-4 text-success " style="hover:red;">
                  <span class=" text-success " ><i class="i bi-cloud-arrow-down text-success "style="font-size:18px;" ></i> <?php echo rand(8, 234); ?></span>
                </a>
                <a href="#" class=" text-danger ">
                  <span class="text-danger"><i class="bi bi-heart text-danger"  style="font-size:18px;"></i> <?php echo rand(8, 234); ?> </span>
            </a><br><br>
               



                <a href="" class="btn btn-info col-12 ">Edit Perfil</a>
                </div>
              </div>
            </div>
            
          
          {{--  </div>  --}}
{{--  <div class="col-4 shadow">  --}}

{{--  <div class="bg-info row">
<h5> Información personal</h5>
<div class="col">
<img src="{{ session()->get('avatar')}}" alt="">
</div>
<div class="col">
<h5>{{session()->get('email')}}</h5>
<h6>{{session()->get('name')}}</h6>

</div>
</div>  --}}
{{--  </div>  --}}
</div>
      </div>
@endsection