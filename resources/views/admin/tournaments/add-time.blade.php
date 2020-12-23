<div class="modal fade" id="addTimeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Division</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('leaderboard.store')}}" method="post">
                    @csrf
                   

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Player</label>
                        <select class="form-control selectpicker show-tick"  data-live-search="true" id="exampleFormControlSelect2" name="player_id">
                            @foreach($players as $player)
                            <option value="{{$player->id}}">{{$player->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="row">
                    <div class="col-md-6 ml-auto">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Stage</label>
                        <select class="form-control selectpicker show-tick"  data-live-search="true" id="exampleFormControlSelect2" name="stage">
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                            <option value="S4">S4</option>
                            <option value="S5">S5</option>
                            
                        </select>
                    </div>
                    </div>
                    </div>
                 
                    <div class="row">
                    <div class="col-md-6 ml-auto">
           
                    <div class="form-group">
                            <label for="t1">Time Start</label>
                            <input  type="text" name="t1" class="form-control"></input>
                        </div>
                        </div>
                    <div class="col-md-6 ml-auto">
                    <div class="form-group">
                            <label for="t2">Time Finish</label>
                            <input  type="text" name="t2" class="form-control"></input>
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
                    <button type="submit" class="btn btn-primary">Add Time</button>
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