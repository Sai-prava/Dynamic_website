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
              <h3 class="box-title">BreakFast Table</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
           
            <form action="{{route('backend.updatelunch')}}" method="post" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="id" value="{{$editlunch->id}}">
              <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <input type="file" id="exampleInputFile" name="image">
                    <img src="{{asset('images/'.$editlunch->image)}}" width="100" alt="">
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Item</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="{{$editlunch->item}}" name="item">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Detail</label>       
                  <textarea name="detail" id="" cols="30" rows="3" class="form-control">{{$editlunch->detail}}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>       
                    <input type="number" class="form-control" id="exampleInputEmail1" value="{{$editlunch->price}}" name="price">
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