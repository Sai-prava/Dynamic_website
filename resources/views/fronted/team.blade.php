@include('fronted.layout.header')


<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Our Team</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Team</li>
            </ol>
        </nav>
    </div>
</div>

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
        @include('fronted.layout.footer')