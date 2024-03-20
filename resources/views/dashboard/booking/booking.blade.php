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
              <h3 class="box-title">View all Booking</h3>
            </div><!-- /.box-header -->
            <div class="box-title col-lg-6">
                <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300" style="text-align: right;">
                  
                </h4>
              </div>
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>People</th>
                    <th>Message</th>
                    <th>Action</th>
                  </tr>
                </thead>
                
              <tbody>
                 @php
                     $i=1;
                 @endphp
               @foreach ($viewbooking as $booking)
                                 
                <tr>
                 <td>{{$i}}</td>
                 <td>{{$booking->name}}</td>
                 <td>{{$booking->email}}</td>
                 <td>{{$booking->date}}</td>
                 <td>{{$booking->people}}</td>
                 <td>{{$booking->message}}</td>
                 <td>
                
                 <a onclick="confirmDelete('{{route('backend.deletebooking',['id'=>$booking->id])}}')"><img src="{{asset('image/bin.png')}}" alt="" width="30"></a>
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