@extends('layouts.master')

@section('content')
 <!-- Page Content -->
 <div id="content">
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-info">
                <i class="fas fa-align-left"></i>
                <span>Toggle Sidebar</span>
            </button>

        </div>
    </nav>
<div class="container">
<div id="app">
  
    <div class="d-flex justify-content-end mb-2">
    </div>
    <div class="card card-default">
        <div class="card-header">Admin</div>

        <div class="card-body">
       
        <example-component></example-component>
          </div>
        </div>

    </div>
</div>
</div>


@endsection