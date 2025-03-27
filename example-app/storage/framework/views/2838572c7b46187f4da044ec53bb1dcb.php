

<?php $__env->startSection('content'); ?>
<main class="signup-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Create User</h3>
                    <div class="card-body">
                        <form action="<?php echo e(route('user.postUser')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                    required autofocus>
                                <?php if($errors->has('name')): ?>
                                <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                                <?php endif; ?>
                            </div>

                            <div class="form-group mb-3">
                                <input type="email" placeholder="Email" id="email_address" class="form-control"
                                    name="email" required>
                                <?php if($errors->has('email')): ?>
                                <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                <?php endif; ?>
                            </div>

                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control"
                                    name="password" required>
                                <?php if($errors->has('password')): ?>
                                <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Phone" id="phone" class="form-control" name="phone"
                                    required>
                                <?php if($errors->has('phone')): ?>
                                <span class="text-danger"><?php echo e($errors->first('phone')); ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Address" id="address" class="form-control" name="address"
                                    required>
                                <?php if($errors->has('address')): ?>
                                <span class="text-danger"><?php echo e($errors->first('address')); ?></span>
                                <?php endif; ?>
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Submit</button>
                            </div>
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Code\1-BE2\laptrinhweb1\example-app\resources\views/crud_user/create.blade.php ENDPATH**/ ?>