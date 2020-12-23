<div class="modal fade" id="uploadDivisionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Division</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('divisions.import')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="input-group mb-3">
                    <input type="file" class="form-control" id="upload_file" name="upload_file">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>

                    
            
                 
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Upload Division</button>
                </div>
            </form>
            </div>
        </div>
    </div>

</div>

<script type="text/javascript">
                $(document).ready(function(){
                    // $('#select-tournament').selectpicker();
                });
</script>