<script>
    function yesnoCheck(that) {
    if (that.value == "on") {
        document.getElementById("imagepost").style.display = "block";
        document.getElementById("videopost").style.display = "none";
    } else {
        document.getElementById("imagepost").style.display = "none";
        document.getElementById("videopost").style.display = "block";
    }
}
</script>


<script>
    storetags = () => {
    let fd = new FormData();
    let nama = $("#name").val();
    var mainElement = this;
    fd.append('nama', nama);
    $.ajax({
        type: "POST",
        url: '/administrator/tags' + '?_token=' + '<?php echo e(csrf_token()); ?>',
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
</script><?php /**PATH /Users/mike/laravel/Gue-Muda/resources/views/admin/ajax.blade.php ENDPATH**/ ?>