
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
    <style type="text/css">
        label
        {
            display: inline-block;
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

       
        <div class="container" align="center" style="padding-top:100px ;">
        <?php if(session() ->has('message')): ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert"></button>
            <?php echo e(session()->get('message')); ?>

        </div>
        <?php endif; ?>
               <form action="<?php echo e(url('sendemail',$data->id)); ?>" method="POST">
                   <?php echo csrf_field(); ?>
                   <div style="padding:15px;">
                        <label>
                           Greeting 
                       </label>
                       <input type="text" style="color:black" name="greeting" required="">
                   </div>
                   <div style="padding:15px;">
                       <label>
                        Body
                       </label>
                       <input type="text" style="color:black" name="body"  required="">
                   </div>
                   <div style="padding:15px;">
                       <label>
                           Action Text
                       </label>
                       <input type="text" style="color:black" name="actiontext" >
                   </div>
                   <div style="padding:15px;">
                       <label>
                           Action Url
                       </label>
                       <input type="text" style="color:black" name="actionurl" >
                   </div>
                   <div style="padding:15px;">
                       <label>
                           End Part
                       </label>
                       <input type="text" style="color:black" name="endpart" >
                   </div>
                   <div style="padding:15px;">
                       
                       <input type="submit" class="btn btn-success">
                   </div>
                </form>
                
                    
        </div>
          
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End custom js for this page -->
  </body>
</html><?php /**PATH C:\Users\archi\OneDrive\Desktop\Hospital final\hospital\resources\views/admin/email_view.blade.php ENDPATH**/ ?>