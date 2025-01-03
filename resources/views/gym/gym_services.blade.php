@extends('layouts.app')

@section('content')

<style>
.gym-services{
    background: url('https://powerhousegym.com/wp-content/themes/basic-hunchfree/img/gym-services-header.png');
    background-size: cover;
    background-repeat: no-repeat;
    padding: 200px 0;
    text-align: center;
    background-position:  center; 
    background-color: rgba(255, 255, 255, 0.5);
    position: relative;
}

.gym-services h1{
    font-size: 5rem;
    font-weight: 600;
    color: #fefefe;
}

#addServiceForm {
    position: fixed;
    top: -100%;
    left: 0;
    right: 0;
    background-color: #f8f9fa; 
    padding: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition:0.2s ease-in-out;
    z-index: 1;
}

#addServiceForm.show {
    top: 0;
}

@media(max-width: ){

}
</style>
<div class="text-black" style="min-height: 1200px">
    <div class="gym-services">
        <div class="container">
            <h1>Gym Services</h1>
        </div>
    </div>

    <div class="text-center" style="color: black; padding: 80px 0">
        <div class="container">
            <div >
                <h2 style="font-size: 2.5rem">
                    With Powerhouse Gyms all over the world, each facility offers services unique to the area & needs of its members.
                </h2>
            </div>

            <div class="pt-3" style="opacity: 0.7;">
                <p>Below are some of the services & features found at Powerhouse Gyms worldwide. For services available in your area, please visit our locations page to find your gym’s unique offerings.</p>
            </div>
        </div>
    </div>

    {{-- services --}}

    <div class="container text-black">
        @if (auth()->check() && auth()->user()->is_admin)   
        <button class="btn btn-primary d-block mx-auto" data-bs-toggle="collapse" data-bs-target="#addServiceForm" aria-expanded="false" aria-controls="addServiceForm">
            Add Service
        </button>
        @endif

        {{-- form --}}
        @if(auth()->check() && auth()->user()->is_admin)

        <div id="addServiceForm">
        <form method="post" class="mb-2" enctype="multipart/form-data">
            @csrf

            <h2>Add Services</h2>

            <div class="mb-3">
                <label for="photo" class="form-label">Photo</label>
                <input type="file" class="form-control" id="photo" name="photo">
            </div>

            <div class="mb-3">
                <label for="serviceName" class="form-label">Service Name</label>
                <input type="text" class="form-control" name="name" id="serviceName" placeholder="Enter service name">
            </div>

            <div class="mb-3">
                <label for="serviceHeader" class="form-label">Service Header</label>
                <input type="text" class="form-control" name="header" id="serviceName" placeholder="Enter service header">
            </div>


            <div class="mb-3">
                <label for="serviceDescription" class="form-label">Service Description</label>
                <textarea class="form-control" name="text" id="serviceDescription" rows="4" placeholder="Enter service description"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Submit</button>

            <button type="button" data-bs-toggle="collapse" data-bs-target="#addServiceForm" class="btn btn-danger">Close</button>
        </form>
        </div>
        @endif

        <div class="row ">
            @foreach ($services as $service)
                
            <div class="col-12 col-md-6 col-lg-4 text-center my-5">
                <img src="storage/{{$service->photo}}" alt="..." class="img-fluid pb-3">
                <h3 style="font-size: 1.2rem">{{ $service->header }}</h2>
                <p style="opacity: 0.7; ">{{ $service->text }}</p>
            </div>

            @endforeach

        </div>
    </div>
</div>
@endsection