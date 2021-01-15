  <template>
     <div class="card">
                        <div class="card-header">
                            <span class="h4">Division List</span>
                            <!-- <button class="btn btn-primary float-right" data-toggle="modal" data-target="#addUserModal">
                                <i class="fa fa-plus"><b> Add New</b></i>
                            </button> -->
                        </div>
                    <div class="card-body">
                       
                            <table id="" class="table table-bordered table-striped data-table">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <!-- <th>Image</th> -->
                                    <th>Name</th>
                                    <th>Download</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                              
                                     <tr v-for="player in players" :key="player.id">
                                                
                                                    <td>{{player.name}}</td>
                                                    <!-- <td>{{$division->img}}</td> -->
                                                    <td>{{player.id}}</td>
                                                    <td>
                                                        <button  class="btn btn-primary  float-left" >  
                                                            <i class="fas fa-file-upload"><b> Download</b></i>
                                                        </button>
                                                      
                                                    </td>
                                                    <td>  
                                        
                                                        <a id="" href="#editDivisionModal" class="btn btn-success  float-left  editDivision" data-toggle="modal">
                                                                    <i class="fa fa-edit"></i>
                                                                </a>
                                                                <form class="delete_form" action="" method="post">
                                                                       
                                                                    <input type="hidden" name="_method" value="DELETE">  
                                                                    <button type="submit" name="" value="Delete" class="btn btn-danger   float-left "><i class="fas fa fa-trash"></i> </button>

                                                                    </form>
                                                    </td>
                                                </tr>
                                                
                           
                                </tbody>
                                <!-- <tfoot>
                                <tr>
                                <th>No.</th>
                                    <th>Image</th>
                                    <th>User Name</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot> -->
                            </table>
                        </div>
                        <!-- /.card-body -->
                   </div> 
                    
</template>

<script>
 
    export default {
          data(){
            return{
               players: [],
               player:{
                   id:0,
                   name:'',
                   

               }
            }
        },
        mounted() {
           // console.log('Component mounted.');
            console.log('Component mounted');
            this.getData();
        },

        methods:{

            getData(){
                axios.get('/api/players').then(response=>{
                    this.players = response.data;
                    console.log(response.data);
                })
               
            }

        }
    }
</script>
