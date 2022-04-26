<table class="table table-striped table-dark table-bordered">
    <tr>
        <th>Sr No.</th>
        <th>Title</th>

        <th>Body</th>

        <th>Date</th>
    </tr>
    <?php $__currentLoopData = $contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($article->id); ?></td>
        <td><?php echo e($article->title); ?></td>

        <td><?php echo e($article->body); ?></td>
        <td><?php echo e($article->created_at); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<div id="pagination">
    <?php echo e($contents->links()); ?>

</div><?php /**PATH /Users/mike/laravel/Gue-Muda/resources/views/admin/content-pagination.blade.php ENDPATH**/ ?>