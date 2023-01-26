<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve(['title' => 'Manage Product'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="py-3 d-flex justify-content-center align-items-center">
        <div style="width: 780px">
            <div class="d-flex justify-content-between">
                <form action="<?php echo e(route('products.manage')); ?>" method="GET">
                    <div class="input-group mb-3" style="width:330px;">
                        <input type="text" class="form-control" placeholder="Search Product" name="search">
                        <button class="btn btn-secondary" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>
                <div>
                    <a href="<?php echo e(route('products.create')); ?>" class="fw-semibold btn btn-secondary">
                        Add Product
                        <span class="mx-1">
                            <i class="bi bi-plus-lg"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div>
                <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="d-flex bg-white w-100 mb-3">
                        <img style="width:150px; height:150px; object-fit: cover" src="<?php echo e($product->image); ?>"
                            alt="product image">
                        <div class="d-flex justify-content-between w-100 p-3">
                            <p class="fw-bolder fs-5">
                                <?php echo e($product->product_name); ?>

                            </p>
                            <div class="d-flex align-items-start gap-2">
                                <a href="<?php echo e(route('products.edit', $product->id)); ?>" type="button"
                                    class="btn btn-outline-warning">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>
                                <form action="<?php echo e(route('products.destroy', $product->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-outline-danger">
                                        <i class="bi bi-trash-fill"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="alert alert-danger" role="alert">
                        Product Not Found
                    </div>
                <?php endif; ?>
            </div>
            <div class="d-flex justify-content-end align-items-center mt-3">
                <?php echo e($products->links()); ?>

            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH E:\BINUS\Semester 5\Web Programming\Barbatos Shop\barbatoshop\resources\views/products/manage.blade.php ENDPATH**/ ?>