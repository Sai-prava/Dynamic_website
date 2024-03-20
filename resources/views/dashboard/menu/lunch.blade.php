@include('dashboard.layouts.header')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header col-lg-6">
              <h3 class="box-title">Lunch all Menu</h3>
            </div><!-- /.box-header -->
            <div class="box-title col-lg-6">
                <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300" style="text-align: right;">
                  <a href="{{route('backend.addlunch')}}" class="btn btn-warning">Add new Menu</a>
                </h4>
              </div>
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Image</th>
                    <th>Item</th>
                    <th>Details</th>
                    <th>Price</th>
                    <th>Action</th>
                  </tr>
                </thead>
                
              <tbody>
                 @php
                     $i=1;
                 @endphp
                @foreach ($allLunch as $lunch)
                                 
                <tr>
                 <td>{{$i}}</td>
                 <td><img src="{{asset('images/'.$lunch->image)}}" width="100" alt=""></td>
                 <td>{{$lunch->item}}</td>
                 <td>{{$lunch->detail}}</td>
                 <td>{{$lunch->price}}</td>
                 <td>
                 <a href="{{route('backend.editlunch',['id'=>$lunch->id])}}"><img src="{{asset('image/pen.png')}}" alt="" width="30"></a>
                 <a onclick="confirmDelete('{{route('backend.deletelunch',['id'=>$lunch->id])}}')"><img src="{{asset('image/bin.png')}}" alt="" width="30"></a> 
                 </td>
                </tr>
               @php
                   $i++;
               @endphp
                @endforeach
              </tbody>
              </table>
            </div><!-- /.box-body -->
          </div><!-- /.box -->

         
        </div><!-- /.col -->
      </div><!-- /.row -->
    </section><!-- /.content -->
  </div>
  <script>
    function confirmDelete(deleteUrl) {
         var isConfirmed =confirm("Are you sure you want to delete this item?");
  
          if (isConfirmed) {
              window.location.href = deleteUrl;
          } else {
        
              alert("Deletion canceled");
          }
     }
    </script>

@include('dashboard.layouts.footer')