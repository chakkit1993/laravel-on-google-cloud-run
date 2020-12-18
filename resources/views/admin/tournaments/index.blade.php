@extends('layouts.master')


@section('content')
<section class="content">

  <div class="card">
  @if($errors->any())
        <div class="alert alert-danger">
            <ul class="list-group">
                @foreach($errors->all() as $error)
                <li class="list-group-item">{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

 



  <div class="card-header">
          <span class="h4">Tournament List</span>
          <button class="btn btn-primary float-right" data-toggle="modal" data-target="#addTournamentModal">
              <i class="fa fa-plus"><b> Add New</b></i>
          </button>
       
      </div>
           <!--  main card body -->
            <div class="card-body">
  </div>
  
          <div class="row">
            @foreach($tournaments as $tournament)
              <div class="col-sm">
              <div class="card" style="width: 18rem;  ">
              <div class="card-header">
    Featured
  </div>
            <img src="/images/logo.png" class="card-img-top" alt="..."    style="width: 100%;  height: 10vw;    object-fit: scale-down; "  >
            <div class="card-body">
              <h5 class="card-title">{{$tournament->name}}</h5>
              <p class="card-text">{{$tournament->description}}</p>
    


            </div>
            <div class="card-footer ">
                       
            <a href="{{route('tournaments.show',$tournament->id)}}" class="btn btn-primary   float-left">More info  <i class="fas fa-info-circle"></i></i></a>


<form class="delete_form" action="{{route('tournaments.destroy',$tournament->id)}}" method="post">
    @csrf
  <input type="hidden" name="_method" value="DELETE">  
  <button type="submit" name="" value="Delete" class="btn btn-danger float-right  "><i class="fas fa fa-trash"></i> </button>

</form>
            </div>
  
          </div>
              </div>
            @endforeach
   
            </div>
            </div>
            <!-- End main card body -->
        </section>
    </div>

    @include('admin.tournaments.add-tournament')



    @endsection

