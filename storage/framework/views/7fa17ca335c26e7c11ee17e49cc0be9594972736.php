<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve(['title' => 'Home'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="container pt-5">
        <form class="d-flex" action="<?php echo e(route('home.index')); ?>" method="GET">
            <input class="form-control me-2" type="search" placeholder="Search Product" aria-label="Search" name="search">
            <button class="btn btn-secondary" type="submit">
                <i class="bi bi-search"></i>
            </button>
        </form>
        <?php if(!Request::has('search')): ?>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="w-full bg-white mt-4">
                    <div style="background-color : rgb(247, 247, 247); height:40px;" class="p-4 d-flex align-items-center fw-semibold">
                        <?php echo e($category->category_name); ?> &nbsp;
                        <a href="<?php echo e(route('products.index', 'category=' . $category->category_name)); ?>" class="text-decoration-none">View All</a>
                    </div>
                    <div class="d-flex overflow-auto gap-2">
                        <?php $__empty_1 = true; $__currentLoopData = $category->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <a href="<?php echo e(route('products.show', $product->id)); ?>" class="text-decoration-none text-dark">
                                <div class="p-3">
                                    <div class="border border-2 p-3" style="width: 220px; height: 330px">
                                        <img style="width:220px; height: 220px; object-fit: cover" class="img-thumbnail"
                                            src="<?php echo e($product->image); ?>" alt="Card image cap">
                                        <div class="p-2">
                                            <div class="fw-medium">
                                                <?php echo e(Str::limit($product->product_name, 15)); ?>

                                            </div>
                                            <div class="fw-semibold">
                                                IDR <?php echo e($product->product_price); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <div class="text-danger p-3">
                                No Product
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <div class="w-full bg-white mt-4">
                <div style="background-color : rgb(247, 247, 247); height:40px;" class="p-4 d-flex align-items-center fw-semibold">
                    Search Results
                </div>
                <div class="d-flex overflow-auto gap-2">
                    <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <a href="<?php echo e(route('products.show', $product->id)); ?>" class="text-decoration-none text-dark">
                            <div class="p-3">
                                <div class="border border-2 p-3" style="width: 220px;height: 330px">
                                    <img style="width:220px; height: 220px; object-fit: cover" class="img-thumbnail"
                                        src="<?php echo e($product->image); ?>" alt="Card image cap">
                                    <div class="p-2">
                                        <div class="fw-medium">
                                            <?php echo e(Str::limit($product->product_name, 15)); ?>

                                        </div>
                                        <div class="fw-semibold">
                                            IDR <?php echo e($product->product_price); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="text-danger p-3">
                            Product Not Found
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH E:\BINUS\Semester 5\Web Programming\Barbatos Shop\barbatoshop\resources\views/index.blade.php ENDPATH**/ ?>