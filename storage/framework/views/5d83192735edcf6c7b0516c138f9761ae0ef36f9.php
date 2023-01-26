<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg bg-white shadow-sm">
    <div class="container">
        <div class="d-flex">
            <a class="navbar-brand" href="<?php echo e(route('home.index')); ?>">Moon Cafe</a>
            <div class="collapse navbar-collapse" id="navbarNavLightDropdown">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    
                    <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('products.manage')); ?>">Manage product</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <?php if(auth()->guard()->guest()): ?>
            <div class="d-flex gap-3">
                <a href="<?php echo e(route('login.index')); ?>" class="text-decoration-none text-black">Login</a>
                <a href="<?php echo e(route('register.show')); ?>" class="text-decoration-none text-black">Register</a>
            </div>
        <?php endif; ?>
        <?php if(auth()->guard()->check()): ?>
            <div class="d-flex gap-3">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <?php echo e(Auth::user()->name); ?>

                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo e(route('transaction')); ?>" class="dropdown-item">History</a></li>
                            <li><a href="<?php echo e(route('cart')); ?>" class="dropdown-item">Cart</a></li>
                            <form action="<?php echo e(route('logout')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <li><button class="dropdown-item" type="submit">Logout</button></li>
                            </form>
                        </ul>
                    </li>
                </ul>
            </div>
        <?php endif; ?>
    </div>
</nav>
<?php /**PATH E:\BINUS\Semester 5\Web Programming\Moon Cafe Project\mooncafe\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>