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
              <h3 class="box-title">Our Master Chefs</h3>
            </div><!-- /.box-header -->
            <div class="box-title col-lg-6">
                <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300" style="text-align: right;">
                  <a href="{{route('backend.addteam')}}" class="btn btn-warning">Add new member</a>
                </h4>
              </div>
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Fashbook</th>
                    <th>Twitter</th>
                    <th>Instagram</th>               
                    <th>Action</th>
                  </tr>
                </thead>
                
              <tbody>
                   @php
                       $i=1;
                   @endphp          
               @foreach ($allteam as $team )
                   
             
                <tr>
                 <td>{{$i}}</td>
                 <td><img src="{{asset('image/'.$team->image)}}" width="100" alt=""></td>
                 <td>{{$team->name}}</td>
                 <td>{{$team->designation}}</td>
                 <td>{{$team->fashbook}}</td>
                 <td>{{$team->twitter}}</td>
                 <td>{{$team->instagram}}</td>
                 <td>
                 <a href="{{route('backend.editteam',['id'=>$team->id])}}"><img src="{{asset('image/pen.png')}}" alt="" width="30"></a>
                 <a onclick="confirmDelete('{{route('backend.deleteteam',['id'=>$team->id])}}')"><img src="{{asset('image/bin.png')}}" alt="" width="30"></a>
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