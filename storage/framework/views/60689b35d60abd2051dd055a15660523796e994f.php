<?php /* C:\xampp\htdocs\Refugees\resources\views/test.blade.php */ ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admins</title>
	<style type="text/css">
		table,td,th{border: 1px solid; height: 40px}
		table{width: 400px}
		thead td{font-weight: bold; text-align: center}
	</style>
</head>
<body>

	<table>
		<thead>
			<tr>
				<td>ID</td>
				<td>Name</td>
				<td>Email</td>
			</tr>
		</thead>
		<?php $__currentLoopData = $test; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tests): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td> <?php echo e($tests->id); ?> </td>
			<td> <?php echo e($tests->name); ?> </td>
			<td> <?php echo e($tests->email); ?> </td> 
		</tr>
		
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


	</table>

</body>
</html>