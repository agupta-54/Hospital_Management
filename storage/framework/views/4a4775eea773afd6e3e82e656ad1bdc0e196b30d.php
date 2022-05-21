
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">

    <style type="text/css">
        label
        {
            display:inline-block;
            width:200px;
        }
    </style>
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
        
       
            <div class="container" align="center" style="padding 100px";>
            <?php if(session() ->has('message')): ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert"></button>
            <?php echo e(session()->get('message')); ?>

        </div>
        <?php endif; ?>
            

            <form action="<?php echo e(url('editdoctor',$data->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div style="padding:15px;">
                    <label>Doctor Name</label>
                    <input type="text" style="color:black;" name="name" value="<?php echo e($data->name); ?>">
                </div>

                <div style="padding:15px;">
                    <label>Phone</label>
                    <input type="number" style="color:black;" name="phone" value="<?php echo e($data->phone); ?>">
                </div>

                <div style="padding:15px;">
                    <label>Speciality</label>
                    <input type="text" style="color:black;" name="speciality" value="<?php echo e($data->speciality); ?>">
                </div>

                <div style="padding:15px;">
                    <label>Room</label>
                    <input type="text" style="color:black;" name="room" value="<?php echo e($data->room); ?>">
                </div>

                <div style="padding:15px;">
                    <label>Old Image</label>
                    <img heigth="150" width="150" src="doctorimage/<?php echo e($data->image); ?>">

                </div>
                <div style="padding:15px;">
                    <label>Change Image</label>
                    <input type="file"name="file">                   
                </div>
                <div style="padding:15px;">
                    
                    <input type="submit" class="btn btn-primary">                   
                </div>



                




        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End custom js for this page -->
  </body>
</html><?php /**PATH C:\Users\archi\OneDrive\Desktop\Hospital final\hospital\resources\views/admin/update_doctor.blade.php ENDPATH**/ ?>