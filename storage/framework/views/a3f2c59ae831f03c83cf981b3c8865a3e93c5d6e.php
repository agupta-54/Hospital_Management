
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
            
            <div  style="padding-top:50px; padding-right:250px;">

                <table style="padding-right:5px;">
                    <tr style="background-color:black;">
                        <th style="padding:5px">Customer name</th>
                        <th style="padding:5px">Email</th>
                        <th style="padding:5px">Phone</th>
                        <th style="padding:5px">Doctor Name</th>
                        <th style="padding:5px">Date</th>
                        <th style="padding:5px">Message</th>
                        <th style="padding:5px">Status</th>
                        <th style="padding:5px">Approved</th>
                        <th style="padding:5px">Cancelled</th>
                        <th style="padding:5px">Send Mail</th>


                    </tr>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appoint): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr  style="background-color:white;">
                        <td style="color:black;"><?php echo e($appoint->name); ?></td>
                        <td style="color:black;"><?php echo e($appoint->email); ?></td>
                        <td style="color:black;"><?php echo e($appoint->phone); ?></td>
                        <td style="color:black;"><?php echo e($appoint->doctor); ?></td>
                        <td style="color:black;"><?php echo e($appoint->date); ?></td>
                        <td style="color:black;"><?php echo e($appoint->message); ?></td>
                        <td style="color:black;"><?php echo e($appoint->status); ?></td>
                        <td>
                            <a class="btn btn-success" href="<?php echo e(url('approved',$appoint->id)); ?>">Approved</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="<?php echo e(url('cancelled',$appoint->id)); ?>">Cancelled</a>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="<?php echo e(url('emailview',$appoint->id)); ?>">Send Mail</a>
                        </td>

</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div>
          
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End custom js for this page -->
  </body>
</html><?php /**PATH C:\Users\archi\OneDrive\Desktop\Hospital final\hospital\resources\views/admin/showappointment.blade.php ENDPATH**/ ?>