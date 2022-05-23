
<script>
    storetags = () => {
    let fd = new FormData();
    let name = $("#name").val();
    var mainElement = this;
    fd.append('name', name);
    $.ajax({
        type: "POST",
        url: '/administrator/tagscommunity' + '?_token=' + '<?php echo e(csrf_token()); ?>',
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
</script><?php /**PATH C:\Users\NSR-PC016\Documents\Fhizyel Nazareta Karel\freelance-project\gue-muda\resources\views/admin/ajax-community.blade.php ENDPATH**/ ?>