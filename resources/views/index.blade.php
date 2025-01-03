
@extends('layouts.app')

@section('content')
<style>
  .carousel-item img {
            object-fit: cover; 
            width: 100%; 
            height: 100%;
        }

        .carousel-caption {
            position: absolute;
            top: 50%;
            left: 50%;
            height: 200px;
            transform: translate(-50%, -50%);
            color: white;
            background: rgba(0, 0, 0, 0.5); 
            padding: 20px;
            border-radius: 10px;
            max-width: 90%;

        }
        

        @media (max-width: 768px) {
            .carousel-caption{
              height: 300px;
              align-content: center;
            }

            .carousel-item img {
            object-fit: cover; 
            width: 100%; 
        }
        }

        @media (max-width: 540px ) {

          .carousel-item img {
            object-fit: cover; 
            height: 100%;
            width: 100%;
            
        }
            .carousel-caption{
              font-size: 10px;
              height: 200px;
              width: 200px;
              align-content: center;
            }

            .carousel-caption h1 {
              font-size: 15px;
            }

            .carousel-caption a{
              font-size: 10px;
              padding: 10px;
            }
        }
</style>
<div class="row container_fluid  g-0 ">
    <div id="carouselExample" class="carousel slide ">
        <div class="carousel-inner">
          <div class="carousel-item active" >
            <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" style="height: 60vh"  alt="...">

            <div class="carousel-caption">
                <h1>Push Your Limits</h1>
                <p>Transform your body and mind with our gym workouts.</p>
                <a href="/membership/checkout" class="btn btn-primary">Get Started</a>
            </div>
            
          </div>
        </div>
    </div>
  
  <div class="card container my-4 g-0" style="width: 30rem; height: 40rem">
      <img src="https://fastpayltd.co.uk/wp-content/uploads/2020/01/fitness-gym-business-7.jpg?width=375&name=fitness-gym-business.jpg" class="card-img-top"  style="height: 410px; object-fit:cover" alt="Service Image">
      <div class="card-body mt-4">
          <h5 class="card-title">Services</h5>
          <p class="card-text">Explore the variety of services we offer to help you achieve your fitness goals.</p>
          <a href="/gym-services" class="btn btn-primary">Learn More</a>
      </div>
  </div>
  
  <div class="card container my-4 g-0" style="width: 30rem; height: 40rem">
      <img src="https://static.wixstatic.com/media/861dbe_45ea806dd85049298df1ce3ed6400603~mv2.jpg/v1/fill/w_466,h_404,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/Gym%20Membership%20Glasgow%20.jpg" class="card-img-top" alt="Contact Image">
      <div class="card-body mt-4">
          <h5 class="card-title">Contact Us</h5>
          <p class="card-text">Information on how to contact the gym.</p>
          <a href="/contact" class="btn btn-primary  mt-3">Contact</a>
      </div>
  </div>
  
  <div class="card container my-4 g-0" style="width: 30rem">
      <img src="storage/photos/WL0ffYKIIG71VKTPfVSPu1dqSMT3AWHl9872NYZ6.png" class="card-img-top" style="height: 410px; object-fit:cover" alt="Trainer Image">
      <div class="card-body mt-4">
          <h5 class="card-title">Trainers</h5>
          <p class="card-text">Meet our professional trainers who will guide you through your fitness journey.</p>
          <a href="/trainers" class="btn btn-primary">View Trainers</a>
      </div>
  </div>
</div>
 
@endsection