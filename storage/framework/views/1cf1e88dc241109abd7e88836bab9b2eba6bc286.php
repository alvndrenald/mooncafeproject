<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve(['title' => 'Cart'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="py-3 d-flex justify-content-center align-items-center">
        <div style="width: 780px">
            <?php $__empty_1 = true; $__currentLoopData = $cartDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartDetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="d-flex bg-white w-100 mb-3">
                    <img style="width:180px; height: 180px; object-fit: cover" src="<?php echo e($cartDetail->product->image); ?>" alt="Card image cap">
                    <div class="d-flex justify-content-between w-100 p-3">
                        <div>
                            <div class="fw-semibold fs-3">
                                <?php echo e(Str::limit($cartDetail->product->product_name, 16)); ?>

                            </div>
                            <div class="mt-2">
                                Quantity: <?php echo e($cartDetail->quantity); ?>

                            </div>
                            <div class="mt-3">
                                Total Price: IDR <?php echo e($cartDetail->quantity * $cartDetail->product->product_price); ?>

                            </div>
                        </div>
                        <div>
                            <form action="<?php echo e(route('cart-detail.destroy', ['cart' => $cart->id, 'product' => $cartDetail->product->id])); ?>" method="POST">
                                <?php echo method_field('delete'); ?>
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-outline-danger">
                                    <i class="bi bi-trash-fill"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="alert alert-danger" role="alert">
                    No Item in Your Cart
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="d-flex align-items-center justify-content-center shadow-lg bg-white min-vw-100 position-fixed bottom-0" style="height:60px;">
        <div class="d-flex align-items-center gap-5">
            <div>
                Total Price: IDR <?php echo e($totalPrice); ?>

            </div>
            <?php if($cart && $cart->cartDetails): ?>
                <div>
                    <form action="<?php echo e(route('cart.destroy', $cart->id)); ?>" method="POST">
                        <?php echo method_field('delete'); ?>
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-outline-success" type="submit">Purchase</button>
                    </form>
                </div>
            <?php endif; ?>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH E:\BINUS\Semester 5\Web Programming\Barbatos Shop\barbatoshop\resources\views/cart.blade.php ENDPATH**/ ?>