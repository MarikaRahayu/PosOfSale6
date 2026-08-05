<?php $__env->startSection('content'); ?>

<div class="login-card">

    <div class="text-center">

        <div class="logo">
            🛒
        </div>

        <h2>POS</h2>

        <p>Point Of Sales System</p>

    </div>

  <form action="<?php echo e(route('auth')); ?>" method="POST">

    <?php echo csrf_field(); ?>

    <div class="mb-3">
        <label>Email</label>

        <input
            type="email"
            name="email"
            class="form-control"
            placeholder="Masukkan Email"
            required>
    </div>

    <div class="mb-4">
        <label>Password</label>

        <input
            type="password"
            name="password"
            class="form-control"
            placeholder="Masukkan Password"
            required>
    </div>

    <button type="submit" class="btn btn-login w-100">
        Login
    </button>

</form>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\PoinOfSale5-main\resources\views/users/login.blade.php ENDPATH**/ ?>