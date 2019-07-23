<form action="<?php echo e(route('postForm')); ?>" method="post">
	<input type="text" name="HoTen">
	<input type="submit" >
	<?php echo e(csrf_field()); ?>


</form><?php /**PATH C:\xampp\htdocs\Demo\resources\views/postForm.blade.php ENDPATH**/ ?>