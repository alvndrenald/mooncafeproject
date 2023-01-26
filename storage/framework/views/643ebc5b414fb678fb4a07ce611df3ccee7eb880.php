<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve(['title' => 'Profile'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="container pt-5 d-flex justify-content-center align-items-center min-vh-90">
        <div class="bg-white" style="width:500px">
            <div style="background-color:rgb(247, 247, 247); height:40px;"
                class="p-4 d-flex align-items-center fw-semibold justify-content-center">
                Profile
            </div>
            <div class="bg-white p-3">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo e($user->name); ?>"
                        disabled>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo e($user->email); ?>"
                        disabled>
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label fw-normal">Gender</label>
                    <input type="text" class="form-control" id="gender" name="gender"
                        value="<?php echo e($user->gender); ?>"disabled>
                </div>
                <div class="mb-3">
                    <label for="dateOfBirth" class="form-label fw-normal">Date of Birth</label>
                    <input type="text" class="form-control" id="dateOfBirth" name="dateOfBirth"
                        value="<?php echo e($user->date_of_birth); ?>"disabled>
                </div>
                <div class="mb-3">
                    <label for="country" class="form-label fw-normal">Country</label>
                    <input type="text" class="form-control" id="country" name="country"
                        value="<?php echo e($user->country->country_name); ?>"disabled>
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
<?php /**PATH E:\BINUS\Semester 5\Web Programming\Barbatos Shop\barbatoshop\resources\views/profile/index.blade.php ENDPATH**/ ?>