<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve(['title' => ''.e($product->product_name).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="d-flex justify-content-center align-items-center container">
        <div class="d-flex gap-4 px-2 align-items-center bg-white mt-5" style="width:800px; height:350px;">
            <img style="width:200px; height:200px; object-fit: cover" class="img-thumbnail" src="<?php echo e($product->image); ?>" alt="Card image cap">
            <form action="<?php echo e(route('cart.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                <div class="text-dark fs-4 fw-bold">
                    <?php echo e($product->product_name); ?>

                </div>
                <div class="mt-3">
                    <div class="d-flex">
                        <div class="opacity-75" style="width:120px;">
                           Description
                        </div>
                        <div class="w-100">
                            <p><?php echo e($product->product_description); ?></p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="opacity-75" style="width:120px;">
                            Price
                        </div>
                        <div class="w-100">
                            <p>IDR <?php echo e($product->product_price); ?></p>
                        </div>
                    </div>
                    <?php if(auth()->guard()->check()): ?>
                        <div class="d-flex mt-2 opacity-75">
                            <div style="width:120px;">
                                Quantity
                            </div>
                            <input class="form-control" type="number" name="quantity" required>
                        </div>
                    <?php endif; ?>
                </div>
                <?php if(auth()->guard()->check()): ?>
                    <button class="btn btn btn-outline-secondary mt-2" type="submit">Purchase</button>
                <?php endif; ?>
            </form>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH E:\BINUS\Semester 5\Web Programming\Barbatos Shop\barbatoshop\resources\views/products/show.blade.php ENDPATH**/ ?>