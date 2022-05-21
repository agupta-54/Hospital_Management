<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- partial -->
      <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            
            <div align="center" style="padding-top:100px;">

                <table>
                    <tr style="background-color:black;">
                        <th style="padding:10px">Doctor name</th>
                        <th style="padding:10px">Phone</th>
                        <th style="padding:10px">Speciality</th>
                        <th style="padding:10px">Room No</th>
                        <th style="padding:10px">Image</th>
                        <th style="padding:10px">Delete</th>
                        <th style="padding:10px">Update</th>

                    </tr>

                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr align="center" style="background-color:white;">
                        <td style="color:black;"><?php echo e($doctor->name); ?></td>
                        <td style="color:black;"><?php echo e($doctor->phone); ?></td>
                        <td style="color:black;"><?php echo e($doctor->speciality); ?></td>
                        <td style="color:black;"><?php echo e($doctor->room); ?></td>
                        <td><img height="100" width="100" src="doctorimage/<?php echo e($doctor->image); ?>">
                        <td><a onclick="return confirm ('Are you sure to delete this?')" class="btn btn-danger" href="<?php echo e(url('deletedoctor',$doctor->id)); ?>">Delete</a>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="<?php echo e(url ('updatedoctor',$doctor->id)); ?>">Update</a>
                        </td>
</td>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     
                        

</tr>
</div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End custom js for this page -->
  </body>
</html><?php /**PATH C:\Users\archi\OneDrive\Desktop\Hospital final\hospital\resources\views/admin/showdoctor.blade.php ENDPATH**/ ?>