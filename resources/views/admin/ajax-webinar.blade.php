<script>
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
    if(dd<10){
            dd='0'+dd
        } 
        if(mm<10){
            mm='0'+mm
        } 

    today = yyyy+'-'+mm+'-'+dd;
    document.getElementById("schedule").setAttribute("min", today);
</script>

{{-- Post Tags --}}
<script>
    storetags = () => {
    let fd = new FormData();
    let nama = $("#name").val();
    var mainElement = this;
    fd.append('nama', nama);
    $.ajax({
        type: "POST",
        url: '/administrator/tagswebinars' + '?_token=' + '{{ csrf_token() }}',
        cache: false,
        contentType: false,
        processData: false,
        data: fd,
        success: function(data) {
            $('#createtagswebinars').hide(); 
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