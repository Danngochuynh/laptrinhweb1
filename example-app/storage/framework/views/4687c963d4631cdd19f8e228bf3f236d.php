

<?php $__env->startSection('content'); ?>
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($user->id); ?></td>
                                <td><?php echo e($user->name); ?></td>
                                <td><?php echo e($user->email); ?></td>
                                <td><?php echo e($user->phone); ?></td> <!-- Thêm cột phone -->
                                <td><?php echo e($user->address); ?></td> <!-- Thêm cột address -->
                                <td>
                                    <a href="<?php echo e(route('user.readUser', ['id' => $user->id])); ?>" class="btn btn-info btn-sm">View</a>
                                    <a href="<?php echo e(route('user.updateUser', ['id' => $user->id])); ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="<?php echo e(route('user.deleteUser', ['id' => $user->id])); ?>" class="btn btn-danger btn-sm"
                                       onclick="return confirm('Are you sure?')">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Code\1-BE2\laptrinhweb1\example-app\resources\views/crud_user/list.blade.php ENDPATH**/ ?>