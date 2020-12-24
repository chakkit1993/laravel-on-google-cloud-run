@extends('layouts.master')

@section('content')
<section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <span class="h4">Players List</span>
                            <!-- <button class="btn btn-primary float-right" data-toggle="modal" data-target="#addUserModal">
                                <i class="fa fa-plus"><b> Add New</b></i>
                            </button> -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="examplePlayer" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>User Role</th>
                                    <th>User Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($sl = 1)
                          
                                <tr>
                                    <td>1</td>
                                    <td>admin</td>
                                    <td>name</td>
                                    <td>0872268573</td>
                                    <td>email</td>
                                    <td>address</td>
                                    <td>  
                                        <a id="" href="#editCatModal" class="btn btn-success edit" data-toggle="modal">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a id="" href="" class="btn btn-danger delete">
                                                    <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                           

                                <tr>
                                    <td>2</td>
                                    <td>user</td>
                                    <td>name</td>
                                    <td>0812354698</td>
                                    <td>email</td>
                                    <td>address</td>
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
                                <tfoot>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>User Role</th>
                                    <th>User Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                </tr>
                                </tfoot>
                            </table>



    
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </section>
    </div>
 

    @endsection