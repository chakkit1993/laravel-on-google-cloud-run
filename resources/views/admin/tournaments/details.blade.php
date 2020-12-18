@extends('layouts.master')

@section('content')
 <!-- Page Content -->
 <div id="content">
 <div class="card">


 <div class="card-header">
   <div class="row">

   <div class="col-md-4 ">
   <span class="h4">Tournament : {{$tournament->name}}</span>
   <br>
   <span class="h4">Date : {{$tournament->date}}</span>
   <br>
   <span class="h4">Address : {{$tournament->address}}</span>
   <br>
   <span class="h4">Description : {{$tournament->description}}</span>
   </div>
   <div class="col-md-4 ">
   <img src="/images/logo.png" class="card-img-top" alt="..."    style="width: 100%;  height: 180px;    object-fit: scale-down; background-color:black "  >
   </div>
   <div class="col-md-4 ">
   <a id="{{$tournament->id}}" href="#editTournamentsModal" class="btn btn-success editTournaments" data-toggle="modal">
            <i class="fa fa-edit"></i>
        </a>

   </div>
   </div>
      </div>

    


   <!--  main card body -->
   <div class="card-body">
   
 
   
    <div class="form-group">
    <div class="row">
    <div class="col-md-12 ">
    <div class="card">
                        <div class="card-header">
                            <span class="h4">Division List</span>
                            <button class="btn btn-success float-right" data-toggle="modal" data-target="#addDivisionModal">
                                <i class="fa fa-plus"><b> Add New</b></i>
                            </button>
                            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#uploadDivisionModal">
                            <i class="fas fa-file-upload"><b> Upload</b></i>
                            </button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Download</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($sl = 1)
                                @if($divisions->count()>0)
                                        @foreach($divisions as $division)
                                                <tr>
                                                    <td>{{$division->id}}</td>
                                                    <td>{{$division->img}}</td>
                                                    <td>{{$division->name}}</td>
                                                    <td>
                                                        <button  class="btn btn-primary  float-left" >  
                                                            <i class="fas fa-file-upload"><b> Download</b></i>
                                                        </button>
                                                      
                                                    </td>
                                                    <td>  
                                        
                                                        <a id="{{$division->id}}" href="#editDivisionModal" class="btn btn-success  float-left  editDivision" data-toggle="modal">
                                                                    <i class="fa fa-edit"></i>
                                                                </a>
                                                                <form class="delete_form" action="{{route('divisions.destroy',$division->id)}}" method="post">
                                                                        @csrf
                                                                    <input type="hidden" name="_method" value="DELETE">  
                                                                    <button type="submit" name="" value="Delete" class="btn btn-danger   float-left "><i class="fas fa fa-trash"></i> </button>

                                                                    </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                @endif
                                </tbody>
                                <!-- <tfoot>
                                <tr>
                                <th>No.</th>
                                    <th>Image</th>
                                    <th>User Name</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot> -->
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
    </div>    
    <div class="col-md-12 ">
    <div class="card">
                        <div class="card-header">
                            <span class="h4">Player List</span>
                            <button class="btn btn-success float-right" data-toggle="modal" data-target="#addPlayerModal">
                                <i class="fa fa-plus"><b> Add New</b></i>
                            </button>
                            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#uploadPlayerModal">
                            <i class="fas fa-file-upload"><b> Upload</b></i>
                            </button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Motorcycle No</th>
                                    <th>Tag RFID</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($sl = 1)
                          
                                <tr>
                                    <td>1</td>
                                    <td>admin</td>
                                    <td>12</td>
                                    <td>0012</td>
                                    <td>0872222222</td>
                                    <td>
                                    <span class="badge badge-success">Success</span>
                                      </td>


                                    <td>  
                                        <a id="" href="#editCatModal" class="btn btn-success edit" data-toggle="modal">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a id="" href="" class="btn btn-danger delete">
                                                    <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                           
                                </tbody>
                                <!-- <tfoot>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>User Role</th>
                                    <th>User Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                </tr>
                                </tfoot> -->
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    </div> 
  <!-- end col-12 -->


      </div> 
      </div>
      </div>   
    </div>

    
    
    
 </div>

 @include('admin.tournaments.add-player')
 @include('admin.tournaments.add-division')
 @include('admin.tournaments.edit-division')
 @include('admin.tournaments.edit-tournament')
 @include('admin.tournaments.upload-file-division')
 @include('admin.tournaments.upload-file-player')
 


@endsection