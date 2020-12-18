$(document).ready(function(){
    $('.delete_form').click(function(event){
         //alert('Hello Delete');
         //swal.fire('Hello world!');
        var name = $(this).data("name");
        var form = $(this).closest("form");
         event.preventDefault();
         swal.fire({
            title:`คุณต้องการลบข้อมูล ${name} ใช่หรือไม่ ?`,
            text:"ถ้าลบแล้วไม่ามารถกู้คืนได้",
            icon:"warning",
            dangerMode:true,
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, keep it',
            reverseButtons: true
        }).then((result) => {
            console.log(swal.DismissReason.cancel);
            if (result.isConfirmed) {
             form.submit();
              swal.fire(
                'Deleted!',
                'Your imaginary file has been deleted.',
                'success'
              )
            // For more information about handling dismissals please visit
            // https://sweetalert2.github.io/#handling-dismissals
            } else if (result.dismiss === swal.DismissReason.cancel) {
              swal.fire(
                'Cancelled',
                'Your imaginary file is safe :)',
                'error'
              )
            }
          });
     });
});