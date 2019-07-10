<?php /* C:\xampp\htdocs\Refugees\resources\views/admin/admins/index.blade.php */ ?>
<?php $__env->startSection('content'); ?>

<section class="content-header">
      <h2 style="    display: inline;">
        Admin Control Panel
      </h2>
      
      <ol class="breadcrumb">
        <li><a href="<?php echo e(URL('admin')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

<div class="container">
    <a href="<?php echo e(URL('/admin/ad/add')); ?>"><button style="margin-bottom: 20px;
    width: 205px;font-size: 20px;" type="button" class="btn btn-warning">Add Admin <i class="fa fa-plus"></i></button></a>
	<div class="raw">
		
        
		<table class="table table-bordered table-hover">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Edit</th>
                <th>Delete</th>

            </tr>
            <?php $__currentLoopData = $test; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($s->id); ?></td>
                <td><?php echo e($s->name); ?></td>
                <td><?php echo e($s->email); ?></td>
                <td>
                	<a class="btn btn-primary" href="<?php echo e(URL('/admin/ad/edit/'. $s->id )); ?>">Edit</a>
                </td>
                <td>	
                	<a class="btn btn-danger" href="<?php echo e(URL('/admin/ad/delete/'. $s->id )); ?>">Delete</a>
            	</td>                

            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </table>
<a class="btn btn-info" href="<?php echo e(URL('/admin/ad/show')); ?>">Restore deleted data</a>
        

        


	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>