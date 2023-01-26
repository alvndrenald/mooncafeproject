<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve(['title' => 'Create Product'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="d-flex align-items-center justify-content-center">
        <div style="width: 600px;">
            <a href="<?php echo e(url()->previous()); ?>" class="fw-bolder btn btn-secondary my-3"><i class="bi bi-backspace"></i>Back</a>
            <div class="card">
                <div class="card-header">
                    Add Product
                </div>
                <div class="p-3 bg-white">
                    <form action="<?php echo e(route('products.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php if (isset($component)) { $__componentOriginale0736d120f2e55d258930c3d9797bb9ac1415758 = $component; } ?>
<?php $component = App\View\Components\ProductForm::resolve(['action' => 'Create','categories' => $categories] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('product-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ProductForm::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale0736d120f2e55d258930c3d9797bb9ac1415758)): ?>
<?php $component = $__componentOriginale0736d120f2e55d258930c3d9797bb9ac1415758; ?>
<?php unset($__componentOriginale0736d120f2e55d258930c3d9797bb9ac1415758); ?>
<?php endif; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH E:\BINUS\Semester 5\Web Programming\Barbatos Shop\barbatoshop\resources\views/products/create.blade.php ENDPATH**/ ?>