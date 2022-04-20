{{-- Post Tags --}}
<script>
    storetags = () => {
    let fd = new FormData();
    let nama = $("#name").val();
    var mainElement = this;
    fd.append('nama', nama);
    $.ajax({
        type: "POST",
        url: '/administrator/tags' + '?_token=' + '{{ csrf_token() }}',
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