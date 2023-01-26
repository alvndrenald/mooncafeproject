<?php if(session()->has('success')): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <div><?php echo e(session()->get('success')); ?></div> <button type="button" class="btn-close" data-bs-dismiss="alert"
            aria-label="Close"></button>
    </div>
<?php endif; ?>
<?php if(session()->has('error')): ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <div><?php echo e(session()->get('error')); ?></div> <button type="button" class="btn-close" data-bs-dismiss="alert"
            aria-label="Close"></button>
    </div>
<?php endif; ?>


<?php if(session()->has('success-info')): ?>
    <script>
        $.notify("<?php echo e(session()->get('success-info')); ?>", "success");
    </script>
<?php endif; ?>
<?php /**PATH E:\BINUS\Semester 5\Web Programming\Barbatos Shop\barbatoshop\resources\views/components/alert.blade.php ENDPATH**/ ?>