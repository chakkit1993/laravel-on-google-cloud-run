
@extends('layouts.master')

@section('content')
 <!-- Page Content -->
 <div id="content">
<div class="form-group">
    
    <div class="container-fluid">
    <a href="{{ redirect()->back()->getTargetUrl() }}">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button></a>
</div>

<div class="row">
    @include('admin.leaderboards.leaderboard-table')   
    </div>
   
      </div>

         
 </div>

 @include('admin.tournaments.genaratetime_modal')
 
@endsection