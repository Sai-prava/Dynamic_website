@include('dashboard.layouts.header')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        General Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">About Table</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
           
            <form action="{{route('backend.updateaboutbackend')}}" method="post" enctype="multipart/form-data">
              @csrf          
              <div class="box-body">
                <div class="form-group">
                  <input type="hidden" name="id" value="{{$editaboutbackend->id}}">
                    <label for="exampleInputFile">Image1</label>
                    <input type="file" id="exampleInputFile" name="image1">
                    <img src="{{asset('images/'.$editaboutbackend->image1)}}" width="100" alt="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Image2</label>
                    <input type="file" id="exampleInputFile" name="image2">
                    <img src="{{asset('images/'.$editaboutbackend->image2)}}" width="100" alt="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Image3</label>
                    <input type="file" id="exampleInputFile" name="image3">
                    <img src="{{asset('images/'.$editaboutbackend->image3)}}" width="100" alt="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Image4</label>
                    <input type="file" id="exampleInputFile" name="image4">
                    <img src="{{asset('images/'.$editaboutbackend->image4)}}" width="100" alt="">
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Heading</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="{{$editaboutbackend->heading}}" name="heading">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>       
                  <textarea name="description" id="" cols="30" rows="3" class="form-control">{{$editaboutbackend->description}}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Year</label>       
                    <input type="number" class="form-control" value="{{$editaboutbackend->year}}" name="year">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Popular</label>       
                    <input type="number" class="form-control" value="{{$editaboutbackend->popular}}" name="popular">                 
                </div>            
              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </form>
           
          </div>
        </div>
     </div>
    </section>
  </div>

@include('dashboard.layouts.footer')