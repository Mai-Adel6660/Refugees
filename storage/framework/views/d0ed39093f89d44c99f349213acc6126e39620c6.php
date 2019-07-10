<?php /* C:\xampp\htdocs\Refugees\resources\views/admin/donor/index.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>DONORS</h2></div>

                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Amount Donated</th>
                                <th>Delete</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $donors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $donor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($donor->full_name); ?></td>
                                <td><?php echo e($donor->email); ?></td>
                                <td><?php echo e($donor->phone); ?></td>
                                <td><?php echo e($donor->amount_donated); ?>$</td>
                                <td>
                                    <a class="btn btn-danger" href="<?php echo e(URL('/admin/donors/delete/'. $donor->id )); ?>">Delete</a>

                                </td>
                               

                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>

                    </table>

                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>