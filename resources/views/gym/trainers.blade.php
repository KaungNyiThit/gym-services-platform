
@extends('layouts.app')

@section('content')

<style>

.card-img-top {
    height: 400px; 
    object-fit: cover; 
  }
  .custom{
    font-family: 'Roboto', sans-serif;
    font-weight: 700;
    font-size: 2rem;
  }

  @media(max-width: 768px){
    .card-img-top {
      height: 600px; 
      object-fit: cover; 
    }
  }

  @media(max-width: 430px){
    .card-img-top {
      height: 300px; 
      object-fit: cover; 
    }
  }
  

</style>

  <ul class="container navbar-nav me-auto pt-2">
    <li class="navbar-nav me-auto">
        <a href="{{ url("/trainer/add")}}" class="nav-link text-warning">New Trainer+</a>
    </li>
  </ul>  
  <div class="container">

    <div class="text-center py-3 shadow rounded my-4">
        <p class="h3 my-5 custom">Meet our professional trainers who are here to help you achieve your fitness goals.</p>

    </div>
  </div> 
<div class="container_fluid">
  <div class="row g-0  justify-content-center align-items-center">
    
    @foreach ($trainers as $trainer)

    <div class="card col-12 col-md-5 col-lg-4 col-xl-3 mx-2 mb-2" >
      
      @if ($trainer->photo === null)
          <img src="https://cdn-icons-png.flaticon.com/512/21/21104.png" class="card-img-top"> 
      @else
          <img src="storage/{{$trainer->photo}}" class="card-img-top " alt="..."> 
      @endif
     
        <div class="card-body">
          <h5 class="card-title">{{$trainer->name}}</h5>
          <p class="card-text">Expertise: {{$trainer->expertise ?? '...'}}</p>
          <p class="card-text">Bio: {{$trainer->bio ?? '...'}}</p>
          @if (auth()->check() && auth()->user()->is_admin)
            
          <a href="{{url("/trainers/delete/$trainer->id")}}" class="btn btn-warning">Delete</a>

          @endif
        </div>
    </div>
    @endforeach
  </div>
</div>
   


@endsection