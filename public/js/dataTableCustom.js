

    $(document).ready(function () {
        $('').DataTable({
        });
    });
    $(document).ready(function () {
      $('#tabelLeaderboard').DataTable({
      });
  });
    $(document).ready(function () {
      var currentURL = $(location).attr('href').split('/'); 
      
      //console.log(currentURL);
      var table = $('#tabelLeaderboard112').DataTable({
        //  "processing": true,
          // "serverSide": true,
        ajax: {
            type: 'GET',
            url: "/api/admin/"+currentURL[5]+"/leaderboard",
            dataType: "json",

       },
        columns: [
            { data: "id" },
            { data: "player_id" },
            { data: "name" },
            { data: "rfid" },
            { data: "stage" },
            { data: "t1" },
            { data: "t2" },
            { data: "tResult" },
            { data: "pc" },
            {
              defaultContent: '<a  class="edit btn btn-success  float-left" value="Name"/>  <i class="fa fa-edit"></i> </a>'
 
            },
            
         
        ],
        columnDefs: [{
          targets: 8,
          render: function(pc, type, row, meta) {

            //console.log(pc);

            if(pc['pc1']){
              status =  '<span class="badge badge-success">PC1</span>'
            }else{
              status =  '<span class="badge badge-danger">PC1</span>'
            }

            if(pc['pc2']){
              status +=  '<span class="badge badge-success">PC2</span>'
            }else{
              status +=  '<span class="badge badge-danger">PC2</span>' 
            }
          

            if(pc['pc3']){
              status +=  '<span class="badge badge-success">PC3</span>'
            }else{
              status +=  '<span class="badge badge-danger">PC3</span>' 
            }
          

            if(pc['pc4']){
              status +=  '<span class="badge badge-success">PC4</span>'
            }else{
              status +=  '<span class="badge badge-danger">PC4</span>' 
            }
          

            if(pc['pc5']){
              status +=  '<span class="badge badge-success">PC5</span>'
            }else{
              status +=  '<span class="badge badge-danger">PC5</span>' 
            }
          
          
           
            return status;
          }
        }]

        


      });
      $('#tabelLeaderboard112 tbody').on( 'click', '.edit', function () {
       // var row = $(this).closest('tr');
      

       //console.log(data['player_id']);
        var data = table.row( $(this).parents('tr') ).data();
         var url = "players/" + data['player_id'];
        window.location.href = url;
       
     } );

     table.buttons().container()
     .appendTo( '#tabelLeaderboard112_wrapper .col-md-6:eq(0)' );
  

  });




    $(document).ready(function() {
      let table1 = $('#examplePlayer').DataTable( {
        searching: true,
        destroy: true,
        dom: 'Bfrtip',
        buttons: [
          'copy', 'csv', 'excel', 'print',
          {
                extend: 'pdfHtml5',
                download: 'open',
                title: 'Title',
                // orientation:'landscape',
                messageTop: 'PDF created by PDFMake with Buttons for DataTables.',
                text: 'PDF with image',
                pageSize: 'A4',
                exportOptions: {
                            columns: [ 0, 1 ,2,3,4,5]
                        },
                customize: function ( doc ) {
                  doc.styles.title = {
                      color: '#4c8aa0',
                      fontSize: '30',
                      alignment: 'center'
                  }
                  doc.styles['td:nth-child(2)'] = { 
                      width: '100px',
                      'max-width': '100px'
                  },
                  doc.styles.tableHeader = {
                      fillColor:'#4c8aa0',
                      color:'white',
                      alignment:'center'
                  },
                  doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('')
                  //doc.content[1].margin = [ 100, 20, 100, 0 ]


                    // doc.content.splice( 1, 0, {
                    //     margin: [ 0, 0, 0, 12 ],
                    //     width: 300,
                    //     height: 100,
                    //     alignment: 'right',
                    //   } );
                },
          
          }
        ],
        paging: true,
        lengthChange: true,
        searching: true,
        ordering: true,
        info: true,
        autoWidth: true,
    
      } );
    // } );
    table1.buttons().container()
        .appendTo( '#examplePlayer_wrapper .col-md-6:eq(0)' );
    } );

    $(document).ready(function() {
      let table1 = $('#tabelDivision').DataTable( {
        searching: true,
        destroy: true,
        dom: 'Bfrtip',
        buttons: [
          {
                extend: 'csvHtml5',
                download: 'open',
                title: 'Division List',
                // orientation:'landscape',
                messageTop: 'CSV created by PDFMake with Buttons for DataTables.',
                text: 'CSV',
                pageSize: 'A4',
                exportOptions: {
                            columns: [ 0 ,2]
                        },
          },
          {
                extend: 'pdfHtml5',
                download: 'open',
                title: 'Title',
                // orientation:'landscape',
                messageTop: 'PDF created by PDFMake with Buttons for DataTables.',
                text: 'PDF',
                pageSize: 'A4',
                exportOptions: {
                            columns: [ 0 ,2]
                        },
                customize: function ( doc ) {
                  doc.styles.title = {
                      color: '#4c8aa0',
                      fontSize: '30',
                      alignment: 'center'
                  }
                  doc.styles['td:nth-child(2)'] = { 
                      width: '100px',
                      'max-width': '100px'
                  },
                  doc.styles.tableHeader = {
                      fillColor:'#4c8aa0',
                      color:'white',
                      alignment:'center'
                  },
                  doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('')
                  //doc.content[1].margin = [ 100, 20, 100, 0 ]


                    // doc.content.splice( 1, 0, {
                    //     margin: [ 0, 0, 0, 12 ],
                    //     width: 300,
                    //     height: 100,
                    //     alignment: 'right',
                    //   } );
                },
          
          },
          {
                extend: 'excelHtml5',
                download: 'open',
                title: 'Division List',
                // orientation:'landscape',
                messageTop: 'Excel created by PDFMake with Buttons for DataTables.',
                text: 'Excel',
                pageSize: 'A4',
                exportOptions: {
                            columns: [ 0 ,1]
                        },
          }
        ],
        paging: true,
        lengthChange: true,
        searching: true,
        ordering: true,
        info: true,
        autoWidth: true,
    
      } );
    // } );
    table1.buttons().container()
        .appendTo( '#tabelDivision_wrapper .col-md-6:eq(0)' );
    } );


    $(document).ready(function() {
      let table1 = $('#tabelPlayer').DataTable( {
        searching: true,
        destroy: true,
        dom: 'Bfrtip',
        buttons: [
          {
                extend: 'csvHtml5',
                download: 'open',
                title: 'Division List',
                // orientation:'landscape',
                messageTop: 'CSV created by PDFMake with Buttons for DataTables.',
                text: 'CSV',
                pageSize: 'A4',
                exportOptions: {
                            columns: [ 0 ,2]
                        },
          },
          {
                extend: 'pdfHtml5',
                download: 'open',
                title: 'Title',
                // orientation:'landscape',
                messageTop: 'PDF created by PDFMake with Buttons for DataTables.',
                text: 'PDF',
                pageSize: 'A4',
                exportOptions: {
                            columns: [ 0 ,2]
                        },
                customize: function ( doc ) {
                  doc.styles.title = {
                      color: '#4c8aa0',
                      fontSize: '30',
                      alignment: 'center'
                  }
                  doc.styles['td:nth-child(2)'] = { 
                      width: '100px',
                      'max-width': '100px'
                  },
                  doc.styles.tableHeader = {
                      fillColor:'#4c8aa0',
                      color:'white',
                      alignment:'center'
                  },
                  doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('')
                  //doc.content[1].margin = [ 100, 20, 100, 0 ]


                    // doc.content.splice( 1, 0, {
                    //     margin: [ 0, 0, 0, 12 ],
                    //     width: 300,
                    //     height: 100,
                    //     alignment: 'right',
                    //   } );
                },
          
          },
          {
                extend: 'excelHtml5',
                download: 'open',
                title: 'Division List',
                // orientation:'landscape',
                messageTop: 'Excel created by PDFMake with Buttons for DataTables.',
                text: 'Excel',
                pageSize: 'A4',
                exportOptions: {
                            columns: [ 0 ,1]
                        },
          }
        ],
        paging: true,
        lengthChange: true,
        searching: true,
        ordering: true,
        info: true,
        autoWidth: true,
    
      } );
    // } );
    table1.buttons().container()
        .appendTo( '#tabelPlayer_wrapper .col-md-6:eq(0)' );
    } );
