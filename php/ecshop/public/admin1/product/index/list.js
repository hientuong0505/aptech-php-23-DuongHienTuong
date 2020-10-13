function actionDelete(event)
{
    event.preventDefault();
    let urlRequest = $(this).data('url');
    let that = $(this);
    Swal.fire({
        title: 'Bạn có chắc?',
        text: "Bạn sẽ không thể khôi phục điều này!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Có, xóa nó!'
      }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: 'GET',
                url: urlRequest,
                success: function(data){
                    if(data.code == 200){
                        that.parent().parent().remove();
                        Swal.fire(
                        'Xóa nó!',
                        'Bạn đã xóa.',
                        'Thành công'
                        )
                    }
                },
                error: function(){

                }
            });
        

        }
      })
}

$(function(){
    $(document).on('click','.action_delete',actionDelete);
});