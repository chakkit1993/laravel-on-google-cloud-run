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
   <img src="/images/tournament/1.jpg" class="card-img-top" alt="..."    style="width: 100%;  height: 180px;    object-fit: scale-down; "  >
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
                            <span class="h4">Division List {{$divisions->count()}}</span>
                            <button class="btn btn-success float-right" data-toggle="modal" data-target="#addDivisionModal">
                                <i class="fa fa-plus"><b> Add New</b></i>
                            </button>
                            
<!-- 
                            <form class="" action="" method="post">
                                @csrf
                            <input type="hidden" name="_method" value="{{$tournament->id}}">  
                            <button type="submit" name="" value="ID" class="btn btn-danger   float-left "><i class="fas fa fa-trash"></i> </button>

                            </form> -->


                            <a class="btn btn-danger float-right" href="{{route('divisions.export',$tournament->id)}}"   >
                            <i class="fas fa-file-download"><b> Download</b></i>
                            </a>
                            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#uploadDivisionModal">
                            <i class="fas fa-file-upload"><b> Upload</b></i>
                            </button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        @if($divisions->count()>0)
                            <table id="tabelDivision" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <!-- <th>Image</th> -->
                                    <th>Name</th>
                                    <th>Download</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($sl = 1)
                                        <?php $n = 0; ?>
                                        @foreach($divisions as $division)
                                                <tr>
                                                <?php $n++; ?>
                                                    <td>{{$n}}</td>
                                                    <!-- <td>{{$division->img}}</td> -->
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
                            @else
                                <h3 class="text text-center">No Division</h3>
                            @endif
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

                              @if($players->count()>0)
                            <table id="tabelPlayer" class="table table-bordered table-striped">
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
                                @foreach($players as $player)
                                <tr>
                                    <td>{{$player->id}}</td>
                                    <td>{{$player->name}}</td>
                                    <td>{{$player->no}}</td>
                                    <td>{{$player->tag_id}}</td>
                                    <td>{{$player->phone}}</td>
                                    <td>
                                    <span class="badge badge-success">Success</span>
                                      </td>
                                      <td>  
                                        
                                      <a id="{{$player->id}}" href="{{route('players.myedit',['tournament'=> $tournament,'player' =>$player])}}" class="btn btn-success  float-left  ">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form class="delete_form" action="{{route('players.destroy',$player->id)}}" method="post">
                                            @csrf
                                        <input type="hidden" name="_method" value="DELETE">  
                                        <button type="submit" name="" value="Delete" class="btn btn-danger   float-left "><i class="fas fa fa-trash"></i> </button>

                                        </form>
                                    </td>
                                </tr>
                           @endforeach
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
                            @else
                                <h3 class="text text-center">No Players</h3>
                            @endif
                        </div>
                        <!-- /.card-body -->
                    </div>
                    </div> 
  <!-- end col-12 -->

  <div class="col-md-12 ">
    <div class="card">
                        <div class="card-header">
                            <span class="h4">Leaderboard</span>
                     
                            <button class="btn btn-success float-right addTime" data-toggle="modal" data-target="#">
                                <i class="fa fa-plus"><b> Add New</b></i>
                            </button>
                            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#uploadTimeModal">
                            <i class="fas fa-file-upload"><b> Upload</b></i>
                            </button>
                            <button class="btn btn-warning float-right genarateTime" data-toggle="modal" data-target="#genaratetimeModal">
                                <i class="fa fa-horse-head"><b> Genarate Time</b></i>
                              
                            </button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                      
                            @if($leaderboards->count()>0 && $players->count()>0)
                            <table id="tabelLeaderboard" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Stage</th>
                                    <th>Tag RFID</th>
                                    <th>Check Point</th>
                                    <th>Time Start</th>
                                    <th>Time Finish</th>
                                    <th>Time Result</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($sl = 1)
                                @foreach($leaderboards as $leaderboard)
                                <tr>
                                     
                                    <td>{{$leaderboard->id}}</td>
                                    <td> {{$leaderboard->findPlayer($leaderboard->player_id)->name}}  </td>
                                    <td> {{$leaderboard->stage}}  </td>
                                    <td> {{$leaderboard->findPlayer($leaderboard->player_id)->tag_id}}  </td>
                                    <td>
                                    <span class="badge {{($leaderboard->pc1)?'badge-success':'badge-danger'}} ">PC1</span>
                                    <span class="badge {{($leaderboard->pc2)?'badge-success':'badge-danger'}} ">PC2</span>
                                    <span class="badge {{($leaderboard->pc3)?'badge-success':'badge-danger'}} ">PC3</span>
                                    <span class="badge {{($leaderboard->pc4)?'badge-success':'badge-danger'}} ">PC4</span>
                                    <span class="badge {{($leaderboard->pc5)?'badge-success':'badge-danger'}} ">PC5</span>
                                      </td>
                                      <td>{{$leaderboard->t1}}</td>
                                      <td>{{$leaderboard->t2}}</td>
                                      <td>{{$leaderboard->tResult}}</td>
                                      <td>  
                                        
                                      <a id="{{$player->id}}" href="{{route('players.myedit',['tournament'=> $tournament,'player' =>$player])}}" class="btn btn-success  float-left  ">
                                        <i class="fa fa-edit"></i>
                                    </a>
                             
                                    </td>
                                </tr>
                           @endforeach
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
                            @else
                                <h3 class="text text-center">No Players</h3>
                            @endif
                        </div>
                        <!-- /.card-body -->
                    </div>
                    </div> 
  <!-- end col-12 -->

  <div class="col-md-12 ">
    <div class="card">
                        <div class="card-header">
                            <span class="h4">Checkpoint List</span>
                            <button class="btn btn-success float-right" data-toggle="modal" data-target="#addPlayerModal">
                                <i class="fa fa-plus"><b> Add New</b></i>
                            </button>
                            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#uploadPlayerModal">
                            <i class="fas fa-file-upload"><b> Upload</b></i>
                            </button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                              @if($players->count()>0)
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
                                @foreach($players as $player)
                                <tr>
                                    <td>{{$player->id}}</td>
                                    <td>{{$player->name}}</td>
                                    <td>{{$player->no}}</td>
                                    <td>{{$player->tag_id}}</td>
                                    <td>{{$player->phone}}</td>
                                    <td>
                                    <span class="badge badge-success">Success</span>
                                      </td>
                                      <td>  
                                        
                                      <a id="{{$player->id}}" href="{{route('players.myedit',['tournament'=> $tournament,'player' =>$player])}}" class="btn btn-success  float-left  ">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form class="delete_form" action="{{route('players.destroy',$player->id)}}" method="post">
                                            @csrf
                                        <input type="hidden" name="_method" value="DELETE">  
                                        <button type="submit" name="" value="Delete" class="btn btn-danger   float-left "><i class="fas fa fa-trash"></i> </button>

                                        </form>
                                    </td>
                                </tr>
                           @endforeach
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
                            @else
                                <h3 class="text text-center">No Players</h3>
                            @endif
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
 @include('admin.tournaments.add-time')
 @include('admin.tournaments.edit-player')
 @include('admin.tournaments.edit-division')
 @include('admin.tournaments.edit-tournament')
 @include('admin.tournaments.upload-file-division')
 @include('admin.tournaments.upload-file-player')
 @include('admin.tournaments.genaratetime_modal')


@endsection