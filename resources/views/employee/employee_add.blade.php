@extends('main')
@section('title','| Employees')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Employee Management
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-8" >


          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Employee</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <form role="form" action="{{ URL::to('employees/add-employee') }}" method="POST">
            <div class="box-body">
                <div class="form-group">
                  <label for="FirstName">First Name</label>
                  <input type="text" name='first_name' class="form-control" placeholder="Enter Name">
                </div>
                <div class="form-group">
                  <label for="LastName">Last Name</label>
                  <input type="text" name='last_name' class="form-control"  placeholder="Enter Last Name">
                </div>
                <div class="form-group">
                  <label for="contactno">Contact Number</label>
                  <input type="text" name='contact_number' class="form-control" placeholder="Enter Contact Number">
                </div>
                <div class="form-group">
                  <label for="contactno">Designation</label>
                  <input type="text" name='designation' class="form-control" placeholder="Enter Designation">
                </div>
                <div class="form-group">
                  <label for="Email">Email Id</label>
                  <input type="text" name='email_id' class="form-control" placeholder="Enter Email Id">
                </div>
                <div class="form-group">
                  <label for="Password">Password</label>
                  <input type="password" name='password' class="form-control" placeholder="Enter Password">
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
@endsection