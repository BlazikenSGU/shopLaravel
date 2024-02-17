// $.ajaxSetup({
//     headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
// });

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


function removeRow(id, url) {
    if (confirm('ban co chac chan xoa khong? ')) {
        $.ajax({
            type: 'DELETE',
            datatype: 'JSON',
            data: { id },
            url: url,
            success: function (result) {
                if(result.error === false){
                    alert(result.message);
                    location.reload();
                }else{
                    alert('error, vui long thu lai');
                }
            }
        })
    }
}
