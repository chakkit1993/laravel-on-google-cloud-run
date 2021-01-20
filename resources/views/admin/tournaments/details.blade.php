@extends('layouts.master')

@section('content')
 <!-- Page Content -->
 <div id="content">
 <div class="card">


 <div class="card-header">

 @include('admin.tournaments.header-tournamnet')

      </div>
 <!--  .card-header -->
  


   <!--  main card body -->
   <div class="card-body">
   
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
    @include('admin.tournaments.division-table')
    @include('admin.tournaments.players-table')
    {{--@include('admin.tournaments.leaderboard-table')--}}


  
     
      </div>   
    </div>

    
    
    
 </div>

 @include('admin.tournaments.add-player')
 @include('admin.tournaments.add-division')
 @include('admin.tournaments.edit-player')
 @include('admin.tournaments.edit-division')
 @include('admin.tournaments.edit-tournament')
 @include('admin.tournaments.upload-file-division')
 @include('admin.tournaments.upload-file-player')
 


@endsection