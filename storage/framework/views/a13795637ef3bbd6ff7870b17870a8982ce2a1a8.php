<?php /* C:\xampp\htdocs\Refugees\resources\views/admin/users/index.blade.php */ ?>
<?php $__env->startSection('content'); ?>

<section class="content-header">
      <h2>
        Users Control Panel
      </h2>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(URL('admin')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

<div class="container">
    <a href="<?php echo e(URL('/admin/user/add')); ?>"><button class="btn btn-warning" style="margin-bottom: 20px;
    width: 205px; font-size: 20px;">Add Member <i class="fa fa-plus"></i></button></a>
	<div class="raw">
		
		<table class="table table-bordered table-hover">
   
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Level</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($u->id); ?></td>
                <td><?php echo e($u->name); ?></td>
                <td><?php echo e($u->email); ?></td>
                <td><?php echo e($u->level); ?></td>
                <td>
                	<a class="btn btn-primary" href="<?php echo e(URL('/admin/user/edit/' . $u->id )); ?>">Edit</a>
                </td>
                <td>	
                	<a class="btn btn-danger" href="<?php echo e(URL('/admin/user/delete/'.$u->id )); ?>">Delete</a>
            	</td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </table>

        

        


	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>