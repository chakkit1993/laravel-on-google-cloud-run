<div class="modal fade" id="addTournamentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Tournament</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('tournaments.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                    <div class="col-md-6 ml-auto">
                    <div class="form-group">
                        <label for="nameInput">Name</label>
                        <input type="text" name="name" class="form-control" id="nameInput">
                    </div>
                    </div>
                    <div class="col-md-6 ml-auto">
                    <!-- <div class="form-group">
                        <label for="exampleInputPassword1">Date</label>
                        <input type="text" class="form-control" name="date" id="exampleInputPassword1" >
                    </div> -->
                           <div class="form-group">
                        <label for="date">Date</label>
                        <input type="text" class="form-control" name="date" id="date" />
                    </div>
               

                    </div>
                    </div>

                    <div class="row">
                    <div class="col ml-auto">
           
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea type="text" name="address" class="form-control"></textarea>
                    </div>
                    </div>
         
                    </div>

                    <div class="row">
                    <div class="col ml-auto">
           
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea type="text" name="description" class="form-control"></textarea>
                    </div>
                    </div>
         
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
                    <button type="submit" class="btn btn-primary">Add Tournament</button>
                </div>
            </form>
            </div>
        </div>
    </div>


</div>





