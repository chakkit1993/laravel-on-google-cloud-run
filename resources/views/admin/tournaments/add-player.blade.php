<div class="modal fade" id="addPlayerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Player</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin.players')}}" method="post">
                    @csrf

                    <div class="row">
                    <div class="col-md-6 ml-auto">
                   
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1">
                    </div>
                    </div>
                    <div class="col-md-6 ml-auto">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Phone Number</label>
                        <input type="text" class="form-control" name="phone" id="exampleInputPassword1" >
                    </div>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-md-6 ml-auto">
                   
                    <div class="form-group">
                        <label for="exampleInputEmail1">No</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    </div>
                    <div class="col-md-6 ml-auto">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tag RFID</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    </div>
                    </div>
              
             
            
                    <div class="row">
                    <div class="col ml-auto">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <textarea name="address" class="form-control"></textarea>
                    </div>

                    </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Tournamnet</label>
                        <select class="form-control selectpicker show-tick"  data-live-search="true" id="exampleFormControlSelect1" name="tournament_id">
                            <option value="1">Admin</option>
                            <option value="2">Vendor</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Division</label>
                        <select class="form-control selectpicker show-tick"   multiple   data-live-search="true" id="exampleFormControlSelect2" name="division_id">
                            <option value="1">Active</option>
                            <option value="0">Deactive</option>
                        </select>
                    </div>

                    <div class="row">
                    <div class="col ml-auto">

                    <div class="form-group">

                        <label for="title">Image</label>
                        <input type="file" name="image" value="" class="form-control">
                        </div>
                     </div>
                    </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Player</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
                $(document).ready(function(){
                     $('#exampleFormControlSelect1').selectpicker();
                     $('#exampleFormControlSelect2').selectpicker();
                });
               

    </script>
</div>