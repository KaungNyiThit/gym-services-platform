@extends('layouts.app')

@section('content')
<style>
    #contact-us{
        background: url('https://powerhousegym.com/wp-content/themes/basic-hunchfree/img/contact-header.png');
        background-size: cover;
        background-repeat: no-repeat;
        padding: 200px 0;
        text-align: center;
        background-position:  center;
        background-color: rgba(22, 21, 21, 0.5);
        position: relative;

        
    }

    
    #contact-us::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(39, 37, 37, 0.5); /* Adjust the opacity as needed */
        z-index: 0;
    }

    #contact-us h1 {
        position: relative;
        z-index: 2;
        font-weight: 700;
        font-size: 72px;
    }
</style>
<div class="container_fluid text-white" id="contact-us">
    <h1>Contact Us</h1>
</div>  

<div class="container mt-5" >
    @if (session('info'))
        <div class="alert alert-primary">
           {{session('info') }} 
        </div>  
    @endif
    
    <form class="p-5 shadow rounded" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required @if (auth()->check() &&  auth()->user()->is_admin) disabled @endif>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required @if (auth()->check() && auth()->user()->is_admin) disabled @endif>
        </div>

        <div class="form-group">
            <label for="message">Message:</label>
            <textarea class="form-control" id="message" name="message" rows="5" required @if (auth()->check() && auth()->user()->is_admin) disabled @endif></textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-2" @if (auth()->check() && auth()->user()->is_admin) disabled @endif>Submit</button>
    </form>


    <div class="container mt-5">
        <div class="row text-center">
            <div class="col-md-4 mb-5">
                <i class="fa-solid fa-location-dot" style="font-size: 2rem"></i>
                <p class="mt-4">123 Main Street, New York, NY 10001</p>
            </div>
            <div class="col-md-4 mb-5">
                <i class="fa-solid fa-phone" style="font-size: 2rem"></i>
                <p class="mt-4">Phone/Telegram/Viber: +959123456789</p>
            </div>
            <div class="col-md-4 mb-5">
                <i class="fa-solid fa-envelope" style="font-size: 2rem"></i>
                <p class="mt-4">Email: name@email.com</p>
            </div>
        </div>
    </div>

    <div id="map" style="height: 500px; margin: 20px 0 70px 0"></div>
</div>
<script>
    const map = L.map('map').setView([16.8515894, 96.1726870], 16); // Coordinates for Yangon
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
    }).addTo(map);

    L.marker([16.8515894, 96.1726870]).addTo(map)
        .bindPopup('Hello, this is our gym place!')
        .openPopup();
</script>

@endsection