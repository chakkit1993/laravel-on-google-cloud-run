
@extends('layouts.master')

@section('content')
 <!-- Page Content -->
 <div id="content">
<div class="form-group">
    <div class="row">
    @include('admin.leaderboards.leaderboard-table')   

      </div> 
      </div>

         
 </div>

 @include('admin.tournaments.genaratetime_modal')
 
@endsection