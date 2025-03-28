@include('fronted.layout.header')



<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container my-5 py-5">
        <div class="row align-items-center g-5">
            @foreach ($allheroSection as $herosection)
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-3 text-white animated slideInLeft">{{$herosection->heading}}</h1>
                <p class="text-white animated slideInLeft mb-4 pb-2">{{$herosection->description}}</p>
                <a href="{{route('fronted.book')}}" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A Table</a>
            </div>
            <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                <img style="border-radius: 50%;height:100vh;width:100vh;" class="img-fluid" src="{{asset('image/'.$herosection->image)}}" alt="">
            </div>
            @endforeach
        </div>
    </div>
</div>

            <!-- Service Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="section-title ff-secondary text-center text-primary fw-normal">Our Services</h5>
                        <h1 class="mb-5">Explore Our Services</h1>
                    </div>
                    <div class="row g-4">
                        @foreach ($allService as $Service)
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item rounded pt-3">
                                <div class="p-4">
                                    {{-- <i class="fa fa-3x fa-user-tie text-primary mb-4"></i> --}}
                                    <img style="height: 30px;" src="{{asset('images/'.$Service->logo)}}" alt="">
                                    <h5>{{$Service->heading}}</h5>
                                    <p>{{$Service->description}}</p>
                                </div>
                            </div>
                        </div>                
                        @endforeach
                    </div>
                  
                </div>
            </div>
            <!-- Service End -->

  <!-- About Start -->
  <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            @foreach ($allabout as $about)                                        
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="{{asset('images/'.$about->image1)}}">
                    </div>
                    <div class="col-6 text-start">
                        <img   style="margin-top: 25%;height:80%" class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="{{asset('images/'.$about->image2)}}">
                    </div>
                    <div class="col-6 text-end">
                        <img style="height:120%" class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="{{asset('images/'.$about->image3)}}">
                    </div>
                    <div class="col-6 text-end">
                        <img style="width: 200%;height:150%" class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="{{asset('images/'.$about->image4)}}">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                <h1 class="mb-4">{{$about->heading}}</h1>
                <p class="mb-4">{{$about->description}}</p>
                <p class="mb-4">{{$about->description}}</p>
                <div class="row g-4 mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">{{$about->year}}</h1>
                            <div class="ps-4">
                                <p class="mb-0">Years of</p>
                                <h6 class="text-uppercase mb-0">Experience</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">{{$about->popular}}</h1>
                            <div class="ps-4">
                                <p class="mb-0">Popular</p>
                                <h6 class="text-uppercase mb-0">Master Chefs</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- About End -->



         <!-- Menu Start -->
         <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                    <h1 class="mb-5">Most Popular Items</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <i class="fa fa-coffee fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Popular</small>
                                    <h6 class="mt-n1 mb-0">Breakfast</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <i class="fa fa-hamburger fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Special</small>
                                    <h6 class="mt-n1 mb-0">Launch</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Lovely</small>
                                    <h6 class="mt-n1 mb-0">Dinner</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    @foreach ($allmenu as $menu )
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="{{asset('images/'.$menu->image)}}" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>{{$menu->item}}</span>
                                                <span class="text-primary">{{$menu->price}}</span>
                                            </h5>
                                            <small class="fst-italic">{{$menu->detail}}</small>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    @foreach ($allLunch as $lunch )
                                        
                                    
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="{{asset('images/'.$lunch->image)}}" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>{{$lunch->item}}</span>
                                                <span class="text-primary">{{$lunch->price}}</span>
                                            </h5>
                                            <small class="fst-italic">{{$lunch->detail}}</small>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                              
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    @foreach ($alldinner as $dinner)
                                        
                                   
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="{{asset('images/'.$dinner->image)}}" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>{{$dinner->item}}</span>
                                                <span class="text-primary">{{$dinner->price}}</span>
                                            </h5>
                                            <small class="fst-italic">{{$dinner->detail}}</small>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->

          <!-- Reservation Start -->
          <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                        <h1 class="text-white mb-4">Book A Table Online</h1>
                        @if (Session::has('msg'))
                        <p class="alert alert-success">{{Session::get('msg')}}</p>                   
                        @endif
                        <form action="{{route('storebooking.email')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name" name="name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email" name="email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="date" name="date" class="form-control">
                                        <label for="datetime">Date & Time</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" name="people">
                                          <option value="People 1">People 1</option>
                                          <option value="People 2">People 2</option>
                                          <option value="People 3">People 3</option>
                                        </select>
                                        <label for="select1">No Of People</label>
                                      </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="message" cols="30" rows="5"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reservation Start --> 
     


       
        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
                    <h1 class="mb-5">Our Master Chefs</h1>
                </div>
                <div class="row g-4">
                    @foreach ($allteam as $team)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                       
                            
                   
                        <div class="team-item text-center rounded overflow-hidden">
                         
                            <div class="rounded-circle overflow-hidden m-4">
                                <img style="height: 220px;width:200px"  class="img-fluid" src="{{asset('image/'.$team->image)}}" alt="">
                            </div>
                            <h5 class="mb-0">{{$team->name}}</h5>
                            <small>{{$team->designation}}</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href="{{$team->fashbook}}"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href="{{$team->twitter}}"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href="{{$team->instagram}}"><i class="fab fa-instagram"></i></a>
                            </div>
                          
                        </div>
                      
                    </div>
                    
                
                    @endforeach 
                </div>
            </div>
        </div>
        <!-- Team End -->

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

         <!-- whatsapp integration start -->
         <div class="whatsapp-float whatsapp-right">
            <a href="https://wa.me/+917855942979" target="_blank"><img src="{{asset('images/Whatsapp-Logo.png')}}"  width="100" alt="" whatsapp-float-btn></a>
            </div>
    <!-- whatsapp integration end -->
    
        <style>
             .whatsapp-float {
                position: fixed;
                bottom: 20px; 
                z-index: 9999;
            }
            
            .whatsapp-right {               
                right: 20px; 
            }
        </style>
            
        
        @include('fronted.layout.footer')