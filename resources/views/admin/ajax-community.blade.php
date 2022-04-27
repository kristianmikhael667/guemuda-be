{{-- Post Tags --}}
<script>
    storetags = () => {
    let fd = new FormData();
    let name = $("#name").val();
    var mainElement = this;
    fd.append('name', name);
    $.ajax({
        type: "POST",
        url: '/administrator/tagscommunity' + '?_token=' + '{{ csrf_token() }}',
        cache: false,
        contentType: false,
        processData: false,
        data: fd,
        success: function(data) {
            $('#createtags').hide(); 
            Swal.fire({
                icon: 'success',
                title: 'Add Tags',
                text: data.success,
            })
            location.reload();

        }
    })
}
</script>