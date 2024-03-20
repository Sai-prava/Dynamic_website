@include('fronted.layout.header')


<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Testimonial</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Testimonial</li>
            </ol>
        </nav>
    </div>
</div>
       
        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
                    <h1 class="mb-5">Our Clients Say!!!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    @foreach ($alltestimonial as $testimonial )
                        
                 
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>{{$testimonial->description}}</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{asset('images/'.$testimonial->image)}}" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">{{$testimonial->name}}</h5>
                                <small>{{$testimonial->Profession}}</small>
                            </div>
                        </div>
                    </div>
                  
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        @include('fronted.layout.footer')