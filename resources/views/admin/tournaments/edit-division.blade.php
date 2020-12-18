<div class="modal fade" id="editDivisionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Division</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form  id="updateDivisionForm" method="POST" action=""  enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                    <div class="form-group">
                        <label for="name"> Name</label>
                        <input type="text" name="name" class="form-control"id="divison_name">
                    </div>
                    <div class="row">
                    <div class="col ml-auto">
           
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" id="divison_description" ></textarea>
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
             
                    <div class="form-group">
                        <label for="tour_id"> Tournament</label>
                        <input type="hidden" name="tour_id" value="{{$tournament->id}}">  
                        <input type="text" name="tour_s" class="form-control" id="{{$tournament->id}}" value="{{$tournament->name}}" disabled>
                    </div>
                 
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
            </div>
        </div>
    </div>

</div>

