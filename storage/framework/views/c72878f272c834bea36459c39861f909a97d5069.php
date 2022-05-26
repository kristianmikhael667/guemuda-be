
<script>
    ganti = (sel) => {
        let fd = new FormData();
        const parent = sel.value;
        fd.append('parent', parent);
        $.ajax({
            type: "POST",
            url: '/administrator/subcat'+ '?_token=' + '<?php echo e(csrf_token()); ?>',
            cache: false,
            contentType: false,
            processData: false,
            data: fd,
            success: function(data) {
                document.getElementById("subid").style.display = "block";
                
                var dropdown = $("#sub");
                dropdown.empty();    
                dropdown.append(new Option("-- Select --", 0));
                $('#subid').html('');

                $.each(data.subcats.sub_categories, function() {
                    
                    var create = $('<label class="mr-2"><input class="uk-radio" id="category_id" name="category_id" value="'+this.id+'" type="radio"> ' + this.name+'</label>')
                    $("#subid").append(create);
                });
            }
        });
        return false;

    }
</script>

<script>
    edit = (sel) => {
        let fd = new FormData();
        const parent = sel.value;
        console.log('ss : ', parent);
        fd.append('parent', parent);
        $.ajax({
            type: "POST",
            url: '/administrator/subcat'+ '?_token=' + '<?php echo e(csrf_token()); ?>',
            cache: false,
            contentType: false,
            processData: false,
            data: fd,
            success: function(data) {
                console.log(data);
                document.getElementById("subid").style.display = "block";
                document.getElementById("cats").style.display ="none";
                
                var dropdown = $("#sub");
                dropdown.empty();    
                dropdown.append(new Option("-- Select --", 0));
                $('#subid').html('');

                $.each(data.subcats.sub_categories, function() {
                    
                    var create = $('<label class="mr-2"><input class="uk-radio" id="category_id" name="category_id" value="'+this.id+'" type="radio"> ' + this.name+'</label>')
                    $("#subid").append(create);
                });
            }
        });
        return false;

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
</script><?php /**PATH C:\Users\NSR-PC016\Documents\Fhizyel Nazareta Karel\freelance-project\gue-muda\resources\views/admin/ajax.blade.php ENDPATH**/ ?>